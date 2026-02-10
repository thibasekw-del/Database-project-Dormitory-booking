<?php
include('../includes/db.php');
include('../modules/rental_contract.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contract_id = $_POST['contract_id'];
    $tenant_id = $_POST['tenant_id'];
    $room_id = $_POST['room_id'];
    $room_id = $_POST['booking_id'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $deposit_fee = $_POST['deposit_fee'];
    $insurance_fee = $_POST['insurance_fee'];
    $key_fee = $_POST['key_fee'];
    $common_area_fee = $_POST['common_area_fee'];
    $monthly_rent = $_POST['monthly_rent'];
    $contract_status = $_POST['contract_status'];

    addRentalContract($contract_id, $tenant_id, $room_id,$booking_id, $start_date, $end_date,$deposit_fee,$insurance_fee, $key_fee,$common_area_fee ,$monthly_rent, $contract_status);
}
?>
