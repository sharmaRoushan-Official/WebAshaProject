from django.db import models
from django.contrib.auth.models import User
from django.core.validators import RegexValidator
from django.utils import timezone
import random
import string
import re
from django.db.models.signals import post_save
from django.dispatch import receiver
from decimal import Decimal

import logging
logger = logging.getLogger(__name__)


class Course(models.Model):
    PROGRAMMING_LANGUAGE_CHOICES = [
        ('python', 'Python'),
        ('javascript', 'JavaScript'),
        ('html_css', 'HTML/CSS'),
        ('sql', 'SQL'),
        ('java', 'Java'), 
    ]
    
    title = models.CharField(max_length=200)
    description = models.TextField(max_length=300)
    image = models.ImageField(upload_to='course_images/')
    price = models.DecimalField(max_digits=10, decimal_places=2, default=0.00)
    course_number = models.IntegerField(unique=True)
    is_active = models.BooleanField(default=True)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)
    
    # Code compiler fields
    programming_language = models.CharField(
        max_length=20,
        choices=PROGRAMMING_LANGUAGE_CHOICES,
        default='python',
        blank=True,
        help_text="Programming language for in-lecture code compiler"
    )
    starter_code_template = models.TextField(
        blank=True, 
        help_text="Default code shown in editor for practice exercises"
    )

    def __str__(self):
        return self.title

    @property
    def details(self):
        return self.coursedetails if hasattr(self, 'coursedetails') else None
    
    @property
    def total_lectures(self):
        """Calculate total number of lectures across all chapters"""
        return sum(chapter.lectures.count() for chapter in self.chapters.all())
    
    @property
    def total_duration(self):
        """Calculate total duration of all lectures"""
        total_minutes = sum(lecture.duration_minutes for chapter in self.chapters.all() 
                           for lecture in chapter.lectures.all() if lecture.duration_minutes)
        return total_minutes

class CourseDetails(models.Model):
    course = models.OneToOneField(Course, on_delete=models.CASCADE, related_name='details')
    instructor = models.ForeignKey('TeamMember', on_delete=models.SET_NULL, null=True, blank=True, related_name='taught_courses')
    duration = models.CharField(max_length=50, default="40 hours")
    level = models.CharField(
        max_length=20,
        choices=[('beginner', 'Beginner'), ('intermediate', 'Intermediate'), ('advanced', 'Advanced')],
        default='beginner'
    )
    prerequisites = models.TextField(blank=True, default='')
    objectives = models.TextField(blank=True, default='')
    syllabus = models.TextField(blank=True, default='')
    thumbnail = models.ImageField(upload_to='course_details_thumbs/', blank=True, null=True)
    total_lessons = models.PositiveIntegerField(default=0)

    def __str__(self):
        return f"Details for {self.course.title}"


class Profile(models.Model):
    first_name = models.CharField(max_length=50, blank=True)
    last_name = models.CharField(max_length=50, blank=True)
    email = models.EmailField(blank=True)  # DISPLAY-ONLY: Auto-synced from User.email via signal
    profile_image = models.ImageField(upload_to='profile_images/', blank=True, null=True)
    phone = models.CharField(max_length=15, blank=True)
    address = models.TextField(blank=True)
    bio = models.TextField(blank=True, null=True)
    date_joined_institute = models.DateField(auto_now_add=True)
    is_student = models.BooleanField(default=True)
    is_active = models.BooleanField(default=True)
    password = models.CharField(
        max_length=128,
        blank=True,
        validators=[
            RegexValidator(
                regex=r'^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$',
                message="Password must contain uppercase, lowercase, number, special char, min 6 chars."
            )
        ],
        help_text="At least 6 chars: 1 uppercase, 1 lowercase, 1 number, 1 special (@$!%*?&)."
    )

    user = models.OneToOneField(User, on_delete=models.CASCADE, primary_key=True)

    @property
    def purchased_courses(self):
        return [t.course for t in self.coursetransactions.filter(status='completed').all()]
    
    @property
    def enrolled_courses(self):
        """Get all courses the user has access to"""
        return [access.course for access in self.course_access.filter(is_active=True) if access.has_access()]
    
    @property
    def course_progress(self):
        """Get progress for all enrolled courses"""
        return {access.course.id: access.completion_percentage for access in self.course_access.all()}

    def __str__(self):
        return f"{self.user.username} ({self.first_name} {self.last_name})"


class Chapter(models.Model):
    """Chapter/Section model for organizing course content"""
    course = models.ForeignKey(Course, on_delete=models.CASCADE, related_name='chapters')
    title = models.CharField(max_length=200, help_text="Chapter title (e.g., 'Introduction to Python')")
    description = models.TextField(blank=True, help_text="Brief description of what this chapter covers")
    order = models.PositiveIntegerField(default=0, help_text="Order of chapter in the course")
    is_preview = models.BooleanField(default=False, help_text="Allow non-purchased users to preview first lecture")
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        ordering = ['order', 'created_at']
        unique_together = ['course', 'order']  # Prevent duplicate order numbers for same course

    def __str__(self):
        return f"{self.course.title} - Chapter {self.order}: {self.title}"
    
    @property
    def lecture_count(self):
        return self.lectures.count()
    
    @property
    def total_duration(self):
        return sum(lecture.duration_minutes for lecture in self.lectures.all() if lecture.duration_minutes)


