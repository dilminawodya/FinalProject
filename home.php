<?php
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
    <link rel="stylesheet" href="hom.css">
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

   <!-- Welcome Section -->
<div class="container text-center my-5 py-5" style="background:rgb(80, 80, 80); border-radius: 10px;">
    <div class="row align-items-center">
        <!-- Text Content -->
        <div class="col-md-6 mb-4">
            <h2 class="fw-bold">Welcome, <?= htmlspecialchars($_SESSION['name']) ?>!</h2>
            <p class="lead text-muted">
                Experience the ultimate music and video streaming platform. Unlimited access, endless entertainment!
            </p>
            <div>
                <a href="about.php" class="btn btn-primary m-2 px-4 py-2">About Us</a>
                <a href="comments_page.php" class="btn btn-primary m-2 px-4 py-2">Comments</a>
                <a href="library.php" class="btn btn-primary m-2 px-4 py-2">Your Favorites</a>
            </div>
        </div>
        <!-- Image -->
        <div class="col-md-6">
            <img src="bg.jpg" alt="Streaming" class="img-fluid rounded shadow" style="max-height: 400px; width: 400;height: 400px;">
        </div>
    </div>
</div>
</div>

   
 <!-- Advertisement Box -->
<div class="advertisement-box" id="ad-box">
    <div class="ad-content">
        <img src="add.jpeg" alt="Special Offer" class="ad-image">
        <div class="ad-text">
            <h3 class="ad-heading">Special Offer on Funix Premium!</h3>
            <p class="ad-description">Enjoy 30% off on our Premium Subscription. Stream ad-free music and videos now! Limited time offer.</p>
        </div>
        <button onclick="closeAd()" class="btn btn-warning">Close</button>
    </div>
</div>
   
        

    <div class="about-section">
    
    <div class="row align-items-center">
        <div class="col-md-1"></div>
        <div class="col-md-7">
            <p class="text">
               
                FUNIX - Music, Video & Endless Fun!<br><br>
                At Funix, we believe that music and video are more than just forms of entertainment; they are powerful tools for connection, expression, and inspiration. Whether you're a fan of the latest chart-topping hits, songs, classic movies, binge-worthy TV series, or exclusive indie content, Funix is here to bring you a world of streaming possibilities right at your fingertips.
            </p>
        </div>
        <div class="col-md-4 text-center">
            <img src="logoo.png" alt="Funix Logo" class="about-logo" width=210px height=210px>
        </div>
    </div>
</div>



    <!-- Popular This Week -->
    <div class="container my-5">
        <h4 class="text-light">Popular This Week</h4>
        <div class="row">
        
                <div class="col-md-3">
                    <div class="card">
                        <img src="OIP.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ananthen aa tharu kumara </h5>
                            
                            <a href="Ananthayen Aa Tharu Kumara Song.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card"  >
                        <img src="song2.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Becky G-  Bella Ciao</h5>
                            
                            <a href="Becky_G_-_Bella_Ciao_Official_Video.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="images.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Abnormal music for you</h5>
                            
                            <a href="abnormal-for-you-255737.mp3" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="song11.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hindi Cover dance </h5>
                            
                            <a href="cover.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>


           
        </div>
    </div>

    <div class="container my-5">
        <h4 class="text-light">New Release</h4>
        <div class="row">
         
                <div class="col-md-3">
                    <div class="card">
                        <img src="song5.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Arash - One day ft Helena </h5>
                        
                            <a href="Arash - One day ft Helena.mp3" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="song2.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Becky_G_-_Bella_Ciao_Official_Video </h5>
                            
                            <a href="Becky G-Bella Ciao Official Video[GetVideo.watch].mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="song6.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dance Pe Chance Full Song  </h5>
                            
                            <a href="Dance Pe Chance _ Full Song _ Rab Ne Bana Di Jodi _ Shah Rukh Khan_ Anushka _ Sunidhi_ Labh Janjua_640x360.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="song7.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Oh Na Na Na english song mp3 </h5>
                            
                            <a href="Oh Na Na Na.mp3" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

               
            
        </div>
    </div>

    <div class="container my-5">
        <h4 class="text-light">Top Hits</h4>
        <div class="row">
            
                <div class="col-md-3">
                    <div class="card">
                        <img src="song9.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Justin Bieber - Baby</h5>
                            
                            <a href="Justin Bieber - Baby (Official Music Video) ft. Ludacris_640x360.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="song8.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Maari 2 - Rowdy Baby  </h5>
                            <p class="card-text"></p>
                            <a href="Maari 2 - Rowdy Baby (Video Song) Dhanush Sai Pallavi Yuvan Shankar Raja Balaji Mohan.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="song10.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">NOZIYA KAROMATULLO  </h5>
                            
                            <a href="NOZIYA KAROMATULLO - MAYDA-MAYDA (CONCERT 'GIRYAI JON').mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>

                
            

                <div class="col-md-3">
                    <div class="card">
                        <img src="song11.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hindi Cover dance </h5>
                            
                            <a href="cover.mp4" class="btn btn-primary">Play</a>
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
            <a href="#playlists" class="text-reset">Playlists</a>
          </p>
          <p>
            <a href="#top-charts" class="text-reset">Catalogue</a>
          </p>
          <p>
            <a href="#new-releases" class="text-reset">New Releases</a>
          </p>
          <p>
            <a href="#premium" class="text-reset">Packages</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
          <p>
            <a href="#about-us" class="text-reset">About Us</a>
          </p>
          <p>
            <a href="#contact" class="text-reset">Commends</a>
          </p>
          <p>
            <a href="#faq" class="text-reset">Library</a>
          </p>
          <p>
            <a href="#help" class="text-reset">Album</a>
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


   <!-- JavaScript for Ad Behavior -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Function to close the advertisement box
    function closeAd() {
        const adBox = document.getElementById('ad-box');
        adBox.style.display = 'none';
    }

    // Function to show the ad box after a delay (e.g., 5 seconds)
    setTimeout(() => {
        const adBox = document.getElementById('ad-box');
        adBox.style.display = 'flex';
    }, 5000); // Show ad after 5 seconds
</script>

</body>
</html>
