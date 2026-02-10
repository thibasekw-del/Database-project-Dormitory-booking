<?php
include('../includes/db.php');
include('../modules/rental_contract.php');

if (isset($_GET['id'])) {
    $contract_id = $_GET['id'];
    deleteRentalContract($contract_id);
    header("Location: rental_contracts.php");
}
?>
