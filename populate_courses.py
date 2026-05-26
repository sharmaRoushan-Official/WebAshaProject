#!/usr/bin/env python
""" 
Populate courses, chapters, lectures, quizzes, team members, and live courses.

Run:
  python manage.py shell < populate_courses.py
or:
  python manage.py shell
  >>> exec(open('populate_courses.py').read())

Options:
  --clear   Clear courses/chapters/lectures/quizzes before seeding.

Notes:
- Your models require ImageField on Course/TeamMember/LiveCourse.
- This script generates tiny in-memory images and attaches them so the seed works.
- Quiz lectures: set Lecture.lecture_type='quiz' and supply content; your model signal auto-creates Quiz.
"""

import os
import io
import sys
from decimal import Decimal

import django


# ---- Django setup (supports running via manage.py shell or standalone) ----
BASE_DIR = os.path.dirname(os.path.abspath(__file__))
if BASE_DIR not in sys.path:
    sys.path.append(BASE_DIR)

os.environ.setdefault('DJANGO_SETTINGS_MODULE', 'WebAshaProject.settings')

django.setup()

from django.core.files.uploadedfile import SimpleUploadedFile
from django.core.files.base import ContentFile
from django.core.exceptions import ObjectDoesNotExist

from mainApp.models import (
    Course,
    CourseDetails,
    Chapter,
    Lecture,
    Quiz,
    QuizQuestion,
    TeamMember,
    LiveCourse,
)


def _make_dummy_image(filename="dummy.jpg"):
    """Create a small dummy JPEG image without requiring external deps."""
    # Minimal 1x1 JPEG.
    jpg_bytes = (
        b"\xff\xd8\xff\xe0\x00\x10JFIF\x00\x01\x01\x00\x00\x01\x00\x01\x00\x00"
        b"\xff\xdb\x00C\x00\x08\x06\x06\x07\x06\x05\x08\x07\x07\x07\x09\x09\x08\n"
        b"\x0c\x14\x0d\x0c\x0b\x0b\x0c\x19\x12\x13\x0f\x14\x1d\x17\x1e"
        b"\x1a\x1b\x1c\x1a\x1c\x1a\x1b\x1a\xff\xc0\x00\x11\x08\x00\x01\x00\x01"
        b"\x03\x01\x11\x00\xff\xc4\x00\x1f\x00\x00\x01\x05\x01\x01\x01\x01\x01\x01\x00\x00\x00\x00\x00"
        b"\x00\x00\x00\x01\x02\x03\x04\x05\x06\x07\x08\x09\x0a\xff\xc4\x00\xb5\x10\x00\x02\x01"
        b"\x03\x03\x02\x04\x03\x05\x05\x04\x04\x00\x00\x01\x7d\x01\x02\x03\x00\x04\x11\x05\x12"
        b"\x21\x31\x41\x06\x13\x51\x61\x07\x22\x71\x14\x32\x81\x91\xa1\x08\x23\x42\xb1\xc1\x15\x52\xd1\xf0"
        b"\x24\x33\x62\x82\x09\x0a\x16\x17\x18\x19\x1a\x25\x26\x27\x28\x29\x2a\x34\x35\x36\x37\x38\x39\x3a\x43\x44\x45\x46\x47\x48\x49\x4a\x53\x54\x55\x56\x57\x58\x59\x5a\x63\x64\x65\x66\x67\x68\x69\x6a\x72\x73\x74\x75\x76\x77\x78\x79\x7a\x82\x83\x84\x85\x86\x87\x88\x89\x8a\x92\x93\x94\x95\x96\x97\x98\x99\x9a\xa2\xa3\xa4\xa5\xa6\xa7\xa8\xa9\xaa\xb2\xb3\xb4\xb5\xb6\xb7\xb8\xb9\xba\xc2\xc3\xc4\xc5\xc6\xc7\xc8\xc9\xca\xd2\xd3\xd4\xd5\xd6\xd7\xd8\xd9\xda\xe1\xe2\xe3\xe4\xe5\xe6\xe7\xe8\xe9\xea\xf1\xf2\xf3\xf4\xf5\xf6\xf7\xf8\xf9\xfa\xff\xda\x00\x0c\x03\x01\x00\x02\x11\x03\x11\x00\x3f\x00\xff\xd9"
    )
    return SimpleUploadedFile(filename, jpg_bytes, content_type="image/jpeg")


def _safe_get_or_create_team_member(name, designation, order, bio="", linkedin="", active=True):
    member, created = TeamMember.objects.get_or_create(
        name=name,
        defaults={
            "designation": designation,
            "order": order,
            "bio": bio,
            "linkedin": linkedin,
            "is_active": active,
            "image": _make_dummy_image(f"{name.replace(' ', '_')}.jpg"),
        },
    )
    if not created:
        updated = False
        if designation and member.designation != designation:
            member.designation = designation
            updated = True
        if bio and (member.bio != bio):
            member.bio = bio
            updated = True
        if linkedin is not None and member.linkedin != linkedin:
            member.linkedin = linkedin
            updated = True
        if order is not None and member.order != order:
            member.order = order
            updated = True
        if updated:
            member.save()
    return member


def _clear_course_related():
    print("⚠️  Clearing course-related data...")
    # Order matters due to FK constraints.
    Lecture.objects.all().delete()
    Chapter.objects.all().delete()
    QuizQuestion.objects.all().delete()
    Quiz.objects.all().delete()
    CourseDetails.objects.all().delete()
    Course.objects.all().delete()


