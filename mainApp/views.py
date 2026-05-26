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
import logging
from .models import Course, Profile, TeamMember, CourseTransaction, LiveCourse, LiveCourseTransaction, LiveCourseRegistration, Chapter, Lecture, UserCourseAccess, Quiz, QuizQuestion, QuizAttempt, QuizAnswer, LectureProgress
from .forms import LoginForm, RegisterForm, ChangePasswordForm, ContactForm, LiveRegistrationForm, ProfileUpdateForm
import uuid
from django.utils import timezone
from decimal import Decimal
from .models import PasswordResetOTP
from .services.email_service import send_password_reset_otp_email, send_password_reset_success_email
from .forms import (
    ForgotPasswordRequestForm, 
    ForgotPasswordVerifyOTPForm, 
    ForgotPasswordResetForm,
    ResetPasswordForm
)
from django.http import HttpResponse, Http404
from django.core.exceptions import PermissionDenied
from .models import Invoice
from .services.invoice_pdf import generate_invoice_pdf, save_pdf_to_model
from django.db.models import Q

# Set up logging
logger = logging.getLogger(__name__)

# Create your views here.

def forgot_password_reset(request):
    """
    Step 3: Reset password after OTP verification
    """
    if not request.session.get('reset_verified'):
        return JsonResponse({
            'success': False,
            'error': 'Unauthorized. Please verify OTP first.'
        }, status=401)
    
    email = request.session.get('reset_email')
    user_id = request.session.get('reset_user_id')
    
    if not email or not user_id:
        return JsonResponse({
            'success': False,
            'error': 'Session expired. Please request OTP again.'
        }, status=400)
    
    if request.method == 'POST':
        new_password = request.POST.get('new_password')
        confirm_password = request.POST.get('confirm_password')
        
        if not new_password or not confirm_password:
            return JsonResponse({
                'success': False,
                'error': 'Both password fields are required'
            }, status=400)
        
        if new_password != confirm_password:
            return JsonResponse({
                'success': False,
                'error': 'Passwords do not match'
            }, status=400)
        
        if len(new_password) < 6:
            return JsonResponse({
                'success': False,
                'error': 'Password must be at least 6 characters long'
            }, status=400)
        
        try:
            user = User.objects.get(id=user_id, email=email)
            user.set_password(new_password)
            user.save()
            
            # Update session to prevent logout
            update_session_auth_hash(request, user)
            
            # Send success email
            try:
                profile = Profile.objects.get(user=user)
                user_name = f"{profile.first_name} {profile.last_name}".strip() or user.username
                send_password_reset_success_email(email, user_name)
            except Exception as e:
                logger.error(f"Failed to send success email: {str(e)}")
            
            # Clear reset session data
            request.session.pop('reset_email', None)
            request.session.pop('reset_verified', None)
            request.session.pop('reset_user_id', None)
            request.session.pop('reset_otp_sent_at', None)
            
            return JsonResponse({
                'success': True,
                'message': 'Password reset successfully! Please login with your new password.'
            })
            
        except User.DoesNotExist:
            return JsonResponse({
                'success': False,
                'error': 'User not found.'
            }, status=404)
        except Exception as e:
            logger.error(f"Error resetting password: {str(e)}")
            return JsonResponse({
                'success': False,
                'error': f'Reset error: {str(e)}'
            }, status=400)
    
    return JsonResponse({'error': 'Method not allowed'}, status=405)

# Forgot Password Views

def forgot_password_request(request):
    """
    Step 1: User enters email to request OTP for forgot password
    """
    if request.method == 'POST':
        form = ForgotPasswordRequestForm(request.POST)
        if form.is_valid():
            email = form.cleaned_data['email']
            users = User.objects.filter(email=email)
            if not users.exists():
                return JsonResponse({
                    'success': False,
                    'error': 'No account found with this email.'
                }, status=404)
            user = users.first()
            try:
                profile = Profile.objects.get(user=user)
                user_name = f"{profile.first_name} {profile.last_name}".strip() or user.username
                
                # Create OTP
                otp_obj, otp_code = PasswordResetOTP.create_otp_for_user(user)
                logger.info(f"OTP created for {email}: {otp_code}")
                
                # Send OTP via email
                success, message = send_password_reset_otp_email(email, otp_code, user_name)
                
                if success:
                    # Store email in session for next steps
                    request.session['reset_email'] = email
                    request.session['reset_otp_sent_at'] = timezone.now().isoformat()
                    
                    return JsonResponse({
                        'success': True,
                        'message': f'OTP sent to {email}. Valid for 10 minutes.',
                        'email': email
                    })
                else:
                    return JsonResponse({
                        'success': False,
                        'error': message
                    }, status=500)
            except Profile.DoesNotExist:
                return JsonResponse({
                    'success': False,
                    'error': 'Profile not found for this user.'
                }, status=404)
        else:
            errors = {}
            for field, error_list in form.errors.items():
                errors[field] = error_list[0]
            return JsonResponse({
                'success': False,
                'errors': errors
            }, status=400)
    else:
        form = ForgotPasswordRequestForm()
    
    context = {
        'form': form,
        'cart_count': get_cart_count(request)
    }
    return render(request, 'mainApp/forgot_password_request.html', context)


