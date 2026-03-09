from django.urls import path

from .views import *

urlpatterns = [
    path("", homePage, name="home"),
    path("about/", aboutPage, name="about"),
    path("events/", eventPage, name="events"),
    path("blogs/", blogPage, name="blogs"),
    path("classes/", classPage, name="classes"),
    path("training/", trainingPage, name="training"),
    path("team/", teamPage, name="team"),
    path("testimonial/", testimonialPage, name="testimonial"),
    path("gallery/", galleryPage, name="gallery"),
    path("contact/", contactPage, name="contact"),
    path("404/", error404Page, name="404"),
]
