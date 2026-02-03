<?php include_once("Check_login.php"); ?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า : ตะวันฉาย(ซัน)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { font-family: 'Kanit', sans-serif; background-color: #f8f9fa; }
        .text-orange { color: #ff8c00 !important; }
        .btn-orange { background-color: #ff8c00; color: white; border-radius: 8px; transition: 0.3s; border: none; }
        .btn-orange:hover { background-color: #e67e00; color: white; box-shadow: 0 4px 12px rgba(255, 140, 0, 0.2); }
        
        /* Sidebar Navigation */
        .nav-link-custom { border: none !important; color: #555 !important; border-radius: 10px !important; margin-bottom: 5px; transition: 0.3s; }
        .nav-link-custom.active { background-color: #ff8c00 !important; color: white !important; box-shadow: 0 4px 10px rgba(255, 140, 0, 0.3); }
        .nav-link-custom:hover:not(.active) { background-color: #fff5e6 !important; color: #ff8c00 !important; }
        
        /* Table & Card */
        .customer-container { background: white; border-radius: 15px; border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .avatar-circle { width: 40px; height: 40px; background: #fff5e6; color: #ff8c00; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: bold; }
    </style>
</head>
<body>

    <nav class="navbar shadow-sm bg-white p-3 mb-4 sticky-top">
        <div class="container-fluid">
            <span class="navbar-brand fw-bold text-orange"><i class="fa-solid fa-user-group me-2"></i> CUSTOMER MANAGEMENT</span>
            <div class="d-flex align-items-center">
                <span class="me-3 d-none d-sm-inline text-muted">Admin: <strong><?= $_SESSION['aname']; ?></strong></span>
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
                        <a href="orders.php" class="list-group-item list-group-item-action nav-link-custom p-3">
                            <i class="fa-solid fa-cart-shopping me-2"></i> จัดการออเดอร์
                        </a>
                        <a href="customers.php" class="list-group-item list-group-item-action nav-link-custom active p-3">
                            <i class="fa-solid fa-users me-2"></i> จัดการลูกค้า
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-lg-10">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="fw-bold m-0 text-secondary">รายชื่อลูกค้า</h4>
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control form-control-sm border-secondary-subtle shadow-sm" placeholder="ค้นหาชื่อลูกค้า...">
                        <button class="btn btn-orange btn-sm px-3 shadow-sm"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>

                <div class="card customer-container p-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="text-secondary border-bottom">
                                <tr>
                                    <th class="py-3">โปรไฟล์</th>
                                    <th class="py-3">ชื่อ-นามสกุล</th>
                                    <th class="py-3">อีเมล</th>
                                    <th class="py-3">เบอร์โทรศัพท์</th>
                                    <th class="py-3">ยอดซื้อสะสม</th>
                                    <th class="py-3 text-center">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="avatar-circle">สช</div></td>
                                    <td class="fw-bold">สมชาย สายลม</td>
                                    <td class="text-muted">somchai.s@email.com</td>
                                    <td>081-234-5678</td>
                                    <td class="text-orange fw-bold">฿12,500.00</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-secondary border-0 text-primary" title="ดูข้อมูล"><i class="fa-solid fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary border-0 text-danger" title="ระงับการใช้งาน"><i class="fa-solid fa-user-slash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><div class="avatar-circle">สญ</div></td>
                                    <td class="fw-bold">สมหญิง จริงใจ</td>
                                    <td class="text-muted">somying.j@email.com</td>
                                    <td>089-876-5432</td>
                                    <td class="text-orange fw-bold">฿8,450.00</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-secondary border-0 text-primary"><i class="fa-solid fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary border-0 text-danger"><i class="fa-solid fa-user-slash"></i></button>
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