<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</title>
</head>

<body>
<h1>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</h1>
<?php
/* ปิดหลายบรรทัด*/
// ใช้ปิด หรือ # 
	echo "บทที่ 10 PHP เบื้องต้น<br>";
	print "วิชา Web Programming<br>";
	
	$name = "Tawanchay Sawatpanich";
	$age = 25;
	#$name .= "Tawanchay"; //.ตัวแปลชื่อเดียวกันเอามารวมกัน
	
	echo gettype($name); //เช็คตัวแปล
	echo "<hr>";
	var_dump($name);
	echo "<hr>";
	
	echo $name;
	echo "<hr>";
	
	$a = 10;
	$b = 5;
	$c = 2;
	$x = ($a + $b) * $c;
	echo $x;

?>
</body>
</html>