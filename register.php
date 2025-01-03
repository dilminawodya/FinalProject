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
    <link rel="stylesheet" href="registeration.css">
    <title>Funix | Register</title>
</head>
<body>
<div class="container">
    <img src="logoo.png" alt="Funix Logo" width="120px" height="120px">
    <h2>Create Your Account</h2>
    <?= $message ?>
    <form action="register.php" method="POST">
        <div class="form-group">
            <label for="type">Register as:</label>
            <select name="type" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" placeholder="Enter your first name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" placeholder="Enter your last name">
        </div>
        <div class="form-group">
            <label for="email_or_username">Email / Username:</label>
            <input type="text" name="email_or_username" required placeholder="Enter your email or username">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" required placeholder="Enter your password">
        </div>
        <button type="submit">Register</button>
    </form>
    <a href="login.php" class="login-link">Already have an account? Login now!</a>
</div>
</body>
</html>
