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
    """Create a small dummy JPEG image without requiring external deps.

    Uses a minimal JPEG byte string; no PIL required.
    """
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
        "starter_code_template": '# Welcome to Python Masterclass!\n\n# Write your Python code here\nprint("Hello, Python Learner!")\n',
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
                        "title": "Installing Python and VS Code",
                        "lecture_type": "video",
                        "video_url": "https://youtu.be/example2",
                        "content": "Step-by-step guide to install Python and set up VS Code for development.",
                        "duration_minutes": 20,
                        "is_free_preview": True,
                    },
                    {
                        "order": 3,
                        "title": "Your First Python Program - Hello World",
                        "lecture_type": "video",
                        "video_url": "https://youtu.be/example3",
                        "content": "Write and run your first Python program. Understanding print statements and basic syntax.",
                        "duration_minutes": 12,
                        "is_free_preview": True,
                    },
                    {
                        "order": 4,
                        "title": "Python Basics Quiz",
                        "lecture_type": "quiz",
                        "content": "Test your understanding of Python basics",
                        "duration_minutes": 10,
                        "is_free_preview": False,
                        "quiz": {
                            "quiz_type": "mcq",
                            "title": "Python Basics Quiz",
                            "description": "Test your knowledge of Python fundamentals",
                            "max_attempts": 3,
                            "passing_score": 70,
                            "questions": [
                                {
                                    "order": 1,
                                    "question_text": 'What is the correct way to print "Hello World" in Python?',
                                    "question_type": "mcq",
                                    "points": 10,
                                    "option_a": 'print("Hello World")',
                                    "option_b": 'echo "Hello World"',
                                    "option_c": 'printf("Hello World")',
                                    "option_d": 'console.log("Hello World")',
                                    "correct_option": "A",
                                    "explanation": "In Python, print() function is used to output text.",
                                }
                            ],
                        },
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
    }
]

TEAM_MEMBERS_DATA = [
    {
        "name": "Dr. Rajesh Kumar",
        "designation": "Senior Python Developer & Trainer",
        "bio": "PhD in Computer Science with 15+ years of experience in Python development and training.",
        "order": 1,
        "linkedin": "https://linkedin.com/in/rajeshkumar",
        "is_active": True,
    }
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
                    # Signal should have created Quiz; but be defensive.
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

                    # Upsert questions by (quiz, order)
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
                            # Light update
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
        print(f"✓ Seeded course #{cd['course_number']}: {cd['title']} ({total_lectures} lectures)")

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
    print("Courses:", Course.objects.count())
    print("Chapters:", Chapter.objects.count())
    print("Lectures:", Lecture.objects.count())
    print("Quizzes:", Quiz.objects.count())
    print("QuizQuestions:", QuizQuestion.objects.count())
    print("TeamMembers:", TeamMember.objects.count())
    print("LiveCourses:", LiveCourse.objects.count())
    print("=" * 60)


if __name__ == "__main__":
    populate()