def forgot_password_verify_otp(request):
    """
    Step 2: Verify OTP for forgot password
    """
    # Log the request for debugging
    logger.info(f"Verify OTP request method: {request.method}")
    logger.info(f"POST data: {request.POST}")
    
    email = request.session.get('reset_email')
    if not email:
        return JsonResponse({
            'success': False,
            'error': 'Session expired. Please request OTP again.'
        }, status=400)
    
    if request.method == 'POST':
        # Get OTP directly from POST data (bypass form validation for debugging)
        otp = request.POST.get('otp', '').upper().strip()
        
        if not otp:
            return JsonResponse({
                'success': False,
                'error': 'OTP is required'
            }, status=400)
        
        try:
            user = User.objects.get(email=email)
            logger.info(f"Verifying OTP for user: {user.email}, OTP: {otp}")
            
            # Check for valid OTP
            otp_records = PasswordResetOTP.objects.filter(
                user=user,
                otp=otp,
                is_used=False,
                expires_at__gt=timezone.now()
            )
            
            logger.info(f"Found {otp_records.count()} valid OTP records")
            
            if not otp_records.exists():
                return JsonResponse({
                    'success': False,
                    'error': 'Invalid or expired OTP. Please request a new one.'
                }, status=400)
            
            otp_record = otp_records.latest('created_at')
            
            # Mark OTP as used
            otp_record.is_used = True
            otp_record.save()
            
            # Store verification in session
            request.session['reset_verified'] = True
            request.session['reset_user_id'] = user.id
            
            return JsonResponse({
                'success': True,
                'message': 'OTP verified successfully. You can now reset your password.',
                'email': email
            })
            
        except User.DoesNotExist:
            return JsonResponse({
                'success': False,
                'error': 'User not found.'
            }, status=404)
        except Exception as e:
            logger.error(f"Error in OTP verification: {str(e)}")
            return JsonResponse({
                'success': False,
                'error': f'Verification error: {str(e)}'
            }, status=400)
    
    return JsonResponse({'error': 'Method not allowed'}, status=405)


@login_required
def send_reset_otp(request):
    """
    Send OTP for logged-in user to reset password (change password)
    """
    if request.method == 'POST':
        try:
            user = request.user
            profile = Profile.objects.get(user=user)
            user_name = f"{profile.first_name} {profile.last_name}".strip() or user.username
            
            # Create OTP
            otp_obj, otp_code = PasswordResetOTP.create_otp_for_user(user)
            
            # Send OTP via email
            success, message = send_password_reset_otp_email(user.email, otp_code, user_name)
            
            if success:
                return JsonResponse({
                    'success': True,
                    'message': f'OTP sent to {user.email}. Valid for 10 minutes.'
                })
            else:
                return JsonResponse({
                    'success': False,
                    'error': message
                }, status=500)
                
        except Profile.DoesNotExist:
            return JsonResponse({
                'success': False,
                'error': 'Profile not found.'
            }, status=404)
        except Exception as e:
            return JsonResponse({
                'success': False,
                'error': str(e)
            }, status=500)
    
    return JsonResponse({'error': 'Method not allowed'}, status=405)


@login_required
def reset_password_with_otp(request):
    """
    Reset password for logged-in user using OTP verification
    """
    if request.method == 'POST':
        form = ResetPasswordForm(request.user, request.POST)
        if form.is_valid():
            new_password = form.cleaned_data['new_password']
            otp = form.cleaned_data['otp'].upper()
            
            try:
                # Verify OTP again (double-check)
                otp_record = PasswordResetOTP.objects.filter(
                    user=request.user,
                    otp=otp,
                    is_used=False,
                    expires_at__gt=timezone.now()
                ).latest('created_at')
                
                # Mark OTP as used
                otp_record.is_used = True
                otp_record.save()
                
                # Set new password
                request.user.set_password(new_password)
                request.user.save()
                
                # Update session to keep user logged in
                update_session_auth_hash(request, request.user)
                
                # Send success email
                try:
                    profile = Profile.objects.get(user=request.user)
                    user_name = f"{profile.first_name} {profile.last_name}".strip() or request.user.username
                    send_password_reset_success_email(request.user.email, user_name)
                except:
                    pass
                
                return JsonResponse({
                    'success': True,
                    'message': 'Password changed successfully!'
                })
                
            except PasswordResetOTP.DoesNotExist:
                return JsonResponse({
                    'success': False,
                    'error': 'Invalid or expired OTP. Please request a new OTP.'
                }, status=400)
        else:
            errors = {}
            for field, error_list in form.errors.items():
                errors[field] = error_list[0]
            return JsonResponse({
                'success': False,
                'errors': errors
            }, status=400)
    
    return JsonResponse({'error': 'Method not allowed'}, status=405)


def check_reset_session(request):
    """
    Check if user has valid reset session (for step tracking)
    """
    has_email = bool(request.session.get('reset_email'))
    is_verified = bool(request.session.get('reset_verified'))
    
    return JsonResponse({
        'has_email': has_email,
        'is_verified': is_verified,
        'email': request.session.get('reset_email') if has_email else None
    })


# Main Page Views
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
                # Profile is auto-created by the signal, so we just update it
                # instead of creating a new one
                profile = user.profile  # This gets the auto-created profile
                profile.first_name = data['first_name']
                profile.last_name = data['last_name']
                profile.email = data['email']
                profile.phone = data['phone']
                profile.address = data['address']
                profile.save()
                
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


# AJAX Status Views
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


# Profile Views
@login_required
def profile_view(request):
    profile = get_profile_or_create(request)
    
    # Email sync handled by models.py signal - no manual sync needed
    
    context = {
        'profile': profile,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user),
        'cart_count': get_cart_count(request)
    }
    return render(request, 'mainApp/profile.html', context)


