<?php include('../includes/db.php'); ?>
<?php include('../includes/header.php'); ?>


<main>
  <div class="d-flex" style="min-height: 100vh;"> 
      <?php include('../includes/navbar.php'); ?>

      <div class="flex-grow-1 p-4">
        <h2 class="mb-4 text-center">🏠 Add New Rental Contract</h2>

        <form action="add_rental_contract_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
            <!-- Contract ID -->
            <div class="mb-3">
                <label for="contract_id" class="form-label">Contract ID:</label>
                <input type="number" id="contract_id" name="contract_id" class="form-control" required>
            </div>

            <!-- Tenant ID -->
            <div class="mb-3">
                <label for="tenant_id" class="form-label">Tenant ID:</label>
                <input type="number" id="tenant_id" name="tenant_id" class="form-control" required>
            </div>

            <!-- Room ID -->
            <div class="mb-3">
                <label for="room_id" class="form-label">Room ID:</label>
                <input type="number" id="room_id" name="room_id" class="form-control" required>
            </div>

            <!-- Booking ID -->
            <div class="mb-3">
                <label for="booking_id" class="form-label">Booking ID:</label>
                <input type="number" id="booking_id" name="booking_id" class="form-control" required>
            </div>

            <!-- Start Date -->
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date:</label>
                <input type="date" id="start_date" name="start_date" class="form-control" required>
            </div>

            <!-- End Date -->
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date:</label>
                <input type="date" id="end_date" name="end_date" class="form-control" required>
            </div>

            <!-- Rent Amount -->
            <div class="mb-3">
                <label for="monthly_rent" class="form-label">Monthly Rent (THB):</label>
                <input type="number" id="monthly_rent" name="monthly_rent" class="form-monthly_rent" required>
            </div>

            <!-- Deposit Fee -->
            <div class="mb-3">
                <label for="deposit_fee" class="form-label">Deposit Fee (THB):</label>
                <input type="number" id="deposit_fee" name="deposit_fee" class="form-control" required>
            </div>

            <!-- Insurance Fee -->
            <div class="mb-3">
                <label for="insurance_fee" class="form-label">Insurance Fee (THB):</label>
                <input type="number" id="insurance_fee" name="insurance_fee" class="form-control" required>
            </div>

            <!-- Key Fee -->
            <div class="mb-3">
                <label for="key_fee" class="form-label">Key Fee (THB):</label>
                <input type="number" id="key_fee" name="key_fee" class="form-control" required>
            </div>

            <!-- Common Area Fee -->
            <div class="mb-3">
               <label for="monthly_rent" class="form-label">Monthly Rent (THB):</label>
              <input type="number" id="monthly_rent" name="monthly_rent" class="form-control" required>
              <label for="monthly_rent" class="form-label">Monthly Rent (THB):</label>
                <input type="number" id="monthly_rent" name="monthly_rent" class="form-control" required>
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <select id="status" name="status" class="form-select" required>
                    <option value="active">Active</option>
                    <option value="terminated">Terminated</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Add Rental Contract</button>
            </div>
        </form>
    </div>
</main>

<?php include('../includes/footer.php'); ?>
