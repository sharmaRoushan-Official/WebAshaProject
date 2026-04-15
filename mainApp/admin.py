from django.contrib import admin
from .models import Course, CourseDetails, LiveCourse, TeamMember

# Register your models here.

class CourseDetailsInline(admin.TabularInline):
    model = CourseDetails
    fk_name = 'course'
    fields = ('instructor', 'duration', 'level', 'prerequisites', 'objectives', 'syllabus', 'thumbnail', 'total_lessons')
    extra = 0

@admin.register(Course)
class CourseAdmin(admin.ModelAdmin):
    list_display = ('title', 'course_number', 'is_active', 'created_at')
    search_fields = ('title', 'description')
    list_filter = ('is_active', 'created_at')
    inlines = [CourseDetailsInline]  # Added inlines here

# ourTem
@admin.register(TeamMember)
class TeamMemberAdmin(admin.ModelAdmin):
    list_display = ('name', 'designation', 'is_active', 'created_at')
    search_fields = ('name', 'designation')
    list_filter = ('is_active', 'created_at')

@admin.register(LiveCourse)
class LiveCourseAdmin(admin.ModelAdmin):
    list_display = ['title', 'is_live', 'is_active', 'created_at']
    list_filter = ['is_live', 'is_active']

@admin.register(CourseDetails)
class CourseDetailsAdmin(admin.ModelAdmin):
    list_display = ('course', 'instructor', 'duration', 'level', 'total_lessons')
    list_filter = ('level', 'instructor')
    search_fields = ('course__title', 'instructor__name')
    readonly_fields = ('course',)