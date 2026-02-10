<?php
function addTenant($tenant_id, $first_name, $last_name, $id_card_number, $date_of_birth, $gender, $phone_number) {
    global $conn;
    $sql = "INSERT INTO tenant (tenant_id, first_name, last_name, id_card_number, date_of_birth, gender, phone_number) 
            VALUES ('$tenant_id', '$first_name', '$last_name', '$id_card_number', '$date_of_birth', '$gender', '$phone_number')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New tenant added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function editTenant($tenant_id, $first_name, $last_name,$id_card_number,$date_of_birth,$gender, $phone_number) {
    global $conn;
    $sql = "UPDATE tenant 
            SET first_name='$first_name', last_name='$last_name', id_card_number='$id_card_number', date_of_birth='$date_of_birth' ,gender='$gender' ,phone_number='$phone_number'
            WHERE tenant_id='$tenant_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Tenant updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function deleteTenant($tenant_id) {
    global $conn;
    $sql = "DELETE FROM tenant WHERE tenant_id='$tenant_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Tenant deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

