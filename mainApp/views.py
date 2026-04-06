from django.shortcuts import render, redirect, get_object_or_404
from django.contrib.auth import authenticate, login, logout, update_session_auth_hash
from django.contrib.auth.decorators import login_required
from django.contrib.auth.models import User
from django.contrib import messages
from django.http import JsonResponse
from django.views.decorators.csrf import csrf_exempt
from django.views.decorators.http import require_http_methods, require_POST
from django.shortcuts import get_object_or_404
import json
from .models import Course, Profile, TeamMember, CourseTransaction
from .forms import LoginForm, RegisterForm, ChangePasswordForm, ContactForm
import uuid
from django.utils import timezone
from decimal import Decimal

# Create your views here.

def homePage(request):
    # Add forms to context
    courses = Course.objects.filter(is_active=True)
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'courses': courses
    }
    return render(request, "mainApp/home.html", context)

def aboutPage(request):
    if request.method == "GET":
        members = TeamMember.objects.filter(is_active=True)
        print("DATA:", members)   # 👈 DEBUG
        context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'members': members,
    }
        return render(request, "mainApp/about.html", context)

def eventPage(request):
    course = Course.objects.filter(is_active=True).order_by('course_number')
    # Add forms to context
    context = {
        "course": course,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, "mainApp/event.html", context)

def certificationsPage(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, "mainApp/certifications.html", context)

def classPage(request):
    from .models import LiveCourse
    live_courses = LiveCourse.objects.filter(is_active=True)
    # Add forms to context
    context = {
        'live_courses': live_courses,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, "mainApp/classes.html", context)

