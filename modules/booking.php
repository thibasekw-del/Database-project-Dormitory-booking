<?php
function addBooking($booking_id,$tenant_id, $room_id,$booking_date, $check_in_date, $check_out_date) {
    global $conn;
    $sql = "INSERT INTO booking (booking_id, tenant_id, room_id, booking_date, check_in_date, check_out_date) 
            VALUES ('$booking_id', '$tenant_id', '$room_id', '$booking_date', '$check_in_date', '$check_out_date')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Booking added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function editBooking($booking_id, $tenant_id, $room_id,$booking_date, $check_in_date, $check_out_date,) {
    global $conn;
    $sql = "UPDATE booking 
            SET tenant_id='$tenant_id', 
                room_id='$room_id', 
                booking_date='$booking_date', 
                check_in_date='$check_in_date', 
                check_out_date='$check_out_date'  
            WHERE booking_id='$booking_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Booking updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function deleteBooking($booking_id) {
    global $conn;
    $sql = "DELETE FROM booking WHERE booking_id='$booking_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Booking deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
