<?php 
include('../includes/db.php');
include('../includes/header.php'); 
?>

<div class="d-flex" style="min-height: 100vh;">
    <?php include('../includes/navbar.php'); ?>

    <div class="flex-grow-1 p-4">
        <h2 class="mb-3">📄Manage Rental Contracts📄</h2>


        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="add_rental_contract.php" class="btn btn-success">Add New Contract</a>

        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th>Contract ID</th>
                <th>Tenant ID</th>
                <th>Room ID</th>
                <th>Booking ID</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Deposit Fee</th>
                <th>Insurance Fee</th>
                <th>Key Fee</th>
                <th>Common Area Fee</th>
                <th>Monthly Rent</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM rental_contract";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['contract_id'] . "</td>
                        <td>" . $row['tenant_id'] . "</td>
                        <td>" . $row['room_id'] . "</td>
                        <td>" . $row['booking_id'] . "</td>
                        <td>" . $row['start_date'] . "</td>
                        <td>" . $row['end_date'] . "</td>
                        <td>" . $row['deposit_fee'] . "</td>
                        <td>" . $row['insurance_fee'] . "</td>
                        <td>" . $row['key_fee'] . "</td>
                        <td>" . $row['common_area_fee'] . "</td>
                        <td>" . $row['monthly_rent'] . "</td>
                        <td>" . $row['contract_status'] . "</td>
                        <td>
                                <a href='edit_rental_contract.php?id={$row['contract_id']}' class='btn btn-sm btn-warning'>Edit</a>
                                <a href='delete_rental_contract.php?id={$row['contract_id']}' class='btn btn-sm btn-danger'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
