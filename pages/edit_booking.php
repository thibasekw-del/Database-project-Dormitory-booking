<?php
include('../includes/db.php');
include('../includes/header.php');

include('../modules/booking.php');

// ตรวจสอบว่ามีการส่ง id มาหรือไม่
if (isset($_GET['id'])) {
    $booking_id = $_GET['id'];

    // ดึงข้อมูลการจองจากฐานข้อมูล
    $sql = "SELECT * FROM booking WHERE booking_id = '$booking_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

?>

<main>
 <div class="d-flex" style="min-height: 100vh;">
        <?php include('../includes/navbar.php'); ?>

        <div class="flex-grow-1 p-4">
 <h2 class="mb-4 text-center">✏️ Edit Booking</h2>

        <form action="edit_booking_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
            <!-- Booking ID -->
            <div class="mb-3">
                <label for="booking_id" class="form-label">Booking ID:</label>
                <input type="number" id="booking_id" name="booking_id" class="form-control" value="<?php echo $row['booking_id']; ?>" readonly
                style="background-color:rgb(214, 214, 214); color: #6c757d;">
            </div>

            <!-- Tenant ID -->
            <div class="mb-3">
                <label for="tenant_id" class="form-label">Tenant ID:</label>
                <input type="number" id="tenant_id" name="tenant_id" class="form-control" value="<?php echo $row['tenant_id']; ?>" required>
            </div>

            <!-- Room ID -->
            <div class="mb-3">
                <label for="room_id" class="form-label">Room ID:</label>
                <input type="number" id="room_id" name="room_id" class="form-control" value="<?php echo $row['room_id']; ?>" required>
            </div>

            <!-- Check-in Date -->
            <div class="mb-3">
                <label for="check_in_date" class="form-label">Check-in Date:</label>
                <input type="date" id="check_in_date" name="check_in_date" class="form-control" value="<?php echo $row['check_in_date']; ?>" required>
            </div>

            <!-- Check-out Date -->
            <div class="mb-3">
                <label for="check_out_date" class="form-label">Check-out Date:</label>
                <input type="date" id="check_out_date" name="check_out_date" class="form-control" value="<?php echo $row['check_out_date']; ?>" required>
            </div>

            <!-- Booking Date -->
            <div class="mb-3">
                <label for="booking_date" class="form-label">Booking Date:</label>
                <input type="date" id="booking_date" name="booking_date" class="form-control" value="<?php echo $row['booking_date']; ?>" required>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Update Booking</button>
            </div>
        </form>
</main>

<?php include('../includes/footer.php'); ?>