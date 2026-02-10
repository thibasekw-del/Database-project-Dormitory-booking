<?php 
include('../includes/db.php');
include('../includes/header.php'); 
?>

<div class="d-flex" style="min-height: 100vh;">
    <?php include('../includes/navbar.php'); ?>

    <div class="flex-grow-1 p-4">
        <h2 class="mb-3">👷Manage Employees👷</h2>
        <a href="add_employee.php" class="btn btn-success mb-3">Add New Employee</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                 <th>Employee ID</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Phone</th>
                 <th>Role</th>
                 <th>Salary</th>
                 <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM employee";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row['employee_id'] . "</td>
                        <td>" . $row['first_name'] . "</td>
                        <td>" . $row['last_name'] . "</td>
                        <td>" . $row['phone_number'] . "</td>
                        <td>" . $row['role'] . "</td>
                        <td>" . $row['salary'] . "</td>
                        <td>
                                <a href='edit_employee.php?id={$row['employee_id']}' class='btn btn-sm btn-warning'>Edit</a>
                                <a href='delete_employee.php?id={$row['employee_id']}' class='btn btn-sm btn-danger'>Delete</a>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
