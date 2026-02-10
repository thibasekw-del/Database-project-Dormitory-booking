<?php include('../includes/db.php'); ?>
<?php include('../includes/header.php'); ?>

<main>
      <div class="d-flex" style="min-height: 100vh;">
        <?php include('../includes/navbar.php'); ?>

        <div class="flex-grow-1 p-4">
        <h2 class="mb-4 text-center">✏️ Edit Payment</h2>

        <?php
        if (isset($_GET['id'])) {
            $payment_id = $_GET['id'];
            $sql = "SELECT * FROM payment WHERE payment_id = '$payment_id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
        ?>

        <form action="edit_payment_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
            <!-- Payment ID -->
            <div class="mb-3">
                <label for="payment_id" class="form-label">Payment ID:</label>
                <input type="number" id="payment_id" name="payment_id" class="form-control" value="<?php echo isset($row['payment_id']) ? $row['payment_id'] : ''; ?>" readonly
                style="background-color:rgb(214, 214, 214); color: #6c757d;">
            </div>

            <!-- Bill ID -->
            <div class="mb-3">
                <label for="bill_id" class="form-label">Bill ID:</label>
                <input type="number" id="bill_id" name="bill_id" class="form-control" value="<?php echo isset($row['bill_id']) ? $row['bill_id'] : ''; ?>" required>
            </div>

            <!-- Payment Date -->
            <div class="mb-3">
                <label for="payment_date" class="form-label">Payment Date:</label>
                <input type="date" id="payment_date" name="payment_date" class="form-control" value="<?php echo isset($row['payment_date']) ? $row['payment_date'] : ''; ?>" required>
            </div>

            <!-- Amount Paid -->
            <div class="mb-3">
                <label for="amount_paid" class="form-label">Amount Paid (THB):</label>
                <input type="number" id="amount_paid" name="amount_paid" class="form-control" value="<?php echo isset($row['amount_paid']) ? $row['amount_paid'] : ''; ?>" required>
            </div>

            <!-- Payment Method -->
            <div class="mb-3">
                <label for="payment_method" class="form-label">Payment Method:</label>
                <select id="payment_method" name="payment_method" class="form-select" required>
                    <option value="cash" <?php echo isset($row['payment_method']) && $row['payment_method'] == 'cash' ? 'selected' : ''; ?>>Cash</option>
                    <option value="bank_transfer" <?php echo isset($row['payment_method']) && $row['payment_method'] == 'bank_transfer' ? 'selected' : ''; ?>>Bank Transfer</option>
                </select>
            </div>

            <!-- Payment Status -->
            <div class="mb-3">
                <label for="payment_status" class="form-label">Payment Status:</label>
                <select id="payment_status" name="payment_status" class="form-select" required>
                    <option value="paid" <?php echo isset($row['payment_status']) && $row['payment_status'] == 'paid' ? 'selected' : ''; ?>>Paid</option>
                    <option value="unpaid" <?php echo isset($row['payment_status']) && $row['payment_status'] == 'unpaid' ? 'selected' : ''; ?>>Unpaid</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Update Payment</button>
            </div>
        </form>
    </div>
</main>

<?php include('../includes/footer.php'); ?>

