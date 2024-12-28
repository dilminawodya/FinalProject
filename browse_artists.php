<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funix - Artists</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="art.css">
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
                    <li class="nav-item"><a class="nav-link" href="package.php">Payment</a></li>
                    <a href="login.php" class="btn btn-secondary m-2">Login</a>
                    <a href="register.php" class="btn btn-secondary m-2">Register</a>
                </ul>
            </div>
        </div>
    </nav>

    </nav>

    <!-- Menu -->
    <div class="menu-container">
        <ul class="nav-menu">
            <li><a href="library.php" class="btn-menu">Catalogue</a></li>
            <li><a href="browse_playlists.php" class="btn-menu">Playlist</a></li>
            <li><a href="browse_artists.php" class="btn-menu">Artists</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header>
        <h1>Artists</h1>
        <p>Explore a variety of playlists curated by artists</p>
    </header>
    

    <main class="container my-5">
    <?php
    include 'db_connect.php';
    $result = mysqli_query($conn, "SELECT * FROM artists");
    if (mysqli_num_rows($result) > 0) {
        while ($artist = mysqli_fetch_assoc($result)) {
            echo "<div class='artist row align-items-center'>";
            echo "<div class='col-md-3'>";
            if (!empty($artist['image'])) {
                echo "<img src='song4.jpg" . htmlspecialchars($artist['image']) . "' class='img-fluid rounded' alt='" . htmlspecialchars($artist['name']) . "'>";
            } else {
                echo "<img src='artists.jpg' class='img-fluid rounded' alt='Default Artist'>";
            }
            
            echo "</div>";
            echo "<div class='col-md-9'>";
            echo "<h3>" . htmlspecialchars($artist['name']) . "</h3>";
            echo "<p><strong>Genre:</strong> " . htmlspecialchars($artist['genre']) . "</p>";
            echo "<p>" . htmlspecialchars($artist['description']) . "</p>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p>No artists found.</p>";
    }
    
    ?>
     <a href="view artists.php" class="btn btn-secondary">View Artists</a>
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
</body>
</html>