class Lecture(models.Model):
    """Individual lecture/video within a chapter"""
    LECTURE_TYPES = [
        ('video', 'Video'),
        ('article', 'Article'),
        ('quiz', 'Quiz'),
        ('assignment', 'Assignment'),
        ('resource', 'Resource'),
    ]
    
    chapter = models.ForeignKey(Chapter, on_delete=models.CASCADE, related_name='lectures')
    title = models.CharField(max_length=200, help_text="Lecture title (e.g., 'Installing Python')")
    lecture_type = models.CharField(max_length=20, choices=LECTURE_TYPES, default='video')
    
    # Video/Content Links
    video_url = models.URLField(blank=True, null=True, help_text="YouTube/Vimeo/Streaming URL")
    video_embed_code = models.TextField(blank=True, null=True, help_text="Embed code for self-hosted videos")
    resource_file = models.FileField(upload_to='course_resources/', blank=True, null=True, help_text="PDF, PPT, or other resources")
    
    # Content fields for articles/quizzes
    content = models.TextField(blank=True, null=True, help_text="Text content for articles or lecture notes")
    
    # Lecture metadata
    duration_minutes = models.PositiveIntegerField(default=0, help_text="Duration in minutes")
    order = models.PositiveIntegerField(default=0, help_text="Order of lecture within chapter")
    is_free_preview = models.BooleanField(default=False, help_text="Allow non-purchased users to preview this lecture")
    is_downloadable = models.BooleanField(default=False, help_text="Allow users to download resources")
    
    # Quiz/Assignment specific
    passing_score = models.PositiveIntegerField(default=0, help_text="Passing score percentage for quizzes")
    
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        ordering = ['order', 'created_at']
        unique_together = ['chapter', 'order']

    def __str__(self):
        return f"{self.chapter.title} - {self.title}"
    
    def get_youtube_embed_url(self):
        """Convert YouTube URL to embed URL - handles all YouTube URL formats"""
        if not self.video_url:
            return ""
        
        url = self.video_url.strip()
        video_id = None
        
        # Pattern for youtu.be format (shortened URLs)
        youtu_be_pattern = r'youtu\.be/([a-zA-Z0-9_-]+)'
        match = re.search(youtu_be_pattern, url)
        if match:
            video_id = match.group(1)
        
        # Pattern for youtube.com/watch?v= format
        if not video_id:
            youtube_watch_pattern = r'youtube\.com/watch\?v=([a-zA-Z0-9_-]+)'
            match = re.search(youtube_watch_pattern, url)
            if match:
                video_id = match.group(1)
        
        # Pattern for youtube.com/embed/ format
        if not video_id:
            youtube_embed_pattern = r'youtube\.com/embed/([a-zA-Z0-9_-]+)'
            match = re.search(youtube_embed_pattern, url)
            if match:
                video_id = match.group(1)
        
        # Pattern for youtube.com/shorts/ format
        if not video_id:
            youtube_shorts_pattern = r'youtube\.com/shorts/([a-zA-Z0-9_-]+)'
            match = re.search(youtube_shorts_pattern, url)
            if match:
                video_id = match.group(1)
        
        # Pattern for m.youtube.com format
        if not video_id:
            youtube_mobile_pattern = r'm\.youtube\.com/watch\?v=([a-zA-Z0-9_-]+)'
            match = re.search(youtube_mobile_pattern, url)
            if match:
                video_id = match.group(1)
        
        # Pattern for youtube.com/v/ format
        if not video_id:
            youtube_v_pattern = r'youtube\.com/v/([a-zA-Z0-9_-]+)'
            match = re.search(youtube_v_pattern, url)
            if match:
                video_id = match.group(1)
        
        if video_id:
            # Clean video_id (remove any parameters)
            video_id = video_id.split('?')[0].split('&')[0]
            # Return proper embed URL with required parameters
            return f"https://www.youtube.com/embed/{video_id}?rel=0&modestbranding=1&autoplay=0&enablejsapi=1"
        
        # If no pattern matched, return original URL
        return url
    
    def get_vimeo_embed_url(self):
        """Convert Vimeo URL to embed URL"""
        if not self.video_url:
            return ""
        
        url = self.video_url.strip()
        video_id = None
        
        # Pattern for vimeo.com/ID
        vimeo_pattern = r'vimeo\.com/(\d+)'
        match = re.search(vimeo_pattern, url)
        if match:
            video_id = match.group(1)
        
        # Pattern for player.vimeo.com/video/ID
        if not video_id:
            vimeo_player_pattern = r'player\.vimeo\.com/video/(\d+)'
            match = re.search(vimeo_player_pattern, url)
            if match:
                video_id = match.group(1)
        
        if video_id:
            return f"https://player.vimeo.com/video/{video_id}?rel=0"
        
        return url
    
    def get_video_embed_url(self):
        """Get embed URL for YouTube or Vimeo, fallback to original"""
        if not self.video_url:
            return ""
        
        video_url_lower = self.video_url.lower()
        
        # Check for YouTube URLs (all formats)
        if 'youtube.com' in video_url_lower or 'youtu.be' in video_url_lower:
            return self.get_youtube_embed_url()
        # Check for Vimeo URLs
        elif 'vimeo.com' in video_url_lower:
            return self.get_vimeo_embed_url()
        
        # Return original URL for other platforms
        return self.video_url
    
    @property
    def youtube_embed_url(self):
        """Get clean YouTube embed URL - USE THIS IN TEMPLATE"""
        if not self.video_url:
            return ""
        
        url = self.video_url.strip()
        
        # Extract video ID
        video_id = None
        
        # Handle youtu.be/
        if 'youtu.be/' in url:
            video_id = url.split('youtu.be/')[-1].split('?')[0].split('&')[0]
        # Handle youtube.com/watch
        elif 'youtube.com/watch' in url:
            video_id = url.split('v=')[-1].split('&')[0]
        # Handle youtube.com/embed/
        elif 'youtube.com/embed/' in url:
            video_id = url.split('/embed/')[-1].split('?')[0].split('&')[0]
        # Handle youtube.com/shorts/
        elif 'youtube.com/shorts/' in url:
            video_id = url.split('/shorts/')[-1].split('?')[0].split('&')[0]
        
        if video_id:
            return f"https://www.youtube.com/embed/{video_id}"
        
        return url
    
    @property
    def has_content(self):
        """Check if lecture has any content"""
        return bool(self.video_url or self.video_embed_code or self.resource_file or self.content)
    
    @property
    def duration_display(self):
        """Return duration in HH:MM:SS format"""
        hours = self.duration_minutes // 60
        minutes = self.duration_minutes % 60
        if hours > 0:
            return f"{hours}h {minutes}m"
        return f"{minutes}m"
    
    @property
    def has_quiz(self):
        """Check if lecture has an attached quiz"""
        return hasattr(self, 'quiz') and self.quiz.is_active
    
    def get_user_quiz_attempt(self, profile):
        """Get the latest quiz attempt for a user"""
        if self.has_quiz:
            return self.quiz.attempts.filter(profile=profile).order_by('-started_at').first()
        return None
    
    def get_user_best_quiz_score(self, profile):
        """Get user's best score for this lecture's quiz"""
        if self.has_quiz:
            best_attempt = self.quiz.attempts.filter(
                profile=profile, 
                status='completed'
            ).order_by('-percentage_score').first()
            return best_attempt.percentage_score if best_attempt else 0
        return 0
    
    def can_user_take_quiz(self, profile):
        """Check if user can take the quiz"""
        if not self.has_quiz:
            return False
        
        # Check if quiz is not time-limited
        quiz = self.quiz
        
        # Check attempts limit
        attempts_count = quiz.attempts.filter(profile=profile).count()
        if attempts_count >= quiz.max_attempts:
            return False
        
        # Check if user has access to the course
        course_access = UserCourseAccess.objects.filter(
            user=profile, 
            course=self.chapter.course, 
            is_active=True
        ).first()
        
        if not course_access or not course_access.has_access():
            return False
        
        return True


