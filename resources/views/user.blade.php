<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About RTG</title>
    <link rel="icon" href="images/rtg.png" type>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/user.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="js/auth.js"></script>
    <script src="js/user.js"></script>
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
    <div class="container user-profile-container">
        <div class="user-header shadow-sm rounded-4 overflow-hidden" data-aos="fade-down">
            <div class="user-banner"></div>
            <div class="user-info-section p-4 d-md-flex align-items-end">
                <div class="profile-pic-wrapper">
                    <img src="images/user.png" class="profile-pic border border-4 border-white shadow" alt="User Profile">
                </div>
                <div class="ms-md-4 mt-3 mt-md-0 flex-grow-1">
                    <h2 class="fw-bold mb-1" id="userDisplayName">Loading...</h2>
                    <p class="text-muted mb-0"><span class="badge bg-success">Online</span> • Member since <span id="memberDate">Feb 2025</span></p>
                </div>
                <div class="mt-3 mt-md-0">
                    <button class="btn btn-outline-primary rounded-pill px-4 me-2" onclick="editProfile()">Edit Profile</button>
                    <button class="btn btn-outline-danger rounded-pill px-4" onclick="logout()">Logout</button>
                </div>
            </div>
        </div>

        <div class="row g-3 mt-4 text-center">
            <div class="col-4 col-md-2" data-aos="zoom-in" data-offset="0">
                <div class="stat-card p-3 rounded-3 bg-white shadow-sm">
                    <h4 class="fw-bold mb-0">12</h4>
                    <small class="text-muted">Reviews</small>
                </div>
            </div>
            <div class="col-4 col-md-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-card p-3 rounded-3 bg-white shadow-sm">
                    <h4 class="fw-bold mb-0">45</h4>
                    <small class="text-muted">Wishlist</small>
                </div>
            </div>
            <div class="col-4 col-md-2" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-card p-3 rounded-3 bg-white shadow-sm">
                    <h4 class="fw-bold mb-0">8</h4>
                    <small class="text-muted">Badges</small>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <ul class="nav nav-tabs border-0" id="profileTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active fw-bold border-0" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button">Recent Reviews</button>
                </li>
            </ul>

            <div class="tab-content p-4 bg-white shadow-sm rounded-bottom-4 rounded-end-4" id="profileTabsContent">
                <div class="tab-pane fade show active" id="wishlist" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="wishlist-item d-flex align-items-center p-2 border rounded-3 hover-shadow transition">
                                <img src="images/re.webp" width="70" class="rounded" alt="Game">
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-bold">RE: Requiem</h6>
                                    <small class="text-primary">Feb 2026</small>
                                </div>
                                <button class="btn btn-sm ms-auto text-danger" title="Remove">&times;</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="wishlist-item d-flex align-items-center p-2 border rounded-3 hover-shadow transition">
                                <img src="images/gta.png" width="70" class="rounded" alt="Game">
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-bold">GTA VI</h6>
                                    <small class="text-primary">Nov 2026</small>
                                </div>
                                <button class="btn btn-sm ms-auto text-danger" title="Remove">&times;</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <div class="review-post mb-4 pb-3 border-bottom">
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-bold text-primary">Elden Ring</h6>
                            <span class="badge bg-warning text-dark">★★★★★</span>
                        </div>
                        <p class="small mt-2">"Truly a masterpiece of the decade. The world design is unparalleled!"</p>
                        <small class="text-muted">Posted on Dec 15, 2025</small>
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

    <script src="/js/user.js"></script>
</body>

</html>