@login_required
@require_http_methods(["PUT"])
def update_profile_api(request):
    """API endpoint for updating profile via PUT request"""
    try:
        profile = get_profile_or_create(request)
        data = json.loads(request.body)
        
        # Update only the fields that are provided
        if 'phone' in data:
            profile.phone = data['phone']
        if 'address' in data:
            profile.address = data['address']
        if 'bio' in data:
            profile.bio = data['bio']
        
        # Save the profile
        profile.save()
        
        # Also update User model if needed
        if 'first_name' in data and data['first_name']:
            request.user.first_name = data['first_name']
        if 'last_name' in data and data['last_name']:
            request.user.last_name = data['last_name']
        if 'email' in data and data['email']:
            # Only update email if it's changed and not already taken
            if request.user.email != data['email']:
                if User.objects.filter(email=data['email']).exclude(id=request.user.id).exists():
                    return JsonResponse({
                        'success': False,
                        'error': 'Email already taken by another user'
                    }, status=400)
                request.user.email = data['email']
                # Also update profile email to match
                profile.email = data['email']
                profile.save()
        
        request.user.save()
        
        return JsonResponse({
            'success': True,
            'message': 'Profile updated successfully!'
        })
        
    except json.JSONDecodeError:
        return JsonResponse({
            'success': False,
            'error': 'Invalid JSON data'
        }, status=400)
    except Exception as e:
        logger.error(f"Error updating profile: {str(e)}")
        return JsonResponse({
            'success': False,
            'error': str(e)
        }, status=500)
        
        
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


# Cart Helper Functions
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
                        # Calculate GST for the course (18%)
                        base_amount = course.price
                        gst_amount = base_amount * Decimal('0.18')
                        total_amount = base_amount + gst_amount
                        
                        CourseTransaction.objects.create(
                            user=profile,
                            course=course,
                            status='pending',
                            transaction_id=f"cart_normal_{uuid.uuid4().hex[:12]}",
                            base_amount=base_amount,
                            gst_amount=gst_amount,
                            amount=total_amount,
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


# In add_to_cart function - FIXED version
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
            
            # Check if already purchased (completed)
            if profile.coursetransactions.filter(course=course, status='completed').exists():
                return JsonResponse({'success': False, 'error': 'Course already purchased'})
            
            # Calculate GST amounts for the course
            base_amount = course.price
            gst_amount = base_amount * Decimal('0.18')
            total_amount = base_amount + gst_amount
            
            transaction, created = CourseTransaction.objects.get_or_create(
                user=profile,
                course=course,
                status='pending',
                defaults={
                    'transaction_id': f"cart_normal_{uuid.uuid4().hex[:12]}",
                    'base_amount': base_amount,
                    'gst_amount': gst_amount,
                    'amount': total_amount,
                    'is_active': True
                }
            )
            
            if not created:
                transaction.is_active = True
                transaction.base_amount = base_amount
                transaction.gst_amount = gst_amount
                transaction.amount = total_amount
                transaction.save()
                return JsonResponse({'success': False, 'error': 'Course added in cart'})
        
        elif course_type == 1:  # Live course -> LiveCourseTransaction
            try:
                live_course = LiveCourse.objects.get(id=course_id, is_active=True)
            except LiveCourse.DoesNotExist:
                return JsonResponse({'success': False, 'error': 'Live course not found'})
            
            # Check if already purchased (completed)
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
            'new_total': float(new_total)
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
            'amount': float(item.amount),
            'course_type': 0,
            'image': item.course.image.url if item.course.image else None,
            'base_amount': float(item.base_amount),
            'gst_amount': float(item.gst_amount),
        })
    
    for item in live_cart_items:
        cart_items.append({
            'id': item.id,
            'type': 'live',
            'title': item.live_course.title,
            'amount': float(item.total_amount),
            'course_type': 1,
            'image': item.live_course.image.url if item.live_course.image else None,
            'base_amount': float(item.base_amount),
            'gst_amount': float(item.gst_amount),
        })
    
    normal_total = sum(float(item.amount) for item in normal_cart_items)
    live_total = sum(float(item.total_amount) for item in live_cart_items)
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
    
    purchased_items = []
    
    # Process normal courses (CourseTransaction) - generate unique ID for each
    for item in normal_cart_items:
        # Generate unique transaction ID for each item
        unique_transaction_id = f"txn_normal_{uuid.uuid4().hex}_{int(timezone.now().timestamp())}_{item.id}"
        
        # Check if transaction_id already exists
        while CourseTransaction.objects.filter(transaction_id=unique_transaction_id).exists():
            unique_transaction_id = f"txn_normal_{uuid.uuid4().hex}_{int(timezone.now().timestamp())}_{item.id}"
        
        item.status = 'completed'
        item.transaction_id = unique_transaction_id
        item.purchase_date = timezone.now()
        item.save()
        purchased_items.append(item.course.title)
    
    # Process live courses (LiveCourseTransaction) - generate unique ID for each
    for item in live_cart_items:
        # Generate unique transaction ID for each item
        unique_transaction_id = f"txn_live_{uuid.uuid4().hex}_{int(timezone.now().timestamp())}_{item.id}"
        
        # Check if transaction_id already exists
        while LiveCourseTransaction.objects.filter(transaction_id=unique_transaction_id).exists():
            unique_transaction_id = f"txn_live_{uuid.uuid4().hex}_{int(timezone.now().timestamp())}_{item.id}"
        
        item.status = 'completed'
        item.transaction_id = unique_transaction_id
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
    
    # CHECK FOR EXISTING PURCHASE OR CART ITEM FIRST
    # Check if already purchased
    if profile.live_transactions.filter(live_course=live_course, status='completed').exists():
        messages.warning(request, 'You have already purchased this live course.')
        return redirect('my_live_courses')
    
    # Check if already in cart
    existing_cart = profile.live_transactions.filter(
        live_course=live_course, 
        status='pending', 
        is_active=True
    ).exists()
    
    if existing_cart:
        messages.warning(request, 'This live course is already in your cart.')
        return redirect('cart_view')
    
    # Check if already registered
    if LiveCourseRegistration.objects.filter(profile=profile, live_course=live_course).exists():
        messages.warning(request, 'You are already registered for this live course.')
        return redirect('my_live_courses')
    
    if request.method == 'POST':
        form = LiveRegistrationForm(request.POST, profile=profile)
        if form.is_valid():
            data = form.cleaned_data
            profile.first_name = data['first_name']
            profile.last_name = data['last_name']
            profile.phone = data['phone']
            profile.address = data['address']
            profile.save()
            
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
        'base_price': float(base_price),
        'gst_amount': float(gst),
        'total_price': float(total_price),
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


