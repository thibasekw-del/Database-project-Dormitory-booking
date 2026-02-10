<?php
include('../includes/db.php');
include('../modules/maintenance.php');

if (isset($_GET['id'])) {
    $maintenance_id = $_GET['id'];

    deleteMaintenance($maintenance_id);
    header("Location: maintenance.php");
}
?>
