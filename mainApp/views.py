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
from .models import Course, Profile, TeamMember, CourseTransaction, LiveCourse, LiveCourseTransaction, LiveCourseRegistration
from .forms import LoginForm, RegisterForm, ChangePasswordForm, ContactForm, LiveRegistrationForm
import uuid
from django.utils import timezone
from decimal import Decimal

# Create your views here.

def homePage(request):
    courses = Course.objects.filter(is_active=True)
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'courses': courses,
        'cart_count': get_cart_count(request)
    }
    return render(request, "mainApp/home.html", context)

def aboutPage(request):
    if request.method == "GET":
        members = TeamMember.objects.filter(is_active=True)
        context = {
            'login_form': LoginForm(),
            'register_form': RegisterForm(),
            'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
            'members': members,
            'cart_count': get_cart_count(request)
        }
        return render(request, "mainApp/about.html", context)

def eventPage(request):
    course = Course.objects.filter(is_active=True).order_by('course_number')
    context = {
        "course": course,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, "mainApp/event.html", context)

def certificationsPage(request):
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, "mainApp/certifications.html", context)

def classPage(request):
    live_courses = LiveCourse.objects.filter(is_active=True)
    context = {
        'live_courses': live_courses,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, "mainApp/classes.html", context)

def ourCoursesPage(request):
    course = Course.objects.filter(is_active=True).order_by('course_number')
    context = {
        "course": course,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, "mainApp/ourCourses.html", context)

def teamPage(request):
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, "mainApp/team.html", context)

def testimonialPage(request):
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, "mainApp/testimonial.html", context)

def galleryPage(request):
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, "mainApp/gallery.html", context)

def contactPage(request):
    if request.method == 'POST':
        form = ContactForm(request.POST)
        if form.is_valid():
            form.save()
            messages.success(request, 'Thank you! Your message has been sent successfully. We will get back to you soon.')
            form = ContactForm()
        else:
            messages.error(request, 'Please correct the errors below.')
    else:
        form = ContactForm()
    
    context = {
        'form': form,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, "mainApp/contact.html", context)

def error404Page(request):
    if request.method == "GET":
        context = {
            'login_form': LoginForm(),
            'register_form': RegisterForm(),
            'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
            'cart_count': get_cart_count(request)
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
                    password=data['password']
                )
                profile = Profile.objects.create(
                    user=user,
                    first_name=data['first_name'],
                    last_name=data['last_name'],
                    phone=data['phone'],
                    address=data['address']
                )
                # Merge session cart into user's pending transactions after registration
                merge_session_cart_to_user(request, profile)
                messages.success(request, 'Registration successful! Welcome to WebAsha.')
                return redirect('registration_success')
        else:
            messages.error(request, 'Please correct the errors below.')
    else:
        form = RegisterForm()
    
    context = {
        'register_form': form,
        'login_form': LoginForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
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
                # Merge session cart into user's pending transactions after login
                try:
                    profile = Profile.objects.get(user=user)
                    merge_session_cart_to_user(request, profile)
                except Profile.DoesNotExist:
                    pass
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
        'cart_count': get_cart_count(request)
    }
    return render(request, 'mainApp/login.html', context)

@login_required
def get_profile_or_create(request):
    """Get profile or create minimal one if missing"""
    try:
        return Profile.objects.get(user=request.user)
    except Profile.DoesNotExist:
        profile = Profile.objects.create(
            user=request.user,
            first_name=request.user.first_name or '',
            last_name=request.user.last_name or '',
            email=request.user.email or '',
            phone='',
            address='',
        )
        messages.success(request, 'Welcome! Your profile has been created.')
        return profile

