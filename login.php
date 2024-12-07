<?php
session_start();

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

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_POST['type'];
    $email_or_username = trim($_POST['email_or_username']);
    $password = trim($_POST['password']);

    // Validate inputs
    if (empty($email_or_username) || empty($password)) {
        $message = "<div class='error'>All fields are required!</div>";
    } else {
        if ($type == 'user') {
            $sql = "SELECT * FROM users WHERE email = '$email_or_username'";
        } else if ($type == 'admin') {
            $sql = "SELECT * FROM admin WHERE username = '$email_or_username'";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['loggedin'] = true;
                $_SESSION['type'] = $type;
                $_SESSION['name'] = $type == 'user' ? $row['first_name'] . " " . $row['last_name'] : $row['username'];

                // Redirect to the appropriate dashboard
                if ($type == 'user') {
                    header("Location: home.php"); // Redirect to user home page
                } else if ($type == 'admin') {
                    header("Location: admin_dashboard.php"); // Redirect to admin dashboard
                }
                exit;
            } else {
                $message = "<div class='error'>Invalid password!</div>";
            }
        } else {
            $message = "<div class='error'>No user found with the provided credentials!</div>";
        }
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login.css">
    <title>Funix | Login</title>
</head>
<body>
    
<div class="container">
    <img src="logoo.png" alt=""width=120px height=120px>
    <h2>Welcome to Funix</h2>
    <p class="description">Funix is your ultimate platform for music and video streaming. Enjoy access to curated playlists, on-demand videos, and your personal favorites. Login to explore or register to join our growing community!</p>
    <?= $message ?>
    <form action="login.php" method="POST">
        <label for="type">Login as:</label>
        <select name="type" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <label for="email_or_username">Email (User) / Username (Admin):</label>
        <input type="text" name="email_or_username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <a href="register.php" class="register-link">Don't have an account? Register now!</a>
</div>
</body>
</html>
