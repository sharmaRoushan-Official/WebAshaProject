// Cart functionality for course detail
document.addEventListener('DOMContentLoaded', function() {
  const addToCartBtns = document.querySelectorAll('.add-to-cart');
  addToCartBtns.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      const courseId = this.dataset.course;
      const btn = this;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Adding...';
      
      fetch(`/ajax/add-to-cart/?course_id=${courseId}`, {
        method: 'GET',
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
        }
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          btn.innerHTML = '<i class="fas fa-check me-2"></i>In Cart';
          btn.classList.add('btn-success');
          btn.classList.remove('btn-primary');
          // Update navbar count if exists
          const cartBadges = document.querySelectorAll('.cart-badge');
          cartBadges.forEach(badge => badge.textContent = data.count);
          alert(data.message);
        }
      })
      .catch(() => {
        alert('Error adding to cart');
      });
    });
  });
});
