<?php 
include('../includes/db.php');
include('../includes/header.php'); 
?>

<div class="d-flex" style="min-height: 100vh;">
    <?php include('../includes/navbar.php'); ?>

    <div class="flex-grow-1 p-4">
        <h2 class="mb-3">🛠Manage Maintenance Requests🛠</h2>
        <a href="add_maintenance.php" class="btn btn-success mb-3">Add New Maintenance</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                <th>Maintenance ID</th>
                <th>Room ID</th>
                <th>Employee ID</th>
                <th>Request Date</th>
                <th>Description</th>
                <th>Cost</th>
                <th>Status</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM maintenance";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['maintenance_id'] . "</td>
                            <td>" . $row['room_id'] . "</td>
                            <td>" . $row['employee_id'] . "</td>
                            <td>" . $row['maintenance_date'] . "</td>
                            <td>" . $row['description'] . "</td>
                            <td>" . $row['cost'] . "</td>
                            <td>" . $row['maintenance_status'] . "</td>
                            <td>
                                <a href='edit_maintenance.php?id={$row['maintenance_id']}' class='btn btn-sm btn-warning'>Edit</a>
                                <a href='delete_maintenance.php?id={$row['maintenance_id']}' class='btn btn-sm btn-danger'>Delete</a>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
