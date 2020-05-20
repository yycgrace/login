<?php

include "./com/base.php";

$id=$_POST['id']
$pw=$_POST['pw']
$dep=$_POST['dep']
$name=$_POST['name']


$sql="insert into members(`id`,
                           `pw`,
                           `dep`,
                           `name`)
                    values('$id',
                           '$pw',
                           '$dep',
                           '$name')";

// 有疑問?????跳出登入成功或失敗嗎?
$res=$pdo->exec($sql);

if($res>=1){
    echo $res;
    echo "成功";
}else{
    echo $res;
    echo "失敗";
}

?>