<?php 
ob_start();
session_start();
include 'model/pdo.php';
include 'model/product.php';
include 'model/category.php';
include 'global.php';
include 'view/header.php';
$spnew = loadall_product_home();
$dsdm = loadall_category();
$dstop10 = loadall_product_top10();
if(!isset($_SESSION['mycart']))$_SESSION['mycart']=[];
if((isset($_GET['act'])) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act) {
        
         case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_product($id);
                extract($onesp);
                $sp_cung_loai = load_product_cungloai($id,$iddm);
                include 'view/sanphamct.php';
            } else {
                include 'view/home.php';
            }
            break;
         case 'addtocart':
            if(isset($_POST["btn_addtocart"])&&($_POST["btn_addtocart"]!="")){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $images = $_POST['images'];
                $size = $_POST["size"];
                $price = $_POST['price'];
                $khuyenmai = $_POST["khuyenmai"];
               
                $soLuong = 1;
                $soTien = $soLuong * $price;
                $spadd = [$id,$name,$images,$size,$soLuong,$price,$khuyenmai,$soTien];
                array_push($_SESSION['mycart'],$spadd);     
             }
                include "view/cart/viewcart.php";
             break;
         case 'deletecart':
            if(isset($_GET["idcart"])){
                 array_slice($_SESSION['mycart'],$_GET["idcart"],1);
                header("location:index.php?act=addtocart"); 
            }else{
                $_SESSION['mycart']=[];
            }
          
              break;
        case 'viewcart':
                include "view/cart/viewcart.php";
                break;            
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        default:
            include "view/home.php";
            break;
    }
}else {
    include 'view/home.php';
}
include 'view/footer.php';

?>