// Cart functionality for course detail and cart page
document.addEventListener('DOMContentLoaded', function() {
  // Add to cart buttons
  const addToCartBtns = document.querySelectorAll('.add-to-cart');
  addToCartBtns.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      const courseId = this.dataset.course;
      const btn = this;
      btn.disabled = true;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Adding...';
      
      fetch(`/ajax/add-to-cart/?course_id=${courseId}`, {
        method: 'GET',
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
        }
      })
      .then(response => {
        if (!response.ok) throw new Error(`HTTP ${response.status}`);
        return response.json();
      })
      .then(data => {
        if (data.success) {
          btn.innerHTML = '<i class="fas fa-check me-2"></i>In Cart';
          btn.classList.add('btn-success');
          btn.classList.remove('btn-primary');
          // Update navbar badges
          const cartBadges = document.querySelectorAll('.cart-badge');
          cartBadges.forEach(badge => {
            badge.textContent = data.count;
            badge.style.display = data.count > 0 ? 'block' : 'none';
          });
        } else {
          alert(data.error || data.message || 'Failed to add to cart');
          btn.disabled = false;
          btn.innerHTML = '<i class="fas fa-cart-plus me-2"></i>Add to Cart';
          btn.classList.remove('btn-success');
          btn.classList.add('btn-primary');
        }
      })
      .catch(error => {
        console.error('Add to cart error:', error);
        alert('Error adding to cart. Please login and try again.');
        btn.disabled = false;
        btn.innerHTML = '<i class="fas fa-cart-plus me-2"></i>Add to Cart';
        btn.classList.remove('btn-success');
        btn.classList.add('btn-primary');
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
      const btn = this;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Removing...';
      btn.disabled = true;

      fetch(`/ajax/remove-from-cart/${transactionId}/`, {
        method: 'POST',
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
        }
      })
      .then(response => {
        if (!response.ok) throw new Error(`HTTP ${response.status}`);
        return response.json();
      })
      .then(data => {
        if (data.success) {
          row.remove();
          const cartBadges = document.querySelectorAll('.cart-badge');
          cartBadges.forEach(badge => {
            badge.textContent = data.count;
            badge.style.display = data.count > 0 ? 'block' : 'none';
          });
          // Update totals/header
          const totalEl = document.querySelector('.text-end h3');
          if (totalEl && data.count > 0) {
            // Refresh page or update total (simple: reload for now)
          }
          if (data.count === 0) {
            document.querySelector('.container').innerHTML = '<div class="alert alert-info text-center my-5"><h4>Your cart is empty</h4><a href="{% url \'ourCourses\' %}" class="btn btn-primary">Continue Shopping</a></div>';
          }
        }
      })
      .catch(error => {
        console.error('Remove error:', error);
        alert('Failed to remove item');
        btn.innerHTML = 'Remove';
        btn.disabled = false;
      });
    });
  });
});
