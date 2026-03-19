from django.contrib import admin
from .models import Course, LiveCourse
from .models import TeamMember

# Register your models here.

@admin.register(Course)
class CourseAdmin(admin.ModelAdmin):
    list_display = ('title', 'course_number', 'is_active', 'created_at')
    search_fields = ('title', 'description')
    list_filter = ('is_active', 'created_at')


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