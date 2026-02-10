<?php
session_start();
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login : ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f8f9fa; /* พื้นหลังสีเทาอ่อนเกือบขาว */
            background-image: linear-gradient(135deg, #fff5e6 0%, #f8f9fa 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-card {
            background-color: #ffffff;
            border: none;
            border-top: 5px solid #ff8c00; /* เส้นขอบบนสีส้ม */
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(255, 140, 0, 0.1);
            width: 100%;
            max-width: 400px;
            padding: 2.5rem;
        }
        .form-label {
            color: #555;
            font-weight: 500;
        }
        .form-control {
            background-color: #fdfdfd;
            border: 1px solid #ddd;
            color: #333;
            padding: 12px;
        }
        .form-control:focus {
            border-color: #ff8c00;
            box-shadow: 0 0 0 0.25rem rgba(255, 140, 0, 0.15);
        }
        .btn-orange {
            background-color: #ff8c00;
            color: #fff;
            font-weight: 500;
            padding: 12px;
            border: none;
            transition: 0.3s;
        }
        .btn-orange:hover {
            background-color: #e67e00;
            color: #fff;
            box-shadow: 0 4px 12px rgba(255, 140, 0, 0.3);
        }
        .login-icon {
            font-size: 3.5rem;
            color: #ff8c00;
            margin-bottom: 1rem;
        }
        .input-group-text {
            background-color: #fff5e6;
            border-color: #ddd;
            color: #ff8c00;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="text-center">
        <div class="login-icon">
            <i class="fa-solid fa-circle-user"></i>
        </div>
        <h3 class="fw-bold mb-1" style="color: #444;">ยินดีต้อนรับ</h3>
        <p class="text-muted small mb-4">ระบบจัดการหลังบ้าน : ตะวันฉาย(ซัน)</p>
    </div>

    <form method="post" action="">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                <input type="text" name="auser" class="form-control" placeholder="ชื่อผู้ใช้งาน" autofocus required>
            </div>
        </div>
        <div class="mb-4">
            <label class="form-label">Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                <input type="password" name="apsw" class="form-control" placeholder="รหัสผ่าน" required>
            </div>
        </div>
        <button type="submit" name="Submit" class="btn btn-orange w-100 rounded-3">
            เข้าสู่ระบบ
        </button>
    </form>

    <?php 
    if(isset($_POST['Submit'])){
        include_once("connectdb.php");
        $user = $_POST['auser'];
        $pw = $_POST['apsw'];

        $stmt = mysqli_prepare($conn, "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1");
        mysqli_stmt_bind_param($stmt, "s", $user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if ($data = mysqli_fetch_array($result)){
            if (password_verify($pw, $data['a_password'])) {
                $_SESSION['aid'] = $data['a_id'];
                $_SESSION['aname'] = $data['a_name'];
                echo "<script>window.location='index2.php';</script>";
            } else {
                echo "<div class='alert alert-danger mt-3 text-center py-2'>ข้อมูลไม่ถูกต้อง</div>";
            }
        } else {
            echo "<div class='alert alert-danger mt-3 text-center py-2'>ข้อมูลไม่ถูกต้อง</div>";
        }
        mysqli_stmt_close($stmt);
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>