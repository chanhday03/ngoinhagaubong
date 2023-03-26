<?php
 
//  include '../../view/cart/viewcart.php';
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
   
    session_start();
    
    if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
    
    include '../user.php';
    
    $user = getUserById($_SESSION['id'], $conn);
    
    }
       

// echo '<pre>';
// var_dump($_POST);
// var_dump($_SESSION['mycart']);
// var_dump($user);
// session_destroy();
include 'cart.php';
if(isset($_POST['btn_hoaDon'])&&($_POST['btn_hoaDon'])){
    $fullname = $_POST["fname"];
  $phone = $_POST["phone"];
  $address = $_POST["adress"];
  $note = $_POST["note"];
  $email = $_POST["email"];
  $user_id = $user["id"];
  $total_money=$_POST["tongtien"];
  $created = date('h:i:sa d/m/Y');
  $status = 0;
 
  $order_id = insert_bill($user_id,$fullname,$email,$phone,$address,$note,$status,$total_money);
 
  $order_id = var_dump($order_id);die;
  foreach($_SESSION["mycart"] as $cart){
    $product_id= $cart[0];
    $name = $cart[1];
    $images = $cart[2];
    $size = $cart[3];
    $num= $cart[4];
    $price = $cart[5];
     $khuyenmai= $cart[6];
     insert_order_detail($user_id,$order_id,$product_id,$images,$price,$num,$total_money);
}
}
