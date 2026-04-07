from django.urls import path
from django.shortcuts import render
from .views import *

urlpatterns = [
    # Main Pages
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
    
    # Authentication URLs
    path("register/", register_view, name="register"),
    path("login/", login_view, name="login"),
    path("logout/", logout_view, name="logout"),
    path("registration-success/", lambda request: render(request, 'mainApp/registration_success.html'), name="registration_success"),
    path("login-success/", lambda request: render(request, 'mainApp/login_success.html'), name="login_success"),
    
    # Profile URLs
    path("profile/", profile_view, name="profile"),
    path("change-password/", change_password_view, name="change_password"),  # ✅ ADDED - Regular form submission
    path("api/change-password/", change_password_api, name="change_password_api"),  # API endpoint
    
    # Cart URLs
    path("cart/", cart_view, name="cart_view"),
    path("cart/", cart_view, name="cart"),  # Alias for backward compatibility
    path("cart/purchase/", purchase_cart, name="purchase"),
    
    # Course Management URLs
    path("my-courses/", my_courses, name="my_courses"),
    path("join/<int:live_course_id>/", join_live_batch, name="join_live"),
    path("my-live-courses/", my_live_courses, name="my_live_courses"),
    
    # AJAX URLs for Cart Operations
    path("ajax/add-to-cart/", add_to_cart, name="add_to_cart"),
    path("ajax/remove-from-cart/<int:transaction_id>/", remove_from_cart, name="remove_from_cart"),  # ✅ Fixed - uses transaction_id
    path("ajax/course-status/<int:course_id>/", ajax_course_status, name="course_status"),
]