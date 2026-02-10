<?php
include('../includes/db.php');
include('../modules/bill.php');

if (isset($_GET['id'])) {
    $bill_id = $_GET['id'];

    deleteBill($bill_id);
    header("Location: bills.php");
}
?>
