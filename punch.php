<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "header.php"; ?>    
<form action="punch.php" method="get">
    <input type="hidden" name="id" value="<?=cookie紀錄id;?>">
    <input type="hidden" name="type" value="punch_in">
    <input type="hidden" name="time" value="<?=date("Y-m-d H-m-s");?>">
    <input type="submit" value="punch in">
</form>
<form action="punch.php" method="get">
    <input type="hidden" name="id" value="<?=cookie紀錄id;?>">
    <input type="hidden" name="type" value="punch_out">
    <input type="hidden" name="time" value="<?=date("Y-m-d H-m-s");?>">
    <input type="submit" value="punch out">
</form>

<?php
include "base.php";

$id=$_POST['id'];
$type=$_POST['type'];
$time=$_POST['time'];

$sql="insert into record(`id`,
                         `type`,
                         `time`)
                   value('$id',
                         '$type',
                         '$time')";

$res=$pdo->exec($sql);

?>


</body>
</html>