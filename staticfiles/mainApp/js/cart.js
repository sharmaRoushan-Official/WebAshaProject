// Cart functionality for course detail and cart page
document.addEventListener('DOMContentLoaded', function() {
  // Function to check course status and update button
  function checkCourseStatus(courseId, btn) {
    fetch(`/ajax/course-status/${courseId}/`, {
      headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(response => response.json())
    .then(data => {
      if (data.status === 'purchased') {
        btn.innerHTML = '<i class="fas fa-check-circle text-success me-2"></i>Purchased ✓';
        btn.classList.remove('btn-primary');
        btn.classList.add('btn-success', 'disabled-btn');
        btn.style.cursor = 'default';
        btn.href = '{% url "my_courses" %}';  // For <a> tags
        btn.onclick = (e) => { window.location.href = '{% url "my_courses" %}'; e.preventDefault(); };
      } else if (data.status === 'incart') {
        btn.innerHTML = '<i class="fas fa-check me-2"></i>In Cart';
        btn.classList.remove('btn-primary');
        btn.classList.add('btn-success');
        btn.onclick = null;  // Remove any navigation
      } else {  // available
        btn.innerHTML = '<i class="fas fa-cart-plus me-2"></i>Add to Cart';
        btn.classList.remove('btn-success');
        btn.classList.add('btn-primary');
      }
      // Update cart badges
      const cartBadges = document.querySelectorAll('.cart-badge');
      cartBadges.forEach(badge => {
        badge.textContent = data.count;
        badge.style.display = data.count > 0 ? 'inline' : 'none';
      });
    })
    .catch(err => console.error('Status check error:', err));
  }

// CSRF token helper
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
const csrftoken = getCookie('csrftoken');

  // Add to cart buttons - check status first
  const addToCartBtns = document.querySelectorAll('.add-to-cart');
  addToCartBtns.forEach(btn => {
    // Initial status check on load
    if (btn.dataset.course) {
      checkCourseStatus(btn.dataset.course, btn);
    }

    btn.addEventListener('click', function(e) {
      e.preventDefault();
      const courseId = this.dataset.course;
      if (!courseId || this.classList.contains('disabled-btn')) {
        if (this.classList.contains('disabled-btn')) {
          window.location.href = '{% url "my_courses" %}';
        }
        return;
      }

      const originalBtn = this;
      originalBtn.disabled = true;
      originalBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Adding...';
      
      fetch('/ajax/add-to-cart/', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRFToken': csrftoken,
          'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({course_id: courseId})
      })
      .then(response => {
        if (!response.ok) throw new Error(`HTTP ${response.status}`);
        return response.json();
      })
      .then(data => {
        if (data.success) {
          // Re-check status (might be incart now)
          checkCourseStatus(courseId, originalBtn);
        } else {
          alert(data.error || data.message || 'Failed to add to cart');
          originalBtn.disabled = false;
          originalBtn.innerHTML = '<i class="fas fa-cart-plus me-2"></i>Add to Cart';
          originalBtn.classList.remove('btn-success');
          originalBtn.classList.add('btn-primary');
        }
      })
      .catch(error => {
        console.error('Add to cart error:', error);
        alert('Error adding to cart. Please login and try again.');
        originalBtn.disabled = false;
        originalBtn.innerHTML = '<i class="fas fa-cart-plus me-2"></i>Add to Cart';
        originalBtn.classList.remove('btn-success');
        originalBtn.classList.add('btn-primary');
      });
    });
  });

  // Remove from cart buttons (on cart page)
  const removeBtns = document.querySelectorAll('.remove-cart');
  removeBtns.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      if (!confirm('Remove this course from cart?')) return;
      const transactionId = this.dataset.id;
      const row = this.closest('tr');
      const btnCopy = this;  // Avoid rebind
      btnCopy.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Removing...';
      btnCopy.disabled = true;

      fetch(`/ajax/remove-from-cart/${transactionId}/`, {
        method: 'POST',
        headers: {
          'X-CSRFToken': csrftoken,
          'X-Requested-With': 'XMLHttpRequest'
        }
      })
      .then(response => {
        if (!response.ok) throw new Error(`HTTP ${response.status}`);
        return response.json();
      })

      .then(data => {
        if (data.success) {
          row.remove();
          // Update all add-to-cart buttons that might be incart
          document.querySelectorAll('.add-to-cart').forEach(b => {
            if (b.dataset.course) checkCourseStatus(b.dataset.course, b);
          });
          // Update badges
          const cartBadges = document.querySelectorAll('.cart-badge');
          cartBadges.forEach(badge => {
            badge.textContent = data.count;
            badge.style.display = data.count > 0 ? 'inline' : 'none';
          });
          if (data.count === 0) {
            document.querySelector('.cart-items-container')?.remove();
            const container = document.querySelector('.container');
            if (container) {
              container.innerHTML = '<div class="alert alert-info text-center my-5"><h4>Your cart is empty</h4><a href="{% url \'ourCourses\' %}" class="btn btn-primary">Continue Shopping</a></div>';
            }
          }
        }
      })
      .catch(error => {
        console.error('Remove error:', error);
        alert('Failed to remove item');
        btnCopy.innerHTML = 'Remove';
        btnCopy.disabled = false;
      });
    });
  });
});
