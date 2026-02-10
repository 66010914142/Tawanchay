<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</title>
</head>

<body>
<h1>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</h1>
<form method="post" action="">
กรอกตัวเลข <input type="number" name = "a" autofocus>
<button type="submit" name="Submit">Ok</button>
</form>
<?php

	if (isset($_POST['Submit'])){
	$gender = $_POST['a'];
	if($gender == 1) {
	echo "เพศชาย";
	}else
	if($gender == 2){
	echo "เพศหญิง";
	}else
	if($gender == 3){
	echo "เพศที่สาม";
	}else{
	echo "อื่นๆ";
			}
		}
?>
</body>
</html>