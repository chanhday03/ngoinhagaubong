<?php
echo "<pre>";
// var_dump($_POST);

session_start();

// if(isset($_POST["btn_addtocart"])&&($_POST["btn_addtocart"]!="")){
//     $id = $_POST['id'];
//     $name = $_POST['name'];
//     $images = $_POST['images'];
//     $price = $_POST['price'];
//     $soLuong = 1;
//     $soTien = $soLuong * $price;
//     $spadd = [$id,$name,$images,$price,$soLuong,$soTien];
//     if(!isset($_SESSION['mycart']))$_SESSION['mycart']=[];
    
//     array_push($_SESSION['mycart'],$spadd); 
//   session_destroy();
// }
 var_dump($_SESSION['mycart']);
var_dump($_GET);
if(isset($_GET["idcart"])){
    array_slice($_SESSION['mycart'],1,1);
}else{
   $_SESSION['mycart']=[];
}
  array_slice($_SESSION['mycart'],1,1);
 var_dump($_SESSION['mycart']);
