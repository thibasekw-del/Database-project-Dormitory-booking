<?php include('../includes/db.php'); ?>
<?php include('../includes/header.php'); ?>


<main>
     <div class="d-flex" style="min-height: 100vh;"> 
      <?php include('../includes/navbar.php'); ?>

      <div class="flex-grow-1 p-4">
        <h2 class="mb-4 text-center">🏠 Add New Room</h2>

        <form action="add_room_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
            <!-- Room ID -->
            <div class="mb-3">
                <label for="room_id" class="form-label">Room ID:</label>
                <input type="number" id="room_id" name="room_id" class="form-control" required>
            </div>

            <!-- Room Number -->
            <div class="mb-3">
                <label for="room_number" class="form-label">Room Number:</label>
                <input type="number" id="room_number" name="room_number" class="form-control" required>
            </div>

            <!-- Floor -->
            <div class="mb-3">
                <label for="floor" class="form-label">Floor:</label>
                <input type="number" id="floor" name="floor" class="form-control" required>
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Room Status:</label>
                <select id="status" name="status" class="form-select" required>
                    <option value="available">Available</option>
                    <option value="occupied">Occupied</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Add Room</button>
            </div>
        </form>
    </div>
</main>

<?php include('../includes/footer.php'); ?>
