<?php 
include('../includes/db.php');
include('../includes/header.php'); 
?>

<div class="d-flex" style="min-height: 100vh;">
    <?php include('../includes/navbar.php'); ?>

    <div class="flex-grow-1 p-4">


        

        <h2 class="mb-3">👤Manage Tenants👤</h2>
        <a href="add_tenant.php" class="btn btn-success mb-3">Add New Tenant</a>

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Tenant ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>ID Card Number</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM tenant";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['tenant_id']}</td>
                            <td>{$row['first_name']}</td>
                            <td>{$row['last_name']}</td>
                            <td>{$row['id_card_number']}</td>
                            <td>{$row['date_of_birth']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['phone_number']}</td>
                            <td>
                                <a href='edit_tenant.php?id={$row['tenant_id']}' class='btn btn-sm btn-warning'>Edit</a>
                                <a href='delete_tenant.php?id={$row['tenant_id']}' class='btn btn-sm btn-danger'>Delete</a>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('../includes/footer.php'); ?> 
