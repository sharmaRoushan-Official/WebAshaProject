from mainApp.models import Course, Chapter, Lecture

course = Course.objects.get(id=2)
print('Course:', course)
chapters = course.chapters.all()
print('Chapters:', chapters.count())

for c in chapters:
    print(f'  {c.title} - lectures: {c.lectures.count()}')
    for lec in c.lectures.all():
        print(f'    Lecture: {lec.title}')
        print(f'    video_url: {getattr(lec, "video_url", "No video_url")}')
        print(f'    YouTube URL check: {"youtube.com" in str(getattr(lec, "video_url", "")) or "youtu.be" in str(getattr(lec, "video_url", ""))}')
        print('---')

# Check first lecture
lec = Lecture.objects.filter(chapter__course=course).first()
if lec:
    print(f'\nFirst lecture: {lec.title}')
    print(f'video_url field exists: {hasattr(lec, "video_url")}')
    print(f'video_url value: {lec.video_url if hasattr(lec, "video_url") else "Field missing"}')