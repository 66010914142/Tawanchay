<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</title>
</head>

<body>
<h1>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</h1>
<form method="post" action="">
Input Score <input type="number" name = "a" autofocus min = 0 max = 100 required>
<button type="submit" name="Submit">Ok</button>
</form>
<?php
	if (isset($_POST['Submit'])){
		$score = $_POST['a'];
		
		if($score >= 80){
			$grade = "A";}
			else if($score >= 70){
				$grade = "B";}
				else if($score >= 60){
				$grade = "C";}
				else if($score >= 50){
				$grade = "D";}
				else{
					$grade = "F";}
					echo "<hr>";
				echo"<h1><font color='#FF0000'><b>คะแนน $score ได้เกรด $grade</h1></b>" ;}
?>
</body>
</html>