class UserCourseAccess(models.Model):
    """Track which courses a user has purchased and their access rights"""
    user = models.ForeignKey(Profile, on_delete=models.CASCADE, related_name='course_access')
    course = models.ForeignKey(Course, on_delete=models.CASCADE, related_name='user_access')
    transaction = models.ForeignKey('CourseTransaction', on_delete=models.CASCADE, related_name='access_records', null=True, blank=True)
    
    # Access tracking
    is_active = models.BooleanField(default=True)
    access_granted_at = models.DateTimeField(auto_now_add=True)
    access_expires_at = models.DateTimeField(null=True, blank=True, help_text="For subscription-based access")
    
    # Progress tracking
    last_accessed = models.DateTimeField(null=True, blank=True)
    completed_lectures = models.ManyToManyField(Lecture, blank=True, related_name='completed_by_users')
    completion_percentage = models.FloatField(default=0.0)
    is_completed = models.BooleanField(default=False)
    completed_at = models.DateTimeField(null=True, blank=True)
    
    class Meta:
        unique_together = ['user', 'course']
        ordering = ['-access_granted_at']
    
    def __str__(self):
        return f"{self.user.user.username} - {self.course.title} (Access: {self.is_active})"
    
    def update_completion_percentage(self):
        """Calculate and update course completion percentage"""
        total_lectures = self.course.total_lectures
        if total_lectures == 0:
            return 0
        
        completed_count = self.completed_lectures.count()
        percentage = (completed_count / total_lectures) * 100
        self.completion_percentage = round(percentage, 2)
        
        if percentage >= 99.9 and not self.is_completed:
            self.is_completed = True
            self.completed_at = timezone.now()
        
        self.save()
        return self.completion_percentage
    
    def has_access(self):
        """Check if user currently has access to the course"""
        if not self.is_active:
            return False
        if self.access_expires_at and self.access_expires_at < timezone.now():
            return False
        return True
    
    def is_lecture_completed(self, lecture):
        """Check if a specific lecture is completed by the user"""
        return self.completed_lectures.filter(id=lecture.id).exists()
    
    def mark_lecture_completed(self, lecture):
        """Mark a lecture as completed"""
        if not self.is_lecture_completed(lecture):
            self.completed_lectures.add(lecture)
            self.last_accessed = timezone.now()
            self.save()
            self.update_completion_percentage()
            return True
        return False


class LectureProgress(models.Model):
    """Track detailed progress for each lecture"""
    user = models.ForeignKey(Profile, on_delete=models.CASCADE, related_name='lecture_progress')
    lecture = models.ForeignKey(Lecture, on_delete=models.CASCADE, related_name='user_progress')
    course_access = models.ForeignKey(UserCourseAccess, on_delete=models.CASCADE, related_name='lecture_progress_records')
    
    # Progress tracking
    is_completed = models.BooleanField(default=False)
    watch_time_seconds = models.PositiveIntegerField(default=0, help_text="Total watch time in seconds")
    last_watch_position = models.PositiveIntegerField(default=0, help_text="Last watched position in seconds")
    completed_at = models.DateTimeField(null=True, blank=True)
    
    # Quiz/Assignment results
    quiz_score = models.PositiveIntegerField(null=True, blank=True)
    quiz_attempts = models.PositiveIntegerField(default=0)
    is_passed = models.BooleanField(default=False)
    
    # Notes
    user_notes = models.TextField(blank=True, help_text="User's personal notes for this lecture")
    
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)
    
    class Meta:
        unique_together = ['user', 'lecture']
        ordering = ['-updated_at']
    
    def __str__(self):
        status = "✓" if self.is_completed else "○"
        return f"{status} {self.user.user.username} - {self.lecture.title}"
    
    def mark_completed(self):
        """Mark lecture as completed"""
        if not self.is_completed:
            self.is_completed = True
            self.completed_at = timezone.now()
            self.save()
            
            # Update the course access's completed lectures
            course_access = self.course_access
            if not course_access.is_lecture_completed(self.lecture):
                course_access.completed_lectures.add(self.lecture)
                course_access.update_completion_percentage()
            return True
        return False
    
    def update_watch_time(self, seconds_watched, current_position):
        """Update watch time progress"""
        self.watch_time_seconds = min(self.watch_time_seconds + seconds_watched, self.lecture.duration_minutes * 60)
        self.last_watch_position = current_position
        self.save()
        
        # Auto-mark as completed if watched 90% or more
        if self.lecture.duration_minutes > 0:
            total_seconds = self.lecture.duration_minutes * 60
            if self.watch_time_seconds >= total_seconds * 0.9 and not self.is_completed:
                self.mark_completed()