COURSES_DATA = [
    {
        "course_number": 1001,
        "title": "Complete Python Programming Masterclass",
        "description": "Master Python from basics to advanced concepts with hands-on projects and real-world applications.",
        "price": Decimal("4999.00"),
        "programming_language": "python",
        "starter_code_template": '# Welcome to Python Masterclass!\n\n# Write your Python code here\nprint("Hello, Python Learner!")\n\n# Try a simple calculation\nresult = 10 + 20\nprint(f"10 + 20 = {result}")\n',
        "duration": "60 hours",
        "level": "beginner",
        "prerequisites": "Basic computer knowledge, logical thinking",
        "objectives": "Become proficient in Python programming, build real-world applications, master data structures, understand OOP concepts",
        "syllabus": "1. Python Basics\n2. Control Flow\n3. Functions\n4. Data Structures\n5. OOP\n6. File Handling\n7. Modules & Packages\n8. Error Handling\n9. Working with APIs\n10. Final Project",
        "is_active": True,
        "instructor": {"name": "Dr. Rajesh Kumar", "designation": "Senior Python Developer & Trainer", "order": 1, "bio": "PhD in Computer Science with 15+ years of experience in Python development and training."},
        "chapters": [
            {
                "order": 1,
                "title": "Getting Started with Python",
                "description": "Install Python, set up development environment, and write your first program.",
                "lectures": [
                    {
                        "order": 1,
                        "title": "Introduction to Python",
                        "lecture_type": "video",
                        "video_url": "https://youtu.be/example1",
                        "content": "Welcome to Python! In this lecture, we will understand what Python is and why it is so popular.",
                        "duration_minutes": 15,
                        "is_free_preview": True,
                    },
                    {
                        "order": 2,
                        "title": "Your First Python Program - Hello World",
                        "lecture_type": "article",
                        "content": "Write and run your first Python program.\n\n```python\nprint('Hello, World!')\n```",
                        "duration_minutes": 12,
                        "is_free_preview": True,
                    },
                    {
                        "order": 3,
                        "title": "Python Practice",
                        "lecture_type": "article",
                        "content": "Practice writing Python code in the compiler below.",
                        "duration_minutes": 30,
                        "is_free_preview": True,
                    },
                ],
            },
        ],
    },
    {
        "course_number": 1002,
        "title": "Java Programming: From Zero to Hero",
        "description": "Complete Java course covering OOP, collections, multithreading, and building real applications.",
        "price": Decimal("5999.00"),
        "programming_language": "java",
        "starter_code_template": 'public class Main {\n    public static void main(String[] args) {\n        System.out.println("Hello, Java World!");\n        \n        // Try your Java code here\n        int a = 10;\n        int b = 20;\n        System.out.println("Sum: " + (a + b));\n    }\n}',
        "duration": "80 hours",
        "level": "beginner",
        "prerequisites": "Basic programming concepts helpful but not required",
        "objectives": "Master Java fundamentals, OOP principles, exception handling, collections framework, multithreading, file I/O",
        "syllabus": "1. Java Basics\n2. OOP Concepts\n3. Exception Handling\n4. Collections Framework\n5. Multithreading\n6. File I/O\n7. JDBC\n8. Lambda Expressions\n9. Stream API\n10. Final Project",
        "is_active": True,
        "instructor": {"name": "Prof. Anjali Sharma", "designation": "Java Expert & Corporate Trainer", "order": 2, "bio": "15+ years of Java development experience. Trained over 5000+ students."},
        "chapters": [
            {
                "order": 1,
                "title": "Java Fundamentals",
                "description": "Learn the basics of Java programming.",
                "lectures": [
                    {
                        "order": 1,
                        "title": "Introduction to Java",
                        "lecture_type": "video",
                        "video_url": "https://youtu.be/example4",
                        "content": "What is Java? History, features, and why learn Java.",
                        "duration_minutes": 20,
                        "is_free_preview": True,
                    },
                    {
                        "order": 2,
                        "title": "Your First Java Program",
                        "lecture_type": "article",
                        "content": "Write your first Java program using the compiler below.\n\n```java\npublic class Main {\n    public static void main(String[] args) {\n        System.out.println(\"Hello, Java!\");\n    }\n}\n```",
                        "duration_minutes": 15,
                        "is_free_preview": True,
                    },
                    {
                        "order": 3,
                        "title": "Java Practice Lab",
                        "lecture_type": "article",
                        "content": "Practice writing Java code. Try creating variables, loops, and conditionals.",
                        "duration_minutes": 45,
                        "is_free_preview": True,
                    },
                ],
            },
        ],
    },
    {
        "course_number": 1003,
        "title": "Modern Web Development: HTML5 & CSS3",
        "description": "Learn to build beautiful, responsive websites with HTML5 and CSS3. Master Flexbox, Grid, and modern web design.",
        "price": Decimal("3999.00"),
        "programming_language": "html_css",
        "starter_code_template": '<!DOCTYPE html>\n<html lang="en">\n<head>\n    <meta charset="UTF-8">\n    <meta name="viewport" content="width=device-width, initial-scale=1.0">\n    <title>My Web Page</title>\n    <style>\n        body {\n            font-family: Arial, sans-serif;\n            margin: 0;\n            padding: 20px;\n            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\n            min-height: 100vh;\n        }\n        .container {\n            max-width: 800px;\n            margin: 0 auto;\n            background: white;\n            border-radius: 10px;\n            padding: 30px;\n            box-shadow: 0 10px 30px rgba(0,0,0,0.2);\n        }\n        h1 {\n            color: #667eea;\n            text-align: center;\n        }\n        button {\n            background: #667eea;\n            color: white;\n            border: none;\n            padding: 10px 20px;\n            border-radius: 5px;\n            cursor: pointer;\n            font-size: 16px;\n        }\n        button:hover {\n            background: #764ba2;\n        }\n    </style>\n</head>\n<body>\n    <div class="container">\n        <h1>Hello, Web Developer!</h1>\n        <p>This is your HTML/CSS playground. Edit the code and see the live preview!</p>\n        <button onclick="alert(\'Button Clicked!\')">Click Me</button>\n    </div>\n</body>\n</html>',
        "duration": "40 hours",
        "level": "beginner",
        "prerequisites": "No prior coding experience needed",
        "objectives": "Master HTML5 semantic elements, CSS3 styling, responsive design, Flexbox, Grid, animations, build modern websites",
        "syllabus": "1. HTML Basics\n2. CSS Fundamentals\n3. Box Model & Layout\n4. Flexbox\n5. CSS Grid\n6. Responsive Design\n7. Animations & Transitions\n8. Forms & Validation\n9. CSS Frameworks\n10. Final Project",
        "is_active": True,
        "instructor": {"name": "Priya Mehta", "designation": "Frontend Developer & UI Expert", "order": 3, "bio": "Expert frontend developer with 8+ years of experience in building responsive websites."},
        "chapters": [
            {
                "order": 1,
                "title": "HTML Fundamentals",
                "description": "Learn the building blocks of the web.",
                "lectures": [
                    {
                        "order": 1,
                        "title": "Introduction to HTML",
                        "lecture_type": "video",
                        "video_url": "https://youtu.be/example5",
                        "content": "What is HTML? Structure of an HTML document.",
                        "duration_minutes": 15,
                        "is_free_preview": True,
                    },
                    {
                        "order": 2,
                        "title": "HTML Practice Lab",
                        "lecture_type": "article",
                        "content": "Practice writing HTML and CSS in the compiler below. See your changes live!",
                        "duration_minutes": 60,
                        "is_free_preview": True,
                    },
                ],
            },
        ],
    },
    {
        "course_number": 1004,
        "title": "SQL Mastery: Database Design & Querying",
        "description": "Master SQL from basics to advanced. Learn to design databases, write complex queries, and optimize performance.",
        "price": Decimal("4499.00"),
        "programming_language": "sql",
        "starter_code_template": '-- Welcome to SQL Mastery Course!\n-- Write your SQL queries below\n\n-- Basic SELECT query\nSELECT \'Hello, SQL Learner!\' AS greeting;\n\n-- Create a sample table\nCREATE TABLE students (\n    id INTEGER PRIMARY KEY,\n    name TEXT,\n    age INTEGER,\n    grade TEXT\n);\n\n-- Insert sample data\nINSERT INTO students VALUES (1, \'Alice\', 20, \'A\');\nINSERT INTO students VALUES (2, \'Bob\', 21, \'B\');\nINSERT INTO students VALUES (3, \'Charlie\', 22, \'A\');\n\n-- Query the data\nSELECT * FROM students WHERE grade = \'A\';\n\n-- Try your own queries here!\n',
        "duration": "50 hours",
        "level": "beginner",
        "prerequisites": "Basic computer knowledge",
        "objectives": "Master SQL queries, database design, normalization, joins, subqueries, indexing, stored procedures, optimization",
        "syllabus": "1. SQL Basics\n2. Data Types & Constraints\n3. SELECT Statements\n4. Filtering & Sorting\n5. Joins\n6. Subqueries\n7. Aggregation & Grouping\n8. Database Design\n9. Indexes & Optimization\n10. Stored Procedures\n11. Transactions\n12. Final Project",
        "is_active": True,
        "instructor": {"name": "Vikram Singh", "designation": "Database Administrator & SQL Trainer", "order": 4, "bio": "10+ years of experience in database management and SQL optimization."},
        "chapters": [
            {
                "order": 1,
                "title": "SQL Basics",
                "description": "Learn the fundamentals of SQL.",
                "lectures": [
                    {
                        "order": 1,
                        "title": "Introduction to Databases & SQL",
                        "lecture_type": "video",
                        "video_url": "https://youtu.be/example6",
                        "content": "What is a database? Types of databases. Introduction to SQL.",
                        "duration_minutes": 20,
                        "is_free_preview": True,
                    },
                    {
                        "order": 2,
                        "title": "SQL Practice Lab",
                        "lecture_type": "article",
                        "content": "Practice writing SQL queries in the compiler below. Test your SELECT, INSERT, UPDATE, and DELETE statements.",
                        "duration_minutes": 45,
                        "is_free_preview": True,
                    },
                ],
            },
        ],
    },
]

