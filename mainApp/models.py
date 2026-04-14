from django.db import models
from django.contrib.auth.models import User
from django.core.validators import RegexValidator
from django.utils import timezone
import random
import string

class Course(models.Model):
    title = models.CharField(max_length=200)
    description = models.TextField(max_length=300)
    image = models.ImageField(upload_to='course_images/')
    price = models.DecimalField(max_digits=10, decimal_places=2, default=0.00)
    course_number = models.IntegerField(unique=True)
    is_active = models.BooleanField(default=True)
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.title

    @property
    def details(self):
        return self.coursedetails if hasattr(self, 'coursedetails') else None


class CourseDetails(models.Model):
    course = models.OneToOneField(Course, on_delete=models.CASCADE, related_name='details')
    instructor = models.ForeignKey('TeamMember', on_delete=models.SET_NULL, null=True, blank=True, related_name='taught_courses')
    duration = models.CharField(max_length=50, default="40 hours")
    level = models.CharField(
        max_length=20,
        choices=[('beginner', 'Beginner'), ('intermediate', 'Intermediate'), ('advanced', 'Advanced')],
        default='beginner'
    )
    prerequisites = models.TextField(blank=True, default='')
    objectives = models.TextField(blank=True, default='')
    syllabus = models.TextField(blank=True, default='')
    thumbnail = models.ImageField(upload_to='course_details_thumbs/', blank=True, null=True)
    total_lessons = models.PositiveIntegerField(default=0)

    def __str__(self):
        return f"Details for {self.course.title}"

class Profile(models.Model):
    first_name = models.CharField(max_length=50, blank=True)
    last_name = models.CharField(max_length=50, blank=True)
    email = models.EmailField(blank=True)
    profile_image = models.ImageField(upload_to='profile_images/', blank=True, null=True)
    phone = models.CharField(max_length=15, blank=True)
    address = models.TextField(blank=True)
    bio = models.TextField(blank=True, null=True)
    date_joined_institute = models.DateField(auto_now_add=True)
    is_student = models.BooleanField(default=True)
    is_active = models.BooleanField(default=True)
    password = models.CharField(
        max_length=128,
        blank=True,
        validators=[
            RegexValidator(
                regex=r'^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$',
                message="Password must contain uppercase, lowercase, number, special char, min 6 chars."
            )
        ],
        help_text="At least 6 chars: 1 uppercase, 1 lowercase, 1 number, 1 special (@$!%*?&)."
    )

    user = models.OneToOneField(User, on_delete=models.CASCADE, primary_key=True)

    @property
    def purchased_courses(self):
        return [t.course for t in self.coursetransactions.filter(status='completed').all()]

    def __str__(self):
        return f"{self.user.username} ({self.first_name} {self.last_name})"

class PasswordResetOTP(models.Model):
    """
    Model to store OTP for password reset/forgot password functionality
    """
    user = models.ForeignKey(User, on_delete=models.CASCADE, related_name='password_reset_otps')
    otp = models.CharField(max_length=6)  # 6 digit OTP: 2 letters + 4 numbers
    is_used = models.BooleanField(default=False)
    created_at = models.DateTimeField(auto_now_add=True)
    expires_at = models.DateTimeField()
    
    class Meta:
        ordering = ['-created_at']
        verbose_name = 'Password Reset OTP'
        verbose_name_plural = 'Password Reset OTPs'
    
    def __str__(self):
        return f"OTP for {self.user.email} - {self.otp} (Expires: {self.expires_at})"
    
    def is_valid(self):
        """Check if OTP is not used and not expired"""
        return not self.is_used and self.expires_at > timezone.now()
    
    @staticmethod
    def generate_otp():
        """
        Generate 6-digit OTP: 2 random letters (uppercase) + 4 random numbers
        Example: AB1234, XY9876
        """
        letters = ''.join(random.choices(string.ascii_uppercase, k=2))
        numbers = ''.join(random.choices(string.digits, k=4))
        return f"{letters}{numbers}"
    
    @staticmethod
    def create_otp_for_user(user, expiry_minutes=10):
        """
        Create and save a new OTP for the user
        Returns: (otp_object, otp_code)
        """
        # Invalidate any existing unused OTPs for this user
        PasswordResetOTP.objects.filter(user=user, is_used=False).update(is_used=True)
        
        otp_code = PasswordResetOTP.generate_otp()
        expires_at = timezone.now() + timezone.timedelta(minutes=expiry_minutes)
        
        otp_obj = PasswordResetOTP.objects.create(
            user=user,
            otp=otp_code,
            expires_at=expires_at,
            is_used=False
        )
        return otp_obj, otp_code
    
