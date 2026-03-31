from django.core.management.base import BaseCommand
from django.core.management import call_command
from mainApp.models import TeamMember, LiveCourse, Course, Profile, CourseTransaction

class Command(BaseCommand):
    help = 'Seed initial data from fixtures if missing'

    def handle(self, *args, **options):
        self.stdout.write('Checking data counts...')

        # TeamMembers: seed if 0
        if TeamMember.objects.count() == 0:
            self.stdout.write(self.style.SUCCESS('- Loading team members'))
            call_command('loaddata', 'teammembers', verbosity=0)
        else:
            self.stdout.write(self.style.WARNING('- Team members exist, skipping'))

        # LiveCourses: seed if 0
        if LiveCourse.objects.count() == 0:
            self.stdout.write(self.style.SUCCESS('- Loading live courses'))
            call_command('loaddata', 'livecourses', verbosity=0)
        else:
            self.stdout.write(self.style.WARNING('- Live courses exist, skipping'))

        # Courses: seed if < 5 (add some if few)
        if Course.objects.count() < 5:
            self.stdout.write(self.style.SUCCESS('- Loading additional courses'))
            call_command('loaddata', 'courses', verbosity=0)
        else:
            self.stdout.write(self.style.WARNING('- Enough courses exist, skipping'))
        
        # Profiles: seed if < 3
        if Profile.objects.count() < 3:
            self.stdout.write(self.style.SUCCESS('- Loading profiles'))
            call_command('loaddata', 'profiles', verbosity=0)
        else:
            self.stdout.write(self.style.WARNING('- Profiles exist, skipping'))
        
        # CourseTransactions: seed if < 3
        if CourseTransaction.objects.count() < 3:
            self.stdout.write(self.style.SUCCESS('- Loading transactions'))
            call_command('loaddata', 'transactions', verbosity=0)
        else:
            self.stdout.write(self.style.WARNING('- Transactions exist, skipping'))

        self.stdout.write(self.style.SUCCESS('Seeding complete! Run "python manage.py shell" to check counts.'))

