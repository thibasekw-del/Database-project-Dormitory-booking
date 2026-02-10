<?php
include('../includes/db.php');
include('../modules/employee.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $role = $_POST['role'];
    $salary = $_POST['salary'];
    $phone_number = $_POST['phone_number'];

    editEmployee($employee_id, $first_name, $last_name, $role,$salary,$phone_number);
    header("Location: employees.php");
}
?>
