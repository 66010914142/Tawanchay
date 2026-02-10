<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ผลลัพธ์ใบสมัคร - AuraNova Corp.</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    body {
        background-color: #f8f9fa;
    }
    .result-card {
        border-radius: 1rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    .header-success {
        background-color: #28a745;
        color: white;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
    }
</style>
</head>

<body>
<div class="container py-5">

    <div class="card result-card">
        
        <?php
        // ตรวจสอบว่ามีการส่งข้อมูลผ่าน method POST มาหรือไม่
        if (isset($_POST['submit'])) {
            // ดึงข้อมูลจาก $_POST Array
            $position = isset($_POST['position']) ? htmlspecialchars($_POST['position']) : 'N/A';
            $prefix = isset($_POST['prefix']) ? htmlspecialchars($_POST['prefix']) : 'N/A';
            $fullname = isset($_POST['fullname']) ? htmlspecialchars($_POST['fullname']) : 'N/A';
            $dob = isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : 'N/A';
            $education = isset($_POST['education']) ? htmlspecialchars($_POST['education']) : 'N/A';
            
            // ใช้ nl2br เพื่อให้ข้อความขึ้นบรรทัดใหม่ตามที่ผู้ใช้กรอกใน textarea
            $skills = isset($_POST['skills']) ? nl2br(htmlspecialchars($_POST['skills'])) : '-';
            $experience = isset($_POST['experience']) ? nl2br(htmlspecialchars($_POST['experience'])) : '-';
        ?>

        <div class="card-header header-success p-4">
            <h3 class="mb-1"><i class="bi bi-patch-check-fill me-2"></i> ข้อมูลใบสมัครถูกส่งแล้ว!</h3>
            <p class="mb-0">AuraNova Corp. ได้รับข้อมูลของคุณเรียบร้อย</p>
        </div>

        <div class="card-body p-4 p-md-5">
            <h4 class="text-success mb-4"><i class="bi bi-file-earmark-person me-2"></i>สรุปรายละเอียดผู้สมัคร</h4>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <strong>ตำแหน่งที่สมัคร:</strong><br>
                    <span class="text-primary fw-bold"><?php echo $position; ?></span>
                </div>
                <div class="col-md-6 mb-3">
                    <strong>ชื่อ-นามสกุล:</strong><br>
                    <?php echo $prefix . ' ' . $fullname; ?>
                </div>
                <div class="col-md-6 mb-3">
                    <strong>วันเดือนปีเกิด:</strong><br>
                    <?php echo $dob; ?>
                </div>
                <div class="col-md-6 mb-3">
                    <strong>ระดับการศึกษาสูงสุด:</strong><br>
                    <?php echo $education; ?>
                </div>
            </div>

            <hr class="my-4">

            <div class="row">
                <div class="col-md-6 mb-4">
                    <strong><i class="bi bi-lightbulb me-1"></i> ความสามารถพิเศษ / Tech Stack:</strong><br>
                    <div class="bg-light p-3 rounded"><?php echo $skills; ?></div>
                </div>
                <div class="col-md-6 mb-4">
                    <strong><i class="bi bi-briefcase me-1"></i> ประสบการณ์ทำงาน:</strong><br>
                    <div class="bg-light p-3 rounded"><?php echo $experience; ?></div>
                </div>
            </div>

            <div class="text-center mt-3">
                <a href="javascript:history.back()" class="btn btn-outline-secondary"><i class="bi bi-arrow-left me-2"></i>ย้อนกลับไปหน้าฟอร์ม</a>
            </div>

        </div>

        <?php
        } else {
            // หากไม่มีการส่งข้อมูลมาโดยตรง (เข้าถึงไฟล์ f.php โดยตรง)
            echo '<div class="alert alert-warning m-4" role="alert">';
            echo '<h4 class="alert-heading"><i class="bi bi-exclamation-triangle-fill me-2"></i>ไม่พบข้อมูลใบสมัคร!</h4>';
            echo '<p>กรุณากรอกใบสมัครจากหน้าฟอร์มให้สมบูรณ์ก่อนส่งข้อมูล</p>';
            echo '<a href="javascript:history.back()" class="btn btn-warning mt-2"><i class="bi bi-arrow-left me-2"></i>กลับไปที่ฟอร์ม</a>';
            echo '</div>';
        }
        ?>

    </div>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>