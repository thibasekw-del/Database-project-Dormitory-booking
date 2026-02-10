<?php include('../includes/db.php'); ?>
<?php include('../includes/header.php'); ?>

<main>
    <div class="d-flex" style="min-height: 100vh;">
      <?php include('../includes/navbar.php'); ?>

      <div class="flex-grow-1 p-4">
        <h2 class="mb-4 text-center">🧑‍💼 Add New Employee</h2>

        <form action="add_employee_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
            <!-- Employee ID -->
            <div class="mb-3">
                <label for="employee_id" class="form-label">Employee ID:</label>
                <input type="number" id="employee_id" name="employee_id" class="form-control" required>
            </div>

            <!-- First Name -->
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name:</label>
                <input type="text" id="first_name" name="first_name" class="form-control" required>
            </div>

            <!-- Last Name -->
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name:</label>
                <input type="text" id="last_name" name="last_name" class="form-control" required>
            </div>

            <!-- Role -->
            <div class="mb-3">
                <label for="role" class="form-label">Role:</label>
              <select id="role" name="role" class="form-select" required>
            <option value="cleaner">Cleaner</option>
            <option value="technician">Technician</option>
             </select>
             </div>

            <!-- Salary -->
            <div class="mb-3">
                <label for="salary" class="form-label">Salary (THB):</label>
                <input type="number" id="salary" name="salary" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="phone_number">Phone:</label>
                <input type="phone_number" id="salary" name="phone_number" class="form-control" required>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Add Employee</button>
            </div>
        </form>
    </div>
</main>

<?php include('../includes/footer.php'); ?>

