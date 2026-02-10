<?php
function addMaintenance($maintenance_id,$room_id,$employee_id ,$maintenance_date, $description,$cost,$maintenance_status) {
    global $conn;
    $sql = "INSERT INTO maintenance (maintenance_id, room_id, employee_id, maintenance_date, description, cost, maintenance_status) 
            VALUES ('$maintenance_id', '$room_id', '$employee_id', '$maintenance_date', '$description', '$cost', '$maintenance_status')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New maintenance request added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function editMaintenance($maintenance_id,$room_id,$employee_id ,$maintenance_date, $description,$cost,$maintenance_status) {
    global $conn;
    $sql = "UPDATE maintenance 
            SET room_id='$room_id', 
                employee_id='$employee_id',
                maintenance_date='$maintenance_date', 
                description='$description',
                cost='$cost',
                maintenance_status='$maintenance_status'
            WHERE maintenance_id='$maintenance_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Maintenance updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function deleteMaintenance($maintenance_id) {
    global $conn;
    $sql = "DELETE FROM maintenance WHERE maintenance_id='$maintenance_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Maintenance request deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
