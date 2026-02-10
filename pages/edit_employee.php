<?php include('../includes/db.php'); ?>
<?php include('../includes/header.php'); ?>

<main>
 <div class="d-flex" style="min-height: 100vh;">
        <?php include('../includes/navbar.php'); ?>

        <div class="flex-grow-1 p-4">
        <h2 class="mb-4 text-center">✏️ Edit Employee</h2>

        <?php
        if (isset($_GET['id'])) {
            $employee_id = $_GET['id'];
            $sql = "SELECT * FROM employee WHERE employee_id = '$employee_id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
        ?>

        <form action="edit_employee_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
            <!-- Employee ID -->
            <div class="mb-3">
                <label for="employee_id" class="form-label">Employee ID:</label>
                <input type="number" id="employee_id" name="employee_id" class="form-control" value="<?php echo $row['employee_id']; ?>" readonly
                style="background-color:rgb(214, 214, 214); color: #6c757d;">
            </div>

            <!-- First Name -->
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name:</label>
                <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo isset($row['first_name']) ? $row['first_name'] : ''; ?>" required>
            </div>

            <!-- Last Name -->
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name:</label>
                <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo isset($row['last_name']) ? $row['last_name'] : ''; ?>" required>
            </div>

            <!-- Role -->
            <div class="mb-3">
                    <label for="role" class="form-label">Role:</label>
                    <select id="role" name="role" class="form-select" required>
                      <option value="cleaner" <?php echo isset($row['role']) && $row['role'] == 'cleaner' ? 'selected' : ''; ?>>Cleaner</option>
                      <option value="technician" <?php echo isset($row['role']) && $row['role'] == 'technician' ? 'selected' : ''; ?>>Technician</option>
                    </select>
                </div>

            <!-- Salary -->
            <div class="mb-3">
                <label for="salary" class="form-label">Salary (THB):</label>
                <input type="number" id="salary" name="salary" class="form-control" value="<?php echo $row['salary']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Salary (THB):</label>
                <input type="number" id="phone_number" name="phone_number" class="form-control" value="<?php echo $row['phone_number']; ?>" required>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Update Employee</button>
            </div>
        </form>
    </div>
</main>

<?php include('../includes/footer.php'); ?>
