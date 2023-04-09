<?php 
ob_start();
session_start();
include 'model/pdo.php';
include 'model/product.php';
include 'model/category.php';
include 'model/comment.php';
include 'global.php';
include 'view/header.php';
include 'model/cart/cart.php';
// include 'model/user.php';
$spnew = loadall_product_home();
$dsdm = loadall_category();
$dstop10 = loadall_product_top10();
$listsize = loadall_size();
if(!isset($_SESSION['mycart']))$_SESSION['mycart']=[];
if((isset($_GET['act'])) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }

            if (isset($_GET['size']) && ($_GET['size'] > 0)) {
                $size = $_GET['size'];
            } else {
                $size = 0;
            }
            $dssp = loadall_product($kyw, $iddm, $size);
            $tendm = load_ten_dm($iddm);
            include 'view/sanpham.php';
            break;
            case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_product($id);
                $cmsp = loadall_comment_theosp($id);
                extract($cmsp);
                extract($onesp);
                $sp_cung_loai = load_product_cungloai($id, $category_id);
                include 'view/sanphamct.php';
            } else {
                include 'view/home.php';
            }
            break;
            case 'addcomment':
            $user_id = $_SESSION['id'];
            $description = $_POST["description"];
            $product_id = $_GET['idsp'];
            if (isset($_POST["guibinhluan"])) {
                if (empty($description)) {
                    $thongbao = 'Bạn đang để trống nội dung bình luận';
                    header("location:index.php?act=sanphamct&idsp=" . $product_id);
                } else {
                    add_comment($product_id, $user_id, $description);
                    header("location:index.php?act=sanphamct&idsp=" . $product_id);
                }
            }
            break;
        case 'delcomment':
            $product_id = $_GET['idsp'];
            delete_comment($_GET["idcm"]);
            header("location:index.php?act=sanphamct&idsp=" . $product_id);
            break;
        case 'editcomment':
            $id = $_GET['idcm'];
            $user_id = $_SESSION['id'];
            $description = $_POST["description"];
            $product_id = $_GET['idsp'];
            if (isset($_POST["editbinhluan"])) {
                if (empty($description)) {
                    $thongbao = 'Bạn đang để trống nội dung bình luận';
                    header("location:index.php?act=sanphamct&idsp=" . $product_id);
                } else {
                    edit_comment($id, $product_id, $user_id, $description);
                    header("location:index.php?act=sanphamct&idsp=" . $product_id);
                }
            }
            break;
         case 'addtocart':
            $soLuong=0;
            if(isset($_POST["btn_addtocart"])&&($_POST["btn_addtocart"]!="")){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $images = $_POST['images'];
                $size = $_POST["size"];
                $price = $_POST['price'];
                $khuyenmai = $_POST["khuyenmai"];
                $soLuong=1;
                if(isset($_POST["soluong"]))$soLuong = intval($_POST["soluong"]);
                
                $soTien = $soLuong * $price;
                $spadd = ['id'=>$id,'name'=>$name,'image'=>$images,'size'=>$size,'soluong'=>$soLuong,'price'=>$price,'khuyenmai'=>$khuyenmai,'sotien'=>$soTien];
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
             include "view/cart/vanchuyen.php";
             
         break;     
         case 'themvanchuyen':
            
           if(isset($_POST['themvanchuyen'])) {
            $fullname = $_POST['fname'];
            $phone = $_POST['phone'];
            $address = $_POST['adress'];
            $note = $_POST['note'];
            $email = $_POST["email"];
            $user_id = $user["id"];
            $id_shipping=  insert_shipping($fullname,$phone,$address,$email,$note,$user_id);
          
               header("location:index.php?act=bill&&id_shipping=$id_shipping");
           }
        break;
         case 'hinhthucthanhtoan':{
            include "view/cart/thongtinthanhtoan.php";
        break; 
         }
         case 'xulythanhtoan':
            include "model/cart/xulythanhtoan.php";
            break;    
        case 'feedback':
            include "view/feedback.php";
            break;
        case 'camon':
                include "view/cart/camon.php";
                break;
         case 'lichsudonhang':
                    include "view/cart/lichsudonhang.php";
                    
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