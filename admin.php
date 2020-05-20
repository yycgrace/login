<?php
include "base.php";

// 將部門設成陣列
$sql="select * from dep";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>新增員工資料</h3>
    <form action="admin.php" method="post">
        <input type="text" name="id">staff ID:
        <input type="text" name="name">staff name:
        <input type="text" name="join_date" placeholder="20201212">入職日:
        <select name="dep" id="">
            <!-- 選項自動跑部門陣列 -->
            <?php
            for{
                echo "<option value='".$dep[]."'></option>"
            }
            ?>
        </select>
    </form>
</body>
</html>


<?php

$id=$_POST['id'];
$pw=$_POST['join_date'];
$dep=$_POST['dep'];
$name=$_POST['name'];
$join_date=$_POST['join_date'];


$sql="insert into members(`id`,
                          `pw`,
                          `dep`,
                          `name`,
                          `join_date`)
                    value('$id',
                          '$pw',
                          '$dep',
                          '$name',
                          '$join_date')";

$res=$pdo->exec($sql);

// 判斷是否新增成功??
if($res>=1){
    echo "新增員工資料成功";
}else{
    echo "oops!哪裡出錯囉!";
}

?>