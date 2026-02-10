<?php
include('../includes/db.php');
include('../modules/room.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room_number = $_POST['room_number'];
    $floor = $_POST['floor'];
    $status = $_POST['status'];

    addRoom($room_number, $floor, $status);
    header("Location: rooms.php");
}
?>