@login_required
def ajax_course_status(request, course_id):
    """AJAX endpoint: Check if normal course purchased/incart/available"""
    profile = get_profile_or_create(request)
    
    # Check completed purchase for normal course
    if profile.coursetransactions.filter(course_id=course_id, status='completed').exists():
        return JsonResponse({
            'status': 'purchased',
            'count': get_cart_count(request)
        })
    
    # Check pending cart for normal course
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
def ajax_live_course_status(request, live_course_id):
    """AJAX endpoint: Check if live course purchased/incart/available"""
    profile = get_profile_or_create(request)
    
    # Check completed purchase for live course
    if profile.live_transactions.filter(live_course_id=live_course_id, status='completed').exists():
        return JsonResponse({
            'status': 'purchased',
            'count': get_cart_count(request)
        })
    
    # Check pending cart for live course
    if profile.live_transactions.filter(live_course_id=live_course_id, status='pending', is_active=True).exists():
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
        'cart_count': get_cart_count(request)
    }
    return render(request, 'mainApp/profile.html', context)

@login_required
def change_password_view(request):
    """Regular view for changing password (used by modal form)"""
    if request.method == 'POST':
        form = ChangePasswordForm(request.user, request.POST)
        if form.is_valid():
            user = form.save()
            update_session_auth_hash(request, user)
            messages.success(request, 'Your password was successfully updated!')
            return redirect('profile')
        else:
            for error in form.errors.values():
                messages.error(request, error[0])
            return redirect('profile')
    else:
        return redirect('profile')

@login_required
@require_http_methods(["PUT", "POST"])
def change_password_api(request):
    """API endpoint for changing password via PUT request"""
    if request.method == "PUT":
        try:
            data = json.loads(request.body)
            form = ChangePasswordForm(request.user, data)
            
            if form.is_valid():
                form.save()
                update_session_auth_hash(request, request.user)
                return JsonResponse({
                    'success': True,
                    'message': 'Password changed successfully!'
                })
            else:
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

# Helper function to get cart count (works for both session and DB)
def get_cart_count(request):
    """Get the number of items in user's cart (session for anonymous, DB for authenticated)"""
    if request.user.is_authenticated:
        try:
            profile = Profile.objects.get(user=request.user)
            # Count normal pending transactions (CourseTransaction)
            normal_count = profile.coursetransactions.filter(status='pending', is_active=True).count()
            # Count live pending transactions (LiveCourseTransaction)
            live_count = profile.live_transactions.filter(status='pending', is_active=True).count()
            return normal_count + live_count
        except Profile.DoesNotExist:
            return 0
    else:
        # Anonymous user: get cart from session
        session_cart = request.session.get('cart', [])
        return len(session_cart)

def merge_session_cart_to_user(request, profile):
    """Merge session cart items into user's pending transactions"""
    session_cart = request.session.get('cart', [])
    if not session_cart:
        return
    
    for item in session_cart:
        course_type = item.get('course_type', 0)  # 0=normal, 1=live
        course_id = item.get('course_id')
        
        if course_type == 0:  # Normal course (uses CourseTransaction)
            try:
                course = Course.objects.get(id=course_id, is_active=True)
                # Check if already purchased
                if not profile.coursetransactions.filter(course=course, status='completed').exists():
                    # Check if already in cart
                    if not profile.coursetransactions.filter(course=course, status='pending', is_active=True).exists():
                        CourseTransaction.objects.create(
                            user=profile,
                            course=course,
                            course_type=0,
                            status='pending',
                            transaction_id=f"cart_normal_{uuid.uuid4().hex[:12]}",
                            amount=course.price,
                            is_active=True
                        )
            except Course.DoesNotExist:
                pass
        
        elif course_type == 1:  # Live course (uses LiveCourseTransaction)
            try:
                live_course = LiveCourse.objects.get(id=course_id, is_active=True)
                # Check if already purchased or has pending transaction
                has_completed = profile.live_transactions.filter(live_course=live_course, status='completed').exists()
                has_pending = profile.live_transactions.filter(live_course=live_course, status='pending', is_active=True).exists()
                
                if not has_completed and not has_pending:
                    base_amount = live_course.price
                    gst_amount = base_amount * Decimal('0.18')
                    total_amount = base_amount + gst_amount
                    
                    LiveCourseTransaction.objects.create(
                        profile=profile,
                        live_course=live_course,
                        transaction_id=f"live_cart_{uuid.uuid4().hex[:12]}",
                        base_amount=base_amount,
                        gst_amount=gst_amount,
                        total_amount=total_amount,
                        status='pending',
                        is_active=True
                    )
            except LiveCourse.DoesNotExist:
                pass
    
    # Clear session cart after merging
    request.session['cart'] = []
    request.session.modified = True

