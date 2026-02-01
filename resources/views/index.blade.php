<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate The Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
    <link rel="icon" href="images/rtg.png" type>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/auth.js"></script>
    <script src="js/index.js"></script>
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
                    <a href="javascript:void(0)" onclick="handleUserClick()" style="text-decoration: none; color:white;">
                        <img src="images/user.png" width="30">
                        User
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h3 class="fw-bold">New & Notable</h3>
        <div class="row mt-8">
            <div class="col-md-8">
                <img src="images/er.avif" width="600">
                <h5 class="mt-2 fw-bold">Elden Ring</h5>
                <p>Experience the masterpiece of the decade.</p>
            </div>
            <div class="col-md-4">
                <h5 class="fw-bold mt-3">Featured Games Trailer</h5>
                <a href="https://www.youtube.com/watch?v=VQRLujxTm3c" class="linkc">
                    <div class="d-flex mt-3">
                        <img src="/images/gta2.webp" class="side-thu1mb" width="111px">
                        <div class="ms-3">
                            <p class="fw-bold mt-4 mb-1">World Premiere: GTA VI</p>
                            Return to Vice City. <br>Watch the latest breakdown.
                        </div>
                    </div>
                </a>
                <a href="https://www.youtube.com/watch?v=J4qY9DYE184" class="linkc">
                    <div class="d-flex mt-3">
                        <img src="/images/0071.webp" class="side-thu1mb" width="111px">
                        <div class="ms-3 mb-1">
                            <p class="fw-bold mt-4  ">007: First Light</p>
                            The origin of a legend. See <br>how the icon was born.
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <hr>
        <h4 class="fw-bold trend" id="trend"><a href="game">Trending Now ></h4></a>
        <p>Most Played Games this week</p>

        <div class="row" data-aos="fade-up">
            <div class="col-3 game-card">
                <img src="\images\gi.jpeg" width="200">
                <p class="mt-2 mb-2 fw-bold">Genshin Impact</p>
                <span class="rating-box-yellow fw-bold">3.4</span> Mostly Negative
            </div>

            <div class="col-3 game-card">
                <img src="\images\df.jpg" width="200">
                <p class=" mt-2 mb-2 fw-bold">Delta Force</p>
                <span class="rating-box-yellow fw-bold">6.7</span> Mixed / Average
            </div>

            <div class="col-3 game-card">
                <img src="\images\wuwa.jpg" width="200">
                <p class="mt-2 mb-2 fw-bold">Wuthering Waves</p>
                <span class="rating-box-green fw-bold">9.0</span>Overwhelmingly Positive
            </div>

            <div class="col-3 game-card">
                <img src="\images\valo.jpg" width="177">
                <p class="mt-2 mb-2 fw-bold">Valorant</p>
                <span class="rating-box-green fw-bold">7.5</span>Mostly Positive
            </div>
        </div>

        <hr>

        <h4 class="fw-bold" id="most"><a href="game">Most Wanted ></h4></a>
        <p>Top-wishlisted games by the community.</p>

        <div class="row" data-aos=fade-up>
            <div class="col-3 game-card">
                <img src="\images\varsa.avif" width="175">
                <p class="mt-2 mb-1 fw-bold">Varsapura</p>
                Est. April 2026
            </div>

            <div class="col-3 game-card">
                <img src="/images/gta.png" width="197">
                <p class="mt-2 mb-1 fw-bold">Grand Theft Auto VI</p>
                Est. November 2026
            </div>

            <div class="col-3 game-card">
                <img src="/images/007.jpg" width="175">
                <p class="mt-2 mb-1 fw-bold">007 First Light</p>
                Est. March 2026
            </div>

            <div class="col-3 game-card">
                <img src="/images/re.webp" width="175">
                <p class="mt-2 mb-1 fw-bold">RE : Requiem</p>
                Est. February 2026
            </div>
        </div>

        <hr>

        <h4 class="fw-bold"><a href="article">Article ></h4></a>
        <div class="row mt-3" data-aos="fade-up">
            <div class="col-3">
                <img src="images/veto.jpg" width=175>
                <p class="mt-2"><b>Valorant News</b><br>New Agent, Veto!</p>
            </div>

            <div class="col-3">
                <img src="images/hog.webp" width=175>
                <p class="mt-2"><b>Hogwarts Legacy</b><br>IS OFFICIALLY FREE!</p>
            </div>
            <div class="col-3">
                <img src="images/switch.jpg" width=175 height=215>
                <p class="mt-2"><b>Nintendo Switch 2</b><br>Are Switch 2 Really Worth it?</p>
            </div>
            <div class="col-3">
                <img src="images/rdr.jpg" width=175 height=215>
                <p class="mt-2"><b>RDR RUMOUR</b><br>RDR is free on epic?</p>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold" id="loginModalLabel">Welcome Back!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="loginError" class="alert alert-danger" style="display:none;"></div>
                    
                    <form id="loginFormModal" onsubmit="handleLoginModal(event)">
                        <div class="mb-3">
                            <label class="form-label">Email or Username</label>
                            <input type="text" id="loginEmail" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" id="loginPassword" class="form-control" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" id="loginRemember" class="form-check-input">
                            <label class="form-check-label" for="loginRemember">Stay signed in</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Log in</button>
                    </form>
                    
                    <div class="text-center mt-3">
                        <a href="#" onclick="switchToRegister()" class="text-decoration-none">Don't have an account? Register now</a>
                    </div>
                    <div class="text-center mt-2">
                        <a href="forgot" class="text-decoration-none">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold" id="registerModalLabel">Create Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="registerError" class="alert alert-danger" style="display:none;"></div>
                    <div id="registerSuccess" class="alert alert-success" style="display:none;"></div>
                    
                    <form id="registerFormModal" onsubmit="handleRegisterModal(event)">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" id="registerEmailModal" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" id="registerNameModal" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" id="registerPasswordModal" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" id="registerConfirmModal" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>
                    
                    <div class="text-center mt-3">
                        <a href="#" onclick="switchToLogin()" class="text-decoration-none">Already have an account? Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/js/index.js"></script>
</body>

</html>