
<?php 
include('../includes/db.php');
include('../includes/header.php'); 
?>

<div class="d-flex" style="min-height: 100vh;">
    <?php include('../includes/navbar.php'); ?>

    <div class="flex-grow-1 p-4">
        <h2 class="mb-3">🧾Manage Bills🧾</h2>
        <a href="add_bill.php" class="btn btn-success mb-3">Add New Bill</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
               <tr>
                <th>Bill ID</th>
                <th>Contract ID</th>
                <th>Billing Date</th>
                <th>Water Used</th>
                <th>Water Units(หน่วย18บาท)</th>
                <th>Electricity Used</th>
                <th>Electricity Units(หน่วย8บาท)</th>
                <th>Maintenance Fee</th>
                <th>Total Amount</th>
                <th>Actions</th>
               </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM bill";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row['bill_id'] . "</td>
                    <td>" . $row['contract_id'] . "</td>
                    <td>" . $row['billing_date'] . "</td>
                    <td>" . $row['water_used'] . "</td>
                    <td>" . $row['water_units'] . "</td>
                    <td>" . $row['electricity_used'] . "</td>
                    <td>" . $row['electricity_units'] . "</td>
                    <td>" . $row['maintenance_fee'] . "</td>
                    <td>" . $row['total_amount'] . "</td>
                    <td>
                       <a href='edit_bill.php?id={$row['bill_id']}' class='btn btn-sm btn-warning'>Edit</a>
                       <a href='delete_bill.php?id={$row['bill_id']}' class='btn btn-sm btn-danger'>Delete</a>
                    <td>
                </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('../includes/footer.php'); ?> 