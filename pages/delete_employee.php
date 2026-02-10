<?php
include('../includes/db.php');
include('../modules/employee.php');

if (isset($_GET['id'])) {
    $employee_id = $_GET['id'];

    deleteEmployee($employee_id);
    header("Location: employees.php");
}
?>
