<?php
include('../includes/db.php');
include('../modules/booking.php');

if (isset($_GET['id'])) {
    $booking_id = $_GET['id'];

    deleteBooking($booking_id);
    header("Location: bookings.php");
}
?>
