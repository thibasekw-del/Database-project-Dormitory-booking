<?php 
include('../includes/db.php');
include('../includes/header.php'); 
?>

<div class="d-flex" style="min-height: 100vh;">
    <?php include('../includes/navbar.php'); ?>

    <div class="flex-grow-1 p-4">
        <h2 class="mb-4">🔍 Search by Room</h2>

        <!-- ฟอร์มค้นหาห้อง -->
        <form action="search_by_room.php" method="POST" class="mb-4">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="room_id" class="form-label">Enter Room ID (1-33):</label>
                    <input type="number" id="room_id" name="room_id" class="form-control" min="1" max="1000" placeholder="Enter room ID" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">&nbsp;</label>
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                </div>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $room_id = $_POST['room_id'];

            // ตรวจสอบว่า room_id อยู่ในช่วงที่ถูกต้อง
            if ($room_id < 1 || $room_id > 1000) {
                echo "<p>Please enter a valid room ID between 1 and 33.</p>";
            } else {
                // คำสั่ง SQL สำหรับค้นหาข้อมูลทั้งหมดที่เกี่ยวข้องกับ room_id
                $sql = "
                (SELECT 'Room' AS table_name, room.room_id AS id, room.room_number AS name, room.floor AS info, room.status AS status
                    FROM room WHERE room.room_id = '$room_id')
                UNION ALL
                (SELECT 'Tenant' AS table_name, tenant.tenant_id AS id, CONCAT(tenant.first_name, ' ', tenant.last_name) AS name, tenant.phone_number AS info, tenant.gender AS status
                    FROM tenant
                    INNER JOIN booking ON tenant.tenant_id = booking.tenant_id
                    WHERE booking.room_id = '$room_id')
                UNION ALL
                (SELECT 'Booking' AS table_name, booking.booking_id AS id, booking.tenant_id AS name, booking.check_in_date AS info, booking.check_out_date AS status
                    FROM booking
                    WHERE booking.room_id = '$room_id')
                UNION ALL
                (SELECT 'Payment' AS table_name, payment.payment_id AS id, payment.bill_id AS name, payment.payment_date AS info, payment.amount_paid AS status
                    FROM payment
                    INNER JOIN bill ON payment.bill_id = bill.bill_id
                    WHERE bill.contract_id IN (SELECT contract_id FROM rental_contract WHERE tenant_id IN (SELECT tenant_id FROM booking WHERE room_id = '$room_id')))
                UNION ALL
                (SELECT 'Bill' AS table_name, bill.bill_id AS id, bill.contract_id AS name, bill.billing_date AS info, bill.total_amount AS status
                    FROM bill
                    WHERE bill.contract_id IN (SELECT contract_id FROM rental_contract WHERE tenant_id IN (SELECT tenant_id FROM booking WHERE room_id = '$room_id')))
                UNION ALL
                (SELECT 'Maintenance' AS table_name, 
                    IFNULL(maintenance.maintenance_id, '-') AS id,
                    IFNULL(maintenance.room_id, '-') AS name,
                    IFNULL(maintenance.maintenance_date, '-') AS info,
                    IFNULL(maintenance.cost, '-') AS status
                    FROM maintenance
                    WHERE maintenance.room_id = '$room_id')
                UNION ALL
                (SELECT 'Rental Contract' AS table_name, rental_contract.contract_id AS id, rental_contract.tenant_id AS name, rental_contract.start_date AS info, rental_contract.end_date AS status
                    FROM rental_contract
                    WHERE rental_contract.tenant_id IN (SELECT tenant_id FROM booking WHERE room_id = '$room_id'))
                ";

                // Query การค้นหา
                $result = $conn->query($sql);

                if ($result === FALSE) {
                    echo "<p>Error executing query: " . $conn->error . "</p>";
                } else {
                    if ($result->num_rows > 0) {
                        echo "<h3>Search Results for Room ID: $room_id</h3>";
                        echo "<table class='table table-bordered table-striped' style='width: 100%;'>
                            <thead class='table-secondary'>
                                <tr>
                                    <th>Table</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Info</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>";

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row['table_name'] . "</td>
                                    <td>" . $row['id'] . "</td>
                                    <td>" . $row['name'] . "</td>
                                    <td>" . $row['info'] . "</td>
                                    <td>" . $row['status'] . "</td>
                                </tr>";
                        }
                        echo "</tbody></table>";
                    } else {
                        echo "<p>No results found for Room ID: $room_id</p>";
                    }
                }
            }
        }
        ?>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