def add_to_cart(request):
    """Add course to cart - works for both anonymous and authenticated users"""
    if request.method != 'POST':
        return JsonResponse({'success': False, 'error': 'Method not allowed'}, status=405)
    
    try:
        data = json.loads(request.body)
        course_id = data.get('course_id')
        course_type = data.get('course_type', 0)  # 0=normal, 1=live
    except:
        course_id = request.GET.get('course_id') or request.POST.get('course_id')
        course_type = request.GET.get('course_type', 0) or request.POST.get('course_type', 0)
        try:
            course_type = int(course_type)
        except:
            course_type = 0
    
    if not course_id:
        return JsonResponse({'success': False, 'error': 'No course ID provided'})
    
    # Authenticated user: store in database
    if request.user.is_authenticated:
        try:
            profile = Profile.objects.get(user=request.user)
        except Profile.DoesNotExist:
            return JsonResponse({'success': False, 'error': 'Profile not found'})
        
        if course_type == 0:  # Normal course -> CourseTransaction
            try:
                course = Course.objects.get(id=course_id, is_active=True)
            except Course.DoesNotExist:
                return JsonResponse({'success': False, 'error': 'Course not found'})
            
            # Check if already purchased
            if profile.coursetransactions.filter(course=course, status='completed').exists():
                return JsonResponse({'success': False, 'error': 'Course already purchased'})
            
            # Check if already in cart
            if profile.coursetransactions.filter(course=course, status='pending', is_active=True).exists():
                return JsonResponse({'success': False, 'error': 'Course already in cart'})
            
            # Add to cart
            CourseTransaction.objects.create(
                user=profile,
                course=course,
                course_type=0,
                status='pending',
                transaction_id=f"cart_normal_{uuid.uuid4().hex[:12]}",
                amount=course.price,
                is_active=True
            )
        
        elif course_type == 1:  # Live course -> LiveCourseTransaction
            try:
                live_course = LiveCourse.objects.get(id=course_id, is_active=True)
            except LiveCourse.DoesNotExist:
                return JsonResponse({'success': False, 'error': 'Live course not found'})
            
            # Check if already purchased
            if profile.live_transactions.filter(live_course=live_course, status='completed').exists():
                return JsonResponse({'success': False, 'error': 'Live course already purchased'})
            
            # Check if already in cart
            if profile.live_transactions.filter(live_course=live_course, status='pending', is_active=True).exists():
                return JsonResponse({'success': False, 'error': 'Live course already in cart'})
            
            # Add to cart with GST calculation
            base_amount = live_course.price
            gst_amount = base_amount * Decimal('0.18')
            total_amount = base_amount + gst_amount
            
            LiveCourseTransaction.objects.create(
                profile=profile,
                live_course=live_course,
                transaction_id=f"live_cart_{uuid.uuid4().hex[:12]}",
                base_amount=base_amount,
                gst_amount=gst_amount,
                total_amount=total_amount,
                status='pending',
                is_active=True
            )
    
    else:
        # Anonymous user: store in session
        session_cart = request.session.get('cart', [])
        
        # Check if already in cart
        for item in session_cart:
            if item.get('course_id') == course_id and item.get('course_type') == course_type:
                return JsonResponse({'success': False, 'error': 'Course already in cart'})
        
        # Add to session cart
        session_cart.append({
            'course_id': course_id,
            'course_type': course_type,
        })
        request.session['cart'] = session_cart
        request.session.modified = True
    
    count = get_cart_count(request)
    return JsonResponse({'success': True, 'message': 'Course added to cart', 'count': count})

