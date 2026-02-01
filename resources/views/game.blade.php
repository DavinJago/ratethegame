    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rate The Game</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/game.css" rel="stylesheet">
        <link rel="icon" href="images/rtg.png" type>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <img src="images/rtg.png" class="gambar" alt="Logo">
            <a class="navbar-brand" href="index"><b>RatetheGame</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                <form class="d-flex position-relative" autocomplete="off">
                    <input class="form-control me-2" type="search" placeholder="Search game..." id="searchInput" />

                    <button class="cari1" type="button">
                        <img src="images/search.png" alt="Search" width="25">
                    </button>

                    <div id="searchResult" class="search-popup"></div>
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

        <main class="container">

        <h1 class="page-title">Games</h1>

        <section class="section">
            <div class="section-header">
                <h3>Top Games</h3>
            </div>

            <div class="game-grid">
                <div class="game-card">
                    <img src="gensin.jpeg" class="foto">
                    <h4>Genshin Impact</h4>
                    <span class="rating red">3.4</span>
                </div>

                <div class="game-card">
                    <img src="delta.jpg" class="foto">
                    <h4>Delta Force</h4>
                    <span class="rating yellow">6.7</span>
                </div>

                <div class="game-card">
                    <img src="whutering.jpg" class="foto">
                    <h4>Wuthering Waves</h4>
                    <span class="rating green">8.9</span>
                </div>

                <div class="game-card">
                    <img src="valorant.jpg" class="foto">
                    <h4>Valorant</h4>
                    <span class="rating green">7.5</span>
                </div>

                <div class="game-card">
                    <img src="motogp.png" class="foto">
                    <h4>Prince of Persia : The sands of Time remake</h4>
                    <span class="rating green">7.5</span>
                </div>

                <div class="game-card">
                    <img src="assasins.jpg" class="foto">
                    <h4>Vampire : The Mosquerade  </h4>
                    <span class="rating green">7.5</span>
                </div>

                <div class="game-card">
                    <img src="callduty.jpg" class="foto">
                    <h4>Hades II</h4>
                    <span class="rating green">7.5</span>
                </div>

                <div class="game-card">
                    <img src="grandthef.png" class="foto">
                    <h4>The Wolf Among us</h4>
                    <span class="rating green">7.5</span>
                </div>

                <div class="game-card">
                    <img src="grandthef.png" class="foto">
                    <h4>Hollow Knight: Silksong</h4>
                    <span class="rating green">7.5</span>
                </div>

                <div class="game-card">
                    <img src="grandthef.png" class="foto">
                    <h4>Clair Obscur: Expedition 33</h4>
                    <span class="rating green">7.5</span>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="section-header">
                <h3>New Release</h3>
            </div>

            <div class="game-grid">
                <div class="game-card">
                    <img src="gensin.jpeg" class="foto">
                    <a class="link" href="/rating">Resident Evil:Requiem</a>
                    <span class="rating red">3.4</span>
                </div>

                <div class="game-card">
                    <img src="delta.jpg" class="foto">
                    <h4>007 First Light</h4>
                    <span class="rating yellow">6.7</span>
                </div>

                <div class="game-card">
                    <img src="whutering.jpg" class="foto">
                    <h4>Phantom Blade Zero</h4>
                    <span class="rating green">8.9</span>
                </div>

                <div class="game-card">
                    <img src="valorant.jpg" class="foto">
                    <h4>Slime Rancher 2</h4>
                    <span class="rating green">7.5</span>
                </div>

                <div class="game-card">
                    <img src="motogp.png" class="foto">
                    <h4>Little Nightmares III</h4>
                    <span class="rating green">7.5</span>
                </div>

                <div class="game-card">
                    <img src="assasins.jpg" class="foto">
                    <h4>Ninja Gaiden 4</h4>
                    <span class="rating green">7.5</span>
                </div>

                <div class="game-card">
                    <img src="callduty.jpg" class="foto">
                    <h4>Voidtrain</h4>
                    <span class="rating green">7.5</span>
                </div>

                <div class="game-card">
                    <img src="dota.jpg" class="foto">
                    <h4>Battlefield 6</h4>
                    <span class="rating green">7.5</span>
                </div>

                <div class="game-card">
                    <img src="dota.jpg" class="foto">
                    <h4>Call of Duty: Black Ops 7</h4>
                    <span class="rating green">7.5</span>
                </div>

                <div class="game-card">
                    <img src="dota.jpg" class="foto">
                    <h4>Metroid Prime 4: Beyond</h4>
                    <span class="rating green">7.5</span>
                </div>
            </div>
            
        </section>

        <section class="section">
            <div class="section-header">
                <h3>Upcoming Release</h3>
            </div>

            <div class="game-grid">
                <div class="game-card">
                    <img src="varsapura.jpg" class="foto">
                    <h4>Norse: Oath of Blood</h4>
                </div>

                <div class="game-card">
                    <img src="grandthef.png" class="foto">
                    <h4>Grand Theft Auto VI</h4>
                </div>

                <div class="game-card">
                    <img src="firstligth.jpg" class="foto">
                    <h4>007 First Light</h4>
                </div>

                <div class="game-card">
                    <img src="requiem.jpg" class="foto">
                    <h4>RE : Requiem</h4>
                </div>

                <div class="game-card">
                    <img src="reddeath.jpg" class="foto">
                    <h4>RE : Requiem</h4>
                </div>

                <div class="game-card">
                    <img src="fc25.jpg" class="foto">
                    <h4>RE : Requiem</h4>
                </div>

                <div class="game-card">
                    <img src="fc25.jpg" class="foto">
                    <h4>RE : Requiem</h4>
                </div>

                <div class="game-card">
                    <img src="fc25.jpg" class="foto">
                    <h4>RE : Requiem</h4>
                </div>

                <div class="game-card">
                    <img src="fc25.jpg" class="foto">
                    <h4>RE : Requiem</h4>
                </div>

                <div class="game-card">
                    <img src="fc25.jpg" class="foto">
                    <h4>RE : Requiem</h4>
                </div>
            </div>
        </section>
    </main>

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