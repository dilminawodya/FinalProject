<?php
include 'db_connect.php'; // Connect to the database

// Fetch all payments
$sql = "SELECT * FROM payment ORDER BY payment_date DESC";
$result = mysqli_query($conn, $sql);
?>
<?php
// Handle adding a new payment
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_payment'])) {
    $amount = $_POST['amount'];
    $payment_date = $_POST['payment_date'];
    $payment_status = $_POST['payment_status'];
    $payment_method = $_POST['payment_method'];
    $transaction_id = $_POST['transaction_id'];

    // Insert into the payment table
    $sql = "INSERT INTO payment (amount, payment_date, payment_status, payment_method, transaction_id) 
            VALUES ('$amount', '$payment_date', '$payment_status', '$payment_method', '$transaction_id')";
    if (mysqli_query($conn, $sql)) {
        echo "Payment added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Payments</title>
    <link rel="stylesheet" href="payment.css"> <!-- Add your stylesheet -->

    <script>
        // Function to show alerts
        function showAlert(message) {
            if (message) {
                alert(message);
            }
        }
    </script>
</head>
<body>


    <header>
        <h1> Payment </h1>
        <p>Review your transactions</p>
    </header>

    <body onload="showAlert('<?= addslashes($message) ?>')">
    <div class="add-payment">
        <h1>Add New Payment</h1>
        <form method="POST">
            <label for="amount">Amount:</label><br>
            <input type="number" step="0.01" name="amount" id="amount" required><br>

            <label for="payment_date">Payment Date:</label><br>
            <input type="date" name="payment_date" id="payment_date" required><br>

            <label for="payment_status">Payment Status:</label><br>
            <select name="payment_status" id="payment_status" required>
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
                <option value="Failed">Failed</option>
            </select><br>

            <label for="payment_method">Payment Method:</label><br>
            <input type="text" name="payment_method" id="payment_method" placeholder="e.g., Credit Card, PayPal" required><br>

            <label for="transaction_id">Transaction ID:</label><br>
            <input type="text" name="transaction_id" id="transaction_id" placeholder="e.g., TXN123456"><br>

            <button type="submit" name="add_payment">Add Payment</button>
        </form>
    </div><br>
    <main>
        <section>
            <h2>Payment Details</h2>
            <?php if (mysqli_num_rows($result) > 0): ?>
                <table>
                    <thead>
                        <tr>
                            <th>Payment ID</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Payment Method</th>
                            <th>Transaction ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?= htmlspecialchars($row['payment_id']) ?></td>
                                <td>$<?= htmlspecialchars($row['amount']) ?></td>
                                <td><?= htmlspecialchars($row['payment_date']) ?></td>
                                <td><?= htmlspecialchars($row['payment_status']) ?></td>
                                <td><?= htmlspecialchars($row['payment_method']) ?></td>
                                <td><?= htmlspecialchars($row['transaction_id']) ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No payment records found.</p>
            <?php endif; ?>
        </section>
    </main>

   
    <footer>
        <p>&copy; 2024 Music & Video Streaming Platform</p>
    </footer>
</body>
</html>
