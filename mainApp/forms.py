from django import forms
from django.contrib.auth.forms import PasswordChangeForm
from django.core.validators import RegexValidator
from django.core.exceptions import ValidationError
from django.contrib.auth.models import User
from django.utils import timezone
from .models import Profile, Contact


class LoginForm(forms.Form):
    email = forms.EmailField(label='Email', max_length=254, widget=forms.EmailInput(attrs={'class': 'form-control', 'placeholder': 'Enter your email'}))
    password = forms.CharField(label='Password', widget=forms.PasswordInput(attrs={'class': 'form-control', 'placeholder': 'Enter your password'}))


class RegisterForm(forms.ModelForm):
    password_confirm = forms.CharField(label='Confirm Password', widget=forms.PasswordInput(attrs={'class': 'form-control', 'placeholder': 'Confirm password'}))
    
    class Meta:
        model = Profile
        fields = ['first_name', 'last_name', 'email', 'phone', 'address', 'password']
        widgets = {
            'first_name': forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'First Name'}),
            'last_name': forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'Last Name'}),
            'email': forms.EmailInput(attrs={'class': 'form-control', 'placeholder': 'Email'}),
            'phone': forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'Phone'}),
            'address': forms.Textarea(attrs={'class': 'form-control', 'placeholder': 'Address', 'rows': 3}),
            'password': forms.PasswordInput(attrs={'class': 'form-control', 'placeholder': 'Password (min 6 chars: upper, lower, number, special @$!%*?& )'}),
        }

    def clean_password(self):
        password = self.cleaned_data.get('password')
        if password:
            validator = RegexValidator(
                regex=r'^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$',
                message="Password must contain uppercase, lowercase, number, special char (@$!%*?&), min 6 chars."
            )
            validator(password)
        return password

    def clean(self):
        cleaned_data = super().clean()
        password = cleaned_data.get('password')
        password_confirm = cleaned_data.get('password_confirm')
        if password and password_confirm and password != password_confirm:
            raise ValidationError("Passwords do not match.")
        return cleaned_data


class ChangePasswordForm(PasswordChangeForm):
    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.fields['old_password'].widget.attrs.update({'class': 'form-control', 'placeholder': 'Current Password'})
        self.fields['new_password1'].widget.attrs.update({'class': 'form-control', 'placeholder': 'New Password'})
        self.fields['new_password2'].widget.attrs.update({'class': 'form-control', 'placeholder': 'Confirm New Password'})


class ContactForm(forms.ModelForm):
    class Meta:
        model = Contact
        fields = ['name', 'email', 'subject', 'message']
        widgets = {
            'name': forms.TextInput(attrs={
                'class': 'form-control bg-transparent border-primary', 
                'placeholder': 'Your Name',
                'style': 'padding: 15px;'
            }),
            'email': forms.EmailInput(attrs={
                'class': 'form-control bg-transparent border-primary', 
                'placeholder': 'Your Email', 
                'style': 'padding: 15px;'
            }),
            'subject': forms.TextInput(attrs={
                'class': 'form-control bg-transparent border-primary', 
                'placeholder': 'Subject',
                'style': 'padding: 15px;'
            }),
            'message': forms.Textarea(attrs={
                'class': 'form-control bg-transparent border-primary',
                'rows': 5, 
                'placeholder': 'Your Message',
                'style': 'padding: 15px;'
            }),
        }


class ProfileUpdateForm(forms.ModelForm):
    class Meta:
        model = Profile
        fields = ['first_name', 'last_name', 'email', 'phone', 'address', 'bio']
        widgets = {
            'first_name': forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'First Name'}),
            'last_name': forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'Last Name'}),
            'email': forms.EmailInput(attrs={'class': 'form-control', 'placeholder': 'Email'}),
            'phone': forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'Phone'}),
            'address': forms.Textarea(attrs={'class': 'form-control', 'placeholder': 'Address', 'rows': 3}),
            'bio': forms.Textarea(attrs={'class': 'form-control', 'placeholder': 'Tell us about yourself', 'rows': 4}),
        }

    def clean_email(self):
        email = self.cleaned_data.get('email')
        if email:
            # Check if another user already has this email
            if User.objects.filter(email=email).exclude(
                id=self.instance.user.id if self.instance and self.instance.user else None
            ).exists():
                raise ValidationError("This email is already in use by another account.")
        return email


class LiveRegistrationForm(forms.Form):
    first_name = forms.CharField(
        max_length=50,
        widget=forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'First Name *'})
    )
    last_name = forms.CharField(
        max_length=50, 
        widget=forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'Last Name *'})
    )
    phone = forms.CharField(
        max_length=15,
        widget=forms.TextInput(attrs={'class': 'form-control', 'placeholder': 'Phone *'})
    )
    address = forms.CharField(
        widget=forms.Textarea(attrs={'class': 'form-control', 'placeholder': 'Address', 'rows': 3})
    )
    batch_timing = forms.ChoiceField(
        choices=[('weekdays', 'Weekdays (Mon-Fri)'), ('weekends', 'Weekends (Sat-Sun)')],
        widget=forms.RadioSelect(attrs={'class': 'form-check-input'}),
        label="Preferred Batch Timing"
    )

    def __init__(self, *args, **kwargs):
        self.profile = kwargs.pop('profile', None)
        super().__init__(*args, **kwargs)
        if self.profile:
            self.fields['first_name'].initial = self.profile.first_name
            self.fields['last_name'].initial = self.profile.last_name
            self.fields['phone'].initial = self.profile.phone
            self.fields['address'].initial = self.profile.address


