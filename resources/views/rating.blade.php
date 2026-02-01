<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate The Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/rating.css" rel="stylesheet">
    <link rel="icon" href="images/rtg.png" type>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <img src="images/rtg.png" class="gambar" alt="Logo">
            <a class="navbar-brand" href="index"><b>RatetheGame</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-4 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="game">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="about">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search RTG" aria-label="Search" />
                    <button class="cari1" type="submit">
                        <img src="images/search.png" alt="Search" width="25">
                    </button>
                </form>
                <div class="cari">
                    <a href="user" style="text-decoration: none; color:white;">
                        <img src="images/user.png" width="30">
                        User
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="game-wrapper">
    <div class="kontainer">
    <div class="row align-items-start"> 
        <div class="col"> 
        <h4 class="fw-bold">DETAIL GAMES</h4>
        <hr>
    </div>

<div class="kontainer">    
    <div class="game-hero">
    <div class="hero-overlay">
    </div>
    <div class="hero-content container">
        <h1>Resident Evil Requiem</h1>
        <p>Requiem for the dead. Nightmare for the living.</p>
    </div>
</div>
</div>  

<div class="container game-detail">
  <div class="row g-4">

    <div class="col-md-8">
      <h4 class="section-title">About This Game</h4>

      <p class="lead">
        Requiem for the dead. Nightmare for the living.
      </p>
      <p>
        A new era of survival horror arrives with Resident Evil Requiem, the latest and most immersive entry yet in the iconic Resident Evil series. 
        Experience terrifying survival horror with FBI analyst Grace Ashcroft, and dive into pulse-pounding action with legendary agent Leon S. Kennedy. 
        Both of their journeys and unique gameplay styles intertwine into a heart-stopping, emotional experience that will chill you to your core.
      </p><hr><br>
        <b>Raccoon City</b>
      <p>Return once again to the city of disaster and despair.<br>
        A midwestern city in the United States and the headquarters for the former global pharmaceutical company, Umbrella.
        In the face of the zombie outbreak in 1998, the government approved a sterilization operation, a missile strike on the city in an 
        attempt to quickly bring the situation under control—but this was swiftly covered up.
      </p><hr><br>
      <b>Grace Ashcroft</b>
      <p>An intelligence analyst for the FBI who demonstrates intense focus and insight in deductive reasoning and analysis. Her mother's death shook her to the soul, 
        making her an introvert who immerses herself in work. So she heads to the abandoned hotel alone to investigate this mysterious death.
      </p><hr><br>
      <b>Leon S. Kennedy</b>
      <p>One of the survivors of the Raccoon City Incident. With a strong sense of justice and physical capabilities to match, he has responded to numerous outbreaks 
        since that fateful day. Now, as a seasoned DSO agent combatting bioterrorism, he has returned to investigate the latest string of deaths in the Midwest.
      </p><hr><br>
        <b>Gameplay</b>
      <p>Experience the series' classic survival horror through combat, investigations, puzzles, and resource management. Gameplay allows you to freely switch between 
        first and third-person views to face the horrors in a way that suits your playstyle.
      </p>
    </div>

    <div class="col-md-4">
      <div class="game-sidebar">

      <div class="game-cover-wrapper">
        <img src="images/re.webp" class="game-cover" alt="Game Cover">
    </div>
        <div class="info-box">
          <span>Release Date</span>
          <strong>February 27, 2026</strong>
        </div>

                <div class="rating-box">
            <div class="my-4">
                <p class="mb-2 fw-bold">Rate This Game:</p>
                
                <div class="rating-display mb-3">
                    <div class="average-rating">
                        <span class="average-number">0.0</span>
                        <div class="stars">
                            <span class="empty-stars">★★★★★</span>
                            <span class="filled-stars" style="width: 0%">★★★★★</span>
                        </div>
                        <small class="text-muted ms-2">
                            <span class="total-ratings">0</span> ratings
                        </small>
                    </div>
                </div>

                <div class="star-rating-10 mb-3">
                    <div class="stars-container">
                        <?php for ($i = 1; $i <= 10; $i++): ?>
                            <span class="star-10" data-value="<?php echo $i; ?>">
                                <i class="far fa-star"></i>
                                <span class="star-number"><?php echo $i; ?></span>
                            </span>
                        <?php endfor; ?>
                    </div>
                    <div class="rating-text mt-2">
                        <span class="current-rating">
                            <strong id="rating-value">0</strong>/10
                        </span>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-3">
                    <button id="submit-rating" class="btn btn-warning flex-fill" disabled>
                        <i class="fas fa-star me-1"></i> Submit Rating
                    </button>
                    <button id="clear-rating" class="btn btn-outline-secondary" style="width: 80px;" disabled>
                        Clear
                    </button>
                    <button id="delete-rating" class="btn btn-outline-danger" style="width: 80px;" disabled title="Delete your rating">
                        <i class="fas fa-trash me-1"></i> Delete
                    </button>
                </div>

                <input type="hidden" id="user-rating" value="0">
            </div>
        </div>

        <div class="platform">
          <span>Platform</span>
          <p>PlayStation 5 / PC</p>
        </div>

        <button class="btn btn-primary w-100 mt-3">
          Where to Buy
        </button>

      </div>
    </div>
  </div>
