from django.shortcuts import render, redirect
from django.contrib.auth import authenticate, login
from django.contrib import messages
from django.contrib.auth.hashers import make_password
from django.contrib.auth.models import User
from .models import Course, Profile
from .forms import LoginForm, RegisterForm

# Create your views here.

def homePage(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
    }
    return render(request, "mainApp/home.html", context)

def aboutPage(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
    }
    return render(request, "mainApp/about.html", context)

def eventPage(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
    }
    return render(request, "mainApp/event.html", context)

def certificationsPage(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
    }
    return render(request, "mainApp/certifications.html", context)

def classPage(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
    }
    return render(request, "mainApp/classes.html", context)

def ourCoursesPage(request):
    course = Course.objects.filter(is_active=True).order_by('course_number')
    
    # Add forms to existing context
    context = {
        "course": course,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
    }
    
    return render(request, "mainApp/ourCourses.html", context)

def teamPage(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
    }
    return render(request, "mainApp/team.html", context)

def testimonialPage(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
    }
    return render(request, "mainApp/testimonial.html", context)

def galleryPage(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
    }
    return render(request, "mainApp/gallery.html", context)

def contactPage(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
    }
    return render(request, "mainApp/contact.html", context)

def error404Page(request):
    # Add forms to context
    context = {
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
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
                return redirect('login_success')
            else:
                messages.error(request, 'Invalid email or password.')
        else:
            messages.error(request, 'Please correct the errors below.')
    else:
        form = LoginForm()
    
    # For the login page itself, also include register form
    context = {
        'login_form': form,
        'register_form': RegisterForm(),
    }
    return render(request, 'mainApp/login.html', context)