LIVE_COURSES_DATA = [
    {
        "title": "Full-Stack Web Development Bootcamp (Live)",
        "description": "Join our live interactive bootcamp to become a full-stack developer.",
        "category": "web_dev",
        "price": Decimal("14999.00"),
        "is_live": True,
        "start_day": "Monday",
        "start_time": "7:00 PM",
        "button_text": "Enroll Now",
        "button_link": None,
        "is_active": True,
    },
    {
        "title": "Java Professional Certification Prep (Live)",
        "description": "Live training for Oracle Java Certification. Get certified with expert guidance.",
        "category": "web_dev",
        "price": Decimal("12999.00"),
        "is_live": True,
        "start_day": "Wednesday",
        "start_time": "6:30 PM",
        "button_text": "Join Batch",
        "button_link": None,
        "is_active": True,
    },
]

TEAM_MEMBERS_DATA = [
    {
        "name": "Dr. Rajesh Kumar",
        "designation": "Senior Python Developer & Trainer",
        "bio": "PhD in Computer Science with 15+ years of experience in Python development and training.",
        "order": 1,
        "linkedin": "https://linkedin.com/in/rajeshkumar",
        "is_active": True,
    },
    {
        "name": "Prof. Anjali Sharma",
        "designation": "Java Expert & Corporate Trainer",
        "bio": "15+ years of Java development experience. Trained over 5000+ students.",
        "order": 2,
        "linkedin": "https://linkedin.com/in/anjali-sharma",
        "is_active": True,
    },
    {
        "name": "Priya Mehta",
        "designation": "Frontend Developer & UI Expert",
        "bio": "Expert frontend developer with 8+ years of experience in building responsive websites.",
        "order": 3,
        "linkedin": "https://linkedin.com/in/priya-mehta",
        "is_active": True,
    },
    {
        "name": "Vikram Singh",
        "designation": "Database Administrator & SQL Trainer",
        "bio": "10+ years of experience in database management and SQL optimization.",
        "order": 4,
        "linkedin": "https://linkedin.com/in/vikram-singh",
        "is_active": True,
    },
]


