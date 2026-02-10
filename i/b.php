<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</title>
</head>

<body>
<h1>ข้อมูลจังหวัด -- ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</h1>
<table border = 1>
    <tr>
        <th> รหัส</th>
        <th> ชื่อจังหวัด </th>
        <th> รูปภาพ </th>
        <th> ภาค </th>
    </tr>
<?php 
include_once("connectdb.php");
$sql = "SELECT * FROM `provinces` AS p
INNER JOIN `regions` AS r 
ON p.r_id = r.r_id
ORDER BY `p_id` ASC";
$rs = mysqli_query($conn,$sql);

while($data = mysqli_fetch_array($rs)){
    ?>
    <tr>
        <td> <?php echo $data['p_id'];?></th>
        <td> <?php echo $data['p_name'];?></th>
        <td> <?php echo $data['p_ext'];?></th>
        <td> <?php echo $data['r_name'];?></th>
    </tr>

<?php } ?>

</table>
</body>
</html>