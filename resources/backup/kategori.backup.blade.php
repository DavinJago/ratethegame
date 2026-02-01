<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate The Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/kategori.css" rel="stylesheet">
    <link rel="icon" href="images/rtg.png" type>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
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
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <h1>Resident Evil Requiem</h1>
        <p>Requiem for the dead. Nightmare for the living.</p>
    </div>
</div>    

<div class="container game-detail">
  <div class="row g-4">

    <div class="col-md-8">
      <h4 class="section-title">About This Game</h4>

      <p class="lead">
        <b>Requiem for the dead. Nightmare for the living.</b>
      </p>

      <p>
        Prepare to escape death in a heart-stopping experience that will chill you to your core.
      </p>

      <p>
        A new era of survival horror is coming. Technological advancements combined with
        the development team’s depth of experience combine in a story with rich characters
        and immersive gameplay.
      </p>

      <h5 class="mt-4">Raccoon City</h5>
      <p>
        Return once again to the city of disaster and despair.
        A midwestern city in the United States and headquarters of Umbrella Corporation.
      </p>
    </div>

    <div class="col-md-4">
      <div class="game-sidebar">

        <img src="images/re.webp" class="game-cover" alt="Game Cover">

        <div class="info-box">
          <span>Release Date</span>
          <strong>February 27, 2026</strong>
        </div>

        <div class="rating-box">
        <div class="my-3">
            <p class="mb-2">Your Rating:</p>
            <div class="star-rating">
                <span class="star" data-value="1"><i class="far fa-star"></i></span>
                <span class="star" data-value="2"><i class="far fa-star"></i></span>
                <span class="star" data-value="3"><i class="far fa-star"></i></span>
                <span class="star" data-value="4"><i class="far fa-star"></i></span>
                <span class="star" data-value="5"><i class="far fa-star"></i></span>
            </div>
            <div class="rating-text mt-2">
                <small class="text-muted" style="display: flex">Click to rate: <span id="rating-value">0</span>/5</small>
            </div>
            <button id="submit-rating" class="btn btn-sm btn-outline-primary mt-2" style="display: flex" disabled>
                Submit Rating
            </button>
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
</body>

</html>