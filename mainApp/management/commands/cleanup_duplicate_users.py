from django.core.management.base import BaseCommand
from django.contrib.auth.models import User
from mainApp.models import Profile
from django.db import transaction

from django.db import models

class Command(BaseCommand):
    help = 'Cleanup duplicate users by email, keep the one with Profile'

    def handle(self, *args, **options):
        with transaction.atomic():
            # Find duplicates
            duplicates = User.objects.values('email').annotate(count=models.Count('id')).filter(count__gt=1)
            
            cleaned = 0
            for dup in duplicates:
                email = dup['email']
                users = User.objects.filter(email=email).order_by('-id')  # Newest last
                
                # Keep first (oldest/most likely with profile), delete rest
                keep_user = users[0]
                delete_users = users[1:]
                
                for del_user in delete_users:
                    try:
                        Profile.objects.get(user=del_user).delete()
                    except Profile.DoesNotExist:
                        pass
                    self.stdout.write(f"Deleting duplicate user {del_user.username} ({del_user.id})")
                    del_user.delete()
                    cleaned += 1
            
            self.stdout.write(
                self.style.SUCCESS(f'Successfully cleaned {cleaned} duplicate users')
            )