def ourCoursesPage(request):
    course = Course.objects.filter(is_active=True).order_by('course_number')
    
    # Add forms to existing context
    context = {
        "course": course,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    
    return render(request, "mainApp/ourCourses.html", context)

def teamPage(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, "mainApp/team.html", context)

def testimonialPage(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, "mainApp/testimonial.html", context)

def galleryPage(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, "mainApp/gallery.html", context)

def contactPage(request):
    if request.method == 'POST':
        form = ContactForm(request.POST)
        if form.is_valid():
            form.save()
            messages.success(request, 'Thank you! Your message has been sent successfully. We will get back to you soon.')
            form = ContactForm()  # Reset form
        else:
            messages.error(request, 'Please correct the errors below.')
    else:
        form = ContactForm()
    
    context = {
        'form': form,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, "mainApp/contact.html", context)

def error404Page(request):
    if request.method == "GET":
        context = {
            'login_form': LoginForm(),
            'register_form': RegisterForm(),
            'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        }
        return render(request, "mainApp/404.html", context)

def register_view(request):
    if request.method == 'POST':
        form = RegisterForm(request.POST, request.FILES)
        if form.is_valid():
            data = form.cleaned_data
            if User.objects.filter(email=data['email']).exists():
                messages.error(request, 'Email already registered.')
            else:
                user = User.objects.create_user(
                    username=data['email'],
                    email=data['email'],
                    password=data['password']  # auto hashes
                )
                Profile.objects.create(
                    user=user,
                    first_name=data['first_name'],
                    last_name=data['last_name'],
                    phone=data['phone'],
                    address=data['address']
                )
                messages.success(request, 'Registration successful! Welcome to WebAsha.')
                return redirect('registration_success')
        else:
            messages.error(request, 'Please correct the errors below.')
    else:
        form = RegisterForm()
    
    # For the register page itself, also include login form
    context = {
        'register_form': form,
        'login_form': LoginForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, 'mainApp/register.html', context)

def login_view(request):
    if request.method == 'POST':
        form = LoginForm(request.POST)
        if form.is_valid():
            email = form.cleaned_data['email']
            password = form.cleaned_data['password']
            user = authenticate(request, username=email, password=password)
            if user:
                login(request, user)
                messages.success(request, 'Login successful! Welcome back.')
                return redirect('home')
            else:
                messages.error(request, 'Invalid email or password.')
        else:
            messages.error(request, 'Please correct the errors below.')
    else:
        form = LoginForm()
    
    context = {
        'login_form': form,
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, 'mainApp/login.html', context)

@login_required
def get_profile_or_create(request):
    """Get profile or create minimal one if missing"""
    try:
        return Profile.objects.get(user=request.user)
    except Profile.DoesNotExist:
        # Create minimal profile
        profile = Profile.objects.create(
            user=request.user,
            first_name=request.user.first_name or '',
            last_name=request.user.last_name or '',
            email=request.user.email or '',
            phone='',  # Will show 'Not set' in template
            address='', 
        )
        messages.success(request, 'Welcome! Your profile has been created.')
        return profile

@login_required
def ajax_course_status(request, course_id):
    """AJAX endpoint: Check if course purchased/incart/available"""
    profile = get_profile_or_create(request)
    
    # Check completed purchase
    if profile.coursetransactions.filter(course_id=course_id, status='completed').exists():
        return JsonResponse({
            'status': 'purchased',
            'count': get_cart_count(request)
        })
    
    # Check pending cart
    if profile.coursetransactions.filter(course_id=course_id, status='pending', is_active=True).exists():
        return JsonResponse({
            'status': 'incart',
            'count': get_cart_count(request)
        })
    
    return JsonResponse({
        'status': 'available',
        'count': get_cart_count(request)
    })

@login_required
def profile_view(request):
    profile = get_profile_or_create(request)
    context = {
        'profile': profile,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user),
    }
    return render(request, 'mainApp/profile.html', context)

@login_required
@require_http_methods(["PUT", "POST"])
def change_password_api(request):
    """API endpoint for changing password via PUT request"""
    if request.method == "PUT":
        try:
            # Parse JSON data from PUT request
            data = json.loads(request.body)
            form = ChangePasswordForm(request.user, data)
            
            if form.is_valid():
                form.save()
                # Keep the user logged in after password change
                update_session_auth_hash(request, request.user)
                return JsonResponse({
                    'success': True,
                    'message': 'Password changed successfully!'
                })
            else:
                # Return form errors
                errors = {}
                for field, error_list in form.errors.items():
                    errors[field] = error_list[0]
                return JsonResponse({
                    'success': False,
                    'errors': errors
                }, status=400)
                
        except json.JSONDecodeError:
            return JsonResponse({
                'success': False,
                'errors': {'__all__': 'Invalid JSON data'}
            }, status=400)
        except Exception as e:
            return JsonResponse({
                'success': False,
                'errors': {'__all__': str(e)}
            }, status=500)
    
    # Fallback for POST requests (for backward compatibility)
    elif request.method == "POST":
        form = ChangePasswordForm(request.user, request.POST)
        if form.is_valid():
            form.save()
            update_session_auth_hash(request, request.user)
            messages.success(request, 'Password changed successfully!')
            return redirect('home')
        else:
            for error in form.errors.values():
                messages.error(request, error[0])
            return redirect('profile_view')
    
    return JsonResponse({'error': 'Method not allowed'}, status=405)

def logout_view(request):
    logout(request)
    messages.success(request, 'Logged out successfully!')
    return redirect('home')

# Helper function to get cart count
def get_cart_count(request):
    """Get the number of items in user's cart"""
    if request.user.is_authenticated:
        try:
            profile = Profile.objects.get(user=request.user)
            return profile.coursetransactions.filter(status='pending', is_active=True).count()
        except Profile.DoesNotExist:
            return 0
    return 0

def course_detail(request, course_id):
    course = get_object_or_404(Course, id=course_id, is_active=True)
    related_courses = Course.objects.filter(is_active=True).exclude(id=course_id)[:4]
    
    # Get cart count using helper function
    cart_count = get_cart_count(request)
    
    context = {
        "course": course,
        "related_courses": related_courses,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': cart_count  # Pass the cart count directly
    }
    return render(request, "mainApp/Coursedetail.html", context)

@login_required
def add_to_cart(request):
    """Add course to cart (pending transaction)"""
    if request.method != 'POST':
        return JsonResponse({'success': False, 'error': 'Method not allowed'}, status=405)
    
    try:
        data = json.loads(request.body)
        course_id = data.get('course_id')
    except:
        course_id = request.GET.get('course_id') or request.POST.get('course_id')
    
    if not course_id:
        return JsonResponse({'success': False, 'error': 'No course ID provided'})
    
    course = get_object_or_404(Course, id=course_id)
    
    try:
        profile = Profile.objects.get(user=request.user)
    except Profile.DoesNotExist:
        return JsonResponse({'success': False, 'error': 'Profile not found'})
    
    # Check if already purchased
    if profile.coursetransactions.filter(course=course, status='completed').exists():
        return JsonResponse({'success': False, 'error': 'Course already purchased'})
    
    # Check if already in cart
    transaction, created = CourseTransaction.objects.get_or_create(
        user=profile,
        course=course,
        status='pending',
        defaults={
            'transaction_id': f"cart_{uuid.uuid4().hex[:12]}",
            'amount': course.price,
            'is_active': True
        }
    )
    
    if not created and transaction.is_active:
        return JsonResponse({'success': False, 'error': 'Course already in cart'})
    elif not created and not transaction.is_active:
        # Reactivate if exists but inactive
        transaction.is_active = True
        transaction.save()
        return JsonResponse({'success': True, 'message': 'Added to cart', 'count': get_cart_count(request)})
    
    count = get_cart_count(request)
    return JsonResponse({'success': True, 'message': 'Added to cart', 'count': count})

@login_required
@require_POST
def remove_from_cart(request, transaction_id):
    """Remove item from cart (soft delete by setting is_active=False)"""
    try:
        transaction = get_object_or_404(
            CourseTransaction, 
            id=transaction_id, 
            user__user=request.user, 
            status='pending'
        )
        
        # Soft delete by setting is_active=False
        transaction.is_active = False
        transaction.save()
        
        # Get updated cart count and total
        profile = Profile.objects.get(user=request.user)
        remaining_items = profile.coursetransactions.filter(status='pending', is_active=True)
        new_total = sum(item.amount for item in remaining_items)
        new_count = remaining_items.count()
        
        return JsonResponse({
            'success': True, 
            'message': 'Item removed from cart',
            'count': new_count,
            'new_total': new_total
        })
        
    except CourseTransaction.DoesNotExist:
        return JsonResponse({
            'success': False, 
            'error': 'Item not found in cart'
        }, status=404)
    except Exception as e:
        return JsonResponse({
            'success': False, 
            'error': str(e)
        }, status=500)

@login_required
def cart_view(request):
    """Display shopping cart"""
    profile = get_profile_or_create(request)
    cart_items = profile.coursetransactions.filter(status='pending', is_active=True)
    total = sum(item.amount for item in cart_items)
    
    context = {
        'cart_items': cart_items,
        'total': total,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, 'mainApp/cart.html', context)

@login_required
def purchase_cart(request):
    """Convert pending cart items to completed purchases"""
    if request.method != 'POST':
        messages.error(request, 'Invalid request method')
        return redirect('cart_view')
    
    profile = get_profile_or_create(request)
    cart_items = profile.coursetransactions.filter(status='pending', is_active=True)
    
    if not cart_items.exists():
        messages.warning(request, 'Your cart is empty')
        return redirect('cart_view')
    
    # Generate a single transaction ID for the entire purchase
    bulk_transaction_id = f"txn_{uuid.uuid4().hex[:12]}_{int(timezone.now().timestamp())}"
    
    purchased_courses = []
    for item in cart_items:
        item.status = 'completed'
        item.transaction_id = bulk_transaction_id
        item.purchase_date = timezone.now()
        item.save()
        purchased_courses.append(item.course.title)
    
    messages.success(
        request, 
        f'Successfully purchased {cart_items.count()} course(s): {", ".join(purchased_courses[:3])}{"..." if len(purchased_courses) > 3 else ""}'
    )
    
    return redirect('my_courses')

@login_required
def join_live_batch(request, live_course_id):
    from .models import LiveCourse, LiveCourseRegistration, LiveCourseTransaction, Profile
    from .forms import LiveRegistrationForm
    from django.contrib.auth.models import User
    import uuid
    from django.utils import timezone
    
    live_course = get_object_or_404(LiveCourse, id=live_course_id, is_active=True)
    profile = get_profile_or_create(request)  # Use existing helper
    
    if request.method == 'POST':
        form = LiveRegistrationForm(request.POST, profile=profile)
        if form.is_valid():
            # Update profile with new details
            data = form.cleaned_data
            profile.first_name = data['first_name']
            profile.last_name = data['last_name']
            profile.phone = data['phone']
            profile.address = data['address']
            profile.save()
            
            # Check if already registered for this course
            if LiveCourseRegistration.objects.filter(profile=profile, live_course=live_course).exists():
                messages.warning(request, 'You are already registered for this live course.')
                return redirect('my_live_courses')
            
            # Create registration
            registration = LiveCourseRegistration.objects.create(
                profile=profile,
                live_course=live_course,
                batch_timing=data['batch_timing']
            )
            
            # Create pending transaction with GST
            base_amount = live_course.price
            gst_amount = base_amount * Decimal('0.18')
            total_amount = base_amount + gst_amount
            txn_id = f"live_{uuid.uuid4().hex[:12]}_{int(timezone.now().timestamp())}"
            
            transaction = LiveCourseTransaction.objects.create(
                profile=profile,
                live_course=live_course,
                transaction_id=txn_id,
                base_amount=base_amount,
                gst_amount=gst_amount,
                total_amount=total_amount,
                status='pending',
                is_active=True
            )
            
            messages.success(
                request, 
                f'Registration created for {live_course.title}! Total: ₹{total_amount:.2f} (Base: ₹{base_amount:.2f} + GST ₹{gst_amount:.2f}). Proceed to payment.'
            )
            return redirect('my_live_courses')  # Or payment page
        else:
            messages.error(request, 'Please correct the form errors.')
    else:
        form = LiveRegistrationForm(profile=profile)
    
    # Calculate fees for display
    base_price = live_course.price
    gst = base_price * Decimal('0.18')
    total_price = base_price + gst
    
    context = {
        'form': form,
        'live_course': live_course,
        'base_price': base_price,
        'gst_amount': gst,
        'total_price': total_price,
        'profile': profile,
    }
    return render(request, 'mainApp/join.html', context)

def my_live_courses(request):
    profile = get_profile_or_create(request)
    registrations = profile.live_registrations.filter(status='pending').select_related('live_course')
    transactions = profile.live_transactions.filter(is_active=True).select_related('live_course').order_by('-purchase_date')
    context = {
        'live_registrations': registrations,
        'live_transactions': transactions,
        'profile': profile,
    }
    return render(request, 'mainApp/my-live-courses.html', context)

@login_required
def my_courses(request):
    """Display purchased courses"""
    profile = get_profile_or_create(request)
    transactions = profile.coursetransactions.filter(
        status='completed', 
        is_active=True
    ).select_related('course').order_by('-purchase_date')
    
    context = {
        'purchased': transactions,
        'profile': profile,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, 'mainApp/my-courses.html', context)

def registration_success(request):
    """Registration success page"""
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, 'mainApp/registration_success.html', context)

def login_success(request):
    """Login success page"""
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, 'mainApp/login_success.html', context)