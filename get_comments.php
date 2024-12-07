<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch comments
$sql = "SELECT comment_id, name, comment, created_at FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment'>";
        echo "<p><strong>" . htmlspecialchars($row['name']) . ":</strong></p>";
        echo "<p>" . htmlspecialchars($row['comment']) . "</p>";
        echo "<p class='timestamp'>" . htmlspecialchars($row['created_at']) . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>No comments yet. Be the first to comment!</p>";
}

$conn->close();
?>
