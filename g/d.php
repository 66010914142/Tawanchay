<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>รายงานยอดขาย - ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600&display=swap" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border: none;
            margin-bottom: 20px;
        }
        .table th {
            background-color: #0d6efd;
            color: white;
        }
    </style>
</head>

<body>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">ตะวันฉาย สวัสดิ์พาณิชย์ (ซัน)</h1>
        <p class="text-muted">รายงานสรุปยอดขายแยกตามประเทศ</p>
    </div>

    <?php
        include_once("connectdb.php");
        // สร้าง Array ว่างไว้รอรับข้อมูล
        $labels = array();
        $data_sales = array();

        $sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country`";
        $rs = mysqli_query($conn, $sql);
    ?>

    <div class="row">
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title mb-4">ตารางยอดขาย</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>ประเทศ</th>
                                    <th class="text-end">ยอดขาย (บาท)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                // วนลูปแสดงผลตาราง และเก็บค่าลง Array
                                if(mysqli_num_rows($rs) > 0){
                                    // Reset pointer ในกรณีต้องการใช้ while loop ซ้ำ หรือใช้ loop เดียวจบ
                                    // ในที่นี้เราจะ loop ทีเดียวทั้งแสดงตารางและเก็บ array
                                    while ($data = mysqli_fetch_array($rs)){
                                        $labels[] = $data['p_country'];
                                        $data_sales[] = $data['total'];
                            ?>
                                <tr>
                                    <td><?php echo $data['p_country']; ?></td>
                                    <td class="text-end fw-bold text-success">
                                        <?php echo number_format($data['total'], 0); ?>
                                    </td>
                                </tr>
                            <?php 
                                    } 
                                } else {
                                    echo "<tr><td colspan='2' class='text-center'>ไม่มีข้อมูล</td></tr>";
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">เปรียบเทียบยอดขาย (Bar Chart)</h5>
                    <canvas id="myBarChart" height="100"></canvas>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">สัดส่วนยอดขาย (Pie Chart)</h5>
                    <div style="width: 50%; margin: 0 auto;">
                        <canvas id="myPieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // รับค่าจาก PHP
    const labels = <?php echo json_encode($labels); ?>;
    const dataSales = <?php echo json_encode($data_sales); ?>;

    // ชุดสีสวยงาม (Pastel Colors)
    const bgColors = [
        'rgba(255, 99, 132, 0.7)',
        'rgba(54, 162, 235, 0.7)',
        'rgba(255, 206, 86, 0.7)',
        'rgba(75, 192, 192, 0.7)',
        'rgba(153, 102, 255, 0.7)',
        'rgba(255, 159, 64, 0.7)',
        'rgba(201, 203, 207, 0.7)'
    ];
    
    const borderColors = [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(201, 203, 207, 1)'
    ];

    // 1. Config Bar Chart
    const ctxBar = document.getElementById('myBarChart').getContext('2d');
    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขายรวม',
                data: dataSales,
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                borderRadius: 5 // ทำขอบมนให้แท่งกราฟ
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // 2. Config Pie Chart
    const ctxPie = document.getElementById('myPieChart').getContext('2d');
    new Chart(ctxPie, {
        type: 'doughnut', // เปลี่ยนเป็น doughnut เพื่อความทันสมัย (หรือใช้ 'pie' เหมือนเดิมก็ได้)
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขาย',
                data: dataSales,
                backgroundColor: bgColors,
                borderColor: '#ffffff',
                borderWidth: 2,
                hoverOffset: 10
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>