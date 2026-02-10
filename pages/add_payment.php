
<?php include('../includes/db.php'); ?>
<?php include('../includes/header.php'); ?>


<main>
      <div class="d-flex" style="min-height: 100vh;">
      <?php include('../includes/navbar.php'); ?>

      <div class="flex-grow-1 p-4">
        <h2 class="mb-4 text-center">💳 Add New Payment</h2>

        <form action="add_payment_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
            <!-- Payment ID -->
            <div class="mb-3">
                <label for="payment_id" class="form-label">Payment ID:</label>
                <input type="number" id="payment_id" name="payment_id" class="form-control" required>
            </div>

            <!-- Bill ID -->
            <div class="mb-3">
                <label for="bill_id" class="form-label">Bill ID:</label>
                <input type="number" id="bill_id" name="bill_id" class="form-control" required>
            </div>

            <!-- Payment Date -->
            <div class="mb-3">
                <label for="payment_date" class="form-label">Payment Date:</label>
                <input type="date" id="payment_date" name="payment_date" class="form-control" required>
            </div>

            <!-- Amount Paid -->
            <div class="mb-3">
                <label for="amount_paid" class="form-label">Amount Paid (THB):</label>
                <input type="number" id="amount_paid" name="amount_paid" class="form-control" required>
            </div>

            <!-- Payment Method -->
            <div class="mb-3">
                <label for="payment_method" class="form-label">Payment Method:</label>
                <select id="payment_method" name="payment_method" class="form-select" required>
                    <option value="cash">Cash</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
            </div>

            <!-- Payment Status -->
            <div class="mb-3">
                <label for="payment_status" class="form-label">Payment Status:</label>
                <select id="payment_status" name="payment_status" class="form-select" required>
                    <option value="paid">Paid</option>
                    <option value="unpaid">Unpaid</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Add Payment</button>
            </div>
        </form>
    </div>
</main>

<?php include('../includes/footer.php'); ?>