@login_required
@require_POST
def remove_from_cart(request, transaction_id):
    """Remove item from cart - works for both normal and live courses"""
    try:
        profile = Profile.objects.get(user=request.user)
        
        # Try to find as normal course transaction (CourseTransaction)
        try:
            transaction = CourseTransaction.objects.get(
                id=transaction_id,
                user=profile,
                status='pending',
                is_active=True
            )
            transaction.is_active = False
            transaction.save()
        except CourseTransaction.DoesNotExist:
            # Try as live course transaction (LiveCourseTransaction)
            try:
                transaction = LiveCourseTransaction.objects.get(
                    id=transaction_id,
                    profile=profile,
                    status='pending',
                    is_active=True
                )
                transaction.is_active = False
                transaction.save()
            except LiveCourseTransaction.DoesNotExist:
                return JsonResponse({
                    'success': False,
                    'error': 'Item not found in cart'
                }, status=404)
        
        # Get updated cart count and total
        normal_items = profile.coursetransactions.filter(status='pending', is_active=True)
        live_items = profile.live_transactions.filter(status='pending', is_active=True)
        
        # Calculate total (normal amounts + live total_amounts)
        normal_total = sum(item.amount for item in normal_items)
        live_total = sum(item.total_amount for item in live_items)
        new_total = normal_total + live_total
        new_count = normal_items.count() + live_items.count()
        
        return JsonResponse({
            'success': True,
            'message': 'Item removed from cart',
            'count': new_count,
            'new_total': new_total
        })
        
    except Profile.DoesNotExist:
        return JsonResponse({
            'success': False,
            'error': 'Profile not found'
        }, status=404)
    except Exception as e:
        return JsonResponse({
            'success': False,
            'error': str(e)
        }, status=500)

@login_required
def cart_view(request):
    """Display shopping cart - requires login to view cart"""
    profile = get_profile_or_create(request)
    
    # Get normal cart items (CourseTransaction)
    normal_cart_items = profile.coursetransactions.filter(status='pending', is_active=True)
    
    # Get live cart items (LiveCourseTransaction)
    live_cart_items = profile.live_transactions.filter(status='pending', is_active=True)
    
    # Combine items for template display
    cart_items = []
    for item in normal_cart_items:
        cart_items.append({
            'id': item.id,
            'type': 'normal',
            'title': item.course.title,
            'amount': item.amount,
            'course_type': 0,
            'image': item.course.image.url if item.course.image else None,
        })
    
    for item in live_cart_items:
        cart_items.append({
            'id': item.id,
            'type': 'live',
            'title': item.live_course.title,
            'amount': item.total_amount,
            'course_type': 1,
            'image': item.live_course.image.url if item.live_course.image else None,
            'base_amount': item.base_amount,
            'gst_amount': item.gst_amount,
        })
    
    normal_total = sum(item.amount for item in normal_cart_items)
    live_total = sum(item.total_amount for item in live_cart_items)
    total = normal_total + live_total
    
    context = {
        'cart_items': cart_items,
        'cart_count': len(cart_items),
        'total': total,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, 'mainApp/cart.html', context)

