<?php
include 'db_connect.php'; // Connect to your database

// Handle Create, Update, and Delete
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_payment'])) {
        $user_id = $_POST['user_id'];
        $amount = $_POST['amount'];
        $payment_date = $_POST['payment_date'];
        $payment_status = $_POST['payment_status'];
        $sql = "INSERT INTO payments (user_id, amount, payment_date, payment_status) VALUES ('$user_id', '$amount', '$payment_date', '$payment_status')";
        mysqli_query($conn, $sql);
    } elseif (isset($_POST['update_payment'])) {
        $payment_id = $_POST['payment_id'];
        $user_id = $_POST['user_id'];
        $amount = $_POST['amount'];
        $payment_date = $_POST['payment_date'];
        $payment_status = $_POST['payment_status'];
        $sql = "UPDATE payments SET user_id='$user_id', amount='$amount', payment_date='$payment_date', payment_status='$payment_status' WHERE payment_id=$payment_id";
        mysqli_query($conn, $sql);
    } elseif (isset($_POST['delete_payment'])) {
        $payment_id = $_POST['payment_id'];
        $sql = "DELETE FROM payments WHERE payment_id=$payment_id";
        mysqli_query($conn, $sql);
    }
}

// Fetch all payments
$result = mysqli_query($conn, "
    SELECT payments.*, users.first_name, users.last_name 
    FROM payments 
    LEFT JOIN users ON payments.user_id = users.id
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Payments</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="main">
    <h1>Manage Payments</h1>
    <form method="POST">
        <input type="hidden" name="payment_id" id="payment_id">
        <label>User:</label><br>
        <select name="user_id" id="user_id" required>
            <option value="">Select User</option>
            <?php
            $users = mysqli_query($conn, "SELECT * FROM users");
            while ($user = mysqli_fetch_assoc($users)) {
                echo "<option value='" . $user['id'] . "'>" . $user['first_name'] . " " . $user['last_name'] . "</option>";
            }
            ?>
        </select><br>
        <label>Amount:</label><br>
        <input type="number" step="0.01" name="amount" id="amount" required><br>
        <label>Payment Date:</label><br>
        <input type="date" name="payment_date" id="payment_date" required><br>
        <label>Status:</label><br>
        <select name="payment_status" id="payment_status" required>
            <option value="Pending">Pending</option>
            <option value="Completed">Completed</option>
            <option value="Failed">Failed</option>
        </select><br>
        <button type="submit" name="add_payment">Add Payment</button>
        <button type="submit" name="update_payment">Update Payment</button>
    </form>
    <h2>Payment List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['payment_id'] ?></td>
                <td><?= $row['first_name'] . " " . $row['last_name'] ?></td>
                <td><?= $row['amount'] ?></td>
                <td><?= $row['payment_date'] ?></td>
                <td><?= $row['payment_status'] ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="payment_id" value="<?= $row['payment_id'] ?>">
                        <button type="submit" name="delete_payment">Delete</button>
                    </form>
                    <button onclick="editPayment(<?= htmlspecialchars(json_encode($row)) ?>)">Edit</button>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>

<script>
function editPayment(payment) {
    document.getElementById('payment_id').value = payment.payment_id;
    document.getElementById('user_id').value = payment.user_id;
    document.getElementById('amount').value = payment.amount;
    document.getElementById('payment_date').value = payment.payment_date;
    document.getElementById('payment_status').value = payment.payment_status;
}
</script>
</body>
</html>
