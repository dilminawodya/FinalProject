<?php
include 'db_connect.php';
session_start();

// Assuming the user ID is stored in session after login
$user_id = $_SESSION['user_id'];

// Handle the search
$search_results = [];
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {
    $search_query = trim($_POST['search_query']);

    if (!empty($search_query)) {
        $sql = "INSERT INTO search_logs (user_id, search_query) VALUES ('$user_id', '$search_query')";
        mysqli_query($conn, $sql);

        // Fetch search results
        $query = "
            SELECT * FROM media 
            WHERE title LIKE '%$search_query%' OR artist LIKE '%$search_query%'
        ";
        $search_results = mysqli_query($conn, $query);

        if (mysqli_num_rows($search_results) === 0) {
            $message = 'No results found for your search.';
        }
    } else {
        $message = 'Please enter a search term.';
    }
}
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
    
    <link rel="stylesheet" href="search.css">
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
                <li class="nav-item"><a class="nav-link active" href="search.php">Search</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Videos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Favorites</a></li>
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
    <!-- Search Form -->
    <form method="POST" class="search-form d-flex justify-content-center align-items-center">
        <input type="text" name="search_query" placeholder="Search by title or artist..." required>
        <button type="submit" name="search"><i class="fas fa-search"></i> Search</button>
    </form>

    <!-- Message -->
    <?php if (!empty($message)): ?>
        <p class="text-center mt-4 alert alert-warning"><?= $message ?></p>
    <?php endif; ?>

    <!-- Search Results -->
    <?php if (!empty($search_results) && mysqli_num_rows($search_results) > 0): ?>
        <h2 class="text-center my-4">Search Results</h2>
        <div class="row">
            <?php while ($result = mysqli_fetch_assoc($search_results)): ?>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card bg-dark text-light">
                        <div class="card-body">
                            <h5 class="card-title"><?= $result['title'] ?></h5>
                            <p class="card-text">Artist: <?= $result['artist'] ?></p>
                            <p class="card-text">Category: <?= $result['category'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
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