@login_required
def purchase_cart(request):
    """Convert pending cart items to completed purchases - requires login"""
    if request.method != 'POST':
        messages.error(request, 'Invalid request method')
        return redirect('cart_view')
    
    profile = get_profile_or_create(request)
    
    # Get normal cart items (CourseTransaction)
    normal_cart_items = profile.coursetransactions.filter(status='pending', is_active=True)
    
    # Get live cart items (LiveCourseTransaction)
    live_cart_items = profile.live_transactions.filter(status='pending', is_active=True)
    
    if not normal_cart_items.exists() and not live_cart_items.exists():
        messages.warning(request, 'Your cart is empty')
        return redirect('cart_view')
    
    # Generate a single transaction ID for the entire purchase
    bulk_transaction_id = f"txn_{uuid.uuid4().hex[:12]}_{int(timezone.now().timestamp())}"
    
    purchased_items = []
    
    # Process normal courses (CourseTransaction)
    for item in normal_cart_items:
        item.status = 'completed'
        item.transaction_id = bulk_transaction_id
        item.purchase_date = timezone.now()
        item.save()
        purchased_items.append(item.course.title)
    
    # Process live courses (LiveCourseTransaction)
    for item in live_cart_items:
        item.status = 'completed'
        item.transaction_id = bulk_transaction_id
        item.purchase_date = timezone.now()
        item.save()
        purchased_items.append(item.live_course.title)
        
        # Also create a registration for live course
        LiveCourseRegistration.objects.get_or_create(
            profile=profile,
            live_course=item.live_course,
            defaults={
                'batch_timing': 'weekdays',
                'status': 'enrolled'
            }
        )
    
    item_count = normal_cart_items.count() + live_cart_items.count()
    messages.success(
        request,
        f'Successfully purchased {item_count} item(s): {", ".join(purchased_items[:3])}{"..." if len(purchased_items) > 3 else ""}'
    )
    
    return redirect('my_courses')

@login_required
def join_live_batch(request, live_course_id):
    live_course = get_object_or_404(LiveCourse, id=live_course_id, is_active=True)
    profile = get_profile_or_create(request)
    
    if request.method == 'POST':
        form = LiveRegistrationForm(request.POST, profile=profile)
        if form.is_valid():
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
                batch_timing=data['batch_timing'],
                status='pending'  # Pending until payment
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
                f'{live_course.title} added to cart! Total: ₹{total_amount:.2f} (Base: ₹{base_amount:.2f} + GST ₹{gst_amount:.2f})'
            )
            # Redirect to cart for checkout
            return redirect('cart_view')
        else:
            messages.error(request, 'Please correct the form errors.')
    else:
        form = LiveRegistrationForm(profile=profile)
    
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
        'cart_count': get_cart_count(request)
    }
    return render(request, 'mainApp/join.html', context)
@login_required
def my_live_courses(request):
    profile = get_profile_or_create(request)
    registrations = profile.live_registrations.filter(status='pending').select_related('live_course')
    transactions = profile.live_transactions.filter(is_active=True, status='completed').select_related('live_course').order_by('-purchase_date')
    context = {
        'live_registrations': registrations,
        'live_transactions': transactions,
        'profile': profile,
        'cart_count': get_cart_count(request)
    }
    return render(request, 'mainApp/my-live-courses.html', context)

@login_required
def my_courses(request):
    """Display purchased courses"""
    profile = get_profile_or_create(request)
    
    # Normal purchased courses (CourseTransaction with status='completed')
    normal_transactions = profile.coursetransactions.filter(
        status='completed',
        is_active=True
    ).select_related('course').order_by('-purchase_date')
    
    # Live purchased courses (LiveCourseTransaction with status='completed')
    live_transactions = profile.live_transactions.filter(
        status='completed',
        is_active=True
    ).select_related('live_course').order_by('-purchase_date')
    
    context = {
        'purchased_normal': normal_transactions,
        'purchased_live': live_transactions,
        'profile': profile,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, 'mainApp/my-courses.html', context)

def registration_success(request):
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, 'mainApp/registration_success.html', context)

def login_success(request):
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, 'mainApp/login_success.html', context)

def course_detail(request, course_id):
    course = get_object_or_404(Course, id=course_id, is_active=True)
    related_courses = Course.objects.filter(is_active=True).exclude(id=course_id)[:4]
    
    context = {
        "course": course,
        "related_courses": related_courses,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, "mainApp/Coursedetail.html", context)