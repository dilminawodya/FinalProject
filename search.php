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
    
    <link rel="stylesheet" href="user search.css">
</head>
<body>  <!-- Navigation Bar -->
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


<header class="text-center py-4">
    <h1>Search for Music & Videos</h1>
</header>

<main class="container my-5">

<h1>Search for Media</h1>

<!-- Search Form -->
<form method="POST">
    <input type="text" name="search_query" placeholder="Search for songs, artists, etc." required>
    <button type="submit">Search</button>
</form>

<?php if (isset($search_results)): ?>
    <h2>Search Results</h2>
    <?php if (mysqli_num_rows($search_results) > 0): ?>
        <ul>
            <?php while ($row = mysqli_fetch_assoc($search_results)): ?>
                <li>
                    <strong><?= $row['title'] ?></strong> by <?= $row['artist'] ?>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No results found.</p>
    <?php endif; ?>
<?php endif; ?>

<h2>Recent Searches</h2>
<ul>
    <?php while ($row = mysqli_fetch_assoc($recent_searches)): ?>
        <li><?= $row['query'] ?> (<?= $row['timestamp'] ?>)</li>
    <?php endwhile; ?>
</ul>
    
</main></div>

<footer class="text-center text-light py-3 bg-dark">
    <p>© 2024 Funix. All Rights Reserved | Follow us on:
        <a href="#"><i class="bx bxl-twitter text-primary"></i></a>
        <a href="#"><i class="bx bxl-facebook text-info"></i></a>
        <a href="#"><i class="bx bxl-instagram text-danger"></i></a>
    </p>
</footer>
</body>
</html>
