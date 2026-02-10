<?php
function addRoom($room_id,$room_number, $floor, $status) {
    global $conn;
    $sql = "INSERT INTO room (room_id,room_number, floor, status) 
            VALUES ('$room_id','$room_number', '$floor', '$status')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New room added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function editRoom($room_id, $room_number, $floor, $status) {
    global $conn;
    $sql = "UPDATE room 
            SET room_number='$room_number', floor='$floor', status='$status'
            WHERE room_id='$room_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Room updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function deleteRoom($room_id) {
    global $conn;
    $sql = "DELETE FROM room WHERE room_id='$room_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Room deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
