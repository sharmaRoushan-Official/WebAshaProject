from django.urls import path

from .views import *

urlpatterns = [
    path("", homePage, name="home"),
    path("about/", aboutPage, name="about"),
    path("events/", eventPage, name="events"),
]