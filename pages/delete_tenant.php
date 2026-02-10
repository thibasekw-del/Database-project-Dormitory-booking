<?php
include('../includes/db.php');
include('../modules/tenant.php');

if (isset($_GET['id'])) {
    $tenant_id = $_GET['id'];

    deleteTenant($tenant_id);
    header("Location: tenants.php");
}
?>