def populate():
    print("=" * 60)
    print("Starting course/lecture auto-population")
    print("=" * 60)

    clear_flag = "--clear" in sys.argv
    if clear_flag:
        _clear_course_related()

    # Team members
    for tm in TEAM_MEMBERS_DATA:
        _safe_get_or_create_team_member(
            name=tm["name"],
            designation=tm.get("designation", ""),
            order=tm.get("order", 0),
            bio=tm.get("bio", ""),
            linkedin=tm.get("linkedin", ""),
            active=tm.get("is_active", True),
        )

    # Courses + content
    for cd in COURSES_DATA:
        instructor = TeamMember.objects.filter(name=cd["instructor"]["name"]).first()

        course, created = Course.objects.get_or_create(
            course_number=cd["course_number"],
            defaults={
                "title": cd["title"],
                "description": cd["description"],
                "image": _make_dummy_image(f"course_{cd['course_number']}.jpg"),
                "price": cd["price"],
                "is_active": cd.get("is_active", True),
                "programming_language": cd.get("programming_language", "python"),
                "starter_code_template": cd.get("starter_code_template", ""),
            },
        )
        if not created:
            updated = False
            for field in ["title", "description", "price", "is_active", "programming_language", "starter_code_template"]:
                if field in cd and getattr(course, field) != cd[field]:
                    setattr(course, field, cd[field])
                    updated = True
            if updated:
                course.save()

        CourseDetails.objects.update_or_create(
            course=course,
            defaults={
                "instructor": instructor,
                "duration": cd.get("duration", "40 hours"),
                "level": cd.get("level", "beginner"),
                "prerequisites": cd.get("prerequisites", ""),
                "objectives": cd.get("objectives", ""),
                "syllabus": cd.get("syllabus", ""),
                "total_lessons": 0,
            },
        )

        details = course.details

        total_lectures = 0
        for ch in cd.get("chapters", []):
            chapter, _ = Chapter.objects.get_or_create(
                course=course,
                order=ch["order"],
                defaults={
                    "title": ch["title"],
                    "description": ch.get("description", ""),
                    "is_preview": ch.get("is_preview", False),
                },
            )

            for lec in ch.get("lectures", []):
                lecture, lec_created = Lecture.objects.get_or_create(
                    chapter=chapter,
                    order=lec["order"],
                    defaults={
                        "title": lec["title"],
                        "lecture_type": lec.get("lecture_type", "video"),
                        "video_url": lec.get("video_url"),
                        "video_embed_code": None,
                        "resource_file": None,
                        "content": lec.get("content", ""),
                        "duration_minutes": lec.get("duration_minutes", 0) or 0,
                        "is_free_preview": lec.get("is_free_preview", False),
                        "is_downloadable": lec.get("is_downloadable", False),
                        "passing_score": lec.get("passing_score", 70),
                    },
                )

                # If quiz lecture, ensure quiz questions exist.
                if lecture.lecture_type == "quiz" and lec.get("quiz"):
                    quiz_payload = lec["quiz"]
                    quiz, _ = Quiz.objects.get_or_create(
                        lecture=lecture,
                        defaults={
                            "title": quiz_payload.get("title", lecture.title),
                            "description": quiz_payload.get("description", ""),
                            "quiz_type": quiz_payload.get("quiz_type", "mcq"),
                            "max_attempts": quiz_payload.get("max_attempts", 2),
                            "passing_score": quiz_payload.get("passing_score", 70),
                            "is_active": True,
                        },
                    )

                    existing_qs = list(quiz.questions.all())
                    existing_by_order = {q.order: q for q in existing_qs}
                    for q in quiz_payload.get("questions", []):
                        q_order = q.get("order")
                        if q_order is None:
                            continue
                        qq, q_created = QuizQuestion.objects.get_or_create(
                            quiz=quiz,
                            order=q_order,
                            defaults={
                                "question_text": q.get("question_text", ""),
                                "question_type": q.get("question_type", "mcq"),
                                "points": q.get("points", 1),
                                "option_a": q.get("option_a", ""),
                                "option_b": q.get("option_b", ""),
                                "option_c": q.get("option_c", ""),
                                "option_d": q.get("option_d", ""),
                                "correct_option": q.get("correct_option", ""),
                                "expected_answer": q.get("expected_answer", ""),
                                "allow_partial_match": q.get("allow_partial_match", True),
                                "case_sensitive": q.get("case_sensitive", False),
                                "explanation": q.get("explanation", ""),
                            },
                        )
                        if not q_created:
                            updates = {}
                            for f in [
                                "question_text",
                                "question_type",
                                "points",
                                "option_a",
                                "option_b",
                                "option_c",
                                "option_d",
                                "correct_option",
                                "expected_answer",
                                "allow_partial_match",
                                "case_sensitive",
                                "explanation",
                            ]:
                                if f in q:
                                    val = q.get(f)
                                    if getattr(qq, f) != val:
                                        updates[f] = val
                            for k, v in updates.items():
                                setattr(qq, k, v)
                            if updates:
                                qq.save()

                total_lectures += 1

        details.total_lessons = total_lectures
        details.save()
        
        # Print language info for verification
        compiler_type = "Pyodide (browser)" if cd.get("programming_language") == "python" else "Piston API (server)" if cd.get("programming_language") == "java" else "Browser preview" if cd.get("programming_language") == "html_css" else "Syntax validator"
        print(f"✓ Seeded course #{cd['course_number']}: {cd['title']} ({total_lectures} lectures) - Language: {cd.get('programming_language')} [{compiler_type}]")

    # Live courses
    for lc in LIVE_COURSES_DATA:
        LiveCourse.objects.get_or_create(
            title=lc["title"],
            defaults={
                "description": lc["description"],
                "category": lc.get("category", "web_dev"),
                "image": _make_dummy_image(f"live_{lc['title'].replace(' ', '_')}.jpg"),
                "price": lc.get("price", Decimal("0.00")),
                "is_live": lc.get("is_live", True),
                "start_day": lc.get("start_day", "Monday"),
                "start_time": lc.get("start_time", "7:00 PM"),
                "button_text": lc.get("button_text", "Join Batch"),
                "button_link": lc.get("button_link"),
                "is_active": lc.get("is_active", True),
            },
        )

    print("=" * 60)
    print("✅ Population complete")
    print(f"Courses: {Course.objects.count()} (Python, Java, HTML/CSS, SQL)")
    print(f"Chapters: {Chapter.objects.count()}")
    print(f"Lectures: {Lecture.objects.count()}")
    print(f"Quizzes: {Quiz.objects.count()}")
    print(f"QuizQuestions: {QuizQuestion.objects.count()}")
    print(f"TeamMembers: {TeamMember.objects.count()}")
    print(f"LiveCourses: {LiveCourse.objects.count()}")
    print("=" * 60)
    print("\n🎯 Course Language Summary:")
    for course in Course.objects.all():
        compiler_method = "🐍 Pyodide (in-browser)" if course.programming_language == "python" else "☕ Piston API (server)" if course.programming_language == "java" else "🎨 Live Preview" if course.programming_language == "html_css" else "📊 SQL Validator" if course.programming_language == "sql" else "❓ Unknown"
        print(f"   - {course.title}: {course.programming_language.upper()} → {compiler_method}")


