<?php
// Admin Artists Management Page
// Description: This page enables administrators to manage artist records by performing Create, Read, Update, and Delete (CRUD) operations. It ensures smooth and efficient content management.

include 'db_connect.php'; // Connect to your database

// Handle Create, Update, and Delete
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    // Validation
    if (empty($_POST['name'])) {
        $errors[] = "Name is required.";
    }
    if (empty($_POST['genre'])) {
        $errors[] = "Genre is required.";
    }
    if (isset($_POST['add_artist']) || isset($_POST['update_artist'])) {
        if (empty($_POST['description'])) {
            $errors[] = "Description is required.";
        } elseif (!preg_match("/^[a-zA-Z0-9 .,!?]+$/", $_POST['description'])) {
            $errors[] = "Description contains invalid characters.";
        }
    }

    if (empty($errors)) {
        if (isset($_POST['add_artist'])) {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $genre = mysqli_real_escape_string($conn, $_POST['genre']);
            $description = mysqli_real_escape_string($conn, $_POST['description']);
            $sql = "INSERT INTO artists (name, genre, description) VALUES ('$name', '$genre', '$description')";
            mysqli_query($conn, $sql);
        } elseif (isset($_POST['update_artist'])) {
            $id = intval($_POST['artist_id']);
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $genre = mysqli_real_escape_string($conn, $_POST['genre']);
            $description = mysqli_real_escape_string($conn, $_POST['description']);
            $sql = "UPDATE artists SET name='$name', genre='$genre', description='$description' WHERE artist_id=$id";
            mysqli_query($conn, $sql);
        } elseif (isset($_POST['delete_artist'])) {
            $id = intval($_POST['artist_id']);
            $sql = "DELETE FROM artists WHERE artist_id=$id";
            mysqli_query($conn, $sql);
        }
    }
}

// Fetch all artists
$result = mysqli_query($conn, "SELECT * FROM artists");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Artists</title>
    <link rel="stylesheet" href="admin-artist.css">
</head>
<body>
<div class="main">
    <h1>Manage Artists</h1>
    
    <!-- Display Errors -->
    <?php if (!empty($errors)): ?>
        <div class="errors">
            <?php foreach ($errors as $error): ?>
                <p><?= htmlspecialchars($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- Artist Form -->
    <form method="POST" onsubmit="return validateForm()">
        <input type="hidden" name="artist_id" id="artist_id">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" placeholder="Artist Name" required><br>
        <label for="genre">Genre:</label><br>
        <input type="text" name="genre" id="genre" placeholder="Genre" required><br>
        <label for="description">Description:</label><br>
        <textarea name="description" id="description" placeholder="Add a brief description"></textarea><br>
        <button type="submit" name="add_artist" class="btn">Add Artist</button>
        <button type="submit" name="update_artist" class="btn">Update Artist</button>
    </form>
    <a href="admin_dashboard.php" class="btn">Back to Dashboard</a>

    <!-- Artist List -->
    <h2>Artist List</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Genre</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= htmlspecialchars($row['artist_id']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['genre']) ?></td>
                    <td><?= htmlspecialchars($row['description']) ?></td>
                    <td>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="artist_id" value="<?= htmlspecialchars($row['artist_id']) ?>">
                            <button type="submit" name="delete_artist" class="btn-delete">Delete</button>
                        </form>
                        <button onclick="editArtist(<?= htmlspecialchars(json_encode($row)) ?>)" class="btn-edit">Edit</button>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script>
// Client-side validation
function validateForm() {
    const name = document.getElementById('name').value.trim();
    const genre = document.getElementById('genre').value.trim();
    const description = document.getElementById('description').value.trim();

    if (!name || !genre || !description) {
        alert('All fields are required.');
        return false;
    }
    if (!/^[a-zA-Z0-9 .,!?]+$/.test(description)) {
        alert('Description contains invalid characters.');
        return false;
    }
    return true;
}

// Populate form fields for editing an artist
function editArtist(artist) {
    document.getElementById('artist_id').value = artist.artist_id;
    document.getElementById('name').value = artist.name;
    document.getElementById('genre').value = artist.genre;
    document.getElementById('description').value = artist.description;
}
</script>
</body>
</html>
