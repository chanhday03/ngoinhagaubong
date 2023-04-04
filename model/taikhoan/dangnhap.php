<?php
// var_dump($_POST);die;
session_start();
include '../pdo.php';
include '../user.php';
$user = $_POST['userName'];
$pass = $_POST['passWord'];
$checkUser=checkuser($user,$pass);
if(is_array($checkUser)){
    $_SESSION['user']=$checkUser;
    $thongbao = "Đăng nhập thành công";
    header("location:../../index.php");
}else{
    $thongbao = "Đăng nhập không thành công";
}


?>