# ==================== QUIZ MODELS ====================

class Quiz(models.Model):
    """Quiz model attached to lectures for assessment"""
    QUIZ_TYPES = [
        ('mcq', 'Multiple Choice Questions'),
        ('one_line', 'One Line Answer'),
        ('mixed', 'Mixed (MCQ & One Line)'),
    ]
    
    lecture = models.OneToOneField(Lecture, on_delete=models.CASCADE, related_name='quiz')
    title = models.CharField(max_length=200, help_text="Quiz title")
    description = models.TextField(blank=True, help_text="Instructions for the quiz")
    quiz_type = models.CharField(max_length=20, choices=QUIZ_TYPES, default='mcq')
    
    # Quiz settings
    time_limit_minutes = models.PositiveIntegerField(default=0, help_text="Time limit in minutes (0 = no limit)")
    max_attempts = models.PositiveIntegerField(default=1, help_text="Maximum number of attempts allowed")
    passing_score = models.PositiveIntegerField(default=70, help_text="Passing score percentage (0-100)")
    is_active = models.BooleanField(default=True)
    shuffle_questions = models.BooleanField(default=False, help_text="Randomize question order")
    show_results_immediately = models.BooleanField(default=True, help_text="Show results after submission")
    
    # Timestamps
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)
    
    class Meta:
        verbose_name = 'Quiz'
        verbose_name_plural = 'Quizzes'
        ordering = ['created_at']
    
    def __str__(self):
        return f"Quiz: {self.title} ({self.get_quiz_type_display()})"
    
    @property
    def total_questions(self):
        return self.questions.count()
    
    @property
    def total_points(self):
        return sum(question.points for question in self.questions.all())
    
    @property
    def mcq_questions(self):
        return self.questions.filter(question_type='mcq')
    
    @property
    def one_line_questions(self):
        return self.questions.filter(question_type='one_line')
    
    def get_user_attempts(self, profile):
        """Get number of attempts by a user"""
        return self.attempts.filter(profile=profile).count()
    
    def can_attempt(self, profile):
        """Check if user can attempt the quiz"""
        attempts_count = self.get_user_attempts(profile)
        return attempts_count < self.max_attempts


class QuizQuestion(models.Model):
    """Individual questions within a quiz"""
    QUESTION_TYPES = [
        ('mcq', 'Multiple Choice Question'),
        ('one_line', 'One Line Answer'),
    ]
    
    quiz = models.ForeignKey(Quiz, on_delete=models.CASCADE, related_name='questions')
    question_text = models.TextField(help_text="The question text")
    question_type = models.CharField(max_length=20, choices=QUESTION_TYPES, default='mcq')
    
    # Common fields
    points = models.PositiveIntegerField(default=1, help_text="Points for correct answer")
    order = models.PositiveIntegerField(default=0, help_text="Order of question in quiz")
    
    # For MCQ questions
    option_a = models.CharField(max_length=500, blank=True, help_text="Option A")
    option_b = models.CharField(max_length=500, blank=True, help_text="Option B")
    option_c = models.CharField(max_length=500, blank=True, help_text="Option C")
    option_d = models.CharField(max_length=500, blank=True, help_text="Option D")
    correct_option = models.CharField(
        max_length=1, 
        choices=[('A', 'A'), ('B', 'B'), ('C', 'C'), ('D', 'D')],
        blank=True,
        help_text="Correct answer for MCQ"
    )
    
    # For one-line answer questions
    expected_answer = models.TextField(blank=True, help_text="Expected answer for one-line question")
    case_sensitive = models.BooleanField(default=False, help_text="For one-line answers: check case sensitivity")
    allow_partial_match = models.BooleanField(default=True, help_text="Allow partial matching for one-line answers")
    
    # Explanation for feedback
    explanation = models.TextField(blank=True, help_text="Explanation of correct answer")
    
    # Media support
    image = models.ImageField(upload_to='quiz_questions/', blank=True, null=True)
    
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)
    
    class Meta:
        ordering = ['order', 'created_at']
        verbose_name = 'Quiz Question'
        verbose_name_plural = 'Quiz Questions'
    
    def __str__(self):
        return f"Q{self.order}: {self.question_text[:50]}"
    
    def get_options(self):
        """Return list of options for MCQ"""
        if self.question_type == 'mcq':
            options = []
            if self.option_a:
                options.append({'letter': 'A', 'text': self.option_a})
            if self.option_b:
                options.append({'letter': 'B', 'text': self.option_b})
            if self.option_c:
                options.append({'letter': 'C', 'text': self.option_c})
            if self.option_d:
                options.append({'letter': 'D', 'text': self.option_d})
            return options
        return []
    
    def check_answer(self, user_answer):
        """Check if user's answer is correct based on question type"""
        if self.question_type == 'mcq':
            # user_answer should be 'A', 'B', 'C', or 'D'
            return user_answer and user_answer.upper() == self.correct_option
        
        elif self.question_type == 'one_line':
            if not user_answer:
                return False
            
            if self.case_sensitive:
                user_ans = user_answer.strip()
                expected = self.expected_answer.strip()
            else:
                user_ans = user_answer.strip().lower()
                expected = self.expected_answer.strip().lower()
            
            if self.allow_partial_match:
                # Check if expected answer is contained in user's answer
                return expected in user_ans
            else:
                return user_ans == expected
        
        return False


