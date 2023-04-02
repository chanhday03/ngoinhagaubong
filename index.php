<?php
ob_start();
session_start();
include 'model/pdo.php';
include 'model/product.php';
include 'model/category.php';
include 'model/comment.php';
include "model/user.php";
include 'global.php';
include 'view/header.php';
if (!isset($_SESSION["addtocart"]))
    $_SESSION["addtocart"] = [];
$spnew = loadall_product_home();
$dsdm = loadall_category();
$dstop10 = loadall_product_top10();
$listsize = loadall_size();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
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
        case 'viewcart':
            include "view/giohang.php";
            break;
        case 'addtocart':
            $product_name = $_POST["product_name"];
            $product_image = $_POST["product_image"];
            $product_size = $_POST["product_size"];
            $product_price = $_POST["product_price"];
            $product_quantity = $_POST["product_quantity"];
            $addtocart = [$product_name, $product_image, $product_size, $product_price, $product_quantity];
            array_push($_SESSION["addtocart"], $addtocart);
            include "view/giohang.php";
            break;
        case 'delcart':
            if (isset($_GET["idcart"])) {
                array_splice($_SESSION["addtocart"], $_GET["idcart"], 1);
            } else {
                $_SESSION["addtocart"] = [];
            }
            // include "view/giohang.php";
            header("location: index.php?act=viewcart");
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
} else {
    include 'view/home.php';
}
include
    'view/footer.php'; ?>