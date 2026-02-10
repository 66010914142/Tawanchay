<?php include_once("Check_login.php"); ?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f8f9fa;
        }
        .text-orange { color: #ff8c00 !important; }
        .bg-orange { background-color: #ff8c00 !important; }
        
        /* Sidebar Styling */
        .nav-link-custom {
            border: none !important;
            color: #555 !important;
            transition: 0.3s;
            border-radius: 10px !important;
            margin-bottom: 5px;
        }
        .nav-link-custom.active {
            background-color: #ff8c00 !important;
            color: white !important;
            box-shadow: 0 4px 10px rgba(255, 140, 0, 0.3);
        }
        .nav-link-custom:hover:not(.active) {
            background-color: #fff5e6 !important;
            color: #ff8c00 !important;
        }
        
        /* Card Styling */
        .stat-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .icon-shape {
            width: 48px;
            height: 48px;
            background-color: #fff5e6;
            color: #ff8c00;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg shadow-sm bg-white p-3 mb-4 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-orange" href="#">
                <i class="fa-solid fa-gauge-high me-2"></i>ADMIN SYSTEM
            </a>
            <div class="d-flex align-items-center">
                <span class="me-3 d-none d-sm-inline text-muted">ยินดีต้อนรับ, <strong><?= $_SESSION['aname']; ?></strong></span>
                <a href="logout.php" class="btn btn-outline-danger btn-sm px-3 rounded-pill" onclick="return confirm('ยืนยันออกจากระบบ?')">
                    <i class="fa-solid fa-power-off me-1"></i> ออกจากระบบ
                </a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row px-md-4">
            <div class="col-md-3 col-lg-2 mb-4">
                <div class="card border-0 shadow-sm p-3 rounded-4 bg-white">
                    <div class="list-group list-group-flush">
                        <a href="index2.php" class="list-group-item list-group-item-action nav-link-custom active p-3">
                            <i class="fa-solid fa-house me-2"></i> หน้าหลัก
                        </a>
                        <a href="Products.php" class="list-group-item list-group-item-action nav-link-custom p-3">
                            <i class="fa-solid fa-box me-2"></i> จัดการสินค้า
                        </a>
                        <a href="orders.php" class="list-group-item list-group-item-action nav-link-custom p-3">
                            <i class="fa-solid fa-cart-shopping me-2"></i> จัดการออเดอร์
                        </a>
                        <a href="customers.php" class="list-group-item list-group-item-action nav-link-custom p-3">
                            <i class="fa-solid fa-users me-2"></i> จัดการลูกค้า
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-lg-10">
                <div class="card border-0 shadow-sm rounded-4 mb-4 bg-white">
                    <div class="card-body p-4 p-md-5">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h2 class="fw-bold text-dark">สวัสดีคุณ <span class="text-orange"><?= $_SESSION['aname']; ?></span></h2>
                                <p class="text-secondary fs-5">ยินดีต้อนรับเข้าสู่ระบบจัดการข้อมูลหลังบ้าน ขอให้เป็นวันที่ดีในการทำงานครับ</p>
                            </div>
                            <div class="col-md-4 text-end d-none d-md-block">
                                <i class="fa-solid fa-chart-line fa-5x text-orange" style="opacity: 0.1;"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card stat-card shadow-sm bg-white p-3">
                            <div class="d-flex align-items-center">
                                <div class="icon-shape me-3">
                                    <i class="fa-solid fa-cubes fa-lg"></i>
                                </div>
                                <div>
                                    <h4 class="fw-bold m-0">45</h4>
                                    <small class="text-muted">จำนวนสินค้า</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card stat-card shadow-sm bg-white p-3">
                            <div class="d-flex align-items-center">
                                <div class="icon-shape me-3">
                                    <i class="fa-solid fa-file-invoice-dollar fa-lg"></i>
                                </div>
                                <div>
                                    <h4 class="fw-bold m-0">12</h4>
                                    <small class="text-muted">ออเดอร์ใหม่</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>