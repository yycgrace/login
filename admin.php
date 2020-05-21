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
        staff ID:
        <input type="text" name="staff_id"><br>
        staff name:
        <input type="text" name="name"><br>
        入職日:
        <input type="text" name="join_date" placeholder="20201212"><br>
        部門:
        <select name="dep" id="">
            <!-- 選項自動跑部門陣列 -->
            <!-- <php
            $sql="select * from dep";
            
            for{
                echo "<option value='".$dep[]."'></option>"
            }
            ?> -->
        </select>
    </form>
</body>
</html>


<?php
include "./com/base.php";

if(!empty($_POST['staff_id']) && !empty($_POST['dep'])){
    $id=$_POST['staff_id'];
    $pw=$_POST['join_date'];
    $dep=$_POST['dep'];
    $name=$_POST['name'];
    $join_date=$_POST['join_date'];

    $sql="insert into members(`staff_id`,
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
        header ("location:?=ture");
        echo "新增員工資料成功";
    }else{
        header ("location:?=false");
        echo "oops!哪裡出錯囉!";
    }
}

?>