class CourseTransaction(models.Model):
    STATUS_CHOICES = [
        ('pending', 'Pending'),
        ('completed', 'Completed'),
        ('failed', 'Failed'),
        ('refunded', 'Refunded'),
    ]
    PAYMENT_METHODS = [
        ('stripe', 'Stripe'),
        ('paypal', 'PayPal'),
        ('razorpay', 'Razorpay'),
        ('card', 'Credit/Debit Card'),
    ]

    user = models.ForeignKey(Profile, on_delete=models.CASCADE, related_name='coursetransactions')
    course = models.ForeignKey(Course, on_delete=models.CASCADE)
    transaction_id = models.CharField(max_length=100, unique=True)
    amount = models.DecimalField(max_digits=10, decimal_places=2)
    status = models.CharField(max_length=20, choices=STATUS_CHOICES, default='pending')
    purchase_date = models.DateTimeField(auto_now_add=True)
    expiry_date = models.DateField(null=True, blank=True)
    payment_method = models.CharField(max_length=20, choices=PAYMENT_METHODS, blank=True)
    receipt = models.FileField(upload_to='transactions/receipts/', blank=True, null=True)
    is_active = models.BooleanField(default=True)
    course_type = models.IntegerField(default=0, choices=[(0, 'Normal'), (1, 'Live')])

    def __str__(self):
        return f"{self.user.user.username} bought {self.course.title} - {self.status} (₹{self.amount})"

    class Meta:
        ordering = ['-purchase_date']

# OurTeam 
class TeamMember(models.Model):
    name = models.CharField(max_length=100)
    designation = models.CharField(max_length=100)
    image = models.ImageField(upload_to='team/')
    bio = models.TextField(blank=True, null=True)
    order = models.PositiveIntegerField(default=0)

    facebook = models.URLField(blank=True, null=True)
    twitter = models.URLField(blank=True, null=True)
    instagram = models.URLField(blank=True, null=True)
    linkedin = models.URLField(blank=True, null=True)

    is_active = models.BooleanField(default=True)
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.name

    class Meta:
        ordering = ['order']

# Live Batches 
class LiveCourse(models.Model):
    CATEGORY_CHOICES = [
        ('web_dev', 'Web Development'),
        ('dev_ops', 'DevOps'),
        ('ai_ml', 'AI/ML'),
        ('cybersecurity', 'Cybersecurity'),
        ('cloud', 'Cloud Computing'),
        ('linux', 'Linux'),
    ]
    title = models.CharField(max_length=200)
    description = models.TextField()
    category = models.CharField(max_length=20, choices=CATEGORY_CHOICES, default='web_dev')
    image = models.ImageField(upload_to='courses/')
    price = models.DecimalField(max_digits=10, decimal_places=2, default=0.00)
    
    is_live = models.BooleanField(default=False)   # for LIVE badge
    start_day = models.CharField(max_length=50)    # e.g. Monday
    start_time = models.CharField(max_length=50)   # e.g. 7 PM
    
    button_text = models.CharField(max_length=50, default="Join Batch")
    button_link = models.URLField(blank=True, null=True)

    is_active = models.BooleanField(default=True)
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.title

class Contact(models.Model):
    name = models.CharField(max_length=100)
    email = models.EmailField()
    subject = models.CharField(max_length=200)
    message = models.TextField()
    created_at = models.DateTimeField(auto_now_add=True)
    is_read = models.BooleanField(default=False)

    def __str__(self):
        return f"{self.name} - {self.subject}"

    class Meta:
        ordering = ['-created_at']

class LiveCourseRegistration(models.Model):
    profile = models.ForeignKey('Profile', on_delete=models.CASCADE, related_name='live_registrations')
    live_course = models.ForeignKey('LiveCourse', on_delete=models.CASCADE, related_name='registrations')
    batch_timing = models.CharField(
        max_length=10, 
        choices=[('weekdays', 'Weekdays'), ('weekends', 'Weekends')],
        default='weekdays'
    )
    registered_at = models.DateTimeField(auto_now_add=True)
    status = models.CharField(max_length=20, default='pending', choices=[
        ('pending', 'Pending'),
        ('enrolled', 'Enrolled'),
        ('cancelled', 'Cancelled'),
    ])

    def __str__(self):
        return f"{self.profile} - {self.live_course.title}"

    class Meta:
        unique_together = ['profile', 'live_course']

class LiveCourseTransaction(models.Model):
    STATUS_CHOICES = [
        ('pending', 'Pending'),
        ('completed', 'Completed'),
        ('failed', 'Failed'),
        ('refunded', 'Refunded'),
    ]
    PAYMENT_METHODS = [
        ('stripe', 'Stripe'),
        ('paypal', 'PayPal'),
        ('razorpay', 'Razorpay'),
        ('card', 'Credit/Debit Card'),
    ]

    profile = models.ForeignKey('Profile', on_delete=models.CASCADE, related_name='live_transactions')
    live_course = models.ForeignKey('LiveCourse', on_delete=models.CASCADE)
    transaction_id = models.CharField(max_length=100, unique=True)
    base_amount = models.DecimalField(max_digits=10, decimal_places=2)
    gst_amount = models.DecimalField(max_digits=10, decimal_places=2)
    total_amount = models.DecimalField(max_digits=10, decimal_places=2)
    status = models.CharField(max_length=20, choices=STATUS_CHOICES, default='pending')
    purchase_date = models.DateTimeField(auto_now_add=True)
    expiry_date = models.DateField(null=True, blank=True)
    payment_method = models.CharField(max_length=20, choices=PAYMENT_METHODS, blank=True)
    receipt = models.FileField(upload_to='live_transactions/receipts/', blank=True, null=True)
    is_active = models.BooleanField(default=True)

    def __str__(self):
        return f"{self.profile.user.username} - {self.live_course.title} - ₹{self.total_amount} ({self.status})"

    class Meta:
        ordering = ['-purchase_date']