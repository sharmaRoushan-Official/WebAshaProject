from django.db import models
from django.contrib.auth.models import User
from django.core.validators import RegexValidator

# Create your models here.


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


# live Batches 

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
