<?php 
include('../includes/db.php');
include('../includes/header.php'); 

if (isset($_GET['bill_id'])) {
    $bill_id = $_GET['bill_id'];

    // คำสั่ง SQL เพื่อดึงข้อมูลของ Bill ที่เลือก พร้อมกับข้อมูลจาก rental_contract
    $sql = "SELECT bill.bill_id, bill.contract_id, bill.billing_date, 
                    bill.water_used, bill.water_units, 
                    bill.electricity_used, bill.electricity_units, 
                    bill.maintenance_fee, rental_contract.common_area_fee
            FROM bill
            INNER JOIN rental_contract ON bill.contract_id = rental_contract.contract_id
            WHERE bill.bill_id = '$bill_id'";

    $result = $conn->query($sql);

    // ตรวจสอบผลลัพธ์
    if ($result === false) {
        echo "<p>Error executing query: " . $conn->error . "</p>";
        exit;
    }

    if ($result->num_rows > 0) {
        $bill_data = $result->fetch_assoc();  // ใช้ $bill_data ในการเก็บข้อมูล
    } else {
        echo "<p>No bill found with ID $bill_id.</p>";
        exit;
    }
} else {
    echo "<p>No Bill ID provided.</p>";
    exit;
}
// คำนวณ total_amount
$water_rate = 18; // ราคาน้ำต่อหน่วย
$electricity_rate = 8; // ราคาค่าไฟต่อหน่วย
$monthly_rent = 5000; // ค่าเช่าคงที่

// คำนวณ total_amount
$total_amount = ($bill_data['water_used'] * $water_rate) 
                + ($bill_data['electricity_used'] * $electricity_rate) 
                + $monthly_rent 
                + $bill_data['maintenance_fee'] 
                + $bill_data['common_area_fee']; // ใช้ค่า common_area_fee ที่ได้จากฐานข้อมูล
?>

<div class="d-flex" style="min-height: 100vh;">
    <?php include('../includes/navbar.php'); ?>

    <div class="flex-grow-1 p-4">
        <h2 class="mb-4 text-center">🧾 Print Bill 🧾</h2>

        <!-- แสดงรายละเอียดบิลที่เลือก -->
        <div id="receipt" class="border p-4 rounded shadow-sm" style="background-color: #f9f9f9;">
            <h3 class="text-center mb-4">Bill Receipt</h3>

            <div class="container mb-5 mt-3">
                <div class="row d-flex align-items-baseline">
                    <div class="col-xl-9">
                        <p style="color: #7e8d9f; font-size: 20px;">BILL <strong>ID: <?php echo $bill_data['bill_id']; ?></strong></p>
                    </div>
                    <hr>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <ul class="list-unstyled">
                                <li class="text-muted">65/16 อาคาร Vipa Place</li>
                                <li class="text-muted">ซอย ฉลองกรุง 1 แขวงลาดกระบัง เขตลาดกระบัง กรุงเทพมหานคร 10520</li>
                                <li class="text-muted"><i class="fas fa-phone"></i> 012-345-6789</li>
                            </ul>
                        </div>
                        <div class="col-xl-4">
                            <p class="text-muted">BILL</p>
                            <ul class="list-unstyled">
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA;"></i> <span class="fw-bold">ID:</span><?php echo $bill_data['bill_id']; ?></li>
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA;"></i> <span class="fw-bold">Creation Date: </span><?php echo $bill_data['billing_date']; ?></li>

                            </ul>
                        </div>
                    </div>

                    <div class="row my-2 mx-1 justify-content-center">
                        <table class="table table-striped table-borderless">
                            <thead style="background-color:#84B0CA;" class="text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Water</td>
                                    <td><?php echo $bill_data['water_used']; ?></td>
                                    <td><?php echo $bill_data['water_units']; ?> bath/1unit</td>
                                    <td><?php echo number_format($bill_data['water_used'] * $bill_data['water_units'], 2); ?> THB</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Electricity</td>
                                    <td><?php echo $bill_data['electricity_used']; ?></td>
                                    <td><?php echo $bill_data['electricity_units']; ?> bath/1unit</td>
                                    <td><?php echo number_format($bill_data['electricity_used'] * $bill_data['electricity_units'], 2); ?> THB</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Maintenance</td>
                                    <td>1</td>
                                    <td>-</td>
                                    <td><?php echo number_format($bill_data['maintenance_fee'], 2); ?> THB</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Common Area Fee</td>
                                    <td>1</td>
                                    <td>-</td>
                                    <td><?php echo number_format($bill_data['common_area_fee'], 2); ?> THB</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            <p class="ms-3">                           
                        </div>
                        <div class="col-xl-3">
                            <ul class="list-unstyled">
                                <li class="text-muted ms-3"><span class="text-black me-4"> TotalAmount:</span><span style="font-size: 25px;"><?php echo number_format($total_amount, 2); ?>THB</span></li>
                            </ul>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button onclick="window.print()" class="btn btn-primary">Print Receipt</button>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>


<style>
    /* ซ่อน navbar และ footer เมื่อพิมพ์ */
    @media print {
        @page {
            size: A4 landscape; /* กำหนดให้การพิมพ์เป็นแนวนอน */
            margin: 0;  /* ลดขอบกระดาษ */
        }

        body * {
            visibility: hidden;
        }

        #receipt, #receipt * {
            visibility: visible;
        }

        #receipt {
            width: 80%;
            max-width: 100%; /* ทำให้บิลแสดงเต็มหน้ากระดาษ */
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #000;
            font-size: 14px;
            text-align: left;
        }
    }
</style>



<script>
    window.onload = function () {
        window.print();
    };
</script>