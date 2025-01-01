<?php
include 'db_connect.php'; // Connect to your database

// Handle Create, Update, and Delete
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_playlist'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $created_by = $_POST['created_by'];
        $sql = "INSERT INTO playlists (name, description, created_by) VALUES ('$name', '$description', '$created_by')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
                Swal.fire({
                    title: 'Success!',
                    text: 'Playlist added successfully!',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    background: '#d4edda',
                    showCloseButton: true
                });
            </script>";
        }
    } elseif (isset($_POST['update_playlist'])) {
        $id = $_POST['playlist_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $created_by = $_POST['created_by'];
        $sql = "UPDATE playlists SET name='$name', description='$description', created_by='$created_by' WHERE playlist_id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
                Swal.fire({
                    title: 'Updated!',
                    text: 'Playlist updated successfully!',
                    icon: 'info',
                    confirmButtonText: 'Great!',
                    background: '#cce5ff',
                    showCloseButton: true
                });
            </script>";
        }
    } elseif (isset($_POST['delete_playlist'])) {
        $id = $_POST['playlist_id'];
        $sql = "DELETE FROM playlists WHERE playlist_id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
                Swal.fire({
                    title: 'Deleted!',
                    text: 'Playlist deleted successfully!',
                    icon: 'warning',
                    confirmButtonText: 'OK',
                    background: '#f8d7da',
                    showCloseButton: true
                });
            </script>";
        }
    }
}

// Fetch all playlists
$result = mysqli_query($conn, "SELECT * FROM playlists");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Playlists</title>
    <link rel="stylesheet" href="admin-playlist.css">
    <!-- Add Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css">
</head>
<body>
<div class="main">
    <h1>Manage Playlists</h1>
    <form id="playlist-form" method="POST">
        <input type="hidden" name="playlist_id" id="playlist_id">
        <label>Name:</label><br>
        <input type="text" name="name" id="name" required><br>
        <label>Description:</label><br>
        <textarea name="description" id="description"></textarea><br>
        <label>Created By:</label><br>
        <input type="text" name="created_by" id="created_by" required><br>
        <button type="submit" name="add_playlist"><i class="fas fa-plus"></i> Add Playlist</button>
        <button type="submit" name="update_playlist"><i class="fas fa-sync-alt"></i> Update Playlist</button>
    </form>

    <a href="admin_dashboard.php" class="logout-btn"><i class="fas fa-home"></i> Dashboard</a>
    <h2>Playlist List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Created By</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['playlist_id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['description'] ?></td>
                <td><?= $row['created_by'] ?></td>
                <td>
                    <!-- Delete Button with SweetAlert -->
                    <form method="POST" style="display:inline;" onsubmit="return confirmDelete(<?= $row['playlist_id'] ?>)">
                        <input type="hidden" name="playlist_id" value="<?= $row['playlist_id'] ?>">
                        <button type="submit" name="delete_playlist"><i class="fas fa-trash-alt"></i> Delete</button>
                    </form>
                    <!-- Edit Button with Icon -->
                    <button onclick="editPlaylist(<?= htmlspecialchars(json_encode($row)) ?>)"><i class="fas fa-edit"></i> Edit</button>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>

<!-- SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
<script>
function editPlaylist(playlist) {
    document.getElementById('playlist_id').value = playlist.playlist_id;
    document.getElementById('name').value = playlist.name;
    document.getElementById('description').value = playlist.description;
    document.getElementById('created_by').value = playlist.created_by;
    Swal.fire({
        title: 'Edit Playlist',
        text: 'You can now edit the playlist details.',
        icon: 'info',
        confirmButtonText: 'OK',
        background: '#e2e3e5'
    });
}

function confirmDelete(id) {
    return Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        background: '#f8d7da'
    }).then((result) => {
        if (result.isConfirmed) {
            document.querySelector(`form[onsubmit="return confirmDelete(${id})"]`).submit();
        }
        return false;
    });
}
</script>
</body>
</html>
