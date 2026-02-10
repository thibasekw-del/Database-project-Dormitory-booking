<?php
include('../includes/db.php');
include('../modules/payment.php');

if (isset($_GET['id'])) {
    $payment_id = $_GET['id'];

    deletePayment($payment_id);
    header("Location: payments.php");
}
?>
