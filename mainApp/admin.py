from django.contrib import admin
from .models import (
    Course, CourseDetails, Chapter, Lecture, Profile, 
    UserCourseAccess, LectureProgress, PasswordResetOTP,
    CourseTransaction, TeamMember, LiveCourse, Contact,
    LiveCourseRegistration, LiveCourseTransaction,
    Quiz, QuizQuestion, QuizAttempt, QuizAnswer
)

# Register your models here.

class CourseDetailsInline(admin.TabularInline):
    model = CourseDetails
    fk_name = 'course'
    fields = ('instructor', 'duration', 'level', 'prerequisites', 'objectives', 'syllabus', 'thumbnail', 'total_lessons')
    extra = 0


class ChapterInline(admin.TabularInline):
    """Inline for chapters within Course admin"""
    model = Chapter
    fields = ('title', 'order', 'is_preview', 'description')
    extra = 1
    ordering = ['order']


class LectureInline(admin.TabularInline):
    """Inline for lectures within Chapter admin"""
    model = Lecture
    fields = ('title', 'lecture_type', 'order', 'duration_minutes', 'is_free_preview', 'is_downloadable')
    extra = 1
    ordering = ['order']


class QuizQuestionInline(admin.TabularInline):
    """Inline for questions within Quiz admin"""
    model = QuizQuestion
    fields = ('question_text', 'question_type', 'points', 'order', 'correct_option', 'expected_answer')
    extra = 1
    ordering = ['order']
    show_change_link = True


class QuizAttemptAnswerInline(admin.TabularInline):
    """Inline for answers within QuizAttempt admin"""
    model = QuizAnswer
    fields = ('question', 'user_answer', 'is_correct', 'points_earned')
    readonly_fields = ('question', 'user_answer', 'is_correct', 'points_earned')
    extra = 0
    can_delete = False
    max_num = 0


@admin.register(Course)
class CourseAdmin(admin.ModelAdmin):
    list_display = ('title', 'course_number', 'price', 'is_active', 'total_lectures', 'created_at')
    search_fields = ('title', 'description', 'course_number')
    list_filter = ('is_active', 'created_at')
    list_editable = ('price', 'is_active')
    inlines = [CourseDetailsInline, ChapterInline]
    
    def total_lectures(self, obj):
        return obj.total_lectures
    total_lectures.short_description = 'Total Lectures'


@admin.register(Chapter)
class ChapterAdmin(admin.ModelAdmin):
    list_display = ('title', 'course', 'order', 'lecture_count', 'is_preview', 'created_at')
    search_fields = ('title', 'course__title')
    list_filter = ('course', 'is_preview', 'created_at')
    list_editable = ('order', 'is_preview')
    inlines = [LectureInline]
    
    def lecture_count(self, obj):
        return obj.lecture_count
    lecture_count.short_description = 'Lectures'


@admin.register(Lecture)
class LectureAdmin(admin.ModelAdmin):
    list_display = ('title', 'chapter', 'lecture_type', 'order', 'duration_minutes', 'is_free_preview', 'has_quiz_badge', 'created_at')
    search_fields = ('title', 'chapter__title', 'chapter__course__title')
    list_filter = ('lecture_type', 'is_free_preview', 'is_downloadable', 'chapter__course')
    list_editable = ('order', 'duration_minutes', 'is_free_preview')
    fieldsets = (
        ('Basic Information', {
            'fields': ('chapter', 'title', 'lecture_type', 'order')
        }),
        ('Content', {
            'fields': ('video_url', 'video_embed_code', 'resource_file', 'content'),
            'classes': ('wide',)
        }),
        ('Metadata', {
            'fields': ('duration_minutes', 'is_free_preview', 'is_downloadable'),
            'classes': ('wide',)
        }),
        ('Quiz/Assignment Settings', {
            'fields': ('passing_score',),
            'classes': ('collapse',)
        }),
    )
    
    def has_quiz_badge(self, obj):
        return obj.has_quiz
    has_quiz_badge.boolean = True
    has_quiz_badge.short_description = 'Has Quiz'


