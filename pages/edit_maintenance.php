<?php include('../includes/db.php'); ?>
<?php include('../includes/header.php'); ?>

<main>
     <div class="d-flex" style="min-height: 100vh;">
        <?php include('../includes/navbar.php'); ?>

        <div class="flex-grow-1 p-4">
        <h2 class="mb-4 text-center">✏️ Edit Maintenance</h2>

        <?php
        if (isset($_GET['id'])) {
            $maintenance_id = $_GET['id'];
            $sql = "SELECT * FROM maintenance WHERE maintenance_id = '$maintenance_id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
        ?>

        <form action="edit_maintenance_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
            <!-- Maintenance ID -->
            <div class="mb-3">
                <label for="maintenance_id" class="form-label">Maintenance ID:</label>
                <input type="number" id="maintenance_id" name="maintenance_id" class="form-control" value="<?php echo isset($row['maintenance_id']) ? $row['maintenance_id'] : ''; ?>" readonly
                style="background-color:rgb(214, 214, 214); color: #6c757d;">
            </div>

            <!-- Room ID -->
            <div class="mb-3">
                <label for="room_id" class="form-label">Room ID:</label>
                <input type="number" id="room_id" name="room_id" class="form-control" value="<?php echo isset($row['room_id']) ? $row['room_id'] : ''; ?>" required>
            </div>

            <!-- Employee ID -->
            <div class="mb-3">
                <label for="employee_id" class="form-label">Employee ID:</label>
                <input type="number" id="employee_id" name="employee_id" class="form-control" value="<?php echo isset($row['employee_id']) ? $row['employee_id'] : ''; ?>" required>
            </div>

            <!-- Maintenance Date -->
            <div class="mb-3">
                <label for="maintenance_date" class="form-label">Request Date:</label>
                <input type="date" id="maintenance_date" name="maintenance_date" class="form-control" value="<?php echo isset($row['maintenance_date']) ? $row['maintenance_date'] : ''; ?>" required>
            </div>

            <!-- Maintenance Cost -->
            <div class="mb-3">
                <label for="cost" class="form-label">Cost (THB):</label>
                <input type="number" id="cost" name="cost" class="form-control" value="<?php echo isset($row['cost']) ? $row['cost'] : ''; ?>" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea id="description" name="description" class="form-control" rows="4" required><?php echo isset($row['description']) ? $row['description'] : ''; ?></textarea>
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label for="maintenance_status" class="form-label">Status:</label>
                <select id="maintenance_status" name="maintenance_status" class="form-select" required>
                    <option value="pending" <?php echo isset($row['maintenance_status']) && $row['maintenance_status'] == 'pending' ? 'selected' : ''; ?>>Pending</option>
                    <option value="completed" <?php echo isset($row['maintenance_status']) && $row['maintenance_status'] == 'completed' ? 'selected' : ''; ?>>Completed</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Update Maintenance</button>
            </div>
        </form>
    </div>
</main>

<?php include('../includes/footer.php'); ?>
