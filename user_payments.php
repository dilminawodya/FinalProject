<?php
include 'db_connect.php';
session_start();

// Assuming the user ID is stored in session after login
$user_id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT * FROM payments WHERE user_id=$user_id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Payments</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>My Payments</h1>
    </header>
    <main>
        <?php while ($payment = mysqli_fetch_assoc($result)): ?>
            <div class="payment">
                <p>Amount: <?= htmlspecialchars($payment['amount']) ?></p>
                <p>Date: <?= htmlspecialchars($payment['payment_date']) ?></p>
                <p>Status: <?= htmlspecialchars($payment['payment_status']) ?></p>
            </div>
        <?php endwhile; ?>
    </main>
</body>
</html>
