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