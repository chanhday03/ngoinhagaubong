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
        case 'gioithieu':
            include"view/gioithieu.php";
            break;
        case 'lienhe':
            include"view/lienhe.php";
            break;
        default:
            include"view/home.php";
            break;
    }
}else {
    include 'view/home.php';
}
include 'view/footer.php';

?>