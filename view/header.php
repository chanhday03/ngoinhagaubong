<!DOCTYPE html>
<html lang="en">
<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "ngoinhagaubong";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}
?>
<?php

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

include 'model/user.php';
$user = getUserById($_SESSION['id'], $conn);
}

 ?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Ngôi nhà gấu bông</title>
    <link rel="stylesheet" href="view/layout/assets/style.css" />
    <link rel="stylesheet" href="view/layout/assets/style2.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="view/layout/assets/style2.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <script src="https://kit.fontawesome.com/62fe7548c5.js" crossorigin="anonymous"></script>
</head>
<style>
    .danhmuc {
        padding-top: 20px;
        max-width: 1248px;
        margin: 0 auto;
    }

    .search-bar {
        background-color: burlywood;
        display: flex;
        align-items: center;
        border-radius: 60px;
        padding: 8px 25px;
        backdrop-filter: blur(4px) saturate(180%);
    }

    .search-bar input {
        background-color: transparent;
        flex: 1;
        border: none;
        outline: none;
        padding: 5px 15px;
        font-size: 10px;
        margin-right: 10px;
    }

    ::placeholder {
        color: white;
        font-size: 14px;
    }

    .search-bar button img {
        width: 40px;
        border-radius: 50%;
    }

    .search-bar button {
        border: 0;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        background-color: #a68567;
        cursor: pointer;
    }
</style>
<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "ngoinhagaubong";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}
?>
<?php

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

$user = getUserById($_SESSION['id'], $conn);
}

 ?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ngôi nhà gấu bông</title>
    <link rel="stylesheet" href="view/layout/assets/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="view/layout/assets/style2.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/62fe7548c5.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- header -->
    <header>

        <a href="" class="logo">
            <img src="https://i.pinimg.com/564x/63/e4/c9/63e4c923c2467000cf6dbb3a0499bf61.jpg" alt="" />
        </a>
        <div class="fa-solid fa-bars" id="menu-icon"></div>
        <div class="navbar">
            <a href="index.php" class="home-active">Trang Chủ</a>
            <a href="#">Giới thiệu</a>
            <div class="dropdown">
                <button class="dropbtn">Sản phẩm
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">Gấu bông</a>
                    <a href="#">Phụ Kiện</a>
                </div>
            </div>
            <a href="#">Liên Hệ</a>
            <a href="#">Góp Ý</a>
        </div>
        <form action="index.php?act=sanpham" method="post" class="search-bar">
            <input type="text" name="kyw" placeholder="Sản phẩm bạn muốn.." />
            <button type="submit" name="timkiem">
                <img src="https://static.vecteezy.com/system/resources/previews/001/591/517/non_2x/free-search-icon-free-vector.jpg"
                    alt="">
            </button>
        </form>
        <div class="icons">
            <a href="#" class="fa-solid fa-heart"></a>
            <a href="index.php?act=viewcart" class="fas fa-shopping-cart"></a>
        </div>

        <div class="profile">
            <?php
               if (isset($user)) { ?>
            <div class="d-flex justify-content-center align-items-center vh-100">

                <div class="shadow w-350 p-3 text-center">
                    <div class="profile2">
                        <img src="upload/<?=$user['pp']?>" class="img-fluid rounded-circle">
                        <h3 class="display-4 ">
                            <?=$user['fname']?>
                        </h3>
                    </div>
                    <a href="view/taikhoan/edit.php" class="btn btn-primary">
                        Edit Profile
                    </a>
                    <a href="view/taikhoan/logout.php" class="btn btn-warning">
                        Logout
                    </a>
                </div>
            </div>
    </header>
    </div>
    <?php }else { 
                  echo '<div class="navlogin">
                   <ul>
               <a href="view/taikhoan/login.php">
                 <li>Đăng nhập</li>
               </a>
                <a href="view/taikhoan/signup.php">
                <li>Đăng ký</li>
                  </a>
                </ul>
                </div>
                </header>';
      
             
             } ?>
    </header>