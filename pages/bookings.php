<?php 
include('../includes/db.php');
include('../includes/header.php'); 
?>

<div class="d-flex" style="min-height: 100vh;">
    <?php include('../includes/navbar.php'); ?>

    <div class="flex-grow-1 p-4">
        <h2 class="mb-3">📅Manage Bookings📅</h2>
        <a href="add_booking.php" class="btn btn-success mb-3">Add New Booking</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Booking ID</th>
                    <th>Tenant ID</th>
                    <th>Room ID</th>
                    <th>Booking Date</th>
                    <th>Check-out Date</th>
                    <th>Check-in Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM booking";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['booking_id']}</td>
                            <td>{$row['tenant_id']}</td>
                            <td>{$row['room_id']}</td>
                            <td>{$row['booking_date']}</td>
                            <td>" . $row['check_out_date'] . "</td>
                            <td>{$row['check_in_date']}</td>
                            <td>{$row['status']}</td>
                            <td>
                                <a href='edit_booking.php?id={$row['booking_id']}' class='btn btn-sm btn-warning'>Edit</a>
                                <a href='delete_booking.php?id={$row['booking_id']}' class='btn btn-sm btn-danger'>Delete</a>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
