<?php
function addBill($bill_id,$contract_id, $billing_date,$water_used, $water_units , $electricity_used ,$electricity_units,  $maintenance_fee ,$total_amount){
    global $conn;
    $sql = "INSERT INTO bill (
                bill_id, contract_id, billing_date,water_used, water_units, electricity_used, electricity_units,maintenance_fee, total_amount
            ) 
            VALUES (
                '$bill_id', '$contract_id', '$billing_date','$water_used', '$water_units', '$electricity_used', '$electricity_units','$maintenance_fee', '$total_amount'
            )";
    
    if ($conn->query($sql) === TRUE) {
        echo "New bill added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function editBill($bill_id,$contract_id, $billing_date,$water_used ,$water_units , $electricity_used ,$electricity_units,  $maintenance_fee ,$total_amount){
    global $conn;
    $sql = "UPDATE bill 
             SET contract_id='$contract_id',
                billing_date='$billing_date',
                water_used='$water_used',
                water_units='$water_units',
                electricity_used='$electricity_used',
                electricity_units='$electricity_units',
                maintenance_fee='$maintenance_fee',
                total_amount='$total_amount'
            WHERE bill_id='$bill_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Bill updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function deleteBill($bill_id) {
    global $conn;
    $sql = "DELETE FROM bill WHERE bill_id='$bill_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Bill deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
