<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join us</title>
    <style>
    body{
        display:flex;
        justify-content:center;
    }
    form{
        justify-content:center;
        width:80%;
    }
    .intext input,.terms{
        width:80%;
        margin:1rem;
        max-width:500px;
        padding:15px;
    }
    </style>
</head>
<body>
<!-- <php include "header.php";?> -->

<h2>Welcome</h2>
<hr>
<form action="login.php" method="post">
    <div><input type="text" name="staff_id" placeholder="Enter your staff ID"></div>
    <div><input type="password" name="pw" placeholder="Enter the password"></div>
    <a href="">Forgot password?</a>
    <input type="reset" value="RESET">
    <input type="submit" value="SIGN IN">
</form>

<?php
include "./com/base.php";

if(!empty($_POST['staff_id']) && !empty($_POST['pw'])){
    $id=$_POST['staff_id'];
    $pw=$_POST['pw'];

    $sql="select * from members where `staff_id`='$id' && `pw`='$pw'";
    $user=$pdo->query($sql)->fetchColumn();
    // fetchColumn是第一欄,也就是計算幾筆?
    // 確認是否有符合條件的欄位

    if(!empty($user)){
        // setcookie("id",$user['id'],time()+60*3);
        // setcookie("status",'ture',time()+60*3);
        header("location:index.html?id=".$user['id']);
        // 這裡可以放$_POST['id']嗎? 
        // 複習cookie用法
        // echo $user['id'];
    }else{
        echo "帳號密碼錯誤哦";
        header("location:login.php");
    };
        
}
?>

</body>
</html>
