<?php 
include('../includes/db.php');
include('../includes/header.php'); 
$sql = "SELECT bill_id, billing_date FROM bill";
$result = $conn->query($sql);
?>

<div class="d-flex" style="min-height: 100vh;">
    <?php include('../includes/navbar.php'); ?>

    <div class="flex-grow-1 p-4">
        <h2 class="mb-4">Select Bill</h2>

        <!-- ฟอร์มเลือกบิล -->
        <form action="print_bill.php" method="GET" class="border p-4 rounded shadow-sm" style="background-color: #f9f9f9;">
            <div class="mb-3">
                <label for="bill_id" class="form-label">Select Bill ID:</label>
                <select name="bill_id" id="bill_id" class="form-select" required>
                    <?php
                    if ($result->num_rows > 0) {
                        // แสดงตัวเลือก Bill ที่มีในฐานข้อมูล
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['bill_id'] . "'>Bill ID: " . $row['bill_id'] . " (Date: " . $row['billing_date'] . ")</option>";
                        }
                    } else {
                        echo "<option value=''>No bills found</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Print Bill</button>
            </div>
        </form>
    </div>
</div>

<?php include('../includes/footer.php'); ?>

