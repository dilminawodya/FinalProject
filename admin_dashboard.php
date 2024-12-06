<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['type'] != 'admin') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="admin.css">
</head>
<body>


<div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="admin_artists.php">Manage Artists</a></li>
            <li><a href="admin_playlists.php">Manage Playlists</a></li>
            <li><a href="admin_albums.php">Manage Albums</a></li>
            <li><a href="admin_payments.php">Manage Payments</a></li>
            <li><a href="admin_search.php">View Search Logs</a></li>
        </ul>
    </div>
    <div class="main">
        <h1>Welcome to the Admin Dashboard</h1>
        <p>Select a section from the menu to manage the data.</p>

        <h2>Welcome Admin, <?= htmlspecialchars($_SESSION['name']) ?>!</h2>
    <p>This is your dashboard where you can manage the platform.</p>
    <a href="logout.php"><button>Logout</button></a>
    </div>
</body>
</html>
</body>
</html>
