from django.shortcuts import render, redirect, get_object_or_404
from django.contrib.auth import authenticate, login, logout, update_session_auth_hash
from django.contrib.auth.decorators import login_required
from django.contrib.auth.models import User
from django.contrib import messages
from django.http import JsonResponse
from django.views.decorators.csrf import csrf_exempt
from django.views.decorators.http import require_http_methods
from django.shortcuts import get_object_or_404
import json
from .models import Course, Profile, TeamMember, CourseTransaction
from .forms import LoginForm, RegisterForm, ChangePasswordForm
import uuid
from django.utils import timezone

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
    # Add forms to context
    context = {
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
    course_id = request.GET.get('course_id')
    if not course_id:
        return JsonResponse({'success': False, 'error': 'No course ID'})
    course = get_object_or_404(Course, id=course_id)
    
    try:
        profile = Profile.objects.get(user=request.user)
    except Profile.DoesNotExist:
        return JsonResponse({'success': False, 'error': 'Profile not found'})
    
    transaction, created = CourseTransaction.objects.get_or_create(
        user=profile,
        course=course,
        defaults={
            'transaction_id': f"cart_{uuid.uuid4().hex[:12]}",
            'amount': course.price,
            'status': 'pending'
        }
    )
    count = profile.coursetransactions.filter(status='pending', is_active=True).count()
    return JsonResponse({'success': True, 'message': 'Added to cart' if created else 'Already in cart', 'count': count})

@login_required
def remove_from_cart(request, transaction_id):
    transaction = get_object_or_404(CourseTransaction, pk=transaction_id, user__user=request.user, status='pending', is_active=True)
    transaction.is_active = False
    transaction.save()
    profile = Profile.objects.get(user=request.user)
    count = profile.coursetransactions.filter(status='pending', is_active=True).count()
    return JsonResponse({'success': True, 'count': count})

@login_required
def cart_view(request):
    profile = get_profile_or_create(request)
    cart_items = profile.coursetransactions.filter(status='pending', is_active=True)
    total = sum(item.amount for item in cart_items)
    return render(request, 'mainApp/cart.html', {'cart_items': cart_items, 'total': total})

@login_required
def purchase_cart(request):
    profile = get_profile_or_create(request)
    cart_items = profile.coursetransactions.filter(status='pending', is_active=True)
    if cart_items.exists():
        for item in cart_items:
            item.status = 'completed'
            item.transaction_id = f"txn_{uuid.uuid4().hex[:12]}"
            item.save()
        messages.success(request, f'Purchased {cart_items.count()} courses!')
    return redirect('my_courses')

@login_required
def join_live_batch(request):
    from .models import LiveCourse
    from .forms import RegisterForm
    
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
                Profile.objects.create(
                    user=user,
                    first_name=data['first_name'],
                    last_name=data['last_name'],
                    phone=data['phone'],
                    address=data['address']
                )
                messages.success(request, 'Registration successful for live batch! Check your email.')
                return redirect('login_success')
        else:
            messages.error(request, 'Please correct the errors below.')
    else:
        form = RegisterForm()
    
    live_courses = LiveCourse.objects.filter(is_active=True)
    context = {
        'register_form': form,
        'live_courses': live_courses,
        'login_form': LoginForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    return render(request, 'mainApp/join.html', context)

def my_courses(request):
    profile = get_profile_or_create(request)
    transactions = profile.coursetransactions.filter(status='completed').select_related('course')
    return render(request, 'mainApp/my-courses.html', {'purchased': transactions, 'profile': profile})
