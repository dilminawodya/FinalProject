<?php
include 'db_connect.php'; // Connect to your database

// Handle Delete operation for search logs
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_log'])) {
    $log_id = $_POST['log_id'];
    $sql = "DELETE FROM search WHERE search_id=$log_id";  // Updated table and column name
    mysqli_query($conn, $sql);
}

// Fetch all search logs
$result = mysqli_query($conn, "
    SELECT * FROM search
    ORDER BY timestamp DESC
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Search Logs</title>
    <link rel="stylesheet" href="admin-search.css">
    <!-- Add Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="main">
    <h1>Manage Search Logs</h1>
    <h2>Search Logs List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Search Query</th>
            <th>Timestamp</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['search_id'] ?></td>  <!-- Updated column name -->
                <td><?= $row['query'] ?></td>      <!-- Updated column name -->
                <td><?= $row['timestamp'] ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="log_id" value="<?= $row['search_id'] ?>">  <!-- Updated column name -->
                        <button type="submit" name="delete_log"><i class="fas fa-trash-alt"></i> Delete</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>

<!-- Logout Button -->
<a href="admin_dashboard.php" class="logout-btn"><i class="fas fa-home"></i> Dashboard</a>

</body>
</html>
