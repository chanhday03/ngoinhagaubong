<?php
include "../model/pdo.php";
include "../model/category.php";
include "../model/product.php";
include "../model/user.php";
include "headerAdmin.php";

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
                $soluongsp = $_POST['soluongsp'];
                $giasp = $_POST['giasp'];
                $sizesp = $_POST['sizesp'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_product($tensp, $motasp, $hinh, $soluongsp, $giasp, $sizesp, $iddm);
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
                $soluongsp = $_POST['soluongsp'];
                $giasp = $_POST['giasp'];
                $sizesp = $_POST['sizesp'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_product($id, $iddm, $tensp, $motasp, $hinh, $soluongsp, $giasp, $sizesp);
                $thongbao = 'Thêm thành công';
            }
            $listcategory = loadall_category();
            $listproduct = loadall_product("", 0);
            include "product/listProduct.php";
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
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}