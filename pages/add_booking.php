<?php include('../includes/db.php'); ?>
<?php include('../includes/header.php'); ?>


<main>
     <div class="d-flex" style="min-height: 100vh;">
    <?php include('../includes/navbar.php'); ?>

    <div class="flex-grow-1 p-4">
        <h2 class="mb-4 text-center">📅 Add New Booking</h2>

        <form action="add_booking_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
            <!-- Booking ID -->
            <div class="mb-3">
                <label for="booking_id" class="form-label">Booking ID:</label>
                <input type="number" id="booking_id" name="booking_id" class="form-control" required>
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

            <!-- Check-in Date -->
            <div class="mb-3">
                <label for="check_in_date" class="form-label">Check-in Date:</label>
                <input type="date" id="check_in_date" name="check_in_date" class="form-control" required>
            </div>

            <!-- Check-out Date -->
            <div class="mb-3">
                <label for="check_out_date" class="form-label">Check-out Date:</label>
                <input type="date" id="check_out_date" name="check_out_date" class="form-control" required>
            </div>

            <!-- Booking Date -->
            <div class="mb-3">
                <label for="booking_date" class="form-label">Booking Date:</label>
                <input type="date" id="booking_date" name="booking_date" class="form-control" required>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Add Booking</button>
            </div>
        </form>
    </div>
</main>

<?php include('../includes/footer.php'); ?>