class QuizAttempt(models.Model):
    """Track each user's quiz attempt"""
    STATUS_CHOICES = [
        ('in_progress', 'In Progress'),
        ('completed', 'Completed'),
        ('abandoned', 'Abandoned'),
    ]
    
    quiz = models.ForeignKey(Quiz, on_delete=models.CASCADE, related_name='attempts')
    profile = models.ForeignKey(Profile, on_delete=models.CASCADE, related_name='quiz_attempts')
    lecture_progress = models.ForeignKey(LectureProgress, on_delete=models.CASCADE, related_name='quiz_attempt_records', null=True, blank=True)
    
    # Attempt tracking
    attempt_number = models.PositiveIntegerField(default=1)
    status = models.CharField(max_length=20, choices=STATUS_CHOICES, default='in_progress')
    
    # Score tracking
    score = models.PositiveIntegerField(default=0, help_text="Points earned")
    total_points = models.PositiveIntegerField(default=0, help_text="Total possible points")
    percentage_score = models.FloatField(default=0.0, help_text="Percentage score (0-100)")
    is_passed = models.BooleanField(default=False)
    
    # Timing
    started_at = models.DateTimeField(auto_now_add=True)
    completed_at = models.DateTimeField(null=True, blank=True)
    time_taken_seconds = models.PositiveIntegerField(default=0, help_text="Time taken in seconds")
    
    # Metadata
    ip_address = models.GenericIPAddressField(null=True, blank=True)
    user_agent = models.TextField(blank=True)
    
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)
    
    class Meta:
        ordering = ['-started_at']
        unique_together = ['quiz', 'profile', 'attempt_number']
        verbose_name = 'Quiz Attempt'
        verbose_name_plural = 'Quiz Attempts'
    
    def __str__(self):
        return f"{self.profile.user.username} - {self.quiz.title} - Attempt {self.attempt_number} ({self.percentage_score}%)"
    
    def calculate_score(self):
        """Calculate total score based on answers"""
        total_points = 0
        earned_points = 0
        
        for answer in self.answers.all():
            total_points += answer.question.points
            if answer.is_correct:
                earned_points += answer.question.points
        
        self.total_points = total_points
        self.score = earned_points
        
        if total_points > 0:
            self.percentage_score = (earned_points / total_points) * 100
        else:
            self.percentage_score = 0
        
        self.is_passed = self.percentage_score >= self.quiz.passing_score
        
        if self.status == 'in_progress':
            self.status = 'completed'
            self.completed_at = timezone.now()
        
        self.save()
        return self.percentage_score
    
    def mark_completed(self):
        """Mark attempt as completed and update lecture progress"""
        if self.status != 'completed':
            self.calculate_score()
            
            # Update lecture progress if linked
            if self.lecture_progress:
                self.lecture_progress.quiz_score = self.score
                self.lecture_progress.quiz_attempts = self.attempt_number
                self.lecture_progress.is_passed = self.is_passed
                self.lecture_progress.save()
                
                # If passed, mark lecture as completed
                if self.is_passed and not self.lecture_progress.is_completed:
                    self.lecture_progress.mark_completed()
            
            return True
        return False

class QuizAnswer(models.Model):
    """Store individual answers for each question in an attempt"""
    attempt = models.ForeignKey(QuizAttempt, on_delete=models.CASCADE, related_name='answers')
    question = models.ForeignKey(QuizQuestion, on_delete=models.CASCADE)
    
    # User's answer
    user_answer = models.TextField(help_text="User's submitted answer")
    is_correct = models.BooleanField(default=False)
    
    # For MCQ - store selected option
    selected_option = models.CharField(max_length=1, blank=True, help_text="Selected option (A/B/C/D)")
    
    # For one-line - store text answer
    text_answer = models.TextField(blank=True, help_text="Text answer for one-line questions")
    
    # Points earned for this question
    points_earned = models.PositiveIntegerField(default=0)
    
    # Feedback
    feedback = models.TextField(blank=True, help_text="Feedback on the answer")
    
    answered_at = models.DateTimeField(auto_now_add=True)
    
    class Meta:
        ordering = ['id']
        unique_together = ['attempt', 'question']
        verbose_name = 'Quiz Answer'
        verbose_name_plural = 'Quiz Answers'
    
    def __str__(self):
        correct_symbol = "✓" if self.is_correct else "✗"
        return f"{correct_symbol} {self.attempt.profile.user.username} - Q{self.question.order}"
    
    def save(self, *args, **kwargs):
        """Override save to determine if answer is correct"""
        if not self.pk:  # Only on creation
            self.is_correct = self.question.check_answer(self.user_answer)
            self.points_earned = self.question.points if self.is_correct else 0
        super().save(*args, **kwargs)


class PasswordResetOTP(models.Model):
    """
    Model to store OTP for password reset/forgot password functionality
    """
    user = models.ForeignKey(User, on_delete=models.CASCADE, related_name='password_reset_otps')
    otp = models.CharField(max_length=6)  # 6 digit OTP: 2 letters + 4 numbers
    is_used = models.BooleanField(default=False)
    created_at = models.DateTimeField(auto_now_add=True)
    expires_at = models.DateTimeField()
    
    class Meta:
        ordering = ['-created_at']
        verbose_name = 'Password Reset OTP'
        verbose_name_plural = 'Password Reset OTPs'
    
    def __str__(self):
        return f"OTP for {self.user.email} - {self.otp} (Expires: {self.expires_at})"
    
    def is_valid(self):
        """Check if OTP is not used and not expired"""
        return not self.is_used and self.expires_at > timezone.now()
    
    @staticmethod
    def generate_otp():
        """
        Generate 6-digit OTP: 2 random letters (uppercase) + 4 random numbers
        Example: AB1234, XY9876
        """
        letters = ''.join(random.choices(string.ascii_uppercase, k=2))
        numbers = ''.join(random.choices(string.digits, k=4))
        return f"{letters}{numbers}"
    
    @staticmethod
    def create_otp_for_user(user, expiry_minutes=10):
        """
        Create and save a new OTP for the user
        Returns: (otp_object, otp_code)
        """
        # Invalidate any existing unused OTPs for this user
        PasswordResetOTP.objects.filter(user=user, is_used=False).update(is_used=True)
        
        otp_code = PasswordResetOTP.generate_otp()
        expires_at = timezone.now() + timezone.timedelta(minutes=expiry_minutes)
        
        otp_obj = PasswordResetOTP.objects.create(
            user=user,
            otp=otp_code,
            expires_at=expires_at,
            is_used=False
        )
        return otp_obj, otp_code