# ==================== FORGOT / RESET PASSWORD FORMS ====================

class ForgotPasswordRequestForm(forms.Form):
    """Form to request OTP for forgot password"""
    email = forms.EmailField(
        label='Email Address',
        widget=forms.EmailInput(attrs={
            'class': 'form-control',
            'placeholder': 'Enter your registered email',
            'autocomplete': 'email'
        })
    )
    
    def clean_email(self):
        email = self.cleaned_data.get('email')
        if not User.objects.filter(email=email).exists():
            raise ValidationError("No account found with this email address.")
        return email


class ForgotPasswordVerifyOTPForm(forms.Form):
    """Form to verify OTP for forgot password"""
    email = forms.EmailField(widget=forms.HiddenInput())
    otp = forms.CharField(
        label='Enter OTP',
        max_length=6,
        widget=forms.TextInput(attrs={
            'class': 'form-control text-center',
            'placeholder': 'e.g., AB1234',
            'style': 'font-size: 20px; letter-spacing: 4px;',
            'autocomplete': 'off'
        })
    )
    
    def clean_otp(self):
        otp = self.cleaned_data.get('otp', '').strip().upper()
        if len(otp) != 6:
            raise ValidationError("OTP must be exactly 6 characters.")
        # Validate format: 2 letters + 4 numbers
        if not (otp[:2].isalpha() and otp[2:].isdigit()):
            raise ValidationError("Invalid OTP format. Must be 2 letters followed by 4 numbers (e.g., AB1234).")
        return otp


class ForgotPasswordResetForm(forms.Form):
    """Form to set new password after OTP verification"""
    email = forms.EmailField(widget=forms.HiddenInput())
    otp = forms.CharField(widget=forms.HiddenInput())
    new_password = forms.CharField(
        label='New Password',
        widget=forms.PasswordInput(attrs={
            'class': 'form-control',
            'placeholder': 'Enter new password'
        })
    )
    confirm_password = forms.CharField(
        label='Confirm Password',
        widget=forms.PasswordInput(attrs={
            'class': 'form-control',
            'placeholder': 'Confirm new password'
        })
    )
    
    def clean_new_password(self):
        password = self.cleaned_data.get('new_password')
        if password:
            validator = RegexValidator(
                regex=r'^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$',
                message="Password must contain uppercase, lowercase, number, special char (@$!%*?&), min 6 chars."
            )
            validator(password)
        return password
    
    def clean(self):
        cleaned_data = super().clean()
        new_password = cleaned_data.get('new_password')
        confirm_password = cleaned_data.get('confirm_password')
        
        if new_password and confirm_password and new_password != confirm_password:
            raise ValidationError("Passwords do not match.")
        return cleaned_data


class ResetPasswordForm(forms.Form):
    """Form for logged-in user to reset/change password (with OTP)"""
    current_password = forms.CharField(
        label='Current Password',
        widget=forms.PasswordInput(attrs={
            'class': 'form-control',
            'placeholder': 'Enter current password'
        })
    )
    otp = forms.CharField(
        label='OTP',
        max_length=6,
        widget=forms.TextInput(attrs={
            'class': 'form-control text-center',
            'placeholder': 'Enter OTP sent to your email',
            'style': 'letter-spacing: 2px;'
        })
    )
    new_password = forms.CharField(
        label='New Password',
        widget=forms.PasswordInput(attrs={
            'class': 'form-control',
            'placeholder': 'Enter new password'
        })
    )
    confirm_password = forms.CharField(
        label='Confirm Password',
        widget=forms.PasswordInput(attrs={
            'class': 'form-control',
            'placeholder': 'Confirm new password'
        })
    )
    
    def __init__(self, user, *args, **kwargs):
        self.user = user
        super().__init__(*args, **kwargs)
    
    def clean_current_password(self):
        current_password = self.cleaned_data.get('current_password')
        if not self.user.check_password(current_password):
            raise ValidationError("Current password is incorrect.")
        return current_password
    
    def clean_new_password(self):
        password = self.cleaned_data.get('new_password')
        if password:
            validator = RegexValidator(
                regex=r'^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$',
                message="Password must contain uppercase, lowercase, number, special char (@$!%*?&), min 6 chars."
            )
            validator(password)
        return password
    
    def clean_otp(self):
        otp = self.cleaned_data.get('otp', '').strip().upper()
        if otp:
            if len(otp) != 6:
                raise ValidationError("OTP must be exactly 6 characters.")
            if not (otp[:2].isalpha() and otp[2:].isdigit()):
                raise ValidationError("Invalid OTP format.")
        return otp
    
    def clean(self):
        cleaned_data = super().clean()
        new_password = cleaned_data.get('new_password')
        confirm_password = cleaned_data.get('confirm_password')
        otp = cleaned_data.get('otp')
        
        if new_password and confirm_password and new_password != confirm_password:
            raise ValidationError("Passwords do not match.")
        
        # Verify OTP
        if otp and self.user:
            from .models import PasswordResetOTP
            try:
                otp_record = PasswordResetOTP.objects.filter(
                    user=self.user,
                    otp=otp.upper(),
                    is_used=False,
                    expires_at__gt=timezone.now()
                ).latest('created_at')
            except PasswordResetOTP.DoesNotExist:
                raise ValidationError("Invalid or expired OTP. Please request a new OTP.")
        
        return cleaned_data