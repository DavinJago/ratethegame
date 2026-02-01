<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate The Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/article.css" rel="stylesheet">
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
    
<div class="container article-page">

    <h2 class="page-title">ARTICLE</h2>

    <section class="article-section">
        <h5 class="section-title">Top News</h5>

        <div class="row">
            <div class="col-md-8">
                <div class="news-card big">
                    <img src="/images/re.jpg" alt="">
                    <div class="news-content">
                        <h4>Resident Evil Requiem Announced</h4>
                        <p class="desc">Capcom officially reveals the next chapter of Resident Evil series.</p>
                        <span class="date">20 December 2025</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="news-card small">
                    <img src="/images/hor.jpg" alt="">
                    <div>
                        <h6>New Horror Trend in Gaming</h6>
                        <span class="date">18 December 2025</span>
                    </div>
                </div>

                <div class="news-card small">
                    <img src="images/act.jpg" alt="">
                    <div>
                        <h6>Best Action Games in History</h6>
                        <span class="date">15 December 2025</span>
                    </div>
                </div>

                <div class="news-card small">
                    <img src="images/survival.jpg" alt="">
                    <div>
                        <h6>Top Survival Games 2025</h6>
                        <span class="date">15 December 2025</span>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <section class="article-section">
    <h5 class="section-title">Trending</h5>

    <div class="trending-news">

        <div class="trending-item">
            <img src="images/valo.webp" alt="">
            <div>
                <h6>Valorant New Agent Officially Revealed</h6>
                <span class="date">18 December 2025</span>
            </div>
        </div>

        <div class="trending-item">
            <img src="/images/re2.jpg" alt="">
            <div>
                <h6>RE: Requiem Gameplay Teaser</h6>
                <span class="date">17 December 2025</span>
            </div>
        </div>

        <div class="trending-item">
            <img src="images/wuwa2.jpg" alt="">
            <div>
                <h6>Wuthering Waves Breaks Download Record</h6>
                <span class="date">16 December 2025</span>
            </div>
        </div>

        <div class="trending-item">
            <img src="images/motogp.avif" alt="">
            <div>
                <h6>MotoGP Physics Update Impresses Players</h6>
                <span class="date">15 December 2025</span>
            </div>
        </div>
</div>
</section>


    <section class="article-section">
    <h5 class="section-title">Latest News</h5>

    <div class="row">

        <div class="col-md-8">
            <div class="latest-list">

                <div class="latest-card">
                    <img src="images/motogp2.jpg">
                    <div>
                        <h6>MotoGP Game Update Released</h6>
                        <p>Improved physics and new tracks added.</p>
                        <span class="date">14 December 2025</span>
                    </div>
                </div>

                <div class="latest-card highlight">
                    <img src="images/esport.jpg">
                    <div>
                        <h6>Esports Tournament Schedule</h6>
                        <p>Major tournaments announced for early 2026.</p>
                        <span class="date">12 December 2025</span>
                    </div>
                </div>

                <div class="latest-card">
                    <img src="images/race.jpg">
                    <div>
                        <h6>New Racing Engine Technology</h6>
                        <p>Realistic driving physics introduced.</p>
                        <span class="date">10 December 2025</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="sidebar">

                <h6 class="sidebar-title">Popular</h6>

                <div class="sidebar-item">
                    <img src="images/valo.webp">
                    <span>Valorant New Agent Revealed</span>
                </div>

                <div class="sidebar-item">
                    <img src="images/re.jpg">
                    <span>Resident Evil Requiem Teaser</span>
                </div>

                <div class="sidebar-item">
                    <img src="images/wuwa.jpg" alt="">
                    <span>Wuthering Waves Breaks Record</span>
                </div>

                <div class="sidebar-item">
                    <img src="images/gi2.jpeg">
                    <span>Genshin Impact Version 5.0</span>
                </div>
            </div>
        </div>
    </div>
</section>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>