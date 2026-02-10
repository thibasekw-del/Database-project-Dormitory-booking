<?php include('../includes/db.php'); ?>
<?php include('../includes/header.php'); ?>


<main>
    <div class="d-flex" style="min-height: 100vh;"> 
      <?php include('../includes/navbar.php'); ?>

      <div class="flex-grow-1 p-4">
        <h2 class="mb-4 text-center">✏️ Edit Tenant</h2>

        <?php
       if (isset($_GET['id'])) {
     $tenant_id = $_GET['id'];

    // ดึงข้อมูลการจองจากฐานข้อมูล
    $sql = "SELECT * FROM tenant WHERE tenant_id = '$tenant_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
        }
        ?>

        <form action="edit_tenant_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
            <!-- Tenant ID -->
            <div class="mb-3">
            <label for="tenant_id" class="form-label">Tenant ID:</label>
             <input type="number" id="tenant_id" name="tenant_id"
           class="form-control"
           value="<?php echo isset($row['tenant_id']) ? $row['tenant_id'] : ''; ?>"
           readonly
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

            <!-- ID Card Number -->
            <div class="mb-3">
                <label for="id_card_number" class="form-label">ID Card Number:</label>
                <input type="number" id="id_card_number" name="id_card_number" class="form-control" value="<?php echo isset($row['id_card_number']) ? $row['id_card_number'] : ''; ?>" required>
            </div>

            <!-- Date of Birth -->
            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" value="<?php echo isset($row['date_of_birth']) ? $row['date_of_birth'] : ''; ?>" required>
            </div>

            <!-- Phone Number -->
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control" value="<?php echo isset($row['phone_number']) ? $row['phone_number'] : ''; ?>" required>
            </div>


            <!-- Gender -->
            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select id="gender" name="gender" class="form-select" required>
                    <option value="male" <?php echo isset($row['gender']) && $row['gender'] == 'male' ? 'selected' : ''; ?>>Male</option>
                    <option value="female" <?php echo isset($row['gender']) && $row['gender'] == 'female' ? 'selected' : ''; ?>>Female</option>
                    <option value="other" <?php echo isset($row['gender']) && $row['gender'] == 'other' ? 'selected' : ''; ?>>Other</option>
                </select>
            </div>

              <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Update Tenant</button>
            </div>
        </form>
    </div>
</main>

<?php include('../includes/footer.php'); ?>