class CourseTransaction(models.Model):
    STATUS_CHOICES = [
        ('pending', 'Pending'),
        ('completed', 'Completed'),
        ('failed', 'Failed'),
        ('refunded', 'Refunded'),
    ]
    PAYMENT_METHODS = [
        ('stripe', 'Stripe'),
        ('paypal', 'PayPal'),
        ('razorpay', 'Razorpay'),
        ('card', 'Credit/Debit Card'),
    ]

    user = models.ForeignKey(Profile, on_delete=models.CASCADE, related_name='coursetransactions')
    course = models.ForeignKey(Course, on_delete=models.CASCADE)
    transaction_id = models.CharField(max_length=100, unique=True)
    base_amount = models.DecimalField(max_digits=10, decimal_places=2, default=0.00)  # Price before GST
    gst_amount = models.DecimalField(max_digits=10, decimal_places=2, default=0.00)   # GST amount (18%)
    amount = models.DecimalField(max_digits=10, decimal_places=2, default=0.00)       # Total (base + GST)
    status = models.CharField(max_length=20, choices=STATUS_CHOICES, default='pending')
    purchase_date = models.DateTimeField(auto_now_add=True)
    expiry_date = models.DateField(null=True, blank=True)
    payment_method = models.CharField(max_length=20, choices=PAYMENT_METHODS, blank=True)
    receipt = models.FileField(upload_to='transactions/receipts/', blank=True, null=True)
    is_active = models.BooleanField(default=True)

    class Meta:
        ordering = ['-purchase_date']
        # Add unique constraint to prevent duplicate pending transactions
        constraints = [
            models.UniqueConstraint(
                fields=['user', 'course', 'status'],
                condition=models.Q(status='pending'),
                name='unique_pending_cart_item'
            )
        ]

    def save(self, *args, **kwargs):
        """Override save to create UserCourseAccess when transaction is completed"""
        is_new = self.pk is None
        super().save(*args, **kwargs)
        
        # If transaction status changed to 'completed', grant access
        if self.status == 'completed':
            access, created = UserCourseAccess.objects.get_or_create(
                user=self.user,
                course=self.course,
                defaults={'transaction': self}
            )
            if not created and access.transaction is None:
                access.transaction = self
                access.save()

    def __str__(self):
        return f"{self.user.user.username} bought {self.course.title} - {self.status} (₹{self.amount})"


# OurTeam 
class TeamMember(models.Model):
    name = models.CharField(max_length=100)
    designation = models.CharField(max_length=100)
    image = models.ImageField(upload_to='team/')
    bio = models.TextField(blank=True, null=True)
    order = models.PositiveIntegerField(default=0)

    facebook = models.URLField(blank=True, null=True)
    twitter = models.URLField(blank=True, null=True)
    instagram = models.URLField(blank=True, null=True)
    linkedin = models.URLField(blank=True, null=True)

    is_active = models.BooleanField(default=True)
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.name

    class Meta:
        ordering = ['order']


# Live Batches 
class LiveCourse(models.Model):
    CATEGORY_CHOICES = [
        ('web_dev', 'Web Development'),
        ('dev_ops', 'DevOps'),
        ('ai_ml', 'AI/ML'),
        ('cybersecurity', 'Cybersecurity'),
        ('cloud', 'Cloud Computing'),
        ('linux', 'Linux'),
    ]
    title = models.CharField(max_length=200)
    description = models.TextField()
    category = models.CharField(max_length=20, choices=CATEGORY_CHOICES, default='web_dev')
    image = models.ImageField(upload_to='courses/')
    price = models.DecimalField(max_digits=10, decimal_places=2, default=0.00)
    
    is_live = models.BooleanField(default=False)   # for LIVE badge
    start_day = models.CharField(max_length=50)    # e.g. Monday
    start_time = models.CharField(max_length=50)   # e.g. 7 PM
    
    button_text = models.CharField(max_length=50, default="Join Batch")
    button_link = models.URLField(blank=True, null=True)

    is_active = models.BooleanField(default=True)
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.title


class Contact(models.Model):
    name = models.CharField(max_length=100)
    email = models.EmailField()
    subject = models.CharField(max_length=200)
    message = models.TextField()
    created_at = models.DateTimeField(auto_now_add=True)
    is_read = models.BooleanField(default=False)

    def __str__(self):
        return f"{self.name} - {self.subject}"

    class Meta:
        ordering = ['-created_at']


class LiveCourseRegistration(models.Model):
    profile = models.ForeignKey(Profile, on_delete=models.CASCADE, related_name='live_registrations')
    live_course = models.ForeignKey(LiveCourse, on_delete=models.CASCADE, related_name='registrations')
    batch_timing = models.CharField(
        max_length=10, 
        choices=[('weekdays', 'Weekdays'), ('weekends', 'Weekends')],
        default='weekdays'
    )
    registered_at = models.DateTimeField(auto_now_add=True)
    status = models.CharField(max_length=20, default='pending', choices=[
        ('pending', 'Pending'),
        ('enrolled', 'Enrolled'),
        ('cancelled', 'Cancelled'),
    ])

    class Meta:
        unique_together = ['profile', 'live_course']
        # Add constraint to prevent duplicate pending registrations
        constraints = [
            models.UniqueConstraint(
                fields=['profile', 'live_course', 'status'],
                condition=models.Q(status='pending'),
                name='unique_pending_registration'
            )
        ]

    def __str__(self):
        return f"{self.profile} - {self.live_course.title}"


