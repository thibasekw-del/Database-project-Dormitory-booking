<?php include('../includes/db.php'); ?>
<?php include('../includes/header.php'); ?>


<main>
      <div class="d-flex" style="min-height: 100vh;"> 
      <?php include('../includes/navbar.php'); ?>

      <div class="flex-grow-1 p-4">

        <h2 class="mb-4 text-center">✏️ Edit Room</h2>

        <?php
if (isset($_GET['id'])) {
    $room_id = $_GET['id'];

    // ดึงข้อมูลการจองจากฐานข้อมูล
    $sql = "SELECT * FROM room WHERE room_id = '$room_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
        }
        ?>

        <form action="edit_room_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
            <!-- Room ID -->
            <div class="mb-3">
                <label for="room_id" class="form-label">Room ID:</label>
                <input type="number" id="room_id" name="room_id" class="form-control" value="<?php echo isset($row['room_id']) ? $row['room_id'] : ''; ?>"readonly
                 style="background-color:rgb(214, 214, 214); color: #6c757d;">
            </div>

            <!-- Room Number -->
            <div class="mb-3">
                <label for="room_number" class="form-label">Room Number:</label>
                <input type="number" id="room_number" name="room_number" class="form-control" value="<?php echo isset($row['room_number']) ? $row['room_number'] : ''; ?>" required>
            </div>

            <!-- Floor -->
            <div class="mb-3">
                <label for="floor" class="form-label">Floor:</label>
                <input type="number" id="floor" name="floor" class="form-control" value="<?php echo isset($row['floor']) ? $row['floor'] : ''; ?>" required>
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Room Status:</label>
                <select id="status" name="status" class="form-select" required>
                    <option value="available" <?php echo isset($row['status']) && $row['status'] == 'available' ? 'selected' : ''; ?>>Available</option>
                    <option value="occupied" <?php echo isset($row['status']) && $row['status'] == 'occupied' ? 'selected' : ''; ?>>Occupied</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Update Room</button>
            </div>
        </form>
    </div>
</main>

<?php include('../includes/footer.php'); ?>
