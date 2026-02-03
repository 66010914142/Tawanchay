<?php include_once("Check_login.php"); ?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า : ตะวันฉาย(ซัน)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { font-family: 'Kanit', sans-serif; background-color: #f8f9fa; }
        .text-orange { color: #ff8c00 !important; }
        .btn-orange { background-color: #ff8c00; color: white; border-radius: 8px; transition: 0.3s; }
        .btn-orange:hover { background-color: #e67e00; color: white; box-shadow: 0 4px 12px rgba(255, 140, 0, 0.3); }
        
        /* Sidebar Navigation */
        .nav-link-custom { border: none !important; color: #555 !important; border-radius: 10px !important; margin-bottom: 5px; transition: 0.3s; }
        .nav-link-custom.active { background-color: #ff8c00 !important; color: white !important; }
        .nav-link-custom:hover:not(.active) { background-color: #fff5e6 !important; color: #ff8c00 !important; }
        
        /* Table Styling */
        .product-img { width: 60px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid #eee; }
        .table-container { background: white; border-radius: 15px; border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
    </style>
</head>
<body>

    <nav class="navbar shadow-sm bg-white p-3 mb-4 sticky-top">
        <div class="container-fluid">
            <span class="navbar-brand fw-bold text-orange"><i class="fa-solid fa-boxes-stacked me-2"></i> PRODUCT MANAGEMENT</span>
            <div class="d-flex align-items-center">
                <span class="me-3 text-muted">Admin: <strong><?= $_SESSION['aname']; ?></strong></span>
                <a href="logout.php" class="btn btn-sm btn-outline-danger rounded-pill" onclick="return confirm('ยืนยันออกจากระบบ?')">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row px-md-4">
            <div class="col-md-3 col-lg-2 mb-4">
                <div class="card border-0 shadow-sm p-3 rounded-4 bg-white">
                    <nav class="list-group list-group-flush">
                        <a href="index2.php" class="list-group-item list-group-item-action nav-link-custom p-3">
                            <i class="fa-solid fa-house me-2"></i> หน้าหลัก
                        </a>
                        <a href="Products.php" class="list-group-item list-group-item-action nav-link-custom active p-3">
                            <i class="fa-solid fa-box me-2"></i> จัดการสินค้า
                        </a>
                        <a href="orders.php" class="list-group-item list-group-item-action nav-link-custom p-3">
                            <i class="fa-solid fa-cart-shopping me-2"></i> จัดการออเดอร์
                        </a>
                        <a href="customers.php" class="list-group-item list-group-item-action nav-link-custom p-3">
                            <i class="fa-solid fa-users me-2"></i> จัดการลูกค้า
                        </a>
                    </nav>
                </div>
            </div>

            <div class="col-md-9 col-lg-10">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="fw-bold m-0 text-secondary">รายการสินค้าทั้งหมด</h4>
                    <button class="btn btn-orange px-4 shadow-sm">
                        <i class="fa-solid fa-plus-circle me-2"></i> เพิ่มสินค้าใหม่
                    </button>
                </div>

                <div class="card table-container p-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="text-secondary">
                                <tr>
                                    <th width="10%">รูปภาพ</th>
                                    <th width="35%">ชื่อสินค้า</th>
                                    <th width="15%">หมวดหมู่</th>
                                    <th width="15%">ราคา</th>
                                    <th width="10%">คงเหลือ</th>
                                    <th width="15%" class="text-center">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="https://via.placeholder.com/60" class="product-img"></td>
                                    <td>
                                        <div class="fw-bold text-dark">สินค้าตัวอย่างชิ้นที่ 1</div>
                                        <small class="text-muted text-truncate d-block" style="max-width: 250px;">รายละเอียดสินค้าเบื้องต้น...</small>
                                    </td>
                                    <td><span class="badge bg-light text-dark border">ทั่วไป</span></td>
                                    <td class="fw-bold text-orange">฿1,200</td>
                                    <td>25 ชิ้น</td>
                                    <td class="text-center">
                                        <div class="btn-group shadow-sm">
                                            <button class="btn btn-sm btn-white text-primary border"><i class="fa-solid fa-pen-to-square"></i></button>
                                            <button class="btn btn-sm btn-white text-danger border" onclick="return confirm('ลบสินค้านี้?')"><i class="fa-solid fa-trash"></i></button>
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