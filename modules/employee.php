<?php
function addEmployee($employee_id,$first_name, $last_name, $role ,$salary,$phone_number) {
    global $conn;
    $sql = "INSERT INTO employee (employee_id, first_name, last_name, role, salary, phone_number) 
            VALUES ('$employee_id', '$first_name', '$last_name', '$role', '$salary', '$phone_number')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New employee added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function editEmployee($employee_id, $first_name, $last_name, $role,$salary,$phone_number) {
    global $conn;
    $sql = "UPDATE employee 
            SET first_name='$first_name', 
                last_name='$last_name', 
                role='$role',
                salary='$salary',
                phone_number='$phone_number'
            WHERE employee_id='$employee_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Employee updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function deleteEmployee($employee_id) {
    global $conn;
    $sql = "DELETE FROM employee WHERE employee_id='$employee_id'";
    if ($conn->query($sql) === TRUE) {
        echo "Employee deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
