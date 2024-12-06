<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Albums</title>
    <link rel="stylesheet" href="style.css"> <!-- Add your styles here -->
</head>
<body>

    <header>
        <h1>Browse Albums</h1>
        <p>Discover amazing albums by various artists</p>
    </header>

    <main>
        <section class="album-list">
            <h2>Available Albums</h2>

            <?php
            include 'db_connect.php'; // Connect to your database
            $result = mysqli_query($conn, "
                SELECT albums.*, artists.name AS artist_name 
                FROM albums 
                LEFT JOIN artists ON albums.artist_id = artists.artist_id
            ");
            if (mysqli_num_rows($result) > 0) {
                while ($album = mysqli_fetch_assoc($result)) {
                    echo "<div class='album'>";
                    echo "<h3>" . htmlspecialchars($album['title']) . "</h3>";
                    echo "<p><strong>Artist:</strong> " . htmlspecialchars($album['artist_name']) . "</p>";
                    echo "<p><strong>Release Date:</strong> " . htmlspecialchars($album['release_date']) . "</p>";
                    echo "<p><strong>Description:</strong> " . htmlspecialchars($album['description']) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No albums found.</p>";
            }
            ?>
        </section>

        <section class="add-album">
            <h2>Add New Album</h2>
            <form action="add_album.php" method="POST">
                <label for="title">Album Title:</label><br>
                <input type="text" id="title" name="title" required><br>

                <label for="artist_id">Artist:</label><br>
                <select id="artist_id" name="artist_id" required>
                    <?php
                    // Fetch artists from the database for the dropdown
                    $artists = mysqli_query($conn, "SELECT artist_id, name FROM artists");
                    while ($artist = mysqli_fetch_assoc($artists)) {
                        echo "<option value='" . $artist['artist_id'] . "'>" . htmlspecialchars($artist['name']) . "</option>";
                    }
                    ?>
                </select><br>

                <label for="release_date">Release Date:</label><br>
                <input type="date" id="release_date" name="release_date" required><br>

                <label for="description">Description:</label><br>
                <textarea id="description" name="description" required></textarea><br>

                <button type="submit" name="submit">Add Album</button>
            </form>
        </section>

    </main>

    <footer>
        <p>&copy; 2024 Music & Video Streaming Platform</p>
    </footer>

</body>
</html>
