<?php
include('../includes/db.php');
include('../modules/maintenance.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $maintenance_id = $_POST['maintenance_id'];
    $room_id = $_POST['room_id'];
    $employee_id = $_POST['employee_id'];
    $maintenance_date = $_POST['maintenance_date'];
    $description = $_POST['description'];
    $cost = $_POST['cost'];
    $maintenance_status = $_POST['maintenance_status'];

    editMaintenance($maintenance_id,$room_id,$employee_id ,$maintenance_date, $description,$cost,$maintenance_status);
    header("Location: maintenance.php");
}
?>
