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
            <a class="navbar-brand" href="#">FUNIX</a>
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
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <div class="container text-center my-5">
        <h2>Welcome, <?= htmlspecialchars($_SESSION['name']) ?>!</h2>
        <p class="lead">Enjoy unlimited access to music and video streaming on our platform.</p>
        <div>
            <a href="#" class="btn btn-primary m-2">Browse Music</a>
            <a href="#" class="btn btn-success m-2">Browse Videos</a>
            <a href="#" class="btn btn-warning m-2">Your Favorites</a>
        </div>
    </div>

    <!-- Advertisement Section -->
    <div id="ad-box" class="alert alert-warning text-center" role="alert" style="display: none;">
        <strong>Special Offer:</strong> Enjoy 30% off on Funix Premium Subscription! Limited time only.
        <button type="button" class="btn-close" onclick="closeAd()" aria-label="Close"></button>
    </div>

    <!-- Popular This Week -->
    <div class="container my-5">
        <h4 class="text-light">Popular This Week</h4>
        <div class="row">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <div class="col-md-2">
                    <div class="card">
                        <img src="a8.jpg" class="card-img-top" alt="Song <?= $i ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title">ananthen aa tharu kumara <?= $i ?></h5>
                            <p class="card-text">Artist Name</p>
                            <a href="Ananthayen Aa Tharu Kumara Song.mp4" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="container my-5">
        <h4 class="text-light">New Release</h4>
        <div class="row">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <div class="col-md-2">
                    <div class="card">
                        <img src="a8.jpg" class="card-img-top" alt="Song <?= $i ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title">Song Title <?= $i ?></h5>
                            <p class="card-text">Artist Name</p>
                            <a href="#" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="container my-5">
        <h4 class="text-light">Top Hits</h4>
        <div class="row">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <div class="col-md-2">
                    <div class="card">
                        <img src="a8.jpg" class="card-img-top" alt="Song <?= $i ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title">Song Title <?= $i ?></h5>
                            <p class="card-text">Artist Name</p>
                            <a href="#" class="btn btn-primary">Play</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>


    <!-- Footer -->
    <footer class="text-center text-light py-3 bg-dark">
        <p>© 2024 Funix. All Rights Reserved | Follow us on:
            <a href="#"><i class="bx bxl-twitter text-primary"></i></a>
            <a href="#"><i class="bx bxl-facebook text-info"></i></a>
            <a href="#"><i class="bx bxl-instagram text-danger"></i></a>
        </p>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function closeAd() {
            document.getElementById('ad-box').style.display = 'none';
        }

        setTimeout(() => {
            document.getElementById('ad-box').style.display = 'block';
        }, 5000);
    </script>
</body>
</html>
