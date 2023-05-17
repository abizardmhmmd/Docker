<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spider-Man: No Way Home</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="css/style.css">
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
            <a href="index.php" class="logo">
                AR <span>Movie</span>
            </a>
            <!-- Search Box -->
            <div class="search-box">
                <input type="search" name="" id="search-input" placeholder="Search movie">
                <i class='bx bx-search'></i>
            </div>
            <!-- User -->
            <a href="#" class="user">
                <img src="img/user.png" alt="" class="user-img">
            </a>
            <!-- NavBar -->
            <div class="navbar">
                <a href="index.php" class="nav-link nav-active">
                    <i class='bx bx-home' ></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#" class="nav-link">
                    <i class='bx bxs-hot' ></i>
                    <span class="nav-link-title">Trending</span>
                </a>
                <a href="#" class="nav-link">
                    <i class='bx bx-compass' ></i>
                    <span class="nav-link-title">Explore</span>
                </a>
                <a href="#" class="nav-link">
                    <i class='bx bx-tv' ></i>
                    <span class="nav-link-title">Movies</span>
                </a>
                <a href="#" class="nav-link">
                    <i class='bx bx-heart' ></i>
                    <span class="nav-link-title">Favourite</span>
                </a>
            </div>
        </div>
    </header>
    <!-- Play Movie Container -->
    <div class="play-container container">
        <!-- Play Image -->
        <img src="img/background/No Way Home.jpg" alt="" class="play-img">
        <!-- Play Text -->
        <div class="play-text">
            <h2>Spider-Man: No Way Home</h2>
            <!-- Ratings -->
            <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star-half"></i>
                <i class='bx bx-star'></i>
            </div>
            <!-- Tags -->
            <div class="tags">
                <span>Action</span>
                <span>Adventure</span>
                <span>BluRay</span>
            </div>
        </div>
        <!-- Play Btn -->
        <i class="bx bx-right-arrow play-movie"></i>
        <!-- Video Container -->
        <div class="video-container">
            <!-- Video-Box -->
            <div class="video-box">
                <video id="myvideo" src="video/Homecoming.mp4" controls></video>
                <!-- Close Video Icon -->
                <i class="bx bx-x close-video"></i>
            </div>
        </div>
    </div>
    <!-- About -->
    <div class="about-movie container">
        <h2>Spider-Man: No Way Home</h2>
        <p>Peter Parker's secret identity is revealed to the world. Desperate for help, Peter turns to Doctor Strange to make the world forget that he is Spider-Man. The spell goes horribly wrong and destroys the multiverse, bringing in a terrible villain who could destroy the world.</p>
        <!-- Movie Cast -->
        <h2 class="cast-heading">Movie Cast</h2>
        <div class="cast">
            <div class="cast-box">
                <img src="img/cast/Tom Holland.png" alt="Tom Holland" class="cast-img">
                <span class="cast-title">Tom Holland</span>
            </div>
            <div class="cast-box">
                <img src="img/cast/Andrew Garfield.png" alt="Andrew Garfield" class="cast-img">
                <span class="cast-title">Andrew Garfield</span>
            </div>
            <div class="cast-box">
                <img src="img/cast/Tobey Maguire.png" alt="Tobey Maguire" class="cast-img">
                <span class="cast-title">Tobey Maguire</span>
            </div>
            <div class="cast-box">
                <img src="img/cast/Zendaya.png" alt="Zenadya" class="cast-img">
                <span class="cast-title">Zenadya</span>
            </div>
        </div>
    </div>
    <!-- Download -->
    <div class="download">
        <h2 class="download-title">Download Movie</h2>
        <div class="download-links">
            <a href="video/Homecoming.mp4" download>Download</a>
        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; ARMovie All Right Reserved</p>
    </div>

    <!-- Link Swiper Files -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Link To JS -->
    <script src="js/main.js"></script>
</body>
</html>