@admin.register(Profile)
class ProfileAdmin(admin.ModelAdmin):
    list_display = ('user', 'first_name', 'last_name', 'email', 'phone', 'is_student', 'is_active')
    search_fields = ('user__username', 'first_name', 'last_name', 'email', 'phone')
    list_filter = ('is_student', 'is_active', 'date_joined_institute')
    readonly_fields = ('user', 'date_joined_institute')
    fieldsets = (
        ('User Information', {
            'fields': ('user', 'first_name', 'last_name')
        }),
        ('Contact Details', {
            'fields': ('phone', 'address', 'profile_image', 'email')
        }),
        ('Personal Info', {
            'fields': ('bio', 'date_joined_institute')
        }),
        ('Account Status', {
            'fields': ('is_student', 'is_active', 'password')
        }),
    )
    
    def get_readonly_fields(self, request, obj=None):
        readonly_fields = list(super().get_readonly_fields(request, obj))
        if obj:
            readonly_fields.append('email')
        return readonly_fields


@admin.register(UserCourseAccess)
class UserCourseAccessAdmin(admin.ModelAdmin):
    list_display = ('user', 'course', 'is_active', 'completion_percentage', 'is_completed', 'access_granted_at')
    search_fields = ('user__user__username', 'course__title')
    list_filter = ('is_active', 'is_completed', 'access_granted_at')
    readonly_fields = ('access_granted_at', 'completion_percentage')
    list_editable = ('is_active',)
    
    def get_queryset(self, request):
        return super().get_queryset(request).select_related('user', 'course')


@admin.register(LectureProgress)
class LectureProgressAdmin(admin.ModelAdmin):
    list_display = ('user', 'lecture', 'is_completed', 'watch_time_display', 'quiz_score', 'is_passed', 'updated_at')
    search_fields = ('user__user__username', 'lecture__title')
    list_filter = ('is_completed', 'is_passed', 'created_at')
    readonly_fields = ('created_at', 'updated_at')
    
    def watch_time_display(self, obj):
        minutes = obj.watch_time_seconds // 60
        seconds = obj.watch_time_seconds % 60
        return f"{minutes}m {seconds}s"
    watch_time_display.short_description = 'Watch Time'


@admin.register(PasswordResetOTP)
class PasswordResetOTPAdmin(admin.ModelAdmin):
    list_display = ('user', 'otp', 'is_used', 'created_at', 'expires_at', 'is_valid')
    search_fields = ('user__email', 'user__username', 'otp')
    list_filter = ('is_used', 'created_at')
    readonly_fields = ('created_at',)
    
    def is_valid(self, obj):
        return obj.is_valid()
    is_valid.boolean = True
    is_valid.short_description = 'Valid'


@admin.register(CourseTransaction)
class CourseTransactionAdmin(admin.ModelAdmin):
    list_display = ('transaction_id', 'user', 'course', 'amount', 'status', 'purchase_date', 'payment_method')
    search_fields = ('transaction_id', 'user__user__username', 'course__title')
    list_filter = ('status', 'payment_method', 'purchase_date')
    readonly_fields = ('transaction_id', 'purchase_date')
    list_editable = ('status',)
    
    def get_queryset(self, request):
        return super().get_queryset(request).select_related('user', 'course')


# Our Team
@admin.register(TeamMember)
class TeamMemberAdmin(admin.ModelAdmin):
    list_display = ('name', 'designation', 'order', 'is_active', 'created_at')
    search_fields = ('name', 'designation', 'bio')
    list_filter = ('is_active', 'created_at')
    list_editable = ('order', 'is_active')
    fieldsets = (
        ('Basic Information', {
            'fields': ('name', 'designation', 'image', 'bio', 'order')
        }),
        ('Social Media Links', {
            'fields': ('facebook', 'twitter', 'instagram', 'linkedin'),
            'classes': ('collapse',)
        }),
        ('Status', {
            'fields': ('is_active',)
        }),
    )


