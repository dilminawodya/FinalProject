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
    if (empty($email_or_username) || empty($password) || ($type == 'user' && (empty($_POST['first_name']) || empty($_POST['last_name'])))) {
        $message = "<div class='error'>All fields are required!</div>";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        if ($type == 'user') {
            $first_name = trim($_POST['first_name']);
            $last_name = trim($_POST['last_name']);

            $sql = "INSERT INTO users (first_name, last_name, email, password) 
                    VALUES ('$first_name', '$last_name', '$email_or_username', '$hashed_password')";
        } else if ($type == 'admin') {
            $sql = "INSERT INTO admin (username, password) 
                    VALUES ('$email_or_username', '$hashed_password')";
        }

        if ($conn->query($sql) === TRUE) {
            $message = "<div class='success'>Registration successful! You can now log in.</div>";
        } else {
            $message = "<div class='error'>Error: " . $conn->error . "</div>";
        }
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
<div class="container">
    <h2>Register</h2>
    <?= $message ?>
    <form action="register.php" method="POST">
        <label for="type">Register as:</label>
        <select name="type" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <label for="first_name">First Name (User only):</label>
        <input type="text" name="first_name">
        <label for="last_name">Last Name (User only):</label>
        <input type="text" name="last_name">
        <label for="email_or_username">Email (User) / Username (Admin):</label>
        <input type="text" name="email_or_username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Register</button>
        <button type="submit"><a href="login.php">Login</a></button>
    </form>
</div>
</body>
</html>
