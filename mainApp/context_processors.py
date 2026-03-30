from django.http.request import HttpRequest
from django.contrib.auth.decorators import login_required
from mainApp.models import CourseTransaction, Profile

def cart_count(request):
    if request.user.is_authenticated:
        try:
            profile = Profile.objects.get(user=request.user)
            count = profile.coursetransactions.filter(status='pending', is_active=True).count()
        except Profile.DoesNotExist:
            count = 0
        return {'cart_count': count}
    return {'cart_count': 0}
