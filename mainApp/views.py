from django.shortcuts import render
from .models import Course

# Create your views here.


def homePage(request):
    if request.method == "GET":
        return render(request, "mainApp/home.html")


def aboutPage(request):
    if request.method == "GET":
        return render(request, "mainApp/about.html")


def eventPage(request):
    if request.method == "GET":
        return render(request, "mainApp/event.html")


def certificationsPage(request):
    if request.method == "GET":
        return render(request, "mainApp/certifications.html")


def classPage(request):
    if request.method == "GET":
        return render(request, "mainApp/classes.html")


def ourCoursesPage(request):
    
    course = Course.objects.filter(is_active=True).order_by('course_number')

    context = {
        "course": course
    }
    
    return render(request, "mainApp/ourCourses.html", context)


def teamPage(request):
    if request.method == "GET":
        return render(request, "mainApp/team.html")


def testimonialPage(request):
    if request.method == "GET":
        return render(request, "mainApp/testimonial.html")


def galleryPage(request):
    if request.method == "GET":
        return render(request, "mainApp/gallery.html")


def contactPage(request):
    if request.method == "GET":
        return render(request, "mainApp/contact.html")


def error404Page(request):
    if request.method == "GET":
        return render(request, "mainApp/404.html")
    

