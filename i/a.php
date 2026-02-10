<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</title>
</head>

<body>
<h1>ข้อมูลภาค -- ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</h1>
<table border = 1>
    <tr>
        <th> รหัสภาค </th>
        <th> ชื่อภาค </th>
    </tr>
<?php 
include_once("connectdb.php");
$sql = "SELECT * FROM `regions` ORDER BY `r_name` ASC";
$rs = mysqli_query($conn,$sql);

while($data = mysqli_fetch_array($rs)){
    ?>
    <tr>
        <td> <?php echo $data['r_id'];?></th>
        <td> <?php echo $data['r_name'];?></th>
    </tr>

<?php } ?>

</table>
</body>
</html>