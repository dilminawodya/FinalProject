
<?php
include 'db_connect.php';
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['type'] != 'user') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funix - User Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="library2.css">
</head>
<body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <img src="logoo.png" alt="Funix Logo" class="about-logo" width=70px height=70px>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="search.php">Search</a></li>
                    <li class="nav-item"><a class="nav-link" href="library.php">Library</a></li>
                    <li class="nav-item"><a class="nav-link" href="browse_albums.php">Albums</a></li>
                    <li class="nav-item"><a class="nav-link" href="packagess.php">Payment</a></li>
                    <a href="login.php" class="btn btn-secondary m-2">Login</a>
                    <a href="register.php" class="btn btn-secondary m-2">Register</a>
                </ul>
            </div>
        </div>
    </nav>

    <div class="menu-container">
    <ul class="nav-menu">
        <li><a href="library.php" class="btn-menu">Catalogue</a></li>
        <li><a href="browse_playlists.php" class="btn-menu">Playlist</a></li>
        <li><a href="browse_artists.php" class="btn-menu">Artists</a></li>
    </ul>
</div>



    <!-- Page Header -->
    <header class="text-center py-4">
        <h1>Catalogue</h1>
        <p>Explore a variety of Catalogue curated by our users and admins</p>
    </header>
<br>


  <div class="container my-5">
  <h2 class="text-light mb-4">Explore Music</h2>
  <div class="row g-4">
    <!-- Card Example -->
    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="popular.jpg" class="card-img-top" alt="Popular Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Popular Music</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="classical.jpg" class="card-img-top" alt="Classical Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Classical</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="traditional.jpg" class="card-img-top" alt="Traditional Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Traditional</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="film.jpg" class="card-img-top" alt="Film and Media Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Film and Media</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container my-5">
  <h2 class="text-light mb-4">Explore Video</h2>
  <div class="row g-4">
    <!-- Card Example -->
    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="entertaiment.jpg" class="card-img-top" alt="Popular Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Entertainment</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="educational.jpg" class="card-img-top" alt="Classical Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Education</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="lifestyle.jpg" class="card-img-top" alt="Traditional Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Lifestyle</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="kids.jpg" class="card-img-top" alt="Film and Media Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Kid's Video</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="container my-5">
  <h2 class="text-light mb-4">Explore Films</h2>
  <div class="row g-4">
    <!-- Card Example -->
    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="horror.jpg" class="card-img-top" alt="Popular Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Horror</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="fantasy.jpg" class="card-img-top" alt="Classical Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Fantasy</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="romance.jpg" class="card-img-top" alt="Traditional Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Romance</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="animation.jpg" class="card-img-top" alt="Film and Media Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Animation</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="container my-5">
  <h2 class="text-light mb-4">Explore Song</h2>
  <div class="row g-4">
    <!-- Card Example -->
    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="romances.jpg" class="card-img-top" alt="Popular Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Romance</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="rap.jpg" class="card-img-top" alt="Classical Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Rap</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="hindi.jpg" class="card-img-top" alt="Traditional Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Hindi</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="children.jpg" class="card-img-top" alt="Film and Media Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Children</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="container my-5">
  <h2 class="text-light mb-4">Explore Country</h2>
  <div class="row g-4">
    <!-- Card Example -->
    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="english.jpg" class="card-img-top" alt="Popular Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">English</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="bollywood.jpg" class="card-img-top" alt="Classical Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Bollywood</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="sinhala.jpg" class="card-img-top" alt="Traditional Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Sinhala</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-4 col-md-3">
      <div class="card bg-dark text-white border-0 shadow-sm h-100">
        <img src="hollywood.jpg" class="card-img-top" alt="Film and Media Music">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">Hollywood</h5>
          <a href="video.php" class="btn btn-outline-light mt-3">Explore</a>
         
        </div>
      </div>
    </div>
  </div>
</div>

  
  
  
  
  



  <!-- Footer -->
  <footer class="text-center text-lg-start bg-dark text-white">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Connect with us on social media for the latest updates:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="#" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      
     
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links -->
  <section>
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-music me-3"></i>Funix- Endless Fun!
          </h6>
          <p>
            Your go-to platform for streaming music and videos from your favorite artists and creators. Explore, create, and share playlists effortlessly.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Features</h6>
          <p>
          <a href="browse_playlists.php" class="text-reset">Playlists</a>
          </p>
          <p>
            <a href="library.php" class="text-reset">Catalogue</a>
          </p>
          <p>
            <a href="home.php" class="text-reset">New Releases</a>
          </p>
          <p>
            <a href="packagess.php" class="text-reset">Packages</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
          <p>
          <a href="about.php" class="text-reset">About Us</a>
          </p>
          <p>
            <a href="comments_page.php" class="text-reset">Commends</a>
          </p>
          <p>
            <a href="library.php" class="text-reset">Library</a>
          </p>
          <p>
            <a href="browse_albums.php" class="text-reset">Album</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Contact -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-map-marker-alt me-3"></i> 123 Streaming Blvd,Funix,US</p>
          <p><i class="fas fa-envelope me-3"></i> www.funix.com</p>
          <p><i class="fas fa-phone me-3"></i> +1 234 567 890</p>
          <p><i class="fas fa-headset me-3"></i> 24/7 Funix Customer Support</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.1);">
    © 2024 Funix Streaming | All Rights Reserved.
  </div>
  <!-- Copyright -->
</footer>
