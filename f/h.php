<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</title>
</head>

<body>
<h1>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</h1>
<form method="post" action="">
รหัสนิสิต <input type="number" name = "a" autofocus required>
<button type="submit" name="Submit">Ok</button>
</form>
<hr>
<?php
	if (isset($_POST['Submit'])){
		$id = $_POST['a'];
		$y = substr($id,0,2); //ตัดข้อความ เอาตำแหน่งที่ 0 ถึง 2
		echo "<img src='http://202.28.32.210/picture/{$y}/{$id}.jpg' width = '400'>";
}
?>
</body>
</html>