<?php
include 'db_connect.php'; // Connect to your database

// Handle Search Query Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search_query'])) {
    $search_query = mysqli_real_escape_string($conn, $_POST['search_query']);
    
    // Insert the search query into the 'search' table
    $sql = "INSERT INTO search (query) VALUES ('$search_query')";
    mysqli_query($conn, $sql);

    // Fetch search results based on the query
    $search_results = mysqli_query($conn, "
        SELECT * FROM media WHERE title LIKE '%$search_query%' OR artist LIKE '%$search_query%'
    ");
}

// Fetch the user's recent search history (if needed)
$recent_searches = mysqli_query($conn, "SELECT * FROM search ORDER BY timestamp DESC LIMIT 10");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funix | Search</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="bowser-search.css">
    <script src="search.js" defer></script>
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

    

<main class="container my-5">
    <!-- Search Form Card -->
    <div class="card search-card mx-auto">
        <div class="card-header text-center">
            <h3>Search for Music & video</h3>
        </div>
        <div class="card-body">
            <form method="POST" class="search-form">
                <div class="input-group">
                    <input type="text" id="search_query" name="search_query" placeholder="Search for songs, artists, etc." autocomplete="off" class="form-control">
                    <button type="submit" class="btn btn-secondary">Search</button>
                </div>
            </form>
        </div>
    </div>
</main>


  <!-- Suggestions Dropdown -->


<?php if (isset($search_results)): ?>
    <h2 class="section-header">Search Results</h2>
    <?php if (mysqli_num_rows($search_results) > 0): ?>
        <ul class="search-results">
            <?php while ($row = mysqli_fetch_assoc($search_results)): ?>
                <li class="result-item">
                    <div class="result-title"><?= $row['title'] ?></div>
                    <div class="result-artist">by <?= $row['artist'] ?></div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p class="no-results">No results found. Try a different query!</p>
    <?php endif; ?>
<?php endif; ?>

<h2 class="section-header">Recent Searches</h2>
<ul class="recent-searches">
    <?php while ($row = mysqli_fetch_assoc($recent_searches)): ?>
        <li class="recent-item">
            <?= $row['query'] ?> <span class="timestamp">(<?= $row['timestamp'] ?>)</span>
        </li>
    <?php endwhile; ?>
</ul>


<div class="container my-5">
        <h4 class="text-light">Recommended for you</h4>
        <div class="row">
        

                <div class="col-md-3">
                    <div class="card"  >
                        <img src="song2.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Becky G-  Bella Ciao</h5>
                            
                            <a href="Becky_G_-_Bella_Ciao_Official_Video.mp4" class="btn btn-secondary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="song11.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">cover dance.mp4</h5>
                            
                            <a href="C:\xampp\htdocs\FinalProject\cover.mp4" class="btn btn-secondary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="song10.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Noziya Karomatullo  </h5>
                            
                            <a href="C:\xampp\htdocs\FinalProject\NOZIYA KAROMATULLO - MAYDA-MAYDA (CONCERT 'GIRYAI JON').mp4" class="btn btn-secondary">Play</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img src="song4.jpg" class="card-img-top" alt="Song ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dreamers offical.mp3</h5>
                            
                            <a href="C:\xampp\htdocs\FinalProject\Dreamers.mp3" class="btn btn-secondary">Play</a>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>

    
</main></div>


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


</body>
</html>
