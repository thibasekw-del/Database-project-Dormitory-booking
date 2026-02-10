<?php
// ฟังก์ชันการเพิ่มสัญญาเช่า
function addRentalContractaddRentalContract($contract_id, $tenant_id, $room_id,$booking_id, $start_date, $end_date,$deposit_fee,$insurance_fee, $key_fee,$common_area_fee ,$monthly_rent, $contract_status) {
    global $conn;
    $sql = "INSERT INTO rental_contract (contract_id,tenant_id, room_id, booking_id, start_date , end_date,deposit_fee,insurance_fee, key_fee,common_area_fee ,monthly_rent, contract_status)
            VALUES ('$contract_id', '$tenant_id', '$room_id','$booking_id', '$start_date', '$end_date','$deposit_fee','$insurance_fee', '$key_fee','$common_area_fee' ,'$monthly_rent', '$contract_status')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Rental contract added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// ฟังก์ชันการแก้ไขสัญญาเช่า
function editRentalContract($contract_id, $tenant_id, $room_id,$booking_id, $start_date, $end_date,$deposit_fee,$insurance_fee, $key_fee,$common_area_fee ,$monthly_rent, $contract_status) {
    global $conn;
    $sql = "UPDATE rental_contract 
            SET tenant_id='$tenant_id', 
                room_id='$room_id', 
                booking_id='$booking_id',
                start_date='$start_date', 
                end_date='$end_date', 
                deposit_fee='$deposit_fee',
                insurance_fee='$insurance_fee',
                key_fee='$key_fee',
                common_area_fee='$common_area_fee',
                monthly_rent='$monthly_rent', 
                contract_status='$contract_status' 
            WHERE contract_id='$contract_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Rental contract updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// ฟังก์ชันการลบสัญญาเช่า
function deleteRentalContract($contract_id) {
    global $conn;
    $sql = "DELETE FROM rental_contract WHERE contract_id='$contract_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Rental contract deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
