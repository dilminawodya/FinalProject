

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Artists</title>
    <link rel="stylesheet" href="browse_ar">
</head>
<body>
    <header>
        <h1>Artists</h1>
        <p>Discover music from a variety of artists</p>
    </header>
    <main>
        <?php
        include 'db_connect.php';
        $result = mysqli_query($conn, "SELECT * FROM artists");
        while ($artist = mysqli_fetch_assoc($result)) {
            echo "<div class='artist'>";
            echo "<h3>" . htmlspecialchars($artist['name']) . "</h3>";
            echo "<p>Genre: " . htmlspecialchars($artist['genre']) . "</p>";
            echo "<p>" . htmlspecialchars($artist['description']) . "</p>";
            echo "</div>";
        }
        ?>
        
    </main>
</body>
</html>
