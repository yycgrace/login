<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="reg.php" method="post">
        <div><input type="text" name="admin_id" placeholder="Enter admin ID"></div>
        <div><input type="password" name="admin_pw" placeholder="Enter the password"></div>
        <input type="reset" value="RESET">
        <input type="submit" value="SIGN IN">
    </form>
</body>
</html>

<?php
include "base.php";

if(!empty($_POST['admin_id']) && !empty($_POST['admin_pw'])){
    $id=$_POST['admin_id'];
    $pw=$_POST['admin_pw'];
    $sql="select * from admin where `admin_id`='$id' && `admin_pw`='$pw'";
    $user=$pdo->query($sql)->fetchColumn();

    if(!empty($user)){
        header("location:admin.php?admin_id=".$user['id']);
    }else{
        echo "帳號密碼錯誤哦";
        header("location:admin_login.php")
    }
}



?>