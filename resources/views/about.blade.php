<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About RTG</title>
    <link rel="icon" href="images/rtg.png" type>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
    <div class="container my-5 pt-5">
        <div class="text-center mb-5" data-aos="fade-down">
            <h1 class="fw-bold display-4">About <span style="color: #009AEA;">RatetheGame</span></h1>
            <p class="text-muted mx-auto" style="max-width: 600px;">
                We are a community-driven platform where gamers share honest reviews and discover their next favorite titles.
            </p>
        </div>

        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="images/rtg.png" class="img-fluid rounded-4 shadow-sm" alt="About RTG" style="max-height: 400px; display: block; margin: auto;">
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="fw-bold mb-4">Why Choose Us?</h2>

                <div class="d-flex mb-4">
                    <div class="me-3">
                        <span class="badge bg-primary p-2">01</span>
                    </div>
                    <div>
                        <h5 class="fw-bold">Active Community</h5>
                        <p class="text-muted">Thousands of ratings from real gamers every single day. No bots, just pure passion.</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="me-3">
                        <span class="badge bg-primary p-2">02</span>
                    </div>
                    <div>
                        <h5 class="fw-bold">Extensive Database</h5>
                        <p class="text-muted">From massive AAA blockbusters to hidden indie gems you’ve never heard of.</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="me-3">
                        <span class="badge bg-primary p-2">03</span>
                    </div>
                    <div>
                        <h5 class="fw-bold">Free for Everyone</h5>
                        <p class="text-muted">All features, including writing reviews and reading exclusive articles, are free forever.</p>
                    </div>
                </div>

                <button class="btn btn-primary px-4 py-2 mt-2" style="border-radius: 20px; background-color: #009AEA;">Join Community</button>
            </div>
        </div>

        <div class="row mt-5 py-5 text-center bg-light rounded-4">
            <div class="col-md-4">
                <h2 class="fw-bold" id="count-games">0</h2>
                <p class="text-muted font-weight-bold">Games Indexed</p>
            </div>
            <div class="col-md-4">
                <h2 class="fw-bold" id="count-users">0</h2>
                <p class="text-muted font-weight-bold">Active Users</p>
            </div>
            <div class="col-md-4">
                <h2 class="fw-bold" id="count-reviews">0</h2>
                <p class="text-muted font-weight-bold">Total Reviews</p>
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

    <script src="/js/about.js"></script>
</body>

</html>