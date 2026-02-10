<?php
function addPayment($payment_id,$bill_id, $payment_date,$payment_method , $amount_paid,$payment_status) {
    global $conn;
    $sql = "INSERT INTO payment (payment_id, bill_id, payment_date, payment_method, amount_paid, payment_status)
            VALUES ('$payment_id', '$bill_id', '$payment_date', '$payment_method', '$amount_paid', '$payment_status')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New payment added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function editPayment($payment_id,$bill_id, $payment_date,$payment_method , $amount_paid,$payment_status) {
    global $conn;
    $sql = "UPDATE payment
                SET bill_id='$bill_id', 
                payment_date='$payment_date', 
                payment_method='$payment_method',
                amount_paid='$amount_paid',
                payment_status='$payment_status'
            WHERE payment_id='$payment_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Payment updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function deletePayment($payment_id) {
    global $conn;
    $sql = "DELETE FROM payment WHERE payment_id='$payment_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Payment deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
