<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AR Movies</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Link Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Nav -->
        <div class="nav container">
            <!-- Logo -->
            <a href="index.html" class="logo">
                AR <span>Movie</span>
            </a>
            <!-- Search Box -->
            <div class="search-box">
                <input type="search" name="" id="search-input" placeholder="Search movie">
                <i class='bx bx-search'></i>
            </div>
            <!-- User -->
            <a href="" class="user">
                <img src="img/user.png" alt="" class="user-img">
            </a>
            <!-- NavBar -->
            <div class="navbar">
                <a href="#home" class="nav-link nav-active">
                    <i class='bx bx-home' ></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#popular" class="nav-link">
                    <i class='bx bxs-hot' ></i>
                    <span class="nav-link-title">Trending</span>
                </a>
                <a href="#movies" class="nav-link">
                    <i class='bx bx-compass' ></i>
                    <span class="nav-link-title">Explore</span>
                </a>
                <a href="#home" class="nav-link">
                    <i class='bx bx-tv' ></i>
                    <span class="nav-link-title">Movies</span>
                </a>
                <a href="#home" class="nav-link">
                    <i class='bx bx-heart' ></i>
                    <span class="nav-link-title">Favourite</span>
                </a>
            </div>
        </div>
    </header>
    <!-- Home -->
    <section class="home container" id="home">
        <!-- Home Image -->
        <img src="img/background/banner2.png" alt="" class="home-img">
        <!-- Home Text -->
        <div class="home-text">
            <h1 class="home-title">Batman vs Superman</h1>
            <p>Realising 10 April</p>
            <a href="#" class="watch-btn">
                <i class='bx bx-right-arrow' ></i>
                <span>Watch The Trailer</span>
            </a>
        </div>
    </section>
    <!-- Home End -->
    <!-- Popular Section Start -->
    <section class="popular container" id="popular">
        <!-- Heading -->
        <div class="heading">
            <h2 class="heading-title">Popular Movies</h2>
            <!-- Swiper Buttons -->
            <div class="swiper-btn">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <!-- Content -->
        <div class="popular-content swiper">
            <div class="swiper-wrapper">
                <!-- Movies Box 1 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/cover/endgame.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Avengers: Endgame</h2>
                            <span class="movie-type">Action</span>
                            <a href="endgame.php" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow' ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 2 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/cover/nowayhome.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Spider-Man: No Way Home</h2>
                            <span class="movie-type">Action</span>
                            <a href="nowayhome.php" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow' ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 3 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/cover/Avangers Infinity War.png" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Avengers: Infinity War</h2>
                            <span class="movie-type">Action / Fantasy</span>
                            <a href="infinitywar.php" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow' ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 4 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/cover/thebatman.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">The Batman</h2>
                            <span class="movie-type">Action</span>
                            <a href="thebatman.php" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow' ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 5 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/cover/Homecoming.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Spider-Man: Homecoming</h2>
                            <span class="movie-type">Action / Adventure</span>
                            <a href="homecoming.php" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow' ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 6 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/cover/the first avenger.png" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Captain America: The First Avenger</h2>
                            <span class="movie-type">Action / Sci-fi</span>
                            <a href="tfa.php" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow' ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 7 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/cover/civil war.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Captain America: Civil War</h2>
                            <span class="movie-type">Action / Adventure</span>
                            <a href="civilwar.php" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow' ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies Box 8 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="img/cover/Age Of Ultron.png" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Avengers: Age Of Ultron</h2>
                            <span class="movie-type">Action / Adventure</span>
                            <a href="ageofultron.php" class="watch-btn play-btn">
                                <i class='bx bx-right-arrow' ></i>
                            </a>
                        </div>
                    </div>
                </div>
              </div>
              
        </div>
    </section>
    <!-- Popular Section End -->
    <!-- Movie Section Start -->
    <section class="movies container" id="movies">
        <!-- Heading -->
        <div class="heading">
            <h2 class="heading-title">Movies And Shows</h2>
        </div>
        <!-- Movies Content -->
        <div class="movies-content">
            <!-- Movies Box 1 -->
            <div class="movie-box">
                <img src="img/cover/Homecoming.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Spider-Man: Homecoming</h2>
                    <span class="movie-type">Action / Adventure</span>
                    <a href="homecoming.php" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- Movies Box 2 -->
            <div class="movie-box">
                <img src="img/cover/Age Of Ultron.png" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Avengers: Age Of Ultron</h2>
                    <span class="movie-type">Action / Adventure</span>
                    <a href="ageofultron.php" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- Movies Box 3 -->
            <div class="movie-box">
                <img src="img/cover/the first avenger.png" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Captain America: The First Avenger</h2>
                    <span class="movie-type">Action / Sci-fi</span>
                    <a href="tfa.php" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- Movies Box 4 -->
            <div class="movie-box">
                <img src="img/cover/endgame.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Avengers: Endgame</h2>
                    <span class="movie-type">Action</span>
                    <a href="endgame.php" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- Movies Box 5 -->
            <div class="movie-box">
                <img src="img/cover/nowayhome.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Spider-Man: No Way Home</h2>
                    <span class="movie-type">Action</span>
                    <a href="nowayhome.php" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- Movies Box 6 -->
            <div class="movie-box">
                <img src="img/cover/thebatman.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">The Batman</h2>
                    <span class="movie-type">Action</span>
                    <a href="thebatman.php" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- Movies Box 7 -->
            <div class="movie-box">
                <img src="img/cover/civil war.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Captain America: Civil War</h2>
                    <span class="movie-type">Action / Adventure</span>
                    <a href="civilwar.php" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
            <!-- Movies Box 8 -->
            <div class="movie-box">
                <img src="img/cover/Avangers Infinity War.png" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Avengers: Infinity War</h2>
                    <span class="movie-type">Action / Fantasy</span>
                    <a href="infinitywar.php" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Movie Section End -->
    <!-- Next Page -->
    <div class="next-page">
        <a href="#" class="next-btn">Next Page</a>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; ARMovie All Right Reserved</p>
    </div>

    <!-- Link Swiper JS-->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Link To JS -->
    <script src="js/main.js"></script>
</body>
</html>