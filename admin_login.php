<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="admin_login.php" method="post">
        <div><input type="text" name="id" placeholder="Enter admin ID"></div>
        <div><input type="password" name="pw" placeholder="Enter the password"></div>
        <input type="reset" value="RESET">
        <input type="submit" value="SIGN IN">
    </form>
</body>
</html>

<?php
include "./com/base.php";

if(!empty($_POST['id']) && !empty($_POST['pw'])){
    $id=$_POST['id'];
    $pw=$_POST['pw'];
    $sql="select * from admin where `id`='$id' && `pw`='$pw'";
    $user=$pdo->query($sql)->fetchColumn();

    if(!empty($user)){
        header("location:admin.php?id=".$user['id']);
    }else{
        echo "帳號密碼錯誤哦";
        header("location:admin_login.php");
    }
}



?>