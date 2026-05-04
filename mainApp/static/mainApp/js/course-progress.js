// Global course progress updater
// To be included in base.html or course pages

function updateCourseProgress(courseId) {
  const csrftoken = getCookie('csrftoken');
  
  fetch(`/ajax/course-progress/${courseId}/`, {
    method: 'GET',
    headers: {
      'X-Requested-With': 'XMLHttpRequest',
      'X-CSRFToken': csrftoken
    }
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      // Update all progress bars on page
      const progressBars = document.querySelectorAll('.progress-bar');
      const progressTexts = document.querySelectorAll('.text-muted small, .course-progress-text');
      
      progressBars.forEach(bar => {
        bar.style.width = data.percentage + '%';
        bar.textContent = data.percentage.toFixed(0) + '%';
        bar.setAttribute('aria-valuenow', data.percentage);
      });
      
      progressTexts.forEach(text => {
        if (text) {
          text.textContent = `${data.completed_count} / ${data.total_lectures} lectures`;
        }
      });
      
      // Update top progress display
      const topProgress = document.querySelector('.cd-body .cd-meta-row span:last-child');
      if (topProgress) {
        topProgress.innerHTML = `<span style="color:var(--green);">Your progress: ${data.percentage.toFixed(0)}%</span>`;
      }
      
      console.log('Course progress updated:', data.percentage + '%');
    }
  })
  .catch(error => console.error('Progress update failed:', error));
}

function getCookie(name) {
  let cookieValue = null;
  if (document.cookie && document.cookie !== '') {
    const cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
      const cookie = cookies[i].trim();
      if (cookie.substring(0, name.length + 1) === (name + '=')) {
        cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
        break;
      }
    }
  }
  return cookieValue;
}

// Auto-init on pages with course data
document.addEventListener('DOMContentLoaded', function() {
  const courseId = document.body.dataset.courseId;
  if (courseId) {
    // Initial sync
    updateCourseProgress(courseId);
    
    // Listen for progress update events (from quiz complete, etc.)
    window.addEventListener('courseProgressUpdate', function(e) {
      updateCourseProgress(courseId);
    });
  }
});

// Export for use in other scripts
window.updateCourseProgress = updateCourseProgress;

