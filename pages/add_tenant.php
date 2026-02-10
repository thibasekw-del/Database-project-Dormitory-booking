<?php include('../includes/db.php'); ?>
<?php include('../includes/header.php'); ?>


<main>
   <div class="d-flex" style="min-height: 100vh;">  
      <?php include('../includes/navbar.php'); ?>

      <div class="flex-grow-1 p-4">
        <h2 class="mb-4 text-center">👤 Add New Tenant</h2>

        <form action="add_tenant_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
            <!-- Tenant ID -->
            <div class="mb-3">
                <label for="tenant_id" class="form-label">Tenant ID:</label>
                <input type="number" id="tenant_id" name="tenant_id" class="form-control" required>
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
                <!-- ID Card Number -->
            <div class="mb-3">
                <label for="id_card_number" class="form-label">ID Card Number:</label>
                <input type="text" id="id_card_number" name="id_card_number" class="form-control" required>

            </div>
            <!-- Date of Birth --> 
            <div class="mb-3">
               <label for="date_of_birth" class="form-label">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required>
            </div>

            <!-- Phone Number -->
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control" required>
            </div>

            <!-- Gender -->
            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select id="gender" name="gender" class="form-select" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Add Tenant</button>
            </div>
        </form>
    </div>
</main>

<?php include('../includes/footer.php'); ?>
