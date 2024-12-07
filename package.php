<?php
// Include database connection file
include 'db_connect.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNIX Packages</title>
    <link rel="stylesheet" href="packages.css"> <!-- Updated Link to the CSS file -->
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

    <!-- Header Section -->
    <header class="packages-header">
        <h1>Choose Your Plan</h1>
        <p>Find the package that fits your needs and enjoy premium content.</p>
    </header>

    <!-- Packages Section -->
    <main class="packages">
        <div class="package-card">
            <h2>Individual</h2>
            <p>Perfect for single users.</p>
            <p><strong>$9.99/month</strong></p>
            <button onclick="window.location.href='bowser_payment.php'">Pay Now</button>
        </div>
        <div class="package-card">
            <h2>Student</h2>
            <p>Exclusive discounts for students.</p>
            <p><strong>$4.99/month</strong></p>
            <button onclick="window.location.href='bowser_payment.php'">Pay Now</button>
        </div>
        <div class="package-card">
            <h2>Family</h2>
            <p>Share with up to 5 family members.</p>
            <p><strong>$14.99/month</strong></p>
            <button onclick="window.location.href='bowser_payment.php'">Pay Now</button>
        </div>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <p>&copy; 2024 FUNIX Music & Video Streaming Platform. All rights reserved.</p>
    </footer>
</body>
</html>