if __name__ == "__main__":
    populate()#!/usr/bin/env python
""" 
Populate courses, chapters, lectures, quizzes, team members, and live courses.

Run:
  python manage.py shell < populate_courses.py
or:
  python manage.py shell
  >>> exec(open('populate_courses.py').read())

Options:
  --clear   Clear courses/chapters/lectures/quizzes before seeding.

Notes:
- Your models require ImageField on Course/TeamMember/LiveCourse.
- This script generates tiny in-memory images and attaches them so the seed works.
- Quiz lectures: set Lecture.lecture_type='quiz' and supply content; your model signal auto-creates Quiz.
"""

import os
import io
import sys
from decimal import Decimal

import django


# ---- Django setup (supports running via manage.py shell or standalone) ----
BASE_DIR = os.path.dirname(os.path.abspath(__file__))
if BASE_DIR not in sys.path:
    sys.path.append(BASE_DIR)

os.environ.setdefault('DJANGO_SETTINGS_MODULE', 'WebAshaProject.settings')

django.setup()

from django.core.files.uploadedfile import SimpleUploadedFile
from django.core.files.base import ContentFile
from django.core.exceptions import ObjectDoesNotExist

from mainApp.models import (
    Course,
    CourseDetails,
    Chapter,
    Lecture,
    Quiz,
    QuizQuestion,
    TeamMember,
    LiveCourse,
)


def _make_dummy_image(filename="dummy.jpg"):
    """Create a small dummy JPEG image without requiring external deps."""
    # Minimal 1x1 JPEG.
    jpg_bytes = (
        b"\xff\xd8\xff\xe0\x00\x10JFIF\x00\x01\x01\x00\x00\x01\x00\x01\x00\x00"
        b"\xff\xdb\x00C\x00\x08\x06\x06\x07\x06\x05\x08\x07\x07\x07\x09\x09\x08\n"
        b"\x0c\x14\x0d\x0c\x0b\x0b\x0c\x19\x12\x13\x0f\x14\x1d\x17\x1e"
        b"\x1a\x1b\x1c\x1a\x1c\x1a\x1b\x1a\xff\xc0\x00\x11\x08\x00\x01\x00\x01"
        b"\x03\x01\x11\x00\xff\xc4\x00\x1f\x00\x00\x01\x05\x01\x01\x01\x01\x01\x01\x00\x00\x00\x00\x00"
        b"\x00\x00\x00\x01\x02\x03\x04\x05\x06\x07\x08\x09\x0a\xff\xc4\x00\xb5\x10\x00\x02\x01"
        b"\x03\x03\x02\x04\x03\x05\x05\x04\x04\x00\x00\x01\x7d\x01\x02\x03\x00\x04\x11\x05\x12"
        b"\x21\x31\x41\x06\x13\x51\x61\x07\x22\x71\x14\x32\x81\x91\xa1\x08\x23\x42\xb1\xc1\x15\x52\xd1\xf0"
        b"\x24\x33\x62\x82\x09\x0a\x16\x17\x18\x19\x1a\x25\x26\x27\x28\x29\x2a\x34\x35\x36\x37\x38\x39\x3a\x43\x44\x45\x46\x47\x48\x49\x4a\x53\x54\x55\x56\x57\x58\x59\x5a\x63\x64\x65\x66\x67\x68\x69\x6a\x72\x73\x74\x75\x76\x77\x78\x79\x7a\x82\x83\x84\x85\x86\x87\x88\x89\x8a\x92\x93\x94\x95\x96\x97\x98\x99\x9a\xa2\xa3\xa4\xa5\xa6\xa7\xa8\xa9\xaa\xb2\xb3\xb4\xb5\xb6\xb7\xb8\xb9\xba\xc2\xc3\xc4\xc5\xc6\xc7\xc8\xc9\xca\xd2\xd3\xd4\xd5\xd6\xd7\xd8\xd9\xda\xe1\xe2\xe3\xe4\xe5\xe6\xe7\xe8\xe9\xea\xf1\xf2\xf3\xf4\xf5\xf6\xf7\xf8\xf9\xfa\xff\xda\x00\x0c\x03\x01\x00\x02\x11\x03\x11\x00\x3f\x00\xff\xd9"
    )
    return SimpleUploadedFile(filename, jpg_bytes, content_type="image/jpeg")


def _safe_get_or_create_team_member(name, designation, order, bio="", linkedin="", active=True):
    member, created = TeamMember.objects.get_or_create(
        name=name,
        defaults={
            "designation": designation,
            "order": order,
            "bio": bio,
            "linkedin": linkedin,
            "is_active": active,
            "image": _make_dummy_image(f"{name.replace(' ', '_')}.jpg"),
        },
    )
    if not created:
        updated = False
        if designation and member.designation != designation:
            member.designation = designation
            updated = True
        if bio and (member.bio != bio):
            member.bio = bio
            updated = True
        if linkedin is not None and member.linkedin != linkedin:
            member.linkedin = linkedin
            updated = True
        if order is not None and member.order != order:
            member.order = order
            updated = True
        if updated:
            member.save()
    return member


def _clear_course_related():
    print("⚠️  Clearing course-related data...")
    # Order matters due to FK constraints.
    Lecture.objects.all().delete()
    Chapter.objects.all().delete()
    QuizQuestion.objects.all().delete()
    Quiz.objects.all().delete()
    CourseDetails.objects.all().delete()
    Course.objects.all().delete()


