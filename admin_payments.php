<?php
include 'db_connect.php'; // Connect to your database

// Handle Create, Update, and Delete
$action_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_payment'])) {
        $amount = $_POST['amount'];
        $payment_date = $_POST['payment_date'];
        $payment_status = $_POST['payment_status'];
        $payment_method = $_POST['payment_method'];
        $transaction_id = $_POST['transaction_id'];
        $sql = "INSERT INTO payment (amount, payment_date, payment_status, payment_method, transaction_id) 
                VALUES ('$amount', '$payment_date', '$payment_status', '$payment_method', '$transaction_id')";
        if (mysqli_query($conn, $sql)) {
            $action_message = 'Payment added successfully!';
        }
    } elseif (isset($_POST['update_payment'])) {
        $payment_id = $_POST['payment_id'];
        $amount = $_POST['amount'];
        $payment_date = $_POST['payment_date'];
        $payment_status = $_POST['payment_status'];
        $payment_method = $_POST['payment_method'];
        $transaction_id = $_POST['transaction_id'];
        $sql = "UPDATE payment 
                SET amount='$amount', payment_date='$payment_date', payment_status='$payment_status', 
                    payment_method='$payment_method', transaction_id='$transaction_id' 
                WHERE payment_id=$payment_id";
        if (mysqli_query($conn, $sql)) {
            $action_message = 'Payment updated successfully!';
        }
    } elseif (isset($_POST['delete_payment'])) {
        $payment_id = $_POST['payment_id'];
        $sql = "DELETE FROM payment WHERE payment_id=$payment_id";
        if (mysqli_query($conn, $sql)) {
            $action_message = 'Payment deleted successfully!';
        }
    }
}

// Fetch all payments
$result = mysqli_query($conn, "SELECT * FROM payment ORDER BY payment_date DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Payments</title>
    <link rel="stylesheet" href="adm-payment.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<div class="main">
    <h1>Manage Payments</h1>
    <form method="POST">
        <input type="hidden" name="payment_id" id="payment_id">
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
        <label>Payment Method:</label><br>
        <input type="text" name="payment_method" id="payment_method" required><br>
        <label>Transaction ID:</label><br>
        <input type="text" name="transaction_id" id="transaction_id"><br>
        <button type="submit" name="add_payment" onclick="return confirmAction('add')">
            <i class="fas fa-plus"></i> Add Payment
        </button>
        <button type="submit" name="update_payment" onclick="return confirmAction('update')">
            <i class="fas fa-edit"></i> Update Payment
        </button>
    </form>
    <a href="admin_dashboard.php" class="logout-btn">Dashboard</a>

    <h2>Payment List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Status</th>
            <th>Payment Method</th>
            <th>Transaction ID</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= htmlspecialchars($row['payment_id']) ?></td>
                <td><?= htmlspecialchars($row['amount']) ?></td>
                <td><?= htmlspecialchars($row['payment_date']) ?></td>
                <td><?= htmlspecialchars($row['payment_status']) ?></td>
                <td><?= htmlspecialchars($row['payment_method']) ?></td>
                <td><?= htmlspecialchars($row['transaction_id']) ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="payment_id" value="<?= $row['payment_id'] ?>">
                        <button type="submit" name="delete_payment" onclick="return confirmAction('delete')" class="btn-icon">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </form>
                    <button onclick="editPayment(<?= htmlspecialchars(json_encode($row)) ?>)" class="btn-icon">
                        <i class="fas fa-pen"></i> Edit
                    </button>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>

<?php if (!empty($action_message)): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Success!',
    text: '<?= $action_message ?>',
    confirmButtonText: 'OK'
});
</script>
<?php endif; ?>

<script>
function editPayment(payment) {
    document.getElementById('payment_id').value = payment.payment_id;
    document.getElementById('amount').value = payment.amount;
    document.getElementById('payment_date').value = payment.payment_date;
    document.getElementById('payment_status').value = payment.payment_status;
    document.getElementById('payment_method').value = payment.payment_method;
    document.getElementById('transaction_id').value = payment.transaction_id;

    Swal.fire({
        icon: 'info',
        title: 'Edit Payment',
        text: 'You can now edit the payment details in the form.',
        confirmButtonText: 'OK'
    });
}

function confirmAction(action) {
    const actionMessages = {
        add: 'Are you sure you want to add this payment?',
        update: 'Are you sure you want to update this payment?',
        delete: 'Are you sure you want to delete this payment?'
    };

    return Swal.fire({
        title: 'Confirm Action',
        text: actionMessages[action],
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, proceed!',
        cancelButtonText: 'Cancel'
    }).then((result) => result.isConfirmed);
}
</script>
</body>
</html>
