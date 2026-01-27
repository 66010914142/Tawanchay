<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <title>ฟอร์มสมัครสมาชิก - ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
      min-height: 100vh;
      padding: 40px 0;
      font-family: 'Prompt', sans-serif;
    }
    .card-custom {
      border: none;
      border-radius: 25px;
      backdrop-filter: blur(8px);
      background: rgba(255, 255, 255, 0.85);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    .btn-rounded {
      border-radius: 30px;
      padding: 10px 25px;
      font-weight: 600;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="col-lg-8 mx-auto">
    <div class="card card-custom p-4">
      <h1 class="text-center mb-4 fw-bold text-primary">ฟอร์มสมัครสมาชิก</h1>
      <h5 class="text-center text-muted mb-4">ตะวันฉาย สวัสดิ์พาณิชย์ (ซัน) — ChatGPT</h5>

      <form method="post" action="" class="row g-3">

        <div class="col-md-6">
          <label class="form-label fw-semibold">ชื่อ-สกุล *</label>
          <input type="text" name="fullname" class="form-control form-control-lg" required autofocus>
        </div>

        <div class="col-md-6">
          <label class="form-label fw-semibold">เบอร์โทร *</label>
          <input type="text" name="phone" class="form-control form-control-lg" required>
        </div>

        <div class="col-md-6">
          <label class="form-label fw-semibold">ความสูง (ซม.) *</label>
          <input type="number" name="height" class="form-control form-control-lg" step="5" min="100" max="220" required>
        </div>

        <div class="col-md-6">
          <label class="form-label fw-semibold">สีที่ชอบ</label><br>
          <input type="color" name="color" class="form-control form-control-color form-control-lg">
        </div>

        <div class="col-md-12">
          <label class="form-label fw-semibold">สาขาวิชา</label>
          <select name="major" class="form-select form-select-lg">
            <option value="การบัญชี">การบัญชี</option>
            <option value="การจัดการ">การจัดการ</option>
            <option value="การตลาด">การตลาด</option>
            <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
          </select>
        </div>

        <div class="d-flex flex-wrap gap-2 mt-4 justify-content-center">
          <button type="submit" name="Submit" class="btn btn-primary btn-rounded">สมัครสมาชิก</button>
          <button type="reset" class="btn btn-warning btn-rounded">รีเซ็ต</button>
          <button type="button" class="btn btn-success btn-rounded" onclick="window.location='https://www.msu.ac.th';">Go to MSU</button>
          <button type="button" class="btn btn-secondary btn-rounded" onclick="window.print();">พิมพ์</button>
        </div>
      </form>
    </div>

    <div class="mt-4">
      <?php
      if(isset($_POST['Submit'])){
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $color = $_POST['color'];
        $major = $_POST['major'];

        echo "<div class='alert alert-info rounded-4 shadow-sm p-4'>";
        echo "<h4 class='fw-bold mb-3'>ผลการสมัครสมาชิก</h4>";
        echo "<p><strong>ชื่อ-นามสกุล:</strong> $fullname</p>";
        echo "<p><strong>เบอร์โทร:</strong> $phone</p>";
        echo "<p><strong>ความสูง:</strong> $height cm</p>";
        echo "<p><strong>สีที่ชอบ:</strong> $color <span style='width:25px;height:25px;background:$color;display:inline-block;border-radius:5px;margin-left:10px;'></span></p>";
        echo "<p><strong>สาขาวิชา:</strong> $major</p>";
        echo "</div>";
      }
      ?>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>