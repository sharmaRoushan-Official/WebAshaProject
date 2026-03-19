from django.db import models
from django.contrib.auth.models import User

# Create your models here.


class Course(models.Model):
    title = models.CharField(max_length=200)
    description = models.TextField(max_length=300)
    image = models.ImageField(upload_to='course_images/')
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
    enrolled_courses = models.ManyToManyField(Course, blank=True)
    date_joined_institute = models.DateField(auto_now_add=True)
    is_student = models.BooleanField(default=True)
    is_active = models.BooleanField(default=True)

    user = models.OneToOneField(User, on_delete=models.CASCADE, primary_key=True)
    def __str__(self):
        return f"{self.user.username} ({self.first_name} {self.last_name})"
