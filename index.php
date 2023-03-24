<?php 
// ob_start();
session_start();
include 'model/pdo.php';
include 'model/product.php';
include 'model/category.php';
include 'global.php';
include 'view/header.php';
$spnew = loadall_product_home();
if((isset($_GET['act'])) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act) {
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