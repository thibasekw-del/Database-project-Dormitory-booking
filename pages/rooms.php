<?php 
include('../includes/db.php');
include('../includes/header.php'); 
include('../modules/room.php');
?>

<!-- เริ่ม layout หลัก -->
<div class="d-flex" style="min-height: 100vh;">
    
    <?php include('../includes/navbar.php'); ?>

    <div class="flex-grow-1 p-4">
        <h2>🚪Manage Rooms🚪</h2>
        <a href="add_room.php" class="btn btn-primary mb-3">Add New Room</a>
   
        
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Room ID</th>
                    <th>Room Number</th>
                    <th>Floor</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM room";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['room_id'] . "</td>
                            <td>" . $row['room_number'] . "</td>
                            <td>" . $row['floor'] . "</td>
                            <td>" . $row['status'] . "</td>
                            <td>
                                <a href='edit_room.php?id=" . $row['room_id'] . "' class='btn btn-sm btn-warning'>Edit</a>
                                <a href='delete_room.php?id=" . $row['room_id'] . "' class='btn btn-sm btn-danger'>Delete</a>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('../includes/footer.php'); ?> 

