<?php
include 'db_connect.php'; // Connect to your database

// Handle Create, Update, and Delete
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_artist'])) {
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $description = $_POST['description'];
        $sql = "INSERT INTO artists (name, genre, description) VALUES ('$name', '$genre', '$description')";
        mysqli_query($conn, $sql);
    } elseif (isset($_POST['update_artist'])) {
        $id = $_POST['artist_id'];
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $description = $_POST['description'];
        $sql = "UPDATE artists SET name='$name', genre='$genre', description='$description' WHERE artist_id=$id";
        mysqli_query($conn, $sql);
    } elseif (isset($_POST['delete_artist'])) {
        $id = $_POST['artist_id'];
        $sql = "DELETE FROM artists WHERE artist_id=$id";
        mysqli_query($conn, $sql);
    }
}

// Fetch all artists
$result = mysqli_query($conn, "SELECT * FROM artists");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Artists</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="main">
    <h1>Manage Artists</h1>
    <form method="POST">
        <input type="hidden" name="artist_id" id="artist_id">
        <label>Name:</label><br>
        <input type="text" name="name" id="name" required><br>
        <label>Genre:</label><br>
        <input type="text" name="genre" id="genre" required><br>
        <label>Description:</label><br>
        <textarea name="description" id="description"></textarea><br>
        <button type="submit" name="add_artist">Add Artist</button>
        <button type="submit" name="update_artist">Update Artist</button>
    </form>
    <h2>Artist List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['artist_id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['genre'] ?></td>
                <td><?= $row['description'] ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="artist_id" value="<?= $row['artist_id'] ?>">
                        <button type="submit" name="delete_artist">Delete</button>
                    </form>
                    <button onclick="editArtist(<?= htmlspecialchars(json_encode($row)) ?>)">Edit</button>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>

<script>
function editArtist(artist) {
    document.getElementById('artist_id').value = artist.artist_id;
    document.getElementById('name').value = artist.name;
    document.getElementById('genre').value = artist.genre;
    document.getElementById('description').value = artist.description;
}
</script>
</body>
</html>
