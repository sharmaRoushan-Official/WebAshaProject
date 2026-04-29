"""
Django management command to create dummy course data
Run with: python manage.py create_dummy_courses
"""

from django.core.management.base import BaseCommand
from django.core.files.base import ContentFile
from django.contrib.auth.models import User
from mainApp.models import (
    Course, CourseDetails, Profile, Chapter, Lecture, 
    TeamMember, LiveCourse
)
from decimal import Decimal
import random
from datetime import datetime


class Command(BaseCommand):
    help = 'Creates dummy course data with chapters and lectures'

    def handle(self, *args, **kwargs):
        self.stdout.write(self.style.SUCCESS('Starting to create dummy course data...'))
        
        # Create demo user if not exists
        demo_user, created = User.objects.get_or_create(
            username='demo@webasha.com',
            defaults={
                'email': 'demo@webasha.com',
                'first_name': 'Demo',
                'last_name': 'User'
            }
        )
        if created:
            demo_user.set_password('Demo@123')
            demo_user.save()
            Profile.objects.create(
                user=demo_user,
                first_name='Demo',
                last_name='User',
                email='demo@webasha.com',
                phone='9876543210',
                address='Demo Address, Pune, India'
            )
            self.stdout.write(self.style.SUCCESS('Demo user created: demo@webasha.com / Demo@123'))
        
        # ========== COURSE 1: Python Programming ==========
        course1, created = Course.objects.get_or_create(
            course_number=101,
            defaults={
                'title': 'Python Programming Masterclass',
                'description': 'Learn Python from scratch to advanced concepts with hands-on projects',
                'image': 'course_images/python.jpg',  # You'll update image later
                'price': Decimal('14999.00'),
                'is_active': True
            }
        )
        
        CourseDetails.objects.get_or_create(
            course=course1,
            defaults={
                'duration': '40 hours',
                'level': 'beginner',
                'prerequisites': 'Basic computer knowledge',
                'objectives': 'Master Python programming, build real-world applications',
                'syllabus': 'Python basics, OOP, Data structures, File handling, Database connectivity',
                'total_lessons': 25
            }
        )
        
        # Chapters for Python Course
        chapters_python = [
            {'title': 'Getting Started with Python', 'order': 1, 'description': 'Introduction to Python and setup'},
            {'title': 'Python Basics', 'order': 2, 'description': 'Variables, data types, and operators'},
            {'title': 'Control Flow', 'order': 3, 'description': 'Conditional statements and loops'},
            {'title': 'Functions and Modules', 'order': 4, 'description': 'Creating reusable code'},
            {'title': 'Object Oriented Programming', 'order': 5, 'description': 'Classes and objects'},
        ]
        
        lectures_python = {
            'Getting Started with Python': [
                {'title': 'What is Python?', 'duration': 15, 'video_url': 'https://youtu.be/kqtD5dpn9C8', 'is_free': True},
                {'title': 'Installing Python and IDE Setup', 'duration': 20, 'video_url': 'https://youtu.be/YYXdXT2l-Gg'},
                {'title': 'First Python Program', 'duration': 10, 'video_url': 'https://youtu.be/vLqTf2b6GZw'},
                {'title': 'Python Syntax Basics', 'duration': 18, 'video_url': 'https://youtu.be/8KCuHHeC_M0'},
            ],
            'Python Basics': [
                {'title': 'Variables and Data Types', 'duration': 22, 'video_url': 'https://youtu.be/RZ4Sn-Y7AP8'},
                {'title': 'Strings and String Methods', 'duration': 25, 'video_url': 'https://youtu.be/k9TUPpGqYTo'},
                {'title': 'Numbers and Math Operations', 'duration': 20, 'video_url': 'https://youtu.be/khKv-8q7YmY'},
                {'title': 'Lists and Tuples', 'duration': 28, 'video_url': 'https://youtu.be/W8KRzm-HUcc'},
            ],
            'Control Flow': [
                {'title': 'If-Else Statements', 'duration': 20, 'video_url': 'https://youtu.be/IsMmA0N1WjA'},
                {'title': 'For Loops', 'duration': 22, 'video_url': 'https://youtu.be/94UHCEmprCY'},
                {'title': 'While Loops', 'duration': 18, 'video_url': 'https://youtu.be/J8dkgM8Mck0'},
                {'title': 'Break and Continue', 'duration': 15, 'video_url': 'https://youtu.be/qSqQe8lPBOI'},
            ],
            'Functions and Modules': [
                {'title': 'Defining Functions', 'duration': 20, 'video_url': 'https://youtu.be/9Os0o3wzS_w'},
                {'title': 'Parameters and Return Values', 'duration': 22, 'video_url': 'https://youtu.be/gfDE2a7MKjA'},
                {'title': 'Lambda Functions', 'duration': 15, 'video_url': 'https://youtu.be/25ovCm9jKfA'},
            ],
            'Object Oriented Programming': [
                {'title': 'Classes and Objects', 'duration': 25, 'video_url': 'https://youtu.be/Ei1yN8K5QoI'},
                {'title': 'Inheritance', 'duration': 22, 'video_url': 'https://youtu.be/CnZt4c5B7Ck'},
                {'title': 'Polymorphism', 'duration': 18, 'video_url': 'https://youtu.be/tTDVF5B-SNc'},
            ],
        }
        
        self.create_course_content(course1, chapters_python, lectures_python)
        
        # ========== COURSE 2: Django Web Development ==========
        course2, created = Course.objects.get_or_create(
            course_number=102,
            defaults={
                'title': 'Django 5 Web Development Bootcamp',
                'description': 'Build professional web applications with Django framework',
                'image': 'course_images/django.jpg',
                'price': Decimal('19999.00'),
                'is_active': True
            }
        )
        
        CourseDetails.objects.get_or_create(
            course=course2,
            defaults={
                'duration': '50 hours',
                'level': 'intermediate',
                'prerequisites': 'Python basics knowledge',
                'objectives': 'Build full-stack web applications, REST APIs, deploy to production',
                'syllabus': 'Django setup, Models, Views, Templates, Forms, Authentication, REST Framework',
                'total_lessons': 30
            }
        )
        
        chapters_django = [
            {'title': 'Django Fundamentals', 'order': 1, 'description': 'Setup and basic concepts'},
            {'title': 'Models and Databases', 'order': 2, 'description': 'Working with databases'},
            {'title': 'Views and URL Routing', 'order': 3, 'description': 'Handling requests'},
            {'title': 'Templates', 'order': 4, 'description': 'Creating dynamic HTML'},
            {'title': 'Django REST Framework', 'order': 5, 'description': 'Building APIs'},
        ]
        
        lectures_django = {
            'Django Fundamentals': [
                {'title': 'What is Django?', 'duration': 15, 'video_url': 'https://youtu.be/F5mRW0jo-U4', 'is_free': True},
                {'title': 'Installing Django and Creating Project', 'duration': 20, 'video_url': 'https://youtu.be/rHux0gMZ3Eg'},
                {'title': 'Django Project Structure', 'duration': 18, 'video_url': 'https://youtu.be/YnSqPqXj2y0'},
            ],
            'Models and Databases': [
                {'title': 'Creating Models', 'duration': 25, 'video_url': 'https://youtu.be/kDZGhILVhsE'},
                {'title': 'Django ORM Basics', 'duration': 22, 'video_url': 'https://youtu.be/zB2WfkQOcWY'},
                {'title': 'Migrations', 'duration': 20, 'video_url': 'https://youtu.be/QgKqMKs_0Ws'},
            ],
            'Views and URL Routing': [
                {'title': 'Function Based Views', 'duration': 20, 'video_url': 'https://youtu.be/eBscFj-yVZg'},
                {'title': 'Class Based Views', 'duration': 25, 'video_url': 'https://youtu.be/6BqYVl-B3vE'},
                {'title': 'URL Patterns and Routing', 'duration': 18, 'video_url': 'https://youtu.be/wUuM2kfCgLQ'},
            ],
            'Templates': [
                {'title': 'Django Template Language', 'duration': 22, 'video_url': 'https://youtu.be/tdBz_mc-xQM'},
                {'title': 'Template Inheritance', 'duration': 20, 'video_url': 'https://youtu.be/hZqUoLj_mDE'},
                {'title': 'Static Files', 'duration': 18, 'video_url': 'https://youtu.be/H4QaCqxY7Os'},
            ],
            'Django REST Framework': [
                {'title': 'DRF Setup and Serializers', 'duration': 25, 'video_url': 'https://youtu.be/c4U6H5qwvgQ'},
                {'title': 'API Views', 'duration': 22, 'video_url': 'https://youtu.be/FUjJgiXUqfI'},
                {'title': 'Authentication in DRF', 'duration': 20, 'video_url': 'https://youtu.be/kO5lA3HilIE'},
            ],
        }
        
        self.create_course_content(course2, chapters_django, lectures_django)
        
        # ========== COURSE 3: Data Science with Python ==========
        course3, created = Course.objects.get_or_create(
            course_number=103,
            defaults={
                'title': 'Data Science with Python',
                'description': 'Master data analysis, visualization and machine learning',
                'image': 'course_images/datascience.jpg',
                'price': Decimal('24999.00'),
                'is_active': True
            }
        )
        
        CourseDetails.objects.get_or_create(
            course=course3,
            defaults={
                'duration': '60 hours',
                'level': 'advanced',
                'prerequisites': 'Python programming knowledge',
                'objectives': 'Data analysis, visualization, ML models, real-world projects',
                'syllabus': 'NumPy, Pandas, Matplotlib, Scikit-learn, Machine Learning algorithms',
                'total_lessons': 35
            }
        )
        
        chapters_ds = [
            {'title': 'NumPy Essentials', 'order': 1, 'description': 'Numerical computing with NumPy'},
            {'title': 'Pandas for Data Analysis', 'order': 2, 'description': 'Data manipulation with Pandas'},
            {'title': 'Data Visualization', 'order': 3, 'description': 'Creating charts and graphs'},
            {'title': 'Machine Learning Basics', 'order': 4, 'description': 'Introduction to ML algorithms'},
        ]
        
        lectures_ds = {
            'NumPy Essentials': [
                {'title': 'Introduction to NumPy', 'duration': 20, 'video_url': 'https://youtu.be/9JUAPgtkKpI', 'is_free': True},
                {'title': 'NumPy Arrays', 'duration': 25, 'video_url': 'https://youtu.be/QUT1VHiLmmI'},
                {'title': 'Array Operations', 'duration': 22, 'video_url': 'https://youtu.be/lGv_KA5D8pE'},
            ],
            'Pandas for Data Analysis': [
                {'title': 'Pandas Series and DataFrame', 'duration': 25, 'video_url': 'https://youtu.be/CmorAWRsCAw'},
                {'title': 'Data Cleaning', 'duration': 30, 'video_url': 'https://youtu.be/ZYGICcMq4Uo'},
                {'title': 'GroupBy Operations', 'duration': 22, 'video_url': 'https://youtu.be/58yPj6fa-IE'},
            ],
            'Data Visualization': [
                {'title': 'Matplotlib Basics', 'duration': 20, 'video_url': 'https://youtu.be/3Xc3CAQPsfM'},
                {'title': 'Seaborn for Statistical Plots', 'duration': 25, 'video_url': 'https://youtu.be/6iQnTvKYZPc'},
            ],
            'Machine Learning Basics': [
                {'title': 'Linear Regression', 'duration': 28, 'video_url': 'https://youtu.be/7ArmBVF2dCs'},
                {'title': 'Classification Algorithms', 'duration': 30, 'video_url': 'https://youtu.be/1faZ1IKZ75c'},
            ],
        }
        
        self.create_course_content(course3, chapters_ds, lectures_ds)
        
        # ========== COURSE 4: Full Stack Web Development ==========
        course4, created = Course.objects.get_or_create(
            course_number=104,
            defaults={
                'title': 'Full Stack Web Development Bootcamp',
                'description': 'Master HTML, CSS, JavaScript, React, Node.js and MongoDB',
                'image': 'course_images/fullstack.jpg',
                'price': Decimal('29999.00'),
                'is_active': True
            }
        )
        
        CourseDetails.objects.get_or_create(
            course=course4,
            defaults={
                'duration': '80 hours',
                'level': 'beginner',
                'prerequisites': 'No prior coding experience needed',
                'objectives': 'Build complete web applications from scratch',
                'syllabus': 'HTML, CSS, JavaScript, React, Node.js, Express, MongoDB',
                'total_lessons': 45
            }
        )
        
        chapters_fs = [
            {'title': 'Frontend Fundamentals', 'order': 1, 'description': 'HTML, CSS, JavaScript basics'},
            {'title': 'React JS', 'order': 2, 'description': 'Modern frontend framework'},
            {'title': 'Backend with Node.js', 'order': 3, 'description': 'Server-side JavaScript'},
            {'title': 'Database with MongoDB', 'order': 4, 'description': 'NoSQL database'},
        ]
        
        lectures_fs = {
            'Frontend Fundamentals': [
                {'title': 'HTML5 Semantic Elements', 'duration': 25, 'video_url': 'https://youtu.be/qz0aGYrrlhU', 'is_free': True},
                {'title': 'CSS3 Flexbox and Grid', 'duration': 30, 'video_url': 'https://youtu.be/JJSoEo8JPCc'},
                {'title': 'JavaScript ES6+', 'duration': 35, 'video_url': 'https://youtu.be/W6NZfCO5SIk'},
            ],
            'React JS': [
                {'title': 'React Components and Props', 'duration': 28, 'video_url': 'https://youtu.be/Tn6-PIqc4UM'},
                {'title': 'State and Hooks', 'duration': 30, 'video_url': 'https://youtu.be/9U3IhLAnSxM'},
                {'title': 'React Router', 'duration': 22, 'video_url': 'https://youtu.be/ULV0rXrPWHk'},
            ],
            'Backend with Node.js': [
                {'title': 'Node.js Installation and Setup', 'duration': 20, 'video_url': 'https://youtu.be/ENrzD9HAZK4'},
                {'title': 'Express Framework', 'duration': 25, 'video_url': 'https://youtu.be/SccSCuHhOw0'},
                {'title': 'REST APIs with Express', 'duration': 28, 'video_url': 'https://youtu.be/ls_X9QrF7bE'},
            ],
            'Database with MongoDB': [
                {'title': 'MongoDB Introduction', 'duration': 22, 'video_url': 'https://youtu.be/2QQGWYe7IDU'},
                {'title': 'Mongoose ODM', 'duration': 25, 'video_url': 'https://youtu.be/DZBGEVgL2eE'},
            ],
        }
        
        self.create_course_content(course4, chapters_fs, lectures_fs)
        
        # ========== COURSE 5: Cyber Security Fundamentals ==========
        course5, created = Course.objects.get_or_create(
            course_number=105,
            defaults={
                'title': 'Cyber Security Fundamentals',
                'description': 'Learn network security, ethical hacking, and security best practices',
                'image': 'course_images/cybersecurity.jpg',
                'price': Decimal('22999.00'),
                'is_active': True
            }
        )
        
        CourseDetails.objects.get_or_create(
            course=course5,
            defaults={
                'duration': '45 hours',
                'level': 'beginner',
                'prerequisites': 'Basic computer knowledge',
                'objectives': 'Understand security concepts, perform penetration testing',
                'syllabus': 'Network security, Cryptography, Web security, Ethical hacking',
                'total_lessons': 28
            }
        )
        
        chapters_cs = [
            {'title': 'Security Fundamentals', 'order': 1, 'description': 'Basic security concepts'},
            {'title': 'Network Security', 'order': 2, 'description': 'Securing networks'},
            {'title': 'Web Application Security', 'order': 3, 'description': 'OWASP Top 10'},
            {'title': 'Ethical Hacking', 'order': 4, 'description': 'Penetration testing basics'},
        ]
        
        lectures_cs = {
            'Security Fundamentals': [
                {'title': 'Introduction to Cyber Security', 'duration': 20, 'video_url': 'https://youtu.be/inWWhr5tnEA', 'is_free': True},
                {'title': 'Security Threats and Attacks', 'duration': 25, 'video_url': 'https://youtu.be/5UypA4Znbvs'},
                {'title': 'Security Policies', 'duration': 18, 'video_url': 'https://youtu.be/irDkHlF2CmU'},
            ],
            'Network Security': [
                {'title': 'Firewalls and IDS', 'duration': 22, 'video_url': 'https://youtu.be/kDEX1HXyZhU'},
                {'title': 'VPN and Encryption', 'duration': 20, 'video_url': 'https://youtu.be/9D60nXUJxLk'},
                {'title': 'Network Scanning', 'duration': 25, 'video_url': 'https://youtu.be/Hk-21p2m8EY'},
            ],
            'Web Application Security': [
                {'title': 'SQL Injection', 'duration': 28, 'video_url': 'https://youtu.be/ciNHn38EyRc'},
                {'title': 'Cross-Site Scripting', 'duration': 22, 'video_url': 'https://youtu.be/4rA7B4UoVrM'},
                {'title': 'CSRF and Session Hijacking', 'duration': 20, 'video_url': 'https://youtu.be/_QxK0X9_3MA'},
            ],
            'Ethical Hacking': [
                {'title': 'Introduction to Kali Linux', 'duration': 25, 'video_url': 'https://youtu.be/ifbWJL-KVqA'},
                {'title': 'Penetration Testing Methodology', 'duration': 22, 'video_url': 'https://youtu.be/NzGkIhB01aQ'},
            ],
        }
        
        self.create_course_content(course5, chapters_cs, lectures_cs)
        
        # ========== Create Live Courses ==========
        live_courses = [
            {
                'title': 'Live Python Programming',
                'description': 'Live interactive classes with industry experts',
                'category': 'web_dev',
                'price': Decimal('12999.00'),
                'is_live': True,
                'start_day': 'Monday',
                'start_time': '7:00 PM',
                'button_text': 'Enroll Now',
            },
            {
                'title': 'Live Django Development',
                'description': 'Build real-world Django projects with mentor guidance',
                'category': 'web_dev',
                'price': Decimal('15999.00'),
                'is_live': True,
                'start_day': 'Wednesday',
                'start_time': '8:00 PM',
                'button_text': 'Enroll Now',
            },
            {
                'title': 'Live Data Science Bootcamp',
                'description': 'Live sessions on data analysis and machine learning',
                'category': 'ai_ml',
                'price': Decimal('19999.00'),
                'is_live': True,
                'start_day': 'Saturday',
                'start_time': '10:00 AM',
                'button_text': 'Join Batch',
            },
            {
                'title': 'Live Cyber Security Training',
                'description': 'Hands-on security training with live projects',
                'category': 'cybersecurity',
                'price': Decimal('17999.00'),
                'is_live': True,
                'start_day': 'Tuesday',
                'start_time': '7:30 PM',
                'button_text': 'Enroll Now',
            },
            {
                'title': 'Live DevOps with AWS',
                'description': 'Master DevOps tools and cloud deployment',
                'category': 'dev_ops',
                'price': Decimal('21999.00'),
                'is_live': True,
                'start_day': 'Friday',
                'start_time': '8:00 PM',
                'button_text': 'Join Batch',
            },
        ]
        
        for lc_data in live_courses:
            LiveCourse.objects.get_or_create(
                title=lc_data['title'],
                defaults=lc_data
            )
        
        # Create Team Members
        team_members = [
            {'name': 'Dr. Aditya Sharma', 'designation': 'Lead Python Instructor', 'order': 1},
            {'name': 'Prof. Neha Gupta', 'designation': 'Django Expert', 'order': 2},
            {'name': 'Rahul Verma', 'designation': 'Data Science Specialist', 'order': 3},
            {'name': 'Priya Singh', 'designation': 'Cyber Security Expert', 'order': 4},
            {'name': 'Amit Patel', 'designation': 'Full Stack Developer', 'order': 5},
        ]
        
        for tm in team_members:
            TeamMember.objects.get_or_create(
                name=tm['name'],
                defaults={
                    'designation': tm['designation'],
                    'order': tm['order'],
                    'is_active': True,
                    'bio': f"{tm['name']} has over 10 years of industry experience in {tm['designation']}.",
                }
            )
        
        self.stdout.write(self.style.SUCCESS('=' * 60))
        self.stdout.write(self.style.SUCCESS('✅ All dummy course data created successfully!'))
        self.stdout.write(self.style.SUCCESS('=' * 60))
        self.stdout.write(self.style.SUCCESS('Courses created: 5'))
        self.stdout.write(self.style.SUCCESS('Live Courses created: 5'))
        self.stdout.write(self.style.SUCCESS('Team Members created: 5'))
        self.stdout.write(self.style.SUCCESS('\nYou can now:'))

    def create_course_content(self, course, chapters_data, lectures_data):
        """Helper method to create chapters and lectures for a course"""
        
        for chapter_data in chapters_data:
            chapter, created = Chapter.objects.get_or_create(
                course=course,
                order=chapter_data['order'],
                defaults={
                    'title': chapter_data['title'],
                    'description': chapter_data['description'],
                }
            )
            
            # Add lectures for this chapter
            lecture_list = lectures_data.get(chapter_data['title'], [])
            for idx, lecture_info in enumerate(lecture_list, start=1):
                Lecture.objects.get_or_create(
                    chapter=chapter,
                    order=idx,
                    defaults={
                        'title': lecture_info['title'],
                        'duration_minutes': lecture_info['duration'],
                        'video_url': lecture_info.get('video_url', ''),
                        'is_free_preview': lecture_info.get('is_free', False),
                        'lecture_type': 'video',
                    }
                )
            
            self.stdout.write(f"  ✓ Created chapter: {chapter.title} with {len(lecture_list)} lectures")