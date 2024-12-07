<?php
include 'db_connect.php'; // Connect to your database

// Handle Create, Update, and Delete
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_album'])) {
        $title = $_POST['title'];
        $artist_id = $_POST['artist_id'];
        $release_date = $_POST['release_date'];
        $description = $_POST['description'];
        $sql = "INSERT INTO albums (title, artist_id, release_date, description) VALUES ('$title', '$artist_id', '$release_date', '$description')";
        mysqli_query($conn, $sql);
    } elseif (isset($_POST['update_album'])) {
        $id = $_POST['album_id'];
        $title = $_POST['title'];
        $artist_id = $_POST['artist_id'];
        $release_date = $_POST['release_date'];
        $description = $_POST['description'];
        $sql = "UPDATE albums SET title='$title', artist_id='$artist_id', release_date='$release_date', description='$description' WHERE album_id=$id";
        mysqli_query($conn, $sql);
    } elseif (isset($_POST['delete_album'])) {
        $id = $_POST['album_id'];
        $sql = "DELETE FROM albums WHERE album_id=$id";
        mysqli_query($conn, $sql);
    }
}

// Fetch all albums
$result = mysqli_query($conn, "
    SELECT albums.*, artists.name AS artist_name 
    FROM albums 
    LEFT JOIN artists ON albums.artist_id = artists.artist_id
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Albums</title>
    <link rel="stylesheet" href="admin-album.css">
</head>
<body>
<div class="main">
    <h1>Manage Albums</h1>
    <form method="POST">
        <input type="hidden" name="album_id" id="album_id">
        <label>Title:</label><br>
        <input type="text" name="title" id="title" required><br>
        <label>Artist:</label><br>
        <select name="artist_id" id="artist_id" required>
            <option value="">Select Artist</option>
            <?php
            $artists = mysqli_query($conn, "SELECT * FROM artists");
            while ($artist = mysqli_fetch_assoc($artists)) {
                echo "<option value='" . $artist['artist_id'] . "'>" . $artist['name'] . "</option>";
            }
            ?>
        </select><br>
        <label>Release Date:</label><br>
        <input type="date" name="release_date" id="release_date" required><br>
        <label>Description:</label><br>
        <textarea name="description" id="description"></textarea><br>
        <button type="submit" name="add_album">Add Album</button>
        <button type="submit" name="update_album">Update Album</button>
    </form>

    <a href="admin_dashboard.php" class="logout-btn">Dashboard</a>
    <h2>Album List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Release Date</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['album_id'] ?></td>
                <td><?= $row['title'] ?></td>
                <td><?= $row['artist_name'] ?></td>
                <td><?= $row['release_date'] ?></td>
                <td><?= $row['description'] ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="album_id" value="<?= $row['album_id'] ?>">
                        <button type="submit" name="delete_album">Delete</button>
                    </form>
                    <button onclick="editAlbum(<?= htmlspecialchars(json_encode($row)) ?>)">Edit</button>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>

<script>
function editAlbum(album) {
    document.getElementById('album_id').value = album.album_id;
    document.getElementById('title').value = album.title;
    document.getElementById('artist_id').value = album.artist_id;
    document.getElementById('release_date').value = album.release_date;
    document.getElementById('description').value = album.description;
}
</script>
</body>
</html>