COURSES_DATA = [
    {
        "course_number": 1001,
        "title": "Complete Python Programming Masterclass",
        "description": "Master Python from basics to advanced concepts with hands-on projects and real-world applications.",
        "price": Decimal("4999.00"),
        "programming_language": "python",
        "starter_code_template": '# Welcome to Python Masterclass!\n\n# Write your Python code here\nprint("Hello, Python Learner!")\n\n# Try a simple calculation\nresult = 10 + 20\nprint(f"10 + 20 = {result}")\n',
        "duration": "60 hours",
        "level": "beginner",
        "prerequisites": "Basic computer knowledge, logical thinking",
        "objectives": "Become proficient in Python programming, build real-world applications, master data structures, understand OOP concepts",
        "syllabus": "1. Python Basics\n2. Control Flow\n3. Functions\n4. Data Structures\n5. OOP\n6. File Handling\n7. Modules & Packages\n8. Error Handling\n9. Working with APIs\n10. Final Project",
        "is_active": True,
        "instructor": {"name": "Dr. Rajesh Kumar", "designation": "Senior Python Developer & Trainer", "order": 1, "bio": "PhD in Computer Science with 15+ years of experience in Python development and training."},
        "chapters": [
            {
                "order": 1,
                "title": "Getting Started with Python",
                "description": "Install Python, set up development environment, and write your first program.",
                "lectures": [
                    {
                        "order": 1,
                        "title": "Introduction to Python",
                        "lecture_type": "video",
                        "video_url": "https://youtu.be/example1",
                        "content": "Welcome to Python! In this lecture, we will understand what Python is and why it is so popular.",
                        "duration_minutes": 15,
                        "is_free_preview": True,
                    },
                    {
                        "order": 2,
                        "title": "Your First Python Program - Hello World",
                        "lecture_type": "article",
                        "content": "Write and run your first Python program.\n\n```python\nprint('Hello, World!')\n```",
                        "duration_minutes": 12,
                        "is_free_preview": True,
                    },
                    {
                        "order": 3,
                        "title": "Python Practice",
                        "lecture_type": "article",
                        "content": "Practice writing Python code in the compiler below.",
                        "duration_minutes": 30,
                        "is_free_preview": True,
                    },
                ],
            },
        ],
    },
    {
        "course_number": 1002,
        "title": "Java Programming: From Zero to Hero",
        "description": "Complete Java course covering OOP, collections, multithreading, and building real applications.",
        "price": Decimal("5999.00"),
        "programming_language": "java",
        "starter_code_template": 'public class Main {\n    public static void main(String[] args) {\n        System.out.println("Hello, Java World!");\n        \n        // Try your Java code here\n        int a = 10;\n        int b = 20;\n        System.out.println("Sum: " + (a + b));\n    }\n}',
        "duration": "80 hours",
        "level": "beginner",
        "prerequisites": "Basic programming concepts helpful but not required",
        "objectives": "Master Java fundamentals, OOP principles, exception handling, collections framework, multithreading, file I/O",
        "syllabus": "1. Java Basics\n2. OOP Concepts\n3. Exception Handling\n4. Collections Framework\n5. Multithreading\n6. File I/O\n7. JDBC\n8. Lambda Expressions\n9. Stream API\n10. Final Project",
        "is_active": True,
        "instructor": {"name": "Prof. Anjali Sharma", "designation": "Java Expert & Corporate Trainer", "order": 2, "bio": "15+ years of Java development experience. Trained over 5000+ students."},
        "chapters": [
            {
                "order": 1,
                "title": "Java Fundamentals",
                "description": "Learn the basics of Java programming.",
                "lectures": [
                    {
                        "order": 1,
                        "title": "Introduction to Java",
                        "lecture_type": "video",
                        "video_url": "https://youtu.be/example4",
                        "content": "What is Java? History, features, and why learn Java.",
                        "duration_minutes": 20,
                        "is_free_preview": True,
                    },
                    {
                        "order": 2,
                        "title": "Your First Java Program",
                        "lecture_type": "article",
                        "content": "Write your first Java program using the compiler below.\n\n```java\npublic class Main {\n    public static void main(String[] args) {\n        System.out.println(\"Hello, Java!\");\n    }\n}\n```",
                        "duration_minutes": 15,
                        "is_free_preview": True,
                    },
                    {
                        "order": 3,
                        "title": "Java Practice Lab",
                        "lecture_type": "article",
                        "content": "Practice writing Java code. Try creating variables, loops, and conditionals.",
                        "duration_minutes": 45,
                        "is_free_preview": True,
                    },
                ],
            },
        ],
    },
    {
        "course_number": 1003,
        "title": "Modern Web Development: HTML5 & CSS3",
        "description": "Learn to build beautiful, responsive websites with HTML5 and CSS3. Master Flexbox, Grid, and modern web design.",
        "price": Decimal("3999.00"),
        "programming_language": "html_css",
        "starter_code_template": '<!DOCTYPE html>\n<html lang="en">\n<head>\n    <meta charset="UTF-8">\n    <meta name="viewport" content="width=device-width, initial-scale=1.0">\n    <title>My Web Page</title>\n    <style>\n        body {\n            font-family: Arial, sans-serif;\n            margin: 0;\n            padding: 20px;\n            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\n            min-height: 100vh;\n        }\n        .container {\n            max-width: 800px;\n            margin: 0 auto;\n            background: white;\n            border-radius: 10px;\n            padding: 30px;\n            box-shadow: 0 10px 30px rgba(0,0,0,0.2);\n        }\n        h1 {\n            color: #667eea;\n            text-align: center;\n        }\n        button {\n            background: #667eea;\n            color: white;\n            border: none;\n            padding: 10px 20px;\n            border-radius: 5px;\n            cursor: pointer;\n            font-size: 16px;\n        }\n        button:hover {\n            background: #764ba2;\n        }\n    </style>\n</head>\n<body>\n    <div class="container">\n        <h1>Hello, Web Developer!</h1>\n        <p>This is your HTML/CSS playground. Edit the code and see the live preview!</p>\n        <button onclick="alert(\'Button Clicked!\')">Click Me</button>\n    </div>\n</body>\n</html>',
        "duration": "40 hours",
        "level": "beginner",
        "prerequisites": "No prior coding experience needed",
        "objectives": "Master HTML5 semantic elements, CSS3 styling, responsive design, Flexbox, Grid, animations, build modern websites",
        "syllabus": "1. HTML Basics\n2. CSS Fundamentals\n3. Box Model & Layout\n4. Flexbox\n5. CSS Grid\n6. Responsive Design\n7. Animations & Transitions\n8. Forms & Validation\n9. CSS Frameworks\n10. Final Project",
        "is_active": True,
        "instructor": {"name": "Priya Mehta", "designation": "Frontend Developer & UI Expert", "order": 3, "bio": "Expert frontend developer with 8+ years of experience in building responsive websites."},
        "chapters": [
            {
                "order": 1,
                "title": "HTML Fundamentals",
                "description": "Learn the building blocks of the web.",
                "lectures": [
                    {
                        "order": 1,
                        "title": "Introduction to HTML",
                        "lecture_type": "video",
                        "video_url": "https://youtu.be/example5",
                        "content": "What is HTML? Structure of an HTML document.",
                        "duration_minutes": 15,
                        "is_free_preview": True,
                    },
                    {
                        "order": 2,
                        "title": "HTML Practice Lab",
                        "lecture_type": "article",
                        "content": "Practice writing HTML and CSS in the compiler below. See your changes live!",
                        "duration_minutes": 60,
                        "is_free_preview": True,
                    },
                ],
            },
        ],
    },
    {
        "course_number": 1004,
        "title": "SQL Mastery: Database Design & Querying",
        "description": "Master SQL from basics to advanced. Learn to design databases, write complex queries, and optimize performance.",
        "price": Decimal("4499.00"),
        "programming_language": "sql",
        "starter_code_template": '-- Welcome to SQL Mastery Course!\n-- Write your SQL queries below\n\n-- Basic SELECT query\nSELECT \'Hello, SQL Learner!\' AS greeting;\n\n-- Create a sample table\nCREATE TABLE students (\n    id INTEGER PRIMARY KEY,\n    name TEXT,\n    age INTEGER,\n    grade TEXT\n);\n\n-- Insert sample data\nINSERT INTO students VALUES (1, \'Alice\', 20, \'A\');\nINSERT INTO students VALUES (2, \'Bob\', 21, \'B\');\nINSERT INTO students VALUES (3, \'Charlie\', 22, \'A\');\n\n-- Query the data\nSELECT * FROM students WHERE grade = \'A\';\n\n-- Try your own queries here!\n',
        "duration": "50 hours",
        "level": "beginner",
        "prerequisites": "Basic computer knowledge",
        "objectives": "Master SQL queries, database design, normalization, joins, subqueries, indexing, stored procedures, optimization",
        "syllabus": "1. SQL Basics\n2. Data Types & Constraints\n3. SELECT Statements\n4. Filtering & Sorting\n5. Joins\n6. Subqueries\n7. Aggregation & Grouping\n8. Database Design\n9. Indexes & Optimization\n10. Stored Procedures\n11. Transactions\n12. Final Project",
        "is_active": True,
        "instructor": {"name": "Vikram Singh", "designation": "Database Administrator & SQL Trainer", "order": 4, "bio": "10+ years of experience in database management and SQL optimization."},
        "chapters": [
            {
                "order": 1,
                "title": "SQL Basics",
                "description": "Learn the fundamentals of SQL.",
                "lectures": [
                    {
                        "order": 1,
                        "title": "Introduction to Databases & SQL",
                        "lecture_type": "video",
                        "video_url": "https://youtu.be/example6",
                        "content": "What is a database? Types of databases. Introduction to SQL.",
                        "duration_minutes": 20,
                        "is_free_preview": True,
                    },
                    {
                        "order": 2,
                        "title": "SQL Practice Lab",
                        "lecture_type": "article",
                        "content": "Practice writing SQL queries in the compiler below. Test your SELECT, INSERT, UPDATE, and DELETE statements.",
                        "duration_minutes": 45,
                        "is_free_preview": True,
                    },
                ],
            },
        ],
    },
]

