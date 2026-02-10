<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pop Supermarket - Smart Calculation</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; padding: 20px; }
        .main-card { border: none; border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,0.05); }
        .bg-header { background: #2c3e50; color: white; border-radius: 12px 12px 0 0; }
        #total_box { background: #fff; border-right: 6px solid #27ae60; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    </style>
</head>

<body>
<div class="container">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold text-dark"><i class="fa-solid fa-cart-flatbed text-success"></i> ระบบสรุปยอดขาย</h2>
        </div>
        <div class="col-md-6 text-end">
            <div id="total_box" class="p-3 d-inline-block">
                <span class="text-muted small d-block">ยอดรวมที่ค้นพบ (บาท)</span>
                <h2 class="fw-bold text-success mb-0" id="grand_total">0.00</h2>
            </div>
        </div>
    </div>

    <div class="card main-card">
        <div class="card-header bg-header p-3">
            <h5 class="mb-0">ตารางข้อมูล: ตะวันฉาย สวัสดิ์พาณิชย์</h5>
        </div>
        <div class="card-body">
            <table id="popTable" class="table table-hover w-100">
                <thead>
                    <tr class="table-light">
                        <th>Order ID</th>
                        <th>สินค้า</th>
                        <th>ประเภท</th>
                        <th class="text-center">วันที่</th>
                        <th>ประเทศ</th>
                        <th class="text-end">จำนวนเงิน</th>
                        <th class="text-center">รูป</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once("connectdb.php");
                        $sql = "SELECT * FROM `popsupermarket` ORDER BY p_order_id ASC";
                        $rs = mysqli_query($conn, $sql);
                        while ($data = mysqli_fetch_array($rs)) {
                    ?>
                    <tr>
                        <td class="text-center fw-bold text-primary"><?php echo $data['p_order_id']; ?></td>
                        <td class="fw-bold"><?php echo $data['p_product_name']; ?></td>
                        <td><span class="badge bg-secondary"><?php echo $data['p_category']; ?></span></td>
                        <td class="text-center"><?php echo $data['p_date']; ?></td>
                        <td><?php echo $data['p_country']; ?></td>
                        <td class="text-end fw-bold text-dark" data-amount="<?php echo $data['p_amount']; ?>">
                            <?php echo number_format($data['p_amount'], 2); ?>
                        </td>
                        <td class="text-center">
                            <img src="<?php echo $data['p_product_name']; ?>.png" width="50">
                                
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    var table = $('#popTable').DataTable({
        "language": { "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/th.json" },
        "pageLength": 25,
        "columnDefs": [
            { "type": "num", "targets": 0 } // แก้ไขเรื่องเลขข้าม: บังคับคอลัมน์ 0 ให้เรียงแบบ Number
        ],
        // ฟังก์ชันคำนวณยอดรวมใหม่ทุกครั้งที่มีการกรองข้อมูล
        "drawCallback": function(settings) {
            var api = this.api();
            
            // ดึงข้อมูลคอลัมน์ที่ 5 (จำนวนเงิน) เฉพาะแถวที่โชว์อยู่ (ที่โดน Filter)
            var total = api.column(5, { search: 'applied' }).nodes().to$().map(function() {
                return parseFloat($(this).data('amount')) || 0;
            }).get().reduce(function(a, b) {
                return a + b;
            }, 0);

            // อัปเดตตัวเลขยอดรวมด้านบน
            $('#grand_total').text(total.toLocaleString('th-TH', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));
        }
    });
});
</script>
</body>
</html>