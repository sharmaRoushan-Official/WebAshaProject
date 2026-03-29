from django.urls import path
from django.shortcuts import render
from .views import *

urlpatterns = [
    path("", homePage, name="home"),
    path("about/", aboutPage, name="about"),  
    path("events/", eventPage, name="events"),
    path("certifications/", certificationsPage, name="certifications"),
    path("classes/", classPage, name="classes"),
    path("ourCourses/", ourCoursesPage, name="ourCourses"),
    path("course/<int:course_id>/", course_detail, name="courseDetail"),
    path("team/", teamPage, name="team"),
    path("testimonial/", testimonialPage, name="testimonial"),
    path("gallery/", galleryPage, name="gallery"),
    path("contact/", contactPage, name="contact"),
    path("404/", error404Page, name="404"),

    path("register/", register_view, name="register"),
    path("login/", login_view, name="login"),
    path("registration-success/", lambda request: render(request, 'mainApp/registration_success.html'), name="registration_success"),
    path("login-success/", lambda request: render(request, 'mainApp/login_success.html'), name="login_success"),
    path("profile/", profile_view, name="profile"),
    
    # Change Password API (for modal)
    path("api/change-password/", change_password_api, name="change_password_api"),
    
    path("logout/", logout_view, name="logout"),
]