<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/rating.css" rel="stylesheet">
    <link rel="icon" href="images/rtg.png" type>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                        <a class="nav-link" aria-current="page" href="rating">Rating</a>
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

    <h2 class="fw-bold">RATING</h2>
    <hr>
    <p>Add your own Rating! Rate your game.</p>


    <div class="row">
        <div class="col-3 game-card">
            <img src="\images\gi.jpeg" width="200">
            <p class="mt-2">Genshin Impact</p>
            <span class="rating-box">3.4</span>
        </div>

        <div class="col-3 game-card">
            <img src="\images\df.jpg" width="200">
            <p class=" mt-2">Delta Force</p>
            <span class="rating-box yellow">6.7</span>
        </div>

        <div class="col-3 game-card">
            <img src="\images\wuwa.jpg" width="200">
            <p class="mt-2">Wuthering Waves</p>
            <span class="rating-box green">8.9</span>
        </div>

        <div class="col-3 game-card">
            <img src="\images\valo.jpg" width="175  ">
            <p class="mt-2">Valorant</p>
            <span class="rating-box green">7.5</span>
        </div>
    </div>

    <div class="row">
        <div class="col-3 game-card">
            <img src="\images\gi.jpeg" width="200">
            <p class="mt-2">Genshin Impact</p>
            <span class="rating-box">3.4</span>
        </div>

        <div class="col-3 game-card">
            <img src="\images\df.jpg" width="200">
            <p class=" mt-2">Delta Force</p>
            <span class="rating-box yellow">6.7</span>
        </div>

        <div class="col-3 game-card">
            <img src="\images\wuwa.jpg" width="200">
            <p class="mt-2">Wuthering Waves</p>
            <span class="rating-box green">8.9</span>
        </div>

        <div class="col-3 game-card">
            <img src="\images\valo.jpg" width="175  ">
            <p class="mt-2">Valorant</p>
            <span class="rating-box green">7.5</span>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">

            <div class="footer-brand">
                <h4>RatetheGame</h4>
                <p>Your Rating website. Free for All.</p>

                <div class="social-icons">
                    <a href="#">IG</a>
                    <a href="#">IN</a>
                    <a href="#">X</a>
                </div>
            </div>

            <div class="footer-col">
                <h5>Features</h5>
                <ul>
                    <li><a href="#">Trailer</a></li>
                    <li><a href="#">New Release</a></li>
                    <li><a href="#">Upcoming</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5>Learn more</h5>
                <ul>
                    <li><a href="#">Article</a></li>
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


</body>

</html>