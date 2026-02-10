<?php
include('../includes/db.php');
include('../modules/bill.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bill_id = $_POST['bill_id'];
    $contract_id = $_POST['contract_id'];
    $billing_date = $_POST['billing_date'];
    $water_used = $_POST['water_used'];
    $water_units = $_POST['water_units'];
    $electricity_used = $_POST['electricity_used'];
    $electricity_units = $_POST['electricity_units'];
    $maintenance_fee = $_POST['maintenance_fee'];
    $monthly_rent = 5000;
    $common_area_fee = 350;
    $total_amount = ($water_used * $water_units)
              + ($electricity_used * $electricity_units)
              + $maintenance_fee
              + $common_area_fee
              + $monthly_rent;


    addBill($bill_id,$contract_id, $billing_date,$water_used,$water_units , $electricity_used ,$electricity_units,  $maintenance_fee ,$total_amount);
    header("Location: bills.php");
}
?>