LIVE_COURSES_DATA = [
    {
        "title": "Full-Stack Web Development Bootcamp (Live)",
        "description": "Join our live interactive bootcamp to become a full-stack developer.",
        "category": "web_dev",
        "price": Decimal("14999.00"),
        "is_live": True,
        "start_day": "Monday",
        "start_time": "7:00 PM",
        "button_text": "Enroll Now",
        "button_link": None,
        "is_active": True,
    },
    {
        "title": "Java Professional Certification Prep (Live)",
        "description": "Live training for Oracle Java Certification. Get certified with expert guidance.",
        "category": "web_dev",
        "price": Decimal("12999.00"),
        "is_live": True,
        "start_day": "Wednesday",
        "start_time": "6:30 PM",
        "button_text": "Join Batch",
        "button_link": None,
        "is_active": True,
    },
]

TEAM_MEMBERS_DATA = [
    {
        "name": "Dr. Rajesh Kumar",
        "designation": "Senior Python Developer & Trainer",
        "bio": "PhD in Computer Science with 15+ years of experience in Python development and training.",
        "order": 1,
        "linkedin": "https://linkedin.com/in/rajeshkumar",
        "is_active": True,
    },
    {
        "name": "Prof. Anjali Sharma",
        "designation": "Java Expert & Corporate Trainer",
        "bio": "15+ years of Java development experience. Trained over 5000+ students.",
        "order": 2,
        "linkedin": "https://linkedin.com/in/anjali-sharma",
        "is_active": True,
    },
    {
        "name": "Priya Mehta",
        "designation": "Frontend Developer & UI Expert",
        "bio": "Expert frontend developer with 8+ years of experience in building responsive websites.",
        "order": 3,
        "linkedin": "https://linkedin.com/in/priya-mehta",
        "is_active": True,
    },
    {
        "name": "Vikram Singh",
        "designation": "Database Administrator & SQL Trainer",
        "bio": "10+ years of experience in database management and SQL optimization.",
        "order": 4,
        "linkedin": "https://linkedin.com/in/vikram-singh",
        "is_active": True,
    },
]


