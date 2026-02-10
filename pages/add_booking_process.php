<?php
include('../includes/db.php');
include('../modules/booking.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_id = $_POST['booking_id'];
    $tenant_id = $_POST['tenant_id'];
    $room_id = $_POST['room_id'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];
    $booking_date = $_POST['booking_date'];

    // เรียกใช้ฟังก์ชันจาก modules/booking.php
    addBooking($booking_id,$tenant_id, $room_id, $check_in_date, $check_out_date, $booking_date);

    // หลังจากเพิ่มแล้วจะเปลี่ยนเส้นทางกลับไปที่หน้า bookings.php
    header("Location: bookings.php");
}
?>
