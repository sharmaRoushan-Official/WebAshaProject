// Change Password Modal Functionality
console.log('Change Password JS loaded');
document.addEventListener('DOMContentLoaded', function() {
  console.log('Modal element:', document.getElementById('changePasswordModal'));
    const submitBtn = document.getElementById('submitPasswordChange');
    const modalForm = document.getElementById('changePasswordForm');
    
    if (!submitBtn) return;
    
    // Clear all error messages
    function clearErrors() {
        // Clear field errors
        document.querySelectorAll('.invalid-feedback').forEach(el => {
            el.textContent = '';
            el.style.display = 'none';
        });
        
        // Remove is-invalid class from inputs
        document.querySelectorAll('.form-control').forEach(el => {
            el.classList.remove('is-invalid');
        });
        
        // Hide form errors and success message
        const formErrors = document.getElementById('formErrors');
        const successMsg = document.getElementById('successMessage');
        
        if (formErrors) formErrors.classList.add('d-none');
        if (successMsg) successMsg.classList.add('d-none');
    }
    
    // Show field-specific error
    function showFieldError(fieldName, errorMessage) {
        const errorElement = document.getElementById(`${fieldName}_error`);
        if (errorElement) {
            errorElement.textContent = errorMessage;
            errorElement.style.display = 'block';
            const inputElement = document.getElementById(fieldName);
            if (inputElement) {
                inputElement.classList.add('is-invalid');
            }
        }
    }
    
    // Show form-level error
    function showFormError(errorMessage) {
        const formErrors = document.getElementById('formErrors');
        if (formErrors) {
            formErrors.textContent = errorMessage;
            formErrors.classList.remove('d-none');
            formErrors.classList.add('show');
        }
    }
    
    // Show success message
    function showSuccessMessage(message) {
        const successMsg = document.getElementById('successMessage');
        if (successMsg) {
            successMsg.textContent = message;
            successMsg.classList.remove('d-none');
            successMsg.classList.add('show');
        }
        
        // Auto close modal after 2 seconds
        setTimeout(() => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('changePasswordModal'));
            if (modal) modal.hide();
            
            // Show a toast notification
            showToastNotification('Password changed successfully!', 'success');
        }, 2000);
    }
    
    // Show toast notification
    function showToastNotification(message, type = 'success') {
        const toastHTML = `
            <div class="position-fixed top-0 end-0 p-3" style="z-index: 9999">
                <div class="toast align-items-center text-white bg-${type} border-0 show" role="alert">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'} me-2"></i>
                            ${message}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                    </div>
                </div>
            </div>
        `;
        
        const toastContainer = document.createElement('div');
        toastContainer.innerHTML = toastHTML;
        document.body.appendChild(toastContainer);
        
        // Remove toast after 3 seconds
        setTimeout(() => {
            toastContainer.remove();
        }, 3000);
    }
    
    // Get CSRF token from cookie
    function getCSRFToken() {
        let cookieValue = null;
        if (document.cookie && document.cookie !== '') {
            const cookies = document.cookie.split(';');
            for (let i = 0; i < cookies.length; i++) {
                const cookie = cookies[i].trim();
                if (cookie.substring(0, 10) === ('csrftoken' + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(10));
                    break;
                }
            }
        }
        return cookieValue;
    }
    
    // Handle password change submission
    submitBtn.addEventListener('click', async function(e) {
        e.preventDefault();
        
        // Clear previous errors
        clearErrors();
        
        // Get form data
        const oldPassword = document.getElementById('old_password').value;
        const newPassword1 = document.getElementById('new_password1').value;
        const newPassword2 = document.getElementById('new_password2').value;
        
        // Basic validation
        if (!oldPassword) {
            showFieldError('old_password', 'Current password is required');
            return;
        }
        
        if (!newPassword1) {
            showFieldError('new_password1', 'New password is required');
            return;
        }
        
        if (!newPassword2) {
            showFieldError('new_password2', 'Please confirm your new password');
            return;
        }
        
        if (newPassword1 !== newPassword2) {
            showFieldError('new_password2', 'Passwords do not match');
            return;
        }
        
        // Password strength validation
        const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;
        if (!passwordRegex.test(newPassword1)) {
            showFieldError('new_password1', 'Password must contain uppercase, lowercase, number, and special character (@$!%*?&), minimum 6 characters');
            return;
        }
        
        // Show loading state
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Updating...';
        
        try {
            const response = await fetch('/api/change-password/', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRFToken': getCSRFToken(),
                },
                body: JSON.stringify({
                    old_password: oldPassword,
                    new_password1: newPassword1,
                    new_password2: newPassword2,
                })
            });
            
            const data = await response.json();
            
            if (data.success) {
                showSuccessMessage(data.message || 'Password changed successfully!');
                // Reset form
                if (modalForm) modalForm.reset();
            } else {
                // Display errors
                if (data.errors) {
                    for (const [field, error] of Object.entries(data.errors)) {
                        showFieldError(field, error);
                    }
                } else if (data.message) {
                    showFormError(data.message);
                } else {
                    showFormError('An error occurred. Please try again.');
                }
            }
        } catch (error) {
            console.error('Error:', error);
            showFormError('Network error. Please check your connection and try again.');
        } finally {
            // Reset button state
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="fas fa-save me-2"></i>Update Password';
        }
    });
    
    // Reset form when modal is closed
    const modalElement = document.getElementById('changePasswordModal');
    if (modalElement) {
        modalElement.addEventListener('hidden.bs.modal', function() {
            clearErrors();
            if (modalForm) modalForm.reset();
        });
    }
    
    // Clear errors when user starts typing in a field
    document.querySelectorAll('#old_password, #new_password1, #new_password2').forEach(input => {
        input.addEventListener('input', function() {
            this.classList.remove('is-invalid');
            const errorId = this.id + '_error';
            const errorElement = document.getElementById(errorId);
            if (errorElement) {
                errorElement.style.display = 'none';
            }
        });
    });
});