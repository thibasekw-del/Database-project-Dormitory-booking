<?php include('../includes/footer.php'); ?>

<?php 
include('../includes/db.php');
include('../includes/header.php'); 
?>

<div class="d-flex" style="min-height: 100vh;">
    <?php include('../includes/navbar.php'); ?>

    <div class="flex-grow-1 p-4">
        <h2 class="mb-3">💸Manage Payments💸</h2>

        <!-- ปุ่ม Add New และยอดเงิน -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="add_payment.php" class="btn btn-success">Add New Payment</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                   <th>Payment ID</th>
                   <th>Bill ID</th>
                   <th>Payment Date</th>
                   <th>Payment Method</th>
                   <th>Amount Paid</th>
                   <th>Payment Status</th>
                   <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM payment";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row['payment_id'] . "</td>
                        <td>" . $row['bill_id'] . "</td>
                        <td>" . $row['payment_date'] . "</td>
                        <td>" . $row['payment_method'] . "</td>
                        <td>" . $row['amount_paid'] . "</td>
                        <td>" . $row['payment_status'] . "</td>
                            <td>
                                <a href='edit_payment.php?id={$row['payment_id']}' class='btn btn-sm btn-warning'>Edit</a>
                                <a href='delete_payment.php?id={$row['payment_id']}' class='btn btn-sm btn-danger'>Delete</a>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
