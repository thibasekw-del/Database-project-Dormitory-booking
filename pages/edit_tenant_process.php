<?php
include('../includes/db.php');
include('../modules/tenant.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenant_id = $_POST['tenant_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $id_card_number = $_POST['id_card_number'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $phone_number = $_POST['phone_number'];

    editTenant($tenant_id, $first_name, $last_name,$id_card_number,$date_of_birth,$gender, $phone_number);
    header("Location: tenants.php");
}
?>
