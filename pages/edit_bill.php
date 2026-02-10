<?php
include('../includes/db.php');
include('../includes/header.php');
include('../modules/bill.php');

// ตรวจสอบว่ามีการส่ง id มาหรือไม่
if (isset($_GET['id'])) {
    $bill_id = $_GET['id'];

    // ดึงข้อมูลบิลจากฐานข้อมูล
    $sql = "SELECT * FROM bill WHERE bill_id = '$bill_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<main>
    <div class="d-flex" style="min-height: 100vh;">
        <?php include('../includes/navbar.php'); ?>

        <div class="flex-grow-1 p-4">
            <h2 class="mb-4 text-center">✏️ Edit Bill</h2>

            <form action="edit_bill_process.php" method="POST" class="p-4 border rounded shadow-sm" style="background-color: #f9f9f9;">
                <!-- Bill ID -->
                <div class="mb-3">
                    <label for="bill_id" class="form-label">Bill ID:</label>
                    <input type="number" id="bill_id" name="bill_id" class="form-control" value="<?php echo $row['bill_id']; ?>" readonly
                    style="background-color:rgb(214, 214, 214); color: #6c757d;">
                </div>

                <!-- Contract ID -->
                <div class="mb-3">
                    <label for="contract_id" class="form-label">Contract ID:</label>
                    <input type="number" id="contract_id" name="contract_id" class="form-control" value="<?php echo $row['contract_id']; ?>" required>
                </div>

                <!-- Billing Date -->
                <div class="mb-3">
                    <label for="billing_date" class="form-label">Billing Date:</label>
                    <input type="date" id="billing_date" name="billing_date" class="form-control" value="<?php echo $row['billing_date']; ?>" required>
                </div>

                <!-- Water Used -->
                <div class="mb-3">
                    <label for="water_used" class="form-label">Water Used (Units):</label>
                    <input type="number" id="water_used" name="water_used" class="form-control" value="<?php echo $row['water_used']; ?>" required>
                </div>

                <!-- Water Units -->
                <div class="mb-3">
                    <label for="water_units" class="form-label">Water Units (Bath/Unit):</label>
                    <input type="number" id="water_units" name="water_units" class="form-control" value="<?php echo $row['water_units']; ?>" required>
                </div>

                <!-- Electricity Used -->
                <div class="mb-3">
                    <label for="electricity_used" class="form-label">Electricity Used (Units):</label>
                    <input type="number" id="electricity_used" name="electricity_used" class="form-control" value="<?php echo $row['electricity_used']; ?>" required>
                </div>

                <!-- Electricity Units -->
                <div class="mb-3">
                    <label for="electricity_units" class="form-label">Electricity Units (Bath/Unit):</label>
                    <input type="number" id="electricity_units" name="electricity_units" class="form-control" value="<?php echo $row['electricity_units']; ?>" required>
                </div>

                <!-- Maintenance Fee -->
                <div class="mb-3">
                    <label for="maintenance_fee" class="form-label">Maintenance Fee (THB):</label>
                    <input type="number" id="maintenance_fee" name="maintenance_fee" class="form-control" value="<?php echo $row['maintenance_fee']; ?>" required>
                </div>

                <!-- Total Amount -->
                <div class="mb-3">
                    <label for="total_amount" class="form-label">Total Amount (THB):</label>
                    <input type="number" id="total_amount" name="total_amount" class="form-control" value="<?php echo $row['total_amount']; ?>" required>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Update Bill</button>
                </div>
                <script>
             const calculateTotal = () => {
             const waterUsed = parseFloat(document.getElementById('water_used').value) || 0;
             const waterRate = parseFloat(document.getElementById('water_units').value) || 0;
             const electricityUsed = parseFloat(document.getElementById('electricity_used').value) || 0;
             const electricityRate = parseFloat(document.getElementById('electricity_units').value) || 0;
             const maintenanceFee = parseFloat(document.getElementById('maintenance_fee').value) || 0;
             const monthlyRent = 5000; // ค่าเช่าคงที่
             const commonareafee =350; // ค่าเช่าคงที่
             const total = (waterUsed * waterRate) + (electricityUsed * electricityRate) + maintenanceFee + commonareafee + monthlyRent;
        document.getElementById('total_amount').value = total.toFixed(2);
    }

    // คำนวณใหม่ทุกครั้งที่มีการกรอกข้อมูล
    const inputs = ['water_used', 'water_units', 'electricity_used', 'electricity_units', 'maintenance_fee'];
    inputs.forEach(id => {
        document.getElementById(id).addEventListener('input', calculateTotal);
    });

    // คำนวณครั้งแรกตอนโหลดหน้า
    window.addEventListener('DOMContentLoaded', calculateTotal);
</script>
            </form>
        </div>
    </div>
</main>

<?php include('../includes/footer.php'); ?>

