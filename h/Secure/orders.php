<?php include_once("Check_login.php"); ?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ : ตะวันฉาย(ซัน)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { font-family: 'Kanit', sans-serif; background-color: #f8f9fa; }
        .text-orange { color: #ff8c00 !important; }
        .btn-orange { background-color: #ff8c00; color: white; border-radius: 8px; transition: 0.3s; }
        .btn-orange:hover { background-color: #e67e00; color: white; box-shadow: 0 4px 12px rgba(255, 140, 0, 0.2); }
        
        /* Sidebar Navigation */
        .nav-link-custom { border: none !important; color: #555 !important; border-radius: 10px !important; margin-bottom: 5px; transition: 0.3s; }
        .nav-link-custom.active { background-color: #ff8c00 !important; color: white !important; box-shadow: 0 4px 10px rgba(255, 140, 0, 0.3); }
        .nav-link-custom:hover:not(.active) { background-color: #fff5e6 !important; color: #ff8c00 !important; }
        
        /* Order Card & Table */
        .order-container { background: white; border-radius: 15px; border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .status-badge { padding: 6px 14px; border-radius: 20px; font-size: 0.85rem; font-weight: 400; }
    </style>
</head>
<body>

    <nav class="navbar shadow-sm bg-white p-3 mb-4 sticky-top">
        <div class="container-fluid">
            <span class="navbar-brand fw-bold text-orange"><i class="fa-solid fa-file-invoice me-2"></i> ORDER MANAGEMENT</span>
            <div class="d-flex align-items-center">
                <span class="me-3 d-none d-sm-inline text-muted">ผู้ใช้งาน: <strong><?= $_SESSION['aname']; ?></strong></span>
                <a href="logout.php" class="btn btn-sm btn-outline-danger rounded-pill px-3" onclick="return confirm('ยืนยันออกจากระบบ?')">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row px-md-4">
            <div class="col-md-3 col-lg-2 mb-4">
                <div class="card border-0 shadow-sm p-3 rounded-4 bg-white">
                    <div class="list-group list-group-flush">
                        <a href="index2.php" class="list-group-item list-group-item-action nav-link-custom p-3">
                            <i class="fa-solid fa-house me-2"></i> หน้าหลัก
                        </a>
                        <a href="Products.php" class="list-group-item list-group-item-action nav-link-custom p-3">
                            <i class="fa-solid fa-box me-2"></i> จัดการสินค้า
                        </a>
                        <a href="orders.php" class="list-group-item list-group-item-action nav-link-custom active p-3">
                            <i class="fa-solid fa-cart-shopping me-2"></i> จัดการออเดอร์
                        </a>
                        <a href="customers.php" class="list-group-item list-group-item-action nav-link-custom p-3">
                            <i class="fa-solid fa-users me-2"></i> จัดการลูกค้า
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-lg-10">
                <div class="d-flex justify-content-between align-items-center mb-4 text-secondary">
                    <h4 class="fw-bold m-0 text-secondary">รายการสั่งซื้อ</h4>
                    <div class="input-group w-auto shadow-sm">
                        <input type="text" class="form-control border-end-0 border-secondary-subtle" placeholder="ค้นหาเลขออเดอร์...">
                        <button class="btn btn-outline-secondary border-start-0" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>

                <div class="card order-container p-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="text-secondary border-bottom">
                                <tr>
                                    <th class="py-3">รหัสออเดอร์</th>
                                    <th class="py-3">ชื่อลูกค้า</th>
                                    <th class="py-3">วันที่สั่ง</th>
                                    <th class="py-3">ยอดรวม</th>
                                    <th class="py-3">สถานะ</th>
                                    <th class="py-3 text-center">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">#ORD-202401</td>
                                    <td>สมชาย สายลม</td>
                                    <td>15 ต.ค. 2566</td>
                                    <td class="text-orange fw-bold">฿1,500.00</td>
                                    <td><span class="status-badge bg-warning-subtle text-warning-emphasis border border-warning-subtle">รอตรวจสอบ</span></td>
                                    <td class="text-center">
                                        <div class="btn-group shadow-sm border rounded">
                                            <button class="btn btn-sm btn-white text-secondary px-3 py-2 border-end"><i class="fa-solid fa-eye"></i></button>
                                            <button class="btn btn-sm btn-white text-success px-3 py-2 border-end"><i class="fa-solid fa-circle-check"></i></button>
                                            <button class="btn btn-sm btn-white text-danger px-3 py-2"><i class="fa-solid fa-circle-xmark"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">#ORD-202402</td>
                                    <td>สมหญิง จริงใจ</td>
                                    <td>14 ต.ค. 2566</td>
                                    <td class="text-orange fw-bold">฿2,450.00</td>
                                    <td><span class="status-badge bg-info-subtle text-info-emphasis border border-info-subtle">กำลังจัดส่ง</span></td>
                                    <td class="text-center">
                                        <div class="btn-group shadow-sm border rounded">
                                            <button class="btn btn-sm btn-white text-secondary px-3 py-2 border-end"><i class="fa-solid fa-eye"></i></button>
                                            <button class="btn btn-sm btn-white text-success px-3 py-2 border-end"><i class="fa-solid fa-circle-check"></i></button>
                                            <button class="btn btn-sm btn-white text-danger px-3 py-2"><i class="fa-solid fa-circle-xmark"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>