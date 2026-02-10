<?php include('../includes/db.php'); ?>
<?php include('../includes/header.php'); ?>

<main>
   <div class="d-flex" style="min-height: 100vh;">
    <?php include('../includes/navbar.php'); ?>

    <div class="flex-grow-1 p-4">
        <h2 class="mb-4 text-center">🏠 Room Availability</h2>

        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
            // ดึงข้อมูลห้องทั้งหมดจากฐานข้อมูล
            $sql = "SELECT * FROM room";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // ตั้งค่าสีตามสถานะห้อง
                    $statusClass = '';
                    if ($row['status'] == 'available') {
                        $statusClass = 'bg-success text-white';
                    } elseif ($row['status'] == 'occupied') {
                        $statusClass = 'bg-danger text-white';
                    }  
                   
                    
                    echo "
                    <div class='col'>
                        <div class='card text-center $statusClass'>
                            <div class='card-body'>
                                <h5 class='card-title'>ห้อง " . $row['room_number'] . "</h5>
                                <p class='card-text'>(" . $row['status'] . ")</p>

                            </div>
                        </div>
                    </div>";
                }
            }
            ?>
        </div>
    </div>
</main>

<?php include('../includes/footer.php'); ?>
