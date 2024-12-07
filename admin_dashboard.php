<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['type'] != 'admin') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="admin_artists.php">🎤 Manage Artists</a></li>
            <li><a href="admin_playlists.php">🎵 Manage Playlists</a></li>
            <li><a href="admin_albums.php">📀 Manage Albums</a></li>
            <li><a href="admin_payments.php">💳 Manage Payments</a></li>
            <li><a href="admin_search_logs.php">🔍 View Search Logs</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main">
        <header>
            <h1>Welcome to the Admin Dashboard</h1>
            <p>Hello Admin, <strong><?= htmlspecialchars($_SESSION['name']) ?></strong>!</p>
        </header>

        <section class="actions">
            <h2>Quick Actions</h2>
            <div class="cards">
                <div class="card">
                    <h3>Manage Artists</h3>
                    <p>View and update artist profiles.</p>
                    <a href="admin_artists.php">Go to Artists</a>
                </div>
                <div class="card">
                    <h3>Manage Playlists</h3>
                    <p>Create or edit playlists for users.</p>
                    <a href="admin_playlists.php">Go to Playlists</a>
                </div>
                <div class="card">
                    <h3>View Payments</h3>
                    <p>Track and manage payment records.</p>
                    <a href="admin_payments.php">Go to Payments</a>
                </div>
               
            </div>
        </section>

        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
