<?php
include 'db_connect.php'; // Connect to your database

// Handle Delete operation for search logs
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_log'])) {
    $log_id = $_POST['log_id'];
    $sql = "DELETE FROM search_logs WHERE log_id=$log_id";
    mysqli_query($conn, $sql);
}

// Fetch all search logs
$result = mysqli_query($conn, "
    SELECT search_logs.*, users.first_name, users.last_name 
    FROM search_logs 
    LEFT JOIN users ON search_logs.user_id = users.id
    ORDER BY search_logs.timestamp DESC
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Search Logs</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="main">
    <h1>Manage Search Logs</h1>
    <h2>Search Logs List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Search Query</th>
            <th>Timestamp</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['log_id'] ?></td>
                <td><?= $row['first_name'] . " " . $row['last_name'] ?></td>
                <td><?= $row['search_query'] ?></td>
                <td><?= $row['timestamp'] ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="log_id" value="<?= $row['log_id'] ?>">
                        <button type="submit" name="delete_log">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>
