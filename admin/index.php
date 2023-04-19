<?php
include "../model/pdo.php";
include "../model/category.php";
include "../model/product.php";
include "../model/user.php";
include "../model/comment.php";
include "../model/dashboard.php";
include "../model/thongke.php";
include "headerAdmin.php";
include "../model/cart/cart.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_category($tenloai);
                $thongbao = 'Thêm thành công';
            }
            include "category/addCategory.php";
            break;
        case 'listdm':
            $listcategory = loadall_category();
            include "category/listCategory.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_category($_GET['id']);
            }
            $listcategory = loadall_category();
            include "category/listCategory.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_category($_GET['id']);
            }
            include "category/updateCategory.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_category($id, $tenloai);
                $thongbao = 'Cập Nhật Thành Công';
            }
            $listcategory = loadall_category();
            include "category/listCategory.php";
            break;
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $motasp = $_POST['motasp'];
                $khuyenmai = $_POST['khuyenmai'];
                $giasp = $_POST['giasp'];
                $sizesp = $_POST['sizesp'];
                $viewsp = $_POST['viewsp'];
                $soluongsp = $_POST['soluongsp'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $id_product= insert_product($tensp, $motasp, $hinh,  $giasp, $sizesp, $khuyenmai,$viewsp, $iddm,$soluongsp );
                insert_Galery( $id_product,$hinh,$hinh,$hinh,$hinh);
                $thongbao = 'Thêm thành công';
            }
            $listcategory = loadall_category();
            include "product/addProduct.php";
            break;
            // listsp
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listcategory = loadall_category();
            $listproduct = loadall_product($kyw, $iddm);;
            include "product/listProduct.php";
            break;
            // xoasp
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_Galery($_GET['id']) ;
                delete_product($_GET['id']);
            
            }
            $listproduct = loadall_product();
            include "product/listProduct.php";
            break;
            // suasp
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $product = loadone_product($_GET['id']);
            }
            $listcategory = loadall_category();
            include "product/updateProduct.php";
            break;
              // updatesp
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $motasp = $_POST['motasp'];
                $khuyenmai = $_POST['khuyenmai'];
                $giasp = $_POST['giasp'];
                $sizesp = $_POST['sizesp'];
                $hinh = $_FILES['hinh']['name'];
                $viewsp = $_POST['viewsp'];
                $soluongsp = $_POST['soluongsp'];
                if ($hinh) {
                    $target_dir = "../upload/";
                    $target_file = $target_dir . $_FILES["hinh"]["name"];
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                } else {
                    $hinh = $_POST['oldImage'];
                }
                update_product($id, $iddm, $tensp, $motasp,  $giasp, $sizesp, $khuyenmai, $hinh,$viewsp,$soluongsp);
                $thongbao = 'Thêm thành công';
            }
            $listcategory = loadall_category();
            $listproduct = loadall_product("", 0);
            include "product/listProduct.php";
            break;   
         case 'updategalery':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_product=$_POST["id_product"];
                $target_dir = "../upload/";
                if(isset($_FILES['hinh1']['name']) AND !empty($_FILES['hinh1']['name'])) {
                    $hinh1 = basename($_FILES['hinh1']['name']);
                    $target_file1 = $target_dir . $hinh1;
                    move_uploaded_file($_FILES["hinh1"]["tmp_name"], $target_file1);
                }else{
                    $hinh1=$_POST["old-image1"];
                }
                if(isset($_FILES['hinh2']['name']) AND !empty($_FILES['hinh2']['name'])) {
                    $hinh2 = basename($_FILES['hinh2']['name']);
                    $target_file1 = $target_dir . $hinh2;
                    move_uploaded_file($_FILES["hinh2"]["tmp_name"], $target_file1);
                }else{
                    $hinh2=$_POST["old-image2"];
                }
                if(isset($_FILES['hinh3']['name']) AND !empty($_FILES['hinh3']['name'])) {
                    $hinh3 = basename($_FILES['hinh3']['name']);
                    $target_file1 = $target_dir . $hinh3;
                    move_uploaded_file($_FILES["hinh3"]["tmp_name"], $target_file1);
                }else{
                    $hinh3=$_POST["old-image3"];
                }
                if(isset($_FILES['hinh4']['name']) AND !empty($_FILES['hinh4']['name'])) {
                    $hinh4 = basename($_FILES['hinh4']['name']);
                    $target_file1 = $target_dir . $hinh4;
                    move_uploaded_file($_FILES["hinh4"]["tmp_name"], $target_file1);
                }else{
                    $hinh4=$_POST["old-image4"];
                }
                update_Galery( $id_product,$hinh1,$hinh2,$hinh3,$hinh4);
                $thongbao = 'Cập Nhật thành công';
            }
                include "product/updategalery.php";
                break;    
               
            //tài khoản
        case 'dskh':
            $listuser = loadall_user();
            include "user/listUser.php";
            break;

        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_user($_GET['id']);
            }
            $listuser = loadall_user();
            include "user/listUser.php";
            break;
        
            // default
        case 'dsbl':
            $comment_list = loadall_comments();
            include "comment/list_comment.php";
            break;
        case 'delcommnet':
            delete_comment($_GET["idcm"]);
            $comment_list = loadall_comments();
            include "comment/list_comment.php";
            break;
        case 'feedback':
            $listFeedBack = loadall_feedback();
            include "user/feedback.php";
            break;
        case 'xoafb':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_feedback($_GET['id']);
            }
            $listFeedBack = loadall_feedback();
            include "user/feedback.php";
            break;
            //shipping
        case 'shipping':
                $listshipping = loadall_shipping(); 
                include "order/shipping.php";
                break;
                //xóa shipping
           // order
        //    case 'xoashipping':
        //     if (isset($_GET['id_shipping']) && ($_GET['id_shipping'] > 0)) {
        //         delete_shipping($_GET['id_shipping']);
        //     }
        //     $listshipping = loadall_shipping(); 
        //     include "order/shipping.php";
        //     break;
        case 'order':
          
            include "order/order.php";
            break;
        //    Cập nhật trang thái
        case 'updatestatus':
            
                include "order/updatestatus.php";
                include "order/order.php";
                break;   
            // thongke
        case 'thongke':
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;
            // bieudo
        case 'bieudo':
            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;
        case 'danhsach':
            $listdsdm = loadall_danhsach_dm();
            $listdssp = Count_sp();
            $listdsuser=Count_user();
            $listdscomment =Count_comment();
            $listdsfeedback=Count_feedback();
            $listdscart=Count_Cart();
            include "home.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
    // header("location:index.php?act=danhsach");
}