@admin.register(LiveCourse)
class LiveCourseAdmin(admin.ModelAdmin):
    list_display = ('title', 'category', 'price', 'is_live', 'start_day', 'start_time', 'is_active', 'created_at')
    list_filter = ('category', 'is_live', 'is_active', 'created_at')
    search_fields = ('title', 'description')
    list_editable = ('price', 'is_live', 'is_active')
    fieldsets = (
        ('Course Information', {
            'fields': ('title', 'description', 'category', 'image', 'price')
        }),
        ('Schedule', {
            'fields': ('start_day', 'start_time')
        }),
        ('Live Settings', {
            'fields': ('is_live', 'button_text', 'button_link')
        }),
        ('Status', {
            'fields': ('is_active',)
        }),
    )


@admin.register(CourseDetails)
class CourseDetailsAdmin(admin.ModelAdmin):
    list_display = ('course', 'instructor', 'duration', 'level', 'total_lessons')
    list_filter = ('level', 'instructor')
    search_fields = ('course__title', 'instructor__name')
    readonly_fields = ('course',)
    fieldsets = (
        ('Course Association', {
            'fields': ('course', 'instructor')
        }),
        ('Course Information', {
            'fields': ('duration', 'level', 'total_lessons')
        }),
        ('Content', {
            'fields': ('prerequisites', 'objectives', 'syllabus', 'thumbnail')
        }),
    )


@admin.register(Contact)
class ContactAdmin(admin.ModelAdmin):
    list_display = ('name', 'email', 'subject', 'created_at', 'is_read')
    search_fields = ('name', 'email', 'subject', 'message')
    list_filter = ('is_read', 'created_at')
    readonly_fields = ('created_at',)
    list_editable = ('is_read',)
    
    def has_add_permission(self, request):
        return False  # Contacts should only be created by users, not admin


@admin.register(LiveCourseRegistration)
class LiveCourseRegistrationAdmin(admin.ModelAdmin):
    list_display = ('profile', 'live_course', 'batch_timing', 'status', 'registered_at')
    search_fields = ('profile__user__username', 'live_course__title')
    list_filter = ('batch_timing', 'status', 'registered_at')
    list_editable = ('status',)
    readonly_fields = ('registered_at',)


@admin.register(LiveCourseTransaction)
class LiveCourseTransactionAdmin(admin.ModelAdmin):
    list_display = ('transaction_id', 'profile', 'live_course', 'total_amount', 'status', 'purchase_date')
    search_fields = ('transaction_id', 'profile__user__username', 'live_course__title')
    list_filter = ('status', 'payment_method', 'purchase_date')
    readonly_fields = ('transaction_id', 'purchase_date')
    list_editable = ('status',)
    
    def get_queryset(self, request):
        return super().get_queryset(request).select_related('profile', 'live_course')


# ==================== QUIZ MODELS ADMIN REGISTRATION ====================

class QuizQuestionInline(admin.TabularInline):
    """Inline for questions within Quiz admin"""
    model = QuizQuestion
    fields = ('question_text', 'question_type', 'points', 'order', 'correct_option', 'expected_answer')
    extra = 1
    ordering = ['order']
    show_change_link = True


@admin.register(Quiz)
class QuizAdmin(admin.ModelAdmin):
    list_display = ('title', 'lecture', 'quiz_type', 'max_attempts', 'passing_score', 'total_questions', 'is_active')
    list_filter = ('quiz_type', 'is_active', 'created_at')
    search_fields = ('title', 'lecture__title', 'lecture__chapter__course__title')
    list_editable = ('max_attempts', 'passing_score', 'is_active')
    inlines = [QuizQuestionInline]
    fieldsets = (
        ('Basic Information', {
            'fields': ('lecture', 'title', 'description', 'quiz_type')
        }),
        ('Quiz Settings', {
            'fields': ('time_limit_minutes', 'max_attempts', 'passing_score', 'shuffle_questions', 'show_results_immediately'),
            'classes': ('wide',)
        }),
        ('Status', {
            'fields': ('is_active',)
        }),
    )
    readonly_fields = ('created_at', 'updated_at')
    
    def total_questions(self, obj):
        return obj.total_questions
    total_questions.short_description = 'Total Questions'


