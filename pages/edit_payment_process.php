<?php
include('../includes/db.php');
include('../modules/payment.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $payment_id = $_POST['payment_id'];
    $bill_id = $_POST['bill_id'];
    $payment_date = $_POST['payment_date'];
    $payment_method = $_POST['payment_method'];
    $amount_paid = $_POST['amount_paid'];
    $payment_status = $_POST['payment_status'];

    // เรียกใช้ฟังก์ชันแก้ไขการชำระเงิน
    editPayment($payment_id,$bill_id, $payment_date,$payment_method , $amount_paid,$payment_status);

    // หลังจากแก้ไขแล้วจะเปลี่ยนเส้นทางกลับไปที่หน้า payments.php
    header("Location: payments.php");
}
?>
