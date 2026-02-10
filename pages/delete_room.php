<?php
include('../includes/db.php');
include('../modules/room.php');

if (isset($_GET['id'])) {
    $room_id = $_GET['id'];

    deleteRoom($room_id);
    header("Location: rooms.php");
}
?>
