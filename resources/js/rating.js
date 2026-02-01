document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.star-10');
    const ratingValue = document.getElementById('rating-value');
    const submitBtn = document.getElementById('submit-rating');
    const clearBtn = document.getElementById('clear-rating');
    const userRatingInput = document.getElementById('user-rating');
    
    const averageNumber = document.querySelector('.average-number');
    const filledStars = document.querySelector('.filled-stars');
    const totalRatings = document.querySelector('.total-ratings');
    
    let selectedRating = 0;
    let isSubmitting = false;
    
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || '';
    
    function updateStars(rating, hoverRating = 0) {
        stars.forEach(star => {
            const value = parseInt(star.getAttribute('data-value'));
            const icon = star.querySelector('i');
            
            if (hoverRating > 0) {
                if (value <= hoverRating) {
                    icon.className = 'fas fa-star';
                    star.classList.add('hover');
                } else {
                    icon.className = 'far fa-star';
                    star.classList.remove('hover');
                }
                star.classList.remove('active');
            } else {
                if (value <= rating) {
                    icon.className = 'fas fa-star';
                    star.classList.add('active');
                    star.classList.remove('hover');
                } else {
                    icon.className = 'far fa-star';
                    star.classList.remove('active', 'hover');
                }
            }
        });
        
        ratingValue.textContent = rating;
        userRatingInput.value = rating;
        submitBtn.disabled = rating === 0;
        clearBtn.disabled = rating === 0;
        
        const currentRating = document.querySelector('.current-rating');
        currentRating.innerHTML = rating === 0 
            ? '<strong>0</strong>/10' 
            : '<strong>' + rating + '</strong>/10';
    }
    
    stars.forEach(star => {
        star.addEventListener('click', function() {
            selectedRating = parseInt(this.getAttribute('data-value'));
            updateStars(selectedRating);
        });
        
        star.addEventListener('mouseenter', function() {
            const hoverRating = parseInt(this.getAttribute('data-value'));
            updateStars(selectedRating, hoverRating);
        });
        
        star.addEventListener('mouseleave', function() {
            updateStars(selectedRating);
        });
    });
    
    clearBtn.addEventListener('click', function() {
        selectedRating = 0;
        updateStars(0);
    });
    
    submitBtn.addEventListener('click', async function() {
        if (selectedRating === 0 || isSubmitting) return;
        
        isSubmitting = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Submitting...';
        submitBtn.disabled = true;
        
        try {
            const response = await fetch('/rating', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    rating: selectedRating
                })
            });
            
            const data = await response.json();
            
            if (data.success) {
                showAlert('Rating submitted successfully!', 'success');
                loadStats();
            } else {
                if (data.message === 'Please login to rate') {
                    showAlert('Please login to rate', 'warning');
                    setTimeout(() => window.location.href = '/login', 1500);
                } else {
                    showAlert('Failed to submit rating', 'danger');
                }
            }
        } catch (error) {
            console.error('Error:', error);
            showAlert('Network error. Please try again.', 'danger');
        } finally {
            isSubmitting = false;
            submitBtn.innerHTML = '<i class="fas fa-star me-1"></i> Submit Rating';
            submitBtn.disabled = selectedRating === 0;
        }
    });
    
    function showAlert(message, type) {
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-${type} alert-dismissible fade show`;
        alertDiv.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        const ratingBox = document.querySelector('.rating-box');
        ratingBox.parentNode.insertBefore(alertDiv, ratingBox);
        
        setTimeout(() => {
            if (alertDiv.parentNode) {
                alertDiv.remove();
            }
        }, 5000);
    }
    
    async function loadUserRating() {
        try {
            const response = await fetch('/rating/user');
            const data = await response.json();
            
            if (data.rating) {
                selectedRating = data.rating;
                updateStars(selectedRating);
            }
        } catch (error) {
            console.error('Error loading user rating:', error);
        }
    }
    
    async function loadStats() {
        try {
            const response = await fetch('/rating/stats');
            const data = await response.json();
            
            if (data.average_rating) {
                averageNumber.textContent = data.average_rating;
                const starPercentage = (data.average_rating / 10) * 100;
                filledStars.style.width = starPercentage + '%';
                totalRatings.textContent = data.total_ratings;
            }
        } catch (error) {
            console.error('Error loading stats:', error);
        }
    }
    
    loadUserRating();
    loadStats();
});