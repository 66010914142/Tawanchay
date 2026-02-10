<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</title>
</head>

<body>
<h1>ข้อมูลจังหวัด -- ตะวันฉาย สวัสดิ์พาณิชย์(ซัน)</h1>
<form method="post" action="">
    ชื่อจังหวัด <input type="text" name="rname" autofocus require> <br>
    รูปภาพ <input type="file" name="pimage"> <br>
    ชื่อภาค
    <select name = "rid">
        <?php 
        include_once("connectdb.php");
        $sql3 = "SELECT * FROM `regions` ORDER BY `r_name` ASC";
        $rs3 = mysqli_query($conn,$sql3);
        while($data3 = mysqli_fetch_array($rs3)){
        ?>
        <option value="<?php echo $data3['r_id']; ?>"><?php echo $data3['r_name'];?></option>
        <?php } ?>
    <button type="submit" name="Submit"> บันทึก</button>
        </select>
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
        <td> <?php echo $data['p_id'];?></td>
        <td> <?php echo $data['p_name'];?></td>
        <td> <img src = "images/<?php echo $data['p_id'];?>.<?php echo $data['p_ext'];?>" width = "120"> </td>
        <td> <?php echo $data['r_name'];?></td>
    </tr>

<?php } ?>

</table>
</body>
</html>