<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">
<div class="container py-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h1 class="h4 card-title mb-0">ฟอร์มสมัครสมาชิก -- ตะวันฉาย สวัสดิ์พาณิชย์(ซัน) -- SQL</h1>
        </div>
        <div class="card-body">

            <form method="post" action="">

                <div class="mb-3">
                    <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="mb-3">
                    <label for="height" class="form-label">ความสูง (ซม.) <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="height" name="height" step="5" min="100" max="220" required>
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label">สีที่ชอบ</label>
                    <input type="color" class="form-control form-control-color" id="color" name="color" value="#563d7c" title="Choose your color">
                </div>

                <div class="mb-3">
                    <label for="major" class="form-label">สาขาวิชา</label>
                    <select class="form-select" id="major" name="major">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="คอมพิวเตอร์ธุรกิจ" selected>คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>

                <div class="mt-4">
                    <button type="submit" name="Submit" class="btn btn-primary me-2">
                        <i class="bi bi-check-circle-fill me-1"></i> สมัครสมาชิก
                    </button>
                    <button type="reset" class="btn btn-secondary me-2">
                        <i class="bi bi-arrow-counterclockwise me-1"></i> Reset
                    </button>
                    <button type="Button" onClick="window.location='https://www.msu.ac.th';" class="btn btn-info me-2 text-white">
                        <i class="bi bi-globe me-1"></i> Go to MSU
                    </button>
                    <button type="Button" onClick="window.print();" class="btn btn-success">
                        <i class="bi bi-printer-fill me-1"></i> พิมพ์
                    </button>
                </div>

            </form>

        </div>
    </div>
    
    <hr class="my-4">

    <?php
    if(isset($_POST['Submit'])){
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $color = $_POST['color'];
        $major = $_POST['major'];
		
		include_once("connectdb.php") ;

		$sql = "INSERT INTO register (r_id,r_name,r_phone,r_height,r_color,r_major) values (NULL, '{$fullname}','{$phone}','{$height}','{$color}','{$major}');";
		mysqli_query($conn,$sql) or die ("INSERT ไม่ได้");
		
		echo "<script>";
		echo "alert('เพิ่มข้อมูลสำเร็จ');";
		echo "</script>";
	}
    ?>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>