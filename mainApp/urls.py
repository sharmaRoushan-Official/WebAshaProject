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
    
    # Forgot Password URLs (Password Reset without login)
    path("forgot-password/request/", forgot_password_request, name="forgot_password_request"),
    path("forgot-password/verify-otp/", forgot_password_verify_otp, name="forgot_password_verify_otp"),
    path("forgot-password/reset/", forgot_password_reset, name="forgot_password_reset"),
    path("check-reset-session/", check_reset_session, name="check_reset_session"),
    
    # Reset Password with OTP (for logged-in users)
    path("send-reset-otp/", send_reset_otp, name="send_reset_otp"),
    path("reset-password-with-otp/", reset_password_with_otp, name="reset_password_with_otp"),
    
    # Profile URLs
    path("profile/", profile_view, name="profile"),
    path("api/update-profile/", update_profile_api, name="update_profile_api"),
    path("change-password/", change_password_view, name="change_password"),
    path("api/change-password/", change_password_api, name="change_password_api"),
    
    # Cart URLs
    path("cart/", cart_view, name="cart_view"),
    path("cart/", cart_view, name="cart"),  # ADD THIS BACK for backward compatibility
    path("cart/purchase/", purchase_cart, name="purchase"),
    
    # Course Management URLs
    path("my-courses/", my_courses, name="my_courses"),
    path("join/<int:live_course_id>/", join_live_batch, name="join_live"),
    path("my-live-courses/", my_live_courses, name="my_live_courses"),
    path("course/<int:course_id>/lecture/<int:lecture_id>/", lecture_detail, name="lectureDetail"),
    
    # AJAX URLs for Cart Operations
    path("ajax/add-to-cart/", add_to_cart, name="add_to_cart"),
    path("ajax/remove-from-cart/<int:transaction_id>/", remove_from_cart, name="remove_from_cart"),
    path("ajax/course-status/<int:course_id>/", ajax_course_status, name="course_status"),
    path("ajax/live-course-status/<int:live_course_id>/", ajax_live_course_status, name="live_course_status"),
    path("ajax/mark-lecture-complete/", mark_lecture_complete, name="mark_lecture_complete"),
    
    # Invoice URLs
    path("my-invoices/", my_invoices, name="my_invoices"),
    path("invoice/<int:invoice_id>/", invoice_detail, name="invoice_detail"),
    path("invoice/<int:invoice_id>/download/", download_invoice_pdf, name="download_invoice_pdf"),
    path("invoice/<int:invoice_id>/view/", view_invoice_pdf, name="view_invoice_pdf"),
    
    # ==================== QUIZ URLs ====================
    # Quiz taking and management
    path("course/<int:course_id>/lecture/<int:lecture_id>/take-quiz/", take_quiz, name="take_quiz"),
    path("submit-quiz-answer/", submit_quiz_answer, name="submit_quiz_answer"),
    path("complete-quiz/", complete_quiz, name="complete_quiz"),
    path("course/<int:course_id>/lecture/<int:lecture_id>/results/", quiz_results, name="quiz_results"),
    path("course/<int:course_id>/lecture/<int:lecture_id>/results/<int:attempt_id>/", quiz_results, name="quiz_results_attempt"),
    # Add this line with other quiz URLs
path("api/quiz-questions/", get_quiz_questions_api, name="get_quiz_questions_api"),
    path("ajax/course-progress/<int:course_id>/", get_course_progress, name="course_progress"),
]
