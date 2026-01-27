<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</title>
</head>

<body>
<h1>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</h1>
<form method="post" action="">
แม่สูตรคูณ <input type="number" name = "a" autofocus min = "2" max = "1000" required>
<button type="submit" name="Submit">Ok</button>
</form>
<?php
	if (isset($_POST['Submit'])){
		$m = $_POST['a'];
		
		
		for($i = 1; $i<=12; $i++){
			$b = $m * $i;
			echo "{$m} x {$i} = {$b} <br>";
			
		}
}
?>
</body>
</html>