</div>
</div>
</div>


 <footer class="footer">
        <div class="footer-container">

            <div class="footer-brand">
                <h4>RatetheGame</h4>
                <p>Your Rating website. Free for All.</p>

                <div class="social-icons">
                    <a href="https://www.instagram.com/">IG</a>
                    <a href="https://id.linkedin.com/">IN</a>
                    <a href="https://x.com">X</a>
                </div>
            </div>

            <div class="footer-col">
                <h5>Features</h5>
                <ul>
                    <li><a href="https://www.youtube.com/">Trailer</a></li>
                    <li><a href="#trend">Trending Now</a></li>
                    <li><a href="#most">Upcoming</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5>Learn more</h5>
                <ul>
                    <li><a href="article">Article</a></li>
                    <li><a href="#">Case studies</a></li>
                    <li><a href="#">Customer stories</a></li>
                    <li><a href="#">Best practices</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5>Support</h5>
                <ul>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Legal</a></li>
                </ul>
            </div>

        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        // Helper function untuk get user ID dari localStorage
        function getCurrentUserId() {
            const user = localStorage.getItem('currentUser');
            if (user) {
                const userData = JSON.parse(user);
                return userData.id;
            }
            return null;
        }

        document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.star-10');
    const ratingValue = document.getElementById('rating-value');
    const submitBtn = document.getElementById('submit-rating');
    const clearBtn = document.getElementById('clear-rating');
    const deleteBtn = document.getElementById('delete-rating');
    const userRatingInput = document.getElementById('user-rating');
    
    const averageNumber = document.querySelector('.average-number');
    const filledStars = document.querySelector('.filled-stars');
    const totalRatings = document.querySelector('.total-ratings');
    
    let selectedRating = 0;
    let userRating = 0;
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
        deleteBtn.disabled = userRating === 0; // Delete button disabled jika tidak ada rating sebelumnya
        
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
    
    // Delete Rating Handler
    deleteBtn.addEventListener('click', async function() {
        if (userRating === 0 || isSubmitting) return;
        
        if (!confirm('Are you sure you want to delete your rating?')) {
            return;
        }
        
        const userId = getCurrentUserId();
        if (!userId) {
            showAlert('Please login to delete rating', 'warning');
            return;
        }
        
        isSubmitting = true;
        deleteBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Deleting...';
        deleteBtn.disabled = true;
        
        try {
            const response = await fetch('/rating', {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    user_id: userId
                })
            });
            
            const data = await response.json();
            
            if (data.success) {
                showAlert('Rating deleted successfully!', 'success');
                userRating = 0;
                selectedRating = 0;
                updateStars(0);
                loadStats();
            } else {
                showAlert('Failed to delete rating: ' + data.message, 'danger');
            }
        } catch (error) {
            console.error('Error:', error);
            showAlert('Network error. Please try again.', 'danger');
        } finally {
            isSubmitting = false;
            deleteBtn.innerHTML = '<i class="fas fa-trash me-1"></i> Delete';
            deleteBtn.disabled = userRating === 0;
        }
    });
    
    submitBtn.addEventListener('click', async function() {
        if (selectedRating === 0 || isSubmitting) return;
        
        const userId = getCurrentUserId();
        if (!userId) {
            showAlert('Please login to rate', 'warning');
            return;
        }
        
        console.log('Submitting rating:', {rating: selectedRating, user_id: userId});
        
        isSubmitting = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Submitting...';
        submitBtn.disabled = true;
        
        try {
            const requestBody = {
                rating: selectedRating,
                user_id: userId
            };
            
            console.log('Request body:', requestBody);
            
            const response = await fetch('/rating', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify(requestBody)
            });
            
            console.log('Response status:', response.status);
            
            const data = await response.json();
            
            console.log('Response data:', data);
            
            if (data.success) {
                userRating = selectedRating;
                showAlert('Rating submitted successfully!', 'success');
                loadStats();
            } else {
                const errorMsg = data.message || 'Failed to submit rating';
                if (data.errors) {
                    console.error('Validation errors:', data.errors);
                    showAlert(errorMsg + ': ' + JSON.stringify(data.errors), 'danger');
                } else {
                    showAlert(errorMsg, 'danger');
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
        const userId = getCurrentUserId();
        if (!userId) return;
        
        try {
            const response = await fetch('/rating/user?user_id=' + userId);
            const data = await response.json();
            
            if (data.rating) {
                userRating = data.rating;
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
    </script>
</body>

</html>