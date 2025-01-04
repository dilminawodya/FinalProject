<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNIX Packages</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="package.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logoo.png" alt="Funix Logo" width="70" height="70" class="d-inline-block align-text-top">
              
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="search.php">Search</a></li>
                    <li class="nav-item"><a class="nav-link" href="library.php">Library</a></li>
                    <li class="nav-item"><a class="nav-link" href="browse_albums.php">Albums</a></li>
                    <li class="nav-item"><a class="nav-link" href="package.php">Payment</a></li>
                    <a href="login.php" class="btn btn-secondary m-2">Login</a>
                    <a href="register.php" class="btn btn-secondary m-2">Register</a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <header class="packages-header text-center py-4">
        <h1>Choose Your Plan</h1>
        <p>Find the package that fits your needs and enjoy premium content.</p>
    </header>

    <!-- Modern Ad Section -->
<section class="ad-content text-center">
    <div class="ad-container">
        <img src="musicc.jpg" alt="Special Offer" class="ad-image">
        <div class="ad-text">
            <h2>🔥 Special Offer on Funix Premium!</h2>
            <p>Enjoy <strong>30% off</strong> on our Premium Subscription. Stream ad-free music and videos now! 🎶✨ Limited time offer.</p>
            
        </div>
    </div>
</section>


    <!-- Packages Section -->
    <main class="packages container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="package-card text-center p-4 bg-dark text-light rounded">
                    <h2>Individual</h2>
                    <p>Perfect for single users.</p>
                    <p><strong>$9.99/month</strong></p>
                    <button onclick="window.location.href='bowser_payment.php'" class="btn btn-secondary">Pay Now</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="package-card text-center p-4 bg-dark text-light rounded">
                    <h2>Student</h2>
                    <p>Exclusive discounts for students.</p>
                    <p><strong>$4.99/month</strong></p>
                    <button onclick="window.location.href='bowser_payment.php'"class="btn btn-secondary">Pay Now</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="package-card text-center p-4 bg-dark text-light rounded">
                    <h2>Family</h2>
                    <p>Share with up to 5 family members.</p>
                    <p><strong>$14.99/month</strong></p>
                    <button onclick="window.location.href='bowser_payment.php'" class="btn btn-secondary">Pay Now</button>
                </div>
            </div>
        </div>
    </main>

    

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



    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