# Success Pages
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


# Course Detail View
def get_user_course_access(user, course):
    """Get user's course access or None"""
    if not user.is_authenticated:
        return None
    try:
        profile = Profile.objects.get(user=user)
        access = profile.course_access.filter(course=course, is_active=True).first()
        if access and access.has_access():
            return access
        return None
    except Profile.DoesNotExist:
        return None


def course_detail(request, course_id):
    course = get_object_or_404(
        Course.objects.prefetch_related('details', 'chapters__lectures'), 
        id=course_id, is_active=True
    )
    related_courses = Course.objects.filter(is_active=True).exclude(id=course_id)[:4]
    
    user_access = get_user_course_access(request.user, course)
    is_enrolled = user_access is not None
    chapters = course.chapters.all()
    
    context = {
        "course": course,
        "details": course.details,
        "related_courses": related_courses,
        "chapters": chapters,
        "user_access": user_access,
        "is_enrolled": is_enrolled,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, "mainApp/Coursedetail.html", context)


def lecture_detail(request, course_id, lecture_id):
    course = get_object_or_404(Course.objects.prefetch_related('chapters__lectures'), id=course_id, is_active=True)
    lecture = get_object_or_404(Lecture.objects.select_related('chapter').prefetch_related('chapter__lectures'), id=lecture_id, chapter__course=course)
    
    user_access = get_user_course_access(request.user, course)
    is_enrolled = user_access is not None
    
    # Access check for non-preview lectures
    if not user_access and not lecture.is_free_preview:
        messages.warning(request, 'Please purchase the course to access this lecture.')
        return redirect('courseDetail', course_id=course.id)
    
    # Get or create lecture progress
    lecture_progress = None
    if user_access:
        lecture_progress, created = LectureProgress.objects.get_or_create(
            user=user_access.user,
            lecture=lecture,
            course_access=user_access
        )
    
    # ==================== CODE COMPILER SETUP ====================
    # Check if compiler should be enabled for this lecture
    enable_compiler = False
    compiler_language = 'python'  # default
    starter_code = ''
    
    # Get course programming language
    if hasattr(course, 'programming_language'):
        compiler_language = course.programming_language or 'python'
    
    # Enable compiler only for video/article lectures (not quizzes)
    if lecture.lecture_type in ['video', 'article'] and compiler_language:
        enable_compiler = True
        # FIXED: Remove lecture.custom_starter_code reference
        starter_code = course.starter_code_template or get_default_starter_code(compiler_language)
    # ==================== END COMPILER SETUP ====================
    
    # Check if lecture has quiz
    has_quiz = lecture.has_quiz
    quiz_data = None
    quiz_attempt = None
    can_take_quiz = False
    
    if has_quiz and user_access:
        quiz = lecture.quiz
        can_take_quiz = quiz.can_attempt(user_access.user)
        quiz_attempt = quiz.attempts.filter(profile=user_access.user).order_by('-started_at').first()
        
        quiz_data = {
            'quiz': quiz,
            'total_questions': quiz.total_questions,
            'total_points': quiz.total_points,
            'attempts_made': quiz.attempts.filter(profile=user_access.user).count(),
            'max_attempts': quiz.max_attempts,
            'can_attempt': can_take_quiz,
            'latest_attempt': quiz_attempt,
            'has_passed': quiz_attempt.is_passed if quiz_attempt else False
        }
    
    context = {
        'course': course,
        'lecture': lecture,
        'user_access': user_access,
        'is_enrolled': is_enrolled,
        'chapter': lecture.chapter,
        'chapters': course.chapters.all(),
        'cart_count': get_cart_count(request),
        'lecture_progress': lecture_progress,
        'has_quiz': has_quiz,
        'quiz_data': quiz_data,
        # Compiler context variables
        'enable_compiler': enable_compiler,
        'compiler_language': compiler_language,
        'starter_code': starter_code,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    
    # Redirect to quiz template if lecture type is quiz
    if lecture.lecture_type == 'quiz':
        return render(request, 'mainApp/quiz_lecture.html', context)
    
    return render(request, 'mainApp/lecture.html', context)


def get_default_starter_code(language):
    """Return default starter code template for each programming language"""
    defaults = {
        'python': '''# Welcome to Python Practice!
# Write your code below and click Run

print("Hello, World!")

# Try more examples:
# name = input("Enter your name: ")
# print(f"Hello, {name}!")
''',
        'javascript': '''// Welcome to JavaScript Practice!
// Write your code below and click Run

console.log("Hello, World!");

// Try more examples:
// let name = prompt("Enter your name:");
// console.log(`Hello, ${name}!`);
''',
        'html_css': '''<!-- Welcome to HTML/CSS Practice! -->
<!DOCTYPE html>
<html>
<head>
    <title>Practice Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        button {
            background: white;
            color: #764ba2;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello, World!</h1>
        <button onclick="alert('Hello from JavaScript!')">Click Me</button>
    </div>
</body>
</html>
''',
        'sql': '''-- Welcome to SQL Practice!
-- Write your SQL queries below

SELECT 'Hello, World!' AS message;

-- Try more queries:
-- CREATE TABLE users (id INTEGER, name TEXT);
-- INSERT INTO users VALUES (1, 'John');
-- SELECT * FROM users;
''',
    }
    return defaults.get(language, defaults['python'])

@login_required
def take_quiz(request, course_id, lecture_id):
    """Start or resume a quiz"""
    course = get_object_or_404(Course, id=course_id, is_active=True)
    lecture = get_object_or_404(Lecture, id=lecture_id, chapter__course=course)
    
    # Check access
    user_access = get_user_course_access(request.user, course)
    if not user_access:
        messages.error(request, 'You need to purchase this course to take quizzes.')
        return redirect('courseDetail', course_id=course.id)
    
    # Check if lecture has quiz
    if not lecture.has_quiz:
        messages.error(request, 'This lecture does not have a quiz.')
        return redirect('lectureDetail', course_id=course.id, lecture_id=lecture.id)
    
    quiz = lecture.quiz
    
    # Check if user can attempt
    if not quiz.can_attempt(user_access.user):
        messages.warning(request, f'You have reached the maximum number of attempts ({quiz.max_attempts}) for this quiz.')
        return redirect('lectureDetail', course_id=course.id, lecture_id=lecture.id)
    
    # Get or create lecture progress
    lecture_progress, _ = LectureProgress.objects.get_or_create(
        user=user_access.user,
        lecture=lecture,
        course_access=user_access
    )
    
    # Check for in-progress attempt
    current_attempt = quiz.attempts.filter(
        profile=user_access.user,
        status='in_progress'
    ).first()
    
    if not current_attempt:
        # Create new attempt
        attempt_number = quiz.attempts.filter(profile=user_access.user).count() + 1
        current_attempt = QuizAttempt.objects.create(
            quiz=quiz,
            profile=user_access.user,
            lecture_progress=lecture_progress,
            attempt_number=attempt_number,
            status='in_progress'
        )
    
    # Get questions (shuffle if enabled)
    questions = quiz.questions.all().order_by('order')
    if quiz.shuffle_questions:
        questions = questions.order_by('?')
    
    # Prepare questions data as JSON for JavaScript
    questions_list = []
    for q in questions:
        q_data = {
            'id': q.id,
            'question_text': q.question_text,
            'question_type': q.question_type,
            'points': q.points,
            'order': q.order,
            'option_a': q.option_a or '',
            'option_b': q.option_b or '',
            'option_c': q.option_c or '',
            'option_d': q.option_d or '',
            'correct_option': q.correct_option or '',
            'expected_answer': q.expected_answer or '',
            'image_url': q.image.url if q.image and hasattr(q.image, 'url') else '',
        }
        questions_list.append(q_data)
    
    # Get answered question IDs for this attempt
    answered_question_ids = list(current_attempt.answers.values_list('question_id', flat=True))
    
    context = {
        'course': course,
        'lecture': lecture,
        'quiz': quiz,
        'attempt': current_attempt,
        'questions': questions,
        'questions_json': json.dumps(questions_list),  # Pass as JSON string
        'answered_question_ids': answered_question_ids,
        'total_questions': questions.count(),
        'answered_count': len(answered_question_ids),
        'remaining_count': questions.count() - len(answered_question_ids),
        'time_limit_minutes': quiz.time_limit_minutes,
        'cart_count': get_cart_count(request),
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    
    return render(request, 'mainApp/take_quiz.html', context)

@login_required
@require_http_methods(["POST"])
def submit_quiz_answer(request):
    """Submit an answer for a quiz question via AJAX"""
    try:
        data = json.loads(request.body)
        attempt_id = data.get('attempt_id')
        question_id = data.get('question_id')
        answer = data.get('answer', '').strip()
        
        # Get objects
        attempt = get_object_or_404(QuizAttempt, id=attempt_id, profile__user=request.user)
        question = get_object_or_404(QuizQuestion, id=question_id)
        
        # Check if already answered
        existing_answer = QuizAnswer.objects.filter(attempt=attempt, question=question).first()
        if existing_answer:
            return JsonResponse({
                'success': False,
                'error': 'This question has already been answered.'
            }, status=400)
        
        # Create answer
        quiz_answer = QuizAnswer.objects.create(
            attempt=attempt,
            question=question,
            user_answer=answer,
            selected_option=answer if question.question_type == 'mcq' else '',
            text_answer=answer if question.question_type == 'one_line' else ''
        )
        
        # Return response
        return JsonResponse({
            'success': True,
            'message': 'Answer submitted successfully!',
            'is_correct': quiz_answer.is_correct,
            'points_earned': quiz_answer.points_earned,
            'explanation': question.explanation or 'No explanation provided.',
            'correct_answer': question.correct_option if question.question_type == 'mcq' else question.expected_answer,
            'question_type': question.question_type
        })
        
    except Exception as e:
        logger.error(f"Error submitting quiz answer: {str(e)}")
        return JsonResponse({
            'success': False,
            'error': str(e)
        }, status=500)


@login_required
@require_http_methods(["POST"])
def complete_quiz(request):
    """Complete the quiz and calculate final score"""
    try:
        data = json.loads(request.body)
        attempt_id = data.get('attempt_id')
        
        attempt = get_object_or_404(QuizAttempt, id=attempt_id, profile__user=request.user)
        
        if attempt.status == 'completed':
            return JsonResponse({
                'success': False,
                'error': 'Quiz already completed.'
            }, status=400)
        
        # Calculate final score
        attempt.calculate_score()
        attempt.mark_completed()
        
        # Refresh to get updated data
        attempt.refresh_from_db()
        
        # Get the course and lecture for redirect
        lecture = attempt.quiz.lecture
        course = lecture.chapter.course
        
        # Get all attempts for this user to find the best one
        all_attempts = attempt.quiz.attempts.filter(
            profile=attempt.profile, 
            status='completed'
        ).order_by('-percentage_score')
        
        best_attempt = all_attempts.first()
        
        # Prepare response data
        response_data = {
            'success': True,
            'message': 'Quiz completed!',
            'score': attempt.score,
            'total_points': attempt.total_points,
            'percentage': attempt.percentage_score,
            'is_passed': attempt.is_passed,
            'passed_message': 'Congratulations! You passed the quiz!' if attempt.is_passed else 'Sorry, you did not pass. You can try again.',
            'redirect_url': f'/course/{course.id}/lecture/{lecture.id}/results/'
        }
        
        # Add info if this is the best attempt
        if best_attempt and best_attempt.id == attempt.id:
            response_data['is_best_attempt'] = True
            response_data['message'] = f'Quiz completed! This is your best attempt ({attempt.percentage_score:.1f}%)!'
        
        logger.info(f"Quiz completed - Attempt {attempt.attempt_number}, Score: {attempt.percentage_score}%, Best: {best_attempt.percentage_score if best_attempt else 0}%")
        
        return JsonResponse(response_data)
        
    except Exception as e:
        logger.error(f"Error completing quiz: {str(e)}")
        return JsonResponse({
            'success': False,
            'error': str(e)
        }, status=500)

@login_required
def quiz_results(request, course_id, lecture_id, attempt_id=None):
    """View quiz results - shows specific attempt or best attempt"""
    course = get_object_or_404(Course, id=course_id, is_active=True)
    lecture = get_object_or_404(Lecture, id=lecture_id, chapter__course=course)
    
    # Check access
    user_access = get_user_course_access(request.user, course)
    if not user_access:
        messages.error(request, 'Access denied.')
        return redirect('courseDetail', course_id=course.id)
    
    # Check if lecture has quiz
    if not lecture.has_quiz:
        messages.error(request, 'This lecture does not have a quiz.')
        return redirect('lectureDetail', course_id=course.id, lecture_id=lecture.id)
    
    quiz = lecture.quiz
    
    # Get all attempts for this user
    all_attempts = quiz.attempts.filter(profile=user_access.user, status='completed').order_by('-percentage_score', '-completed_at')
    
    # If specific attempt_id provided, show that attempt
    current_attempt = None
    if attempt_id:
        current_attempt = all_attempts.filter(id=attempt_id).first()
    
    # If no specific attempt or attempt not found, show best attempt
    if not current_attempt:
        current_attempt = all_attempts.first()  # Best attempt (highest score)
    
    if not current_attempt:
        messages.warning(request, 'No completed attempts found for this quiz.')
        return redirect('lectureDetail', course_id=course.id, lecture_id=lecture.id)
    
    # Get all answers with questions for current attempt
    answers = current_attempt.answers.select_related('question').all()
    
    # Calculate counts for current attempt
    correct_answers_count = answers.filter(is_correct=True).count()
    incorrect_answers_count = answers.filter(is_correct=False).count()
    
    # Calculate time in minutes and seconds
    time_minutes = current_attempt.time_taken_seconds // 60
    time_seconds = current_attempt.time_taken_seconds % 60
    
    # Prepare attempts data for dropdown/display
    attempts_data = []
    for attempt in all_attempts:
        attempts_data.append({
            'id': attempt.id,
            'attempt_number': attempt.attempt_number,
            'percentage_score': attempt.percentage_score,
            'is_passed': attempt.is_passed,
            'score': attempt.score,
            'total_points': attempt.total_points,
            'completed_at': attempt.completed_at,
            'is_current': attempt.id == current_attempt.id
        })
    
    context = {
        'course': course,
        'lecture': lecture,
        'quiz': quiz,
        'current_attempt': current_attempt,
        'answers': answers,
        'percentage': current_attempt.percentage_score,
        'is_passed': current_attempt.is_passed,
        'correct_answers_count': correct_answers_count,
        'incorrect_answers_count': incorrect_answers_count,
        'time_minutes': time_minutes,
        'time_seconds': time_seconds,
        'all_attempts': attempts_data,
        'total_attempts': len(attempts_data),
        'best_score': all_attempts.first().percentage_score if all_attempts else 0,
        'cart_count': get_cart_count(request),
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
    }
    
    return render(request, 'mainApp/quiz_results.html', context)

@login_required
@require_http_methods(["POST"])
def mark_lecture_complete(request):
    profile = get_profile_or_create(request)
    data = json.loads(request.body)
    lecture_id = data.get('lecture_id')
    
    lecture = get_object_or_404(Lecture, id=lecture_id)
    course = lecture.chapter.course
    
    try:
        access = profile.course_access.filter(course=course, is_active=True).first()
        if access and access.has_access():
            success = access.mark_lecture_completed(lecture)
            if success:
                return JsonResponse({'success': True, 'message': 'Lecture marked complete!', 'percentage': access.completion_percentage})
        return JsonResponse({'success': False, 'error': 'No access to this course'})
    except Exception as e:
        return JsonResponse({'success': False, 'error': str(e)})

@login_required
@csrf_exempt
@require_http_methods(["POST"])
def execute_code(request):
    """API endpoint to execute code."""
    import requests
    import json
    import sqlite3
    import io
    import sys

    try:
        data = json.loads(request.body)
        code = data.get('code', '')
        language = data.get('language', 'python')

        if not code:
            return JsonResponse({
                'success': False,
                'error': 'No code provided'
            }, status=400)

        # Handle HTML/CSS
        if language.lower() == 'html_css':
            return JsonResponse({
                'success': True,
                'output': code,
                'is_html': True,
                'language': 'html'
            })

        # Handle JavaScript
        if language.lower() == 'javascript':
            return JsonResponse({
                'success': True,
                'output': code,
                'is_javascript': True,
                'language': 'javascript'
            })

        # Handle SQL with actual SQLite execution
        if language.lower() == 'sql':
            import sqlite3

            try:
                # Create in-memory SQLite database
                conn = sqlite3.connect(':memory:')
                conn.row_factory = sqlite3.Row
                cursor = conn.cursor()

                # Split by semicolon but keep statements together
                statements = []
                current_statement = []

                for line in code.split('\n'):
                    line = line.strip()
                    if line.startswith('--'):
                        continue  # Skip comments
                    current_statement.append(line)
                    if line.endswith(';'):
                        statements.append(' '.join(current_statement).rstrip(';'))
                        current_statement = []

                if current_statement:
                    statements.append(' '.join(current_statement).rstrip(';'))

                results = []
                query_count = 0

                for stmt in statements:
                    stmt = stmt.strip()
                    if not stmt or stmt.startswith('--'):
                        continue

                    try:
                        # Check if SELECT query
                        is_select = stmt.upper().strip().startswith('SELECT')

                        cursor.execute(stmt)

                        if is_select:
                            rows = cursor.fetchall()
                            query_count += 1

                            if rows:
                                # Get column names
                                columns = [description[0] for description in cursor.description]

                                # Build formatted table
                                results.append(f"\n📊 Query {query_count} Results:")
                                results.append("=" * 50)

                                # Header
                                header = " | ".join(f"{col:<15}" for col in columns)
                                results.append(header)
                                results.append("-" * len(header))

                                # Data rows
                                for row in rows:
                                    row_str = " | ".join(f"{str(row[col])[:15]:<15}" for col in columns)
                                    results.append(row_str)

                                results.append("=" * 50)
                                results.append(f"Total: {len(rows)} row(s) returned")
                            else:
                                results.append(f"\n📊 Query {query_count + 1}: (No rows returned)")
                        else:
                            # INSERT, UPDATE, DELETE, CREATE, etc.
                            conn.commit()
                            if cursor.rowcount >= 0:
                                results.append(f"✓ {cursor.rowcount} row(s) affected")
                            else:
                                results.append("✓ Query executed successfully")

                    except sqlite3.Error as e:
                        results.append(f"❌ SQL Error: {str(e)}")

                conn.close()

                if not results:
                    final_output = "No valid SQL statements found"
                else:
                    final_output = "\n".join(results)

                return JsonResponse({
                    'success': True,
                    'output': final_output,
                    'language': 'sql'
                })

            except Exception as e:
                return JsonResponse({
                    'success': True,
                    'output': f"❌ Database Error: {str(e)}",
                    'language': 'sql'
                })
        current_statement = []
        
        for line in code.split('\n'):
            line = line.strip()
            if line.startswith('--'):
                continue  # Skip comments
            current_statement.append(line)
            if line.endswith(';'):
                statements.append(' '.join(current_statement).rstrip(';'))
                current_statement = []
        
        if current_statement:
            statements.append(' '.join(current_statement).rstrip(';'))
        
        results = []
        query_count = 0
        
        for stmt in statements:
            stmt = stmt.strip()
            if not stmt or stmt.startswith('--'):
                continue
            
            try:
                # Check if SELECT query
                is_select = stmt.upper().strip().startswith('SELECT')
                
                cursor.execute(stmt)
                
                if is_select:
                    rows = cursor.fetchall()
                    query_count += 1
                    
                    if rows:
                        # Get column names
                        columns = [description[0] for description in cursor.description]
                        
                        # Build formatted table
                        results.append(f"\n📊 Query {query_count} Results:")
                        results.append("=" * 50)
                        
                        # Header
                        header = " | ".join(f"{col:<15}" for col in columns)
                        results.append(header)
                        results.append("-" * len(header))
                        
                        # Data rows
                        for row in rows:
                            row_str = " | ".join(f"{str(row[col])[:15]:<15}" for col in columns)
                            results.append(row_str)
                        
                        results.append("=" * 50)
                        results.append(f"Total: {len(rows)} row(s) returned")
                    else:
                        results.append(f"\n📊 Query {query_count + 1}: (No rows returned)")
                else:
                    # INSERT, UPDATE, DELETE, CREATE, etc.
                    conn.commit()
                    if cursor.rowcount >= 0:
                        results.append(f"✓ {cursor.rowcount} row(s) affected")
                    else:
                        results.append("✓ Query executed successfully")
                        
            except sqlite3.Error as e:
                results.append(f"❌ SQL Error: {str(e)}")
        
        conn.close()
        
        if not results:
            final_output = "No valid SQL statements found"
        else:
            final_output = "\n".join(results)
        
        return JsonResponse({
            'success': True,
            'output': final_output,
            'language': 'sql'
        })
        
    except Exception as e:
        return JsonResponse({
            'success': True,
            'output': f"❌ Database Error: {str(e)}",
            'language': 'sql'
        })

        # For Java and Python, use JDoodle
        language_map = {
            'java': 'java',
            'python': 'python3',
            'py': 'python3',
        }

        jdoodle_language = language_map.get((language or '').lower(), 'python3')

        JDODDLE_CLIENT_ID = "b3a95f790d4bdb0f7d88687c958e737e"
        JDODDLE_CLIENT_SECRET = "78d17fac22abdaa41c6a85f897583061fbb2fbd84fb9e5715a85c2ba1c5adbc5"

        payload = {
            "clientId": JDODDLE_CLIENT_ID,
            "clientSecret": JDODDLE_CLIENT_SECRET,
            "script": code,
            "language": jdoodle_language,
            "versionIndex": "0",
            "stdin": ""
        }

        response = requests.post("https://api.jdoodle.com/v1/execute", json=payload, timeout=10)

        if response.status_code == 200:
            result = response.json()
            output = result.get('output', '')
            error = result.get('error', '')
            final_output = output if output else error
            if not final_output:
                final_output = '(No output)'

            return JsonResponse({
                'success': True,
                'output': final_output,
                'language': jdoodle_language
            })
        else:
            return JsonResponse({
                'success': False,
                'error': 'Code execution failed. Please try again.'
            }, status=500)

    except Exception as e:
        return JsonResponse({
            'success': False,
            'error': f'Error: {str(e)}'
        }, status=500)
# ==================== INVOICE VIEWS ====================

@login_required
def get_course_progress(request, course_id):
    """AJAX endpoint to get current course progress"""
    try:
        profile = Profile.objects.get(user=request.user)
        course = Course.objects.get(id=course_id, is_active=True)
        access = profile.course_access.filter(course=course, is_active=True).first()
        
        if access and access.has_access():
            return JsonResponse({
                'success': True,
                'percentage': access.completion_percentage,
                'completed_count': access.completed_lectures.count(),
                'total_lectures': course.total_lectures,
                'is_completed': access.is_completed
            })
        else:
            return JsonResponse({'success': False, 'error': 'No access to this course'}, status=403)
    except Profile.DoesNotExist:
        return JsonResponse({'success': False, 'error': 'Profile not found'}, status=404)
    except Course.DoesNotExist:
        return JsonResponse({'success': False, 'error': 'Course not found'}, status=404)
    except Exception as e:
        return JsonResponse({'success': False, 'error': str(e)}, status=500)


@login_required
def my_invoices(request):
    """Display list of all invoices for the logged-in user"""
    profile = get_profile_or_create(request)
    invoices = Invoice.objects.filter(profile=profile).order_by('-invoice_date')
    
    context = {
        'invoices': invoices,
        'profile': profile,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, 'mainApp/my_invoices.html', context)


@login_required
def download_invoice_pdf(request, invoice_id):
    """
    Download invoice as PDF
    """
    profile = get_profile_or_create(request)
    
    # Get the invoice and verify ownership
    try:
        invoice = Invoice.objects.get(id=invoice_id, profile=profile)
    except Invoice.DoesNotExist:
        raise Http404("Invoice not found")
    
    # Check if user owns this invoice
    if invoice.profile != profile:
        raise PermissionDenied("You don't have permission to download this invoice")
    
    # Check if PDF file exists in model, if not generate and save
    if not invoice.pdf_file or not invoice.pdf_file.name:
        save_pdf_to_model(invoice)
        # Refresh invoice to get the saved PDF
        invoice.refresh_from_db()
    
    # If PDF file exists, serve it
    if invoice.pdf_file and invoice.pdf_file.name:
        try:
            response = HttpResponse(invoice.pdf_file.read(), content_type='application/pdf')
            response['Content-Disposition'] = f'attachment; filename="invoice_{invoice.invoice_number}.pdf"'
            return response
        except Exception as e:
            logger.error(f"Error serving PDF for invoice {invoice.invoice_number}: {str(e)}")
            # Fallback: generate on the fly
            pdf_buffer = generate_invoice_pdf(invoice)
            response = HttpResponse(pdf_buffer.getvalue(), content_type='application/pdf')
            response['Content-Disposition'] = f'attachment; filename="invoice_{invoice.invoice_number}.pdf"'
            return response
    else:
        # Generate PDF on the fly if not saved
        pdf_buffer = generate_invoice_pdf(invoice)
        response = HttpResponse(pdf_buffer.getvalue(), content_type='application/pdf')
        response['Content-Disposition'] = f'attachment; filename="invoice_{invoice.invoice_number}.pdf"'
        return response


@login_required
def view_invoice_pdf(request, invoice_id):
    """
    View invoice as PDF in browser (inline instead of download)
    """
    profile = get_profile_or_create(request)
    
    # Get the invoice and verify ownership
    try:
        invoice = Invoice.objects.get(id=invoice_id, profile=profile)
    except Invoice.DoesNotExist:
        raise Http404("Invoice not found")
    
    # Check if user owns this invoice
    if invoice.profile != profile:
        raise PermissionDenied("You don't have permission to view this invoice")
    
    # Generate PDF
    pdf_buffer = generate_invoice_pdf(invoice)
    response = HttpResponse(pdf_buffer.getvalue(), content_type='application/pdf')
    response['Content-Disposition'] = f'inline; filename="invoice_{invoice.invoice_number}.pdf"'
    return response


@login_required
def invoice_detail(request, invoice_id):
    """Display invoice details page (HTML view)"""
    profile = get_profile_or_create(request)
    
    try:
        invoice = Invoice.objects.get(id=invoice_id, profile=profile)
    except Invoice.DoesNotExist:
        raise Http404("Invoice not found")
    
    if invoice.profile != profile:
        raise PermissionDenied("You don't have permission to view this invoice")
    
    context = {
        'invoice': invoice,
        'profile': profile,
        'login_form': LoginForm(),
        'register_form': RegisterForm(),
        'change_password_form': ChangePasswordForm(request.user) if request.user.is_authenticated else None,
        'cart_count': get_cart_count(request)
    }
    return render(request, 'mainApp/invoice_detail.html', context)

@login_required
def get_quiz_questions_api(request):
    """API endpoint to get quiz questions for AJAX"""
    quiz_id = request.GET.get('quiz_id')
    if not quiz_id:
        return JsonResponse({'error': 'Quiz ID required'}, status=400)
    
    try:
        quiz = Quiz.objects.get(id=quiz_id)
        questions = quiz.questions.all().values(
            'id', 'question_text', 'question_type', 'points', 
            'option_a', 'option_b', 'option_c', 'option_d', 'image'
        )
        return JsonResponse({'questions': list(questions)})
    except Quiz.DoesNotExist:
        return JsonResponse({'error': 'Quiz not found'}, status=404)