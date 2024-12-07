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
    <link rel="stylesheet" href="album.css">
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
                    <li class="nav-item"><a class="nav-link" href="browse_albums.php">Album</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
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

        <!-- Add New Album Form -->
        <section class="add-album mt-5">
            <h2 class="section-title">Add New Album</h2>
            <form action="browse_albums.php" method="POST">
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

    <!-- Footer -->
    <footer>
        <p>© 2024 Funix. All Rights Reserved | Follow us on:
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
