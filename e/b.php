<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Join Us! - AuraNova Corp ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    /* CSS พื้นฐาน */
    body {
        background-color: #f8f9fa; /* พื้นหลังสีขาวนวล */
        color: #343a40; /* ตัวอักษรสีเข้ม */
    }
    .card-vibrant {
        background-color: #ffffff; /* พื้นหลังฟอร์มสีขาว */
        border: none;
        border-radius: 1.5rem; 
        /* เงาที่ดูเรียบหรูและนุ่มนวล */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); 
    }
    /* หัวข้อ Gradient สี Vibrant */
    .card-header-vibrant {
        /* Gradient สีฟ้าสดใส */
        background: linear-gradient(90deg, #007bff, #00d2ff); 
        color: white;
        padding: 2rem;
        border-bottom: none;
        /* ทำให้มุมด้านบนโค้งตาม Card */
        border-top-left-radius: 1.5rem; 
        border-top-right-radius: 1.5rem;
    }
    /* ช่องกรอกข้อมูลสไตล์ทันสมัย */
    .form-control, .form-select, .input-group-text {
        background-color: #f1f3f5; 
        color: #343a40;
        border: 1px solid #ced4da;
    }
    .form-control:focus, .form-select:focus {
        background-color: #ffffff;
        border-color: #007bff; 
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.25); /* เงา focus ที่ดูสะอาด */
    }
    .text-vibrant {
        color: #007bff; /* สีฟ้าหลัก */
    }
    .btn-vibrant {
        background: linear-gradient(45deg, #007bff, #28a745); /* Gradient สีฟ้าไปเขียว */
        border: none;
        color: white;
    }
    .btn-vibrant:hover {
        background: linear-gradient(45deg, #0056b3, #1e7e34);
    }
</style>
</head>

<body>
<div class="container py-5">

    <div class="card card-vibrant shadow-lg">
        <div class="card-header card-header-vibrant text-center p-4">
            <h1 class="display-5 mb-1 fw-bold"><i class="bi bi-lightbulb-fill me-2"></i>AuraNova Corp ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</h1>
            <p class="lead mb-0">ค้นหาพรสวรรค์ดิจิทัล | กรอกใบสมัครออนไลน์</p>
        </div>
        
        <div class="card-body p-4 p-md-5">
            <form method="post">
                
                <h2 class="h5 mb-3 text-vibrant"><i class="bi bi-box-seam me-2"></i>ตำแหน่งที่เปิดรับ</h2>
                
                <div class="mb-4">
                    <label for="position" class="form-label fw-bold">ตำแหน่งงานที่ต้องการสมัคร <span class="text-danger">*</span></label>
                    <select class="form-select form-select-lg shadow-sm" id="position" name="position" required>
                        <option value="" selected disabled>-- เลือกสายงานที่คุณเชี่ยวชาญ --</option>
                        <option value="AI Specialist">AI Specialist (นักพัฒนาปัญญาประดิษฐ์)</option>
                        <option value="Blockchain Engineer">Blockchain Engineer (วิศวกรบล็อกเชน)</option>
                        <option value="Cloud Architect">Cloud Architect (สถาปนิกคลาวด์)</option>
                        <option value="Cyber Security Analyst">Cyber Security Analyst (นักวิเคราะห์ความปลอดภัยไซเบอร์)</option>
                    </select>
                </div>
                
                <hr class="my-4 border-primary">

                <h2 class="h5 mb-3 text-vibrant"><i class="bi bi-person-fill me-2"></i>ข้อมูลผู้สมัคร</h2>

                <div class="row g-4">
                    
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-4">
                                <label for="prefix" class="form-label">คำนำหน้า <span class="text-danger">*</span></label>
                                <select class="form-select" id="prefix" name="prefix" required>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                            </div>

                            <div class="col-8">
                                <label for="fullname" class="form-label">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <label for="dob" class="form-label">วัน/เดือน/ปีเกิด <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar-check-fill"></i></span>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="education" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                            <select class="form-select" id="education" name="education" required>
                                <option value="" selected disabled>-- เลือกระดับการศึกษา --</option>
                                <option value="ปวช./ปวส.">ปวช./ปวส.</option>
                                <option value="ปริญญาตรี">ปริญญาตรี</option>
                                <option value="ปริญญาโท">ปริญญาโท</option>
                                <option value="ปริญญาเอก">ปริญญาเอก</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="skills" class="form-label">ความสามารถพิเศษ / Tech Stack</label>
                            <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="ระบุทักษะทางเทคนิคที่เกี่ยวข้อง"></textarea>
                        </div>
                    </div>
                </div>

                <hr class="my-4 border-primary">

                <h2 class="h5 mb-3 text-vibrant"><i class="bi bi-journal-richtext me-2"></i>ประวัติการทำงาน</h2>

                <div class="mb-4">
                    <label for="experience" class="form-label">ประสบการณ์ทำงานที่เกี่ยวข้อง</label>
                    <textarea class="form-control" id="experience" name="experience" rows="5" placeholder="ระบุตำแหน่ง, โครงการสำคัญ, และความสำเร็จที่ผ่านมา"></textarea>
                </div>

                <div class="d-flex justify-content-end pt-3">
                    <button type="reset" class="btn btn-outline-secondary me-2 px-4 shadow-sm">
                        <i class="bi bi-x-square-fill me-2"></i> ล้างฟอร์ม
                    </button>
                    <button type="submit" name="submit" class="btn btn-vibrant btn-lg px-5 shadow-lg">
                        <i class="bi bi-send-check-fill me-2"></i> ส่งใบสมัคร
                    </button>
                </div>

            </form>
        </div>
    </div>
    
    <div class="mt-4">
        <?php
        if(isset($_POST['submit'])){
            // รับค่าจากฟอร์ม
            $position = $_POST['position'];
            $prefix = $_POST['prefix'];
            $fullname = $_POST['fullname'];
            $dob = $_POST['dob'];
            $education = $_POST['education'];
            $skills = nl2br(htmlspecialchars($_POST['skills']));
            $experience = nl2br(htmlspecialchars($_POST['experience']));
			
			include_once("connectdb.php");
			
			$sql = "INSERT INTO application (an_id,an_position,an_prefix,an_fullname,an_dob,an_education,an_skills,an_experience) values (NULL, '{$position}','{$prefix}','{$fullname}','{$dob}','{$education}','{$skills}','{$experience}');";
		mysqli_query($conn,$sql) or die ("INSERT ไม่ได้");
		
		echo "<script>";
		echo "alert('เพิ่มข้อมูลสำเร็จ');";
		echo "</script>";
			
		}
		?>
    </div>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>