<?php include('../includes/db.php'); ?>
<?php include('../includes/header.php'); ?>


<main>
       <div class="d-flex" style="min-height: 100vh;">
        <?php include('../includes/navbar.php'); ?>

        <div class="flex-grow-1 p-4">
        <h2 class="mb-4 text-center">✏️ Edit Payment</h2>


        <?php
        if (isset($_GET['id'])) {
            $contract_id = $_GET['id'];
            $sql = "SELECT * FROM rental_contract WHERE contract_id = '$contract_id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            
        }
        ?>

        <form action="edit_rental_contract_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
            <!-- Contract ID -->
            <div class="mb-3">
                <label for="contract_id" class="form-label">Contract ID:</label>
                <input type="number" id="contract_id" name="contract_id" class="form-control" value="<?php echo isset($row['contract_id']) ? $row['contract_id'] : ''; ?>" readonly
                style="background-color:rgb(214, 214, 214); color: #6c757d;">
            </div>

            <!-- Tenant ID -->
            <div class="mb-3">
                <label for="tenant_id" class="form-label">Tenant ID:</label>
                <input type="number" id="tenant_id" name="tenant_id" class="form-control" value="<?php echo isset($row['tenant_id']) ? $row['tenant_id'] : ''; ?>" required>
            </div>

            <!-- Room ID -->
            <div class="mb-3">
                <label for="room_id" class="form-label">Room ID:</label>
                <input type="number" id="room_id" name="room_id" class="form-control" value="<?php echo isset($row['room_id']) ? $row['room_id'] : ''; ?>" required>
            </div>

            <!-- Booking ID -->
            <div class="mb-3">
                <label for="booking_id" class="form-label">Booking ID:</label>
                <input type="number" id="booking_id" name="booking_id" class="form-control" value="<?php echo isset($row['booking_id']) ? $row['booking_id'] : ''; ?>" required>
            </div>

            <!-- Start Date -->
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date:</label>
                <input type="date" id="start_date" name="start_date" class="form-control" value="<?php echo isset($row['start_date']) ? $row['start_date'] : ''; ?>" required>
            </div>

            <!-- End Date -->
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date:</label>
                <input type="date" id="end_date" name="end_date" class="form-control" value="<?php echo isset($row['end_date']) ? $row['end_date'] : ''; ?>" required>
            </div>

            <!-- Rent Amount -->
            <div class="mb-3">
                <label for="monthly_rent" class="form-label">Monthly Rent (THB):</label>
                <input type="number" id="monthly_rent" name="monthly_rent" class="form-control" value="<?php echo isset($row['monthly_rent']) ? $row['monthly_rent'] : ''; ?>" required>
            </div>

            <!-- Deposit Fee -->
            <div class="mb-3">
                <label for="deposit_fee" class="form-label">Deposit Fee (THB):</label>
                <input type="number" id="deposit_fee" name="deposit_fee" class="form-control" value="<?php echo isset($row['deposit_fee']) ? $row['deposit_fee'] : ''; ?>" required>
            </div>

            <!-- Insurance Fee -->
            <div class="mb-3">
                <label for="insurance_fee" class="form-label">Insurance Fee (THB):</label>
                <input type="number" id="insurance_fee" name="insurance_fee" class="form-control" value="<?php echo isset($row['insurance_fee']) ? $row['insurance_fee'] : ''; ?>" required>
            </div>

            <!-- Key Fee -->
            <div class="mb-3">
                <label for="key_fee" class="form-label">Key Fee (THB):</label>
                <input type="number" id="key_fee" name="key_fee" class="form-control" value="<?php echo isset($row['key_fee']) ? $row['key_fee'] : ''; ?>" required>
            </div>

            <!-- Common Area Fee -->
            <div class="mb-3">
                <label for="common_area_fee" class="form-label">Common Area Fee (THB):</label>
                <input type="number" id="common_area_fee" name="common_area_fee" class="form-control" value="<?php echo isset($row['common_area_fee']) ? $row['common_area_fee'] : ''; ?>" required>
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <select id="status" name="status" class="form-select" required>
                    <option value="active" <?php echo isset($row['status']) && $row['status'] == 'active' ? 'selected' : ''; ?>>Active</option>
                    <option value="terminated" <?php echo isset($row['status']) && $row['status'] == 'terminated' ? 'selected' : ''; ?>>Terminated</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Update Rental Contract</button>
            </div>
        </form>
    </div>
</main>

<?php include('../includes/footer.php'); ?>
