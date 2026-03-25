from django.shortcuts import render, redirect
from django.contrib.auth import authenticate, login, logout, update_session_auth_hash
from django.contrib.auth.decorators import login_required
from django.contrib.auth.models import User
from django.contrib import messages
from django.http import JsonResponse
from django.views.decorators.csrf import csrf_exempt
from django.views.decorators.http import require_http_methods
import json
from .models import Course, Profile, TeamMember
from .forms import LoginForm, RegisterForm, ChangePasswordForm

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
    # Add forms to context
    context = {
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
    # Add forms to context
    context = {
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
def profile_view(request):
    profile = Profile.objects.get(user=request.user)
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