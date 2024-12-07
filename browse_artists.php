<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funix - Artists</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="artist.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
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
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
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

    <!-- Artist Section -->
    <main class="container my-5">
        <?php
        include 'db_connect.php';
        $result = mysqli_query($conn, "SELECT * FROM artists");
        if (mysqli_num_rows($result) > 0) {
            while ($artist = mysqli_fetch_assoc($result)) {
                echo "<div class='artist'>";
                echo "<h3>" . htmlspecialchars($artist['name']) . "</h3>";
                echo "<p>Genre: " . htmlspecialchars($artist['genre']) . "</p>";
                echo "<p>" . htmlspecialchars($artist['description']) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No artists found.</p>";
        }
        ?>
    </main>
    
    <!-- Footer -->
    <footer>
        <p>© 2024 Funix. All Rights Reserved | Follow us on:
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
        </p>
    </footer>
</body>
</html>
