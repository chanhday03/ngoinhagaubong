<?php
include '../pdo.php';
include '../user.php';
    $email=$_POST['Email'];
    $user=$_POST['Username'];
    $pass=$_POST['Password'];
    insert_user($email,$user,$pass);
    echo "Đăng ký thành công";
    header("location:../../view/taikhoan/dangnhap.php");
  ?>