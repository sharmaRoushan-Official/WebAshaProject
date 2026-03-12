from django.shortcuts import render

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


def trainingPage(request):
    if request.method == "GET":
        return render(request, "mainApp/training.html")


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
