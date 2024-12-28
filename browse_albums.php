<?php
// Include database connection file
include 'db_connect.php'; // Ensure this file contains your database connection details

// Handle form submission to add a new album
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $artist_id = mysqli_real_escape_string($conn, $_POST['artist_id']);
    $release_date = mysqli_real_escape_string($conn, $_POST['release_date']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Insert the album into the database
    $sql = "INSERT INTO albums (title, artist_id, release_date, description) 
            VALUES ('$title', '$artist_id', '$release_date', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Album added successfully!');</script>";
    } else {
        echo "<script>alert('Error: Could not add the album.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funix - Browse Albums</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="albums.css">
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


    <header>
        <h1>Browse Albums</h1>
        <p>Discover amazing albums by various artists</p>
    </header>

    <main class="container mt-4">
        <!-- Display Albums -->
        <section class="album-list">
            <h2 class="section-title">Available Albums</h2>
            <div class="row">
                <?php
                $result = mysqli_query($conn, "
                    SELECT albums.*, artists.name AS artist_name 
                    FROM albums 
                    LEFT JOIN artists ON albums.artist_id = artists.artist_id
                ");
                if (mysqli_num_rows($result) > 0) {
                    while ($album = mysqli_fetch_assoc($result)) {
                        echo "
                            <div class='col-md-4'>
                                <div class='album-card'>
                                    <h3 class='album-title'>" . htmlspecialchars($album['title']) . "</h3>
                                    <p><strong>Artist:</strong> " . htmlspecialchars($album['artist_name']) . "</p>
                                    <p><strong>Release Date:</strong> " . htmlspecialchars($album['release_date']) . "</p>
                                    <p><strong>Description:</strong> " . htmlspecialchars($album['description']) . "</p>
                                </div>
                            </div>
                        ";
                    }
                } else {
                    echo "<p>No albums found.</p>";
                }
                ?>
            </div>
        </section>
        <a href="view album.php" class="btn btn-secondary">View Albums</a>

        <!-- Add New Album Form -->
        <section class="add-album mt-5">
            
            <form action="browse_albums.php" method="POST">
            <h2 class="section-title">Add New Album</h2>
                <div class="form-style">
                    <label for="title" class="form-label">Album Title:</label>
                    <input type="text" id="title" name="title" class="form-control" required>

                    <label for="artist_id" class="form-label">Artist:</label>
                    <select id="artist_id" name="artist_id" class="form-control" required>
                        <?php
                        // Fetch artists from the database
                        $artists = mysqli_query($conn, "SELECT artist_id, name FROM artists");
                        while ($artist = mysqli_fetch_assoc($artists)) {
                            echo "<option value='" . $artist['artist_id'] . "'>" . htmlspecialchars($artist['name']) . "</option>";
                        }
                        ?>
                    </select>

                    <label for="release_date" class="form-label">Release Date:</label>
                    <input type="date" id="release_date" name="release_date" class="form-control" required>

                    <label for="description" class="form-label">Description:</label>
                    <textarea id="description" name="description" class="form-control" required></textarea>

                    <button type="submit" name="submit" class="btn btn-primary mt-3">Add Album</button>
                </div>
            </form>
        </section>
    </main>
<br>
    

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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
