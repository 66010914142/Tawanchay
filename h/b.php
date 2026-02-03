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

<h1>b.php</h1>

<?php 
	echo @$_SESSION['nickname']. "<br>";
	echo @$_SESSION['name']. "<br>";
	?>
</body>
</html>