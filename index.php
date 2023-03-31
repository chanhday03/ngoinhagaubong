<?php 
ob_start();
session_start();
include 'model/pdo.php';
include 'model/product.php';
include 'model/category.php';
include 'global.php';
include 'view/header.php';
include 'model/cart/cart.php';
// include 'model/user.php';
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
                 array_splice($_SESSION['mycart'],$_GET["idcart"],1);
                header("location:index.php?act=addtocart"); 
            }else{
                $_SESSION['mycart']=[];
            }
          
              break;
        case 'viewcart':
                include "view/cart/viewcart.php";
                break; 
                
         case 'bill':
             include "view/cart/bill.php";
             
         break;     
         case 'billconfirm':{
            
            if(isset($_POST['btn_hoaDon'])&&($_POST['btn_hoaDon'])){
                $name = $_POST["fname"];
                $phone = $_POST["phone"];
                $adress = $_POST["adress"];
                $note = $_POST["note"];
                $email = $_POST["email"];
                $user_id = $user["id"];
                $total_money=$_POST["tongtien"];
                $status = 0;    
                $order_id = insert_bill($user_id,$fullname,$email,$phone,$address,$note,$status,$total_money);
                foreach($_SESSION["mycart"] as $cart){
                  $product_id= $cart[0];
                  $name = $cart[1];
                  $images = $cart[2];
                  $size = $cart[3];
                  $num= $cart[4];
                  $price = $cart[5];
                   $khuyenmai= $cart[6];
                   insert_order_detail($user_id,$order_id,$product_id,$images,$price,$num,$total_money);}
              }
            include "view/cart/billconfirm.php";
        break; 
         }
             
        case 'feedback':
            include "view/feedback.php";
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