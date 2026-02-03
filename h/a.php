<?php
	session_start();
	?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะวันฉาย สวัสดิ์พาณิชย์</title>
</head>

<body>

<h1>a.php</h1>


<?php 
	$_SESSION['name'] =  "ตะวันฉาย สวัสดิ์พาณิชย์";
	$_SESSION['nickname'] = "ซัน";
	
	echo @$_SESSION['nickname']. "<br>";
	echo @$_SESSION['name']. "<br>";
?>
</body>
</html>