@admin.register(QuizQuestion)
class QuizQuestionAdmin(admin.ModelAdmin):
    list_display = ('question_text_short', 'quiz', 'question_type', 'points', 'order', 'created_at')
    list_filter = ('question_type', 'quiz', 'created_at')
    search_fields = ('question_text', 'quiz__title')
    list_editable = ('points', 'order')
    fieldsets = (
        ('Question Information', {
            'fields': ('quiz', 'question_text', 'question_type', 'points', 'order')
        }),
        ('MCQ Options (for MCQ type)', {
            'fields': ('option_a', 'option_b', 'option_c', 'option_d', 'correct_option'),
            'classes': ('collapse',)
        }),
        ('One-Line Answer (for one_line type)', {
            'fields': ('expected_answer', 'case_sensitive', 'allow_partial_match'),
            'classes': ('collapse',)
        }),
        ('Feedback & Media', {
            'fields': ('explanation', 'image'),
            'classes': ('wide',)
        }),
    )
    
    def question_text_short(self, obj):
        return obj.question_text[:50] + '...' if len(obj.question_text) > 50 else obj.question_text
    question_text_short.short_description = 'Question'


@admin.register(QuizAttempt)
class QuizAttemptAdmin(admin.ModelAdmin):
    list_display = ('profile', 'quiz', 'attempt_number', 'percentage_score', 'is_passed', 'status', 'completed_at')
    list_filter = ('is_passed', 'status', 'quiz', 'created_at')
    search_fields = ('profile__user__username', 'quiz__title')
    readonly_fields = ('started_at', 'completed_at', 'created_at', 'updated_at')
    fieldsets = (
        ('Attempt Information', {
            'fields': ('quiz', 'profile', 'lecture_progress', 'attempt_number', 'status')
        }),
        ('Score Details', {
            'fields': ('score', 'total_points', 'percentage_score', 'is_passed')
        }),
        ('Timing', {
            'fields': ('started_at', 'completed_at', 'time_taken_seconds')
        }),
        ('Metadata', {
            'fields': ('ip_address', 'user_agent'),
            'classes': ('collapse',)
        }),
    )
    
    def get_queryset(self, request):
        return super().get_queryset(request).select_related('profile', 'quiz')


@admin.register(QuizAnswer)
class QuizAnswerAdmin(admin.ModelAdmin):
    list_display = ('attempt', 'question', 'user_answer_short', 'is_correct', 'points_earned', 'answered_at')
    list_filter = ('is_correct', 'answered_at')
    search_fields = ('attempt__profile__user__username', 'question__question_text')
    readonly_fields = ('answered_at',)
    fieldsets = (
        ('Answer Information', {
            'fields': ('attempt', 'question', 'user_answer', 'is_correct', 'points_earned')
        }),
        ('Detailed Answer (for MCQ/One-line)', {
            'fields': ('selected_option', 'text_answer'),
            'classes': ('collapse',)
        }),
        ('Feedback', {
            'fields': ('feedback',)
        }),
    )
    
    def user_answer_short(self, obj):
        return obj.user_answer[:50] + '...' if len(obj.user_answer) > 50 else obj.user_answer
    user_answer_short.short_description = 'Answer'
    
    def has_add_permission(self, request):
        return False  # Answers are created automatically when user takes quiz
    
    def has_delete_permission(self, request, obj=None):
        return False  # Prevent deletion of quiz answers for data integrity