class LiveCourseTransaction(models.Model):
    STATUS_CHOICES = [
        ('pending', 'Pending'),
        ('completed', 'Completed'),
        ('failed', 'Failed'),
        ('refunded', 'Refunded'),
    ]
    PAYMENT_METHODS = [
        ('stripe', 'Stripe'),
        ('paypal', 'PayPal'),
        ('razorpay', 'Razorpay'),
        ('card', 'Credit/Debit Card'),
    ]

    profile = models.ForeignKey(Profile, on_delete=models.CASCADE, related_name='live_transactions')
    live_course = models.ForeignKey(LiveCourse, on_delete=models.CASCADE)
    transaction_id = models.CharField(max_length=100, unique=True)
    base_amount = models.DecimalField(max_digits=10, decimal_places=2)
    gst_amount = models.DecimalField(max_digits=10, decimal_places=2)
    total_amount = models.DecimalField(max_digits=10, decimal_places=2)
    status = models.CharField(max_length=20, choices=STATUS_CHOICES, default='pending')
    purchase_date = models.DateTimeField(auto_now_add=True)
    expiry_date = models.DateField(null=True, blank=True)
    payment_method = models.CharField(max_length=20, choices=PAYMENT_METHODS, blank=True)
    receipt = models.FileField(upload_to='live_transactions/receipts/', blank=True, null=True)
    is_active = models.BooleanField(default=True)

    class Meta:
        ordering = ['-purchase_date']
        # Add unique constraint to prevent duplicate pending transactions
        constraints = [
            models.UniqueConstraint(
                fields=['profile', 'live_course', 'status'],
                condition=models.Q(status='pending'),
                name='unique_pending_live_cart_item'
            )
        ]

    def __str__(self):
        return f"{self.profile.user.username} - {self.live_course.title} - ₹{self.total_amount} ({self.status})"
    

class Invoice(models.Model):
    """
    Invoice model for tracking purchases and generating PDF invoices
    """
    INVOICE_STATUS_CHOICES = [
        ('paid', 'Paid'),
        ('pending', 'Pending'),
        ('cancelled', 'Cancelled'),
        ('refunded', 'Refunded'),
    ]
    
    # Unique invoice number (e.g., INV-20241201-0001)
    invoice_number = models.CharField(max_length=50, unique=True, editable=False)
    
    # Relationships
    profile = models.ForeignKey(Profile, on_delete=models.CASCADE, related_name='invoices')
    course = models.ForeignKey(Course, on_delete=models.SET_NULL, null=True, blank=True, related_name='invoices')
    live_course = models.ForeignKey(LiveCourse, on_delete=models.SET_NULL, null=True, blank=True, related_name='invoices')
    
    # Transaction references
    course_transaction = models.ForeignKey(CourseTransaction, on_delete=models.SET_NULL, null=True, blank=True, related_name='invoices')
    live_transaction = models.ForeignKey(LiveCourseTransaction, on_delete=models.SET_NULL, null=True, blank=True, related_name='invoices')
    
    # Invoice details
    invoice_date = models.DateTimeField(auto_now_add=True)
    base_amount = models.DecimalField(max_digits=10, decimal_places=2, default=0.00)
    tax_amount = models.DecimalField(max_digits=10, decimal_places=2, default=0.00)  # GST etc.
    tax_rate = models.DecimalField(max_digits=5, decimal_places=2, default=18.00)  # 18% GST
    total_amount = models.DecimalField(max_digits=10, decimal_places=2, default=0.00)
    
    # Payment details
    payment_status = models.CharField(max_length=20, choices=INVOICE_STATUS_CHOICES, default='paid')
    payment_method = models.CharField(max_length=50, blank=True, help_text="e.g., Stripe, PayPal, Razorpay")
    payment_transaction_id = models.CharField(max_length=100, blank=True, help_text="Gateway transaction ID")
    
    # Customer details captured at time of purchase (for historical record)
    customer_name = models.CharField(max_length=100)
    customer_email = models.EmailField()
    customer_phone = models.CharField(max_length=15)
    customer_address = models.TextField(blank=True)
    
    # Invoice metadata
    notes = models.TextField(blank=True, help_text="Any additional notes on invoice")
    pdf_file = models.FileField(upload_to='invoices/', blank=True, null=True, help_text="Generated PDF file")
    is_downloaded = models.BooleanField(default=False)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)
    
    class Meta:
        ordering = ['-invoice_date']
        verbose_name = 'Invoice'
        verbose_name_plural = 'Invoices'
    
    def __str__(self):
        course_title = self.course.title if self.course else (self.live_course.title if self.live_course else 'N/A')
        return f"{self.invoice_number} - {self.customer_name} - {course_title}"
    
    @property
    def get_course_title(self):
        """Get the course title (either normal or live)"""
        if self.course:
            return self.course.title
        elif self.live_course:
            return self.live_course.title
        return "Unknown Course"
    
    @staticmethod
    def generate_invoice_number():
        """
        Generate unique invoice number
        Format: INV-YYYYMMDD-XXXX (where XXXX is sequential)
        """
        from datetime import datetime
        date_prefix = datetime.now().strftime('%Y%m%d')
        
        # Get the last invoice number for today
        last_invoice = Invoice.objects.filter(
            invoice_number__startswith=f"INV-{date_prefix}"
        ).order_by('-invoice_number').first()
        
        if last_invoice:
            # Extract the sequence number and increment
            last_seq = int(last_invoice.invoice_number.split('-')[-1])
            new_seq = last_seq + 1
        else:
            new_seq = 1
        
        return f"INV-{date_prefix}-{new_seq:04d}"
    

# ==================== SIGNALS FOR AUTO-INVOICE CREATION ====================

@receiver(post_save, sender=User)
def sync_profile_email(sender, instance, created, **kwargs):
    """
    Automatically sync Profile.email when User.email changes (admin update)
    Makes User.email the single source of truth for email across system
    """
    try:
        profile, _ = Profile.objects.get_or_create(user=instance)
        if profile.email != instance.email:
            profile.email = instance.email
            profile.save(update_fields=['email'])
    except Profile.DoesNotExist:
        pass


@receiver(post_save, sender=CourseTransaction)
def create_invoice_for_course_transaction(sender, instance, created, **kwargs):
    """
    Automatically create an invoice when a CourseTransaction is marked as 'completed'
    """
    if instance.status == 'completed' and instance.is_active:
        # Check if invoice already exists for this transaction
        if not Invoice.objects.filter(course_transaction=instance).exists():
            profile = instance.user
            course = instance.course
            
            # Use stored amounts from the transaction (base_amount, gst_amount already calculated)
            base_amount = instance.base_amount
            tax_amount = instance.gst_amount
            total_amount = instance.amount
            tax_rate = Decimal('18.00')
            
            # Generate invoice number
            invoice_number = Invoice.generate_invoice_number()
            
            # Create the invoice
            invoice = Invoice.objects.create(
                invoice_number=invoice_number,
                profile=profile,
                course=course,
                live_course=None,
                course_transaction=instance,
                live_transaction=None,
                base_amount=base_amount,
                tax_amount=tax_amount,
                tax_rate=tax_rate,
                total_amount=total_amount,
                payment_status='paid',
                payment_method=instance.payment_method if hasattr(instance, 'payment_method') else '',
                payment_transaction_id=instance.transaction_id,
                customer_name=f"{profile.first_name} {profile.last_name}".strip() or profile.user.username,
                customer_email=profile.user.email,
                customer_phone=profile.phone or '',
                customer_address=profile.address or '',
            )
            
            # Auto-generate and save PDF for the invoice
            try:
                from .services.invoice_pdf import save_pdf_to_model
                save_pdf_to_model(invoice)
                logger.info(f"PDF auto-generated for invoice {invoice.invoice_number}")
            except Exception as e:
                logger.error(f"Failed to auto-generate PDF for invoice {invoice.invoice_number}: {str(e)}")


@receiver(post_save, sender=Invoice)
def send_email_on_invoice_creation(sender, instance, created, **kwargs):
    """
    Automatically send invoice email after invoice is created with paid status
    """
    if created and instance.payment_status == 'paid':
        try:
            from .services.emailjs_service import send_invoice_email
            send_invoice_email(instance, request=None)
            logger.info(f"Invoice email sent for {instance.invoice_number}")
        except Exception as e:
            logger.error(f"Failed to send invoice email: {str(e)}")


@receiver(post_save, sender=LiveCourseTransaction)
def create_invoice_for_live_course_transaction(sender, instance, created, **kwargs):
    """
    Automatically create an invoice when a LiveCourseTransaction is marked as 'completed'
    """
    if instance.status == 'completed' and instance.is_active:
        # Check if invoice already exists for this transaction
        if not Invoice.objects.filter(live_transaction=instance).exists():
            profile = instance.profile
            live_course = instance.live_course
            
            # Use the stored amounts from the transaction
            base_amount = instance.base_amount
            tax_amount = instance.gst_amount
            total_amount = instance.total_amount
            tax_rate = Decimal('18.00')
            
            # Generate invoice number
            invoice_number = Invoice.generate_invoice_number()
            
            # Create the invoice
            invoice = Invoice.objects.create(
                invoice_number=invoice_number,
                profile=profile,
                course=None,
                live_course=live_course,
                course_transaction=None,
                live_transaction=instance,
                base_amount=base_amount,
                tax_amount=tax_amount,
                tax_rate=tax_rate,
                total_amount=total_amount,
                payment_status='paid',
                payment_method=instance.payment_method if hasattr(instance, 'payment_method') else '',
                payment_transaction_id=instance.transaction_id,
                customer_name=f"{profile.first_name} {profile.last_name}".strip() or profile.user.username,
                customer_email=profile.user.email,
                customer_phone=profile.phone or '',
                customer_address=profile.address or '',
            )
            
            # Auto-generate and save PDF for the invoice
            try:
                from .services.invoice_pdf import save_pdf_to_model
                save_pdf_to_model(invoice)
                logger.info(f"PDF auto-generated for invoice {invoice.invoice_number}")
            except Exception as e:
                logger.error(f"Failed to auto-generate PDF for invoice {invoice.invoice_number}: {str(e)}")


# ==================== SIGNAL FOR AUTO-CREATING QUIZ ====================

@receiver(post_save, sender=Lecture)
def create_quiz_for_quiz_lecture(sender, instance, created, **kwargs):
    """
    Automatically create a quiz when a lecture of type 'quiz' is created
    """
    if instance.lecture_type == 'quiz' and created:
        # Check if quiz doesn't already exist
        if not hasattr(instance, 'quiz'):
            Quiz.objects.create(
                lecture=instance,
                title=f"Quiz: {instance.title}",
                description="Please answer all questions to complete this quiz.",
                quiz_type='mcq',
                max_attempts=2,
                passing_score=70
            )
            logger.info(f"Auto-created quiz for lecture: {instance.title}")

@receiver(models.signals.post_save, sender=QuizAttempt)
def update_progress_on_quiz_complete(sender, instance, created, **kwargs):
    """
    Ensure lecture is marked complete if quiz is passed (safety net)
    """
    if instance.status == 'completed' and instance.is_passed and not created:
        try:
            lecture_progress = instance.lecture_progress
            if lecture_progress and not lecture_progress.is_completed:
                lecture_progress.mark_completed()
                logger.info(f"Quiz pass auto-completed lecture progress for user {instance.profile.user.username}")
        except LectureProgress.DoesNotExist:
            pass