def populate():
    print("=" * 60)
    print("Starting course/lecture auto-population")
    print("=" * 60)

    clear_flag = "--clear" in sys.argv
    if clear_flag:
        _clear_course_related()

    # Team members
    for tm in TEAM_MEMBERS_DATA:
        _safe_get_or_create_team_member(
            name=tm["name"],
            designation=tm.get("designation", ""),
            order=tm.get("order", 0),
            bio=tm.get("bio", ""),
            linkedin=tm.get("linkedin", ""),
            active=tm.get("is_active", True),
        )

    # Courses + content
    for cd in COURSES_DATA:
        instructor = TeamMember.objects.filter(name=cd["instructor"]["name"]).first()

        course, created = Course.objects.get_or_create(
            course_number=cd["course_number"],
            defaults={
                "title": cd["title"],
                "description": cd["description"],
                "image": _make_dummy_image(f"course_{cd['course_number']}.jpg"),
                "price": cd["price"],
                "is_active": cd.get("is_active", True),
                "programming_language": cd.get("programming_language", "python"),
                "starter_code_template": cd.get("starter_code_template", ""),
            },
        )
        if not created:
            updated = False
            for field in ["title", "description", "price", "is_active", "programming_language", "starter_code_template"]:
                if field in cd and getattr(course, field) != cd[field]:
                    setattr(course, field, cd[field])
                    updated = True
            if updated:
                course.save()

        CourseDetails.objects.update_or_create(
            course=course,
            defaults={
                "instructor": instructor,
                "duration": cd.get("duration", "40 hours"),
                "level": cd.get("level", "beginner"),
                "prerequisites": cd.get("prerequisites", ""),
                "objectives": cd.get("objectives", ""),
                "syllabus": cd.get("syllabus", ""),
                "total_lessons": 0,
            },
        )

        details = course.details

        total_lectures = 0
        for ch in cd.get("chapters", []):
            chapter, _ = Chapter.objects.get_or_create(
                course=course,
                order=ch["order"],
                defaults={
                    "title": ch["title"],
                    "description": ch.get("description", ""),
                    "is_preview": ch.get("is_preview", False),
                },
            )

            for lec in ch.get("lectures", []):
                lecture, lec_created = Lecture.objects.get_or_create(
                    chapter=chapter,
                    order=lec["order"],
                    defaults={
                        "title": lec["title"],
                        "lecture_type": lec.get("lecture_type", "video"),
                        "video_url": lec.get("video_url"),
                        "video_embed_code": None,
                        "resource_file": None,
                        "content": lec.get("content", ""),
                        "duration_minutes": lec.get("duration_minutes", 0) or 0,
                        "is_free_preview": lec.get("is_free_preview", False),
                        "is_downloadable": lec.get("is_downloadable", False),
                        "passing_score": lec.get("passing_score", 70),
                    },
                )

                # If quiz lecture, ensure quiz questions exist.
                if lecture.lecture_type == "quiz" and lec.get("quiz"):
                    quiz_payload = lec["quiz"]
                    quiz, _ = Quiz.objects.get_or_create(
                        lecture=lecture,
                        defaults={
                            "title": quiz_payload.get("title", lecture.title),
                            "description": quiz_payload.get("description", ""),
                            "quiz_type": quiz_payload.get("quiz_type", "mcq"),
                            "max_attempts": quiz_payload.get("max_attempts", 2),
                            "passing_score": quiz_payload.get("passing_score", 70),
                            "is_active": True,
                        },
                    )

                    existing_qs = list(quiz.questions.all())
                    existing_by_order = {q.order: q for q in existing_qs}
                    for q in quiz_payload.get("questions", []):
                        q_order = q.get("order")
                        if q_order is None:
                            continue
                        qq, q_created = QuizQuestion.objects.get_or_create(
                            quiz=quiz,
                            order=q_order,
                            defaults={
                                "question_text": q.get("question_text", ""),
                                "question_type": q.get("question_type", "mcq"),
                                "points": q.get("points", 1),
                                "option_a": q.get("option_a", ""),
                                "option_b": q.get("option_b", ""),
                                "option_c": q.get("option_c", ""),
                                "option_d": q.get("option_d", ""),
                                "correct_option": q.get("correct_option", ""),
                                "expected_answer": q.get("expected_answer", ""),
                                "allow_partial_match": q.get("allow_partial_match", True),
                                "case_sensitive": q.get("case_sensitive", False),
                                "explanation": q.get("explanation", ""),
                            },
                        )
                        if not q_created:
                            updates = {}
                            for f in [
                                "question_text",
                                "question_type",
                                "points",
                                "option_a",
                                "option_b",
                                "option_c",
                                "option_d",
                                "correct_option",
                                "expected_answer",
                                "allow_partial_match",
                                "case_sensitive",
                                "explanation",
                            ]:
                                if f in q:
                                    val = q.get(f)
                                    if getattr(qq, f) != val:
                                        updates[f] = val
                            for k, v in updates.items():
                                setattr(qq, k, v)
                            if updates:
                                qq.save()

                total_lectures += 1

        details.total_lessons = total_lectures
        details.save()
        
        # Print language info for verification
        compiler_type = "Pyodide (browser)" if cd.get("programming_language") == "python" else "Piston API (server)" if cd.get("programming_language") == "java" else "Browser preview" if cd.get("programming_language") == "html_css" else "Syntax validator"
        print(f"✓ Seeded course #{cd['course_number']}: {cd['title']} ({total_lectures} lectures) - Language: {cd.get('programming_language')} [{compiler_type}]")

    # Live courses
    for lc in LIVE_COURSES_DATA:
        LiveCourse.objects.get_or_create(
            title=lc["title"],
            defaults={
                "description": lc["description"],
                "category": lc.get("category", "web_dev"),
                "image": _make_dummy_image(f"live_{lc['title'].replace(' ', '_')}.jpg"),
                "price": lc.get("price", Decimal("0.00")),
                "is_live": lc.get("is_live", True),
                "start_day": lc.get("start_day", "Monday"),
                "start_time": lc.get("start_time", "7:00 PM"),
                "button_text": lc.get("button_text", "Join Batch"),
                "button_link": lc.get("button_link"),
                "is_active": lc.get("is_active", True),
            },
        )

    print("=" * 60)
    print("✅ Population complete")
    print(f"Courses: {Course.objects.count()} (Python, Java, HTML/CSS, SQL)")
    print(f"Chapters: {Chapter.objects.count()}")
    print(f"Lectures: {Lecture.objects.count()}")
    print(f"Quizzes: {Quiz.objects.count()}")
    print(f"QuizQuestions: {QuizQuestion.objects.count()}")
    print(f"TeamMembers: {TeamMember.objects.count()}")
    print(f"LiveCourses: {LiveCourse.objects.count()}")
    print("=" * 60)
    print("\n🎯 Course Language Summary:")
    for course in Course.objects.all():
        compiler_method = "🐍 Pyodide (in-browser)" if course.programming_language == "python" else "☕ Piston API (server)" if course.programming_language == "java" else "🎨 Live Preview" if course.programming_language == "html_css" else "📊 SQL Validator" if course.programming_language == "sql" else "❓ Unknown"
        print(f"   - {course.title}: {course.programming_language.upper()} → {compiler_method}")


if __name__ == "__main__":
    populate()