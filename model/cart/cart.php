<?php
function delete_Cart_Details ($code_cart){
    $sql = "DELETE FROM `tbl_cart_details` WHERE `tbl_cart_details`.`code_cart` = '$code_cart'";
    pdo_execute($sql);
}
function delete_Cart ($code_cart){
    $sql = "DELETE FROM `tbl_cart` WHERE `tbl_cart`.`code_cart` = '$code_cart'";
    pdo_execute($sql);
}
function loadall_donhang($code_cart){
    $sql ="SELECT * FROM tbl_cart,tbl_cart_details,product
     WHERE tbl_cart.id_cart = tbl_cart_details.id_cart 
     AND  tbl_cart_details.id_product=product.id
     AND tbl_cart_details.code_cart='$code_cart'
     ORDER BY tbl_cart_details.id_cart_details
      DESC;";
          $listDonHang= pdo_query($sql);
          return $listDonHang;
}
function delete_shipping($id)
{
    $sql = "delete from tbl_shipping where id_shipping=" . $id;
    pdo_execute($sql);
}
function loadall_shipping(){
    $sql="SELECT * FROM tbl_shipping ORDER BY id_shipping DESC";
    $listshipping=pdo_query($sql);
    return $listshipping;
}
function update_Cart_Status($cart_status,$code_cart){
    $sql = "UPDATE tbl_cart SET cart_status = '$cart_status' WHERE code_cart='$code_cart'";
    pdo_execute($sql);
}
function select_Cart_Details(){
    $sql ="SELECT * FROM tbl_shipping,tbl_cart,tbl_cart_details WHERE tbl_cart.id_cart=tbl_cart_details.id_cart
     AND tbl_cart.id_shipping = tbl_shipping.id_shipping ORDER BY tbl_cart.id_cart DESC ";
      $select_Cart_Details= pdo_query($sql);
      return $select_Cart_Details;
}
function select_Cart($id_user){
    $sql = "SELECT * FROM tbl_cart,users WHERE tbl_cart.id_user =users.id AND
     tbl_cart.id_user='$id_user' ORDER BY tbl_cart.id_cart DESC LIMIT 0,15";
    $select_Cart= pdo_query($sql);
   return $select_Cart;
}
function insert_order_details ($id_cart,$code_cart,$id_product,$id_user,$soluongmua){
    $sql = "INSERT INTO `tbl_cart_details`( `id_cart`, `code_cart`, `id_product`, `id_user`, `soluongmua`)
                                   VALUES ('$id_cart','$code_cart','$id_product','$id_user','$soluongmua')";
     pdo_execute($sql);
}
function insert_cart($id_user,$code_cart,$cart_status,$cart_payment,$id_shipping){
          $sql = "INSERT INTO `tbl_cart`( `id_user`, `code_cart`, `cart_status`, `cart_payment`, `id_shipping`)
                                 VALUES ('$id_user','$code_cart','$cart_status','$cart_payment','$id_shipping')";
		return pdo_execute_return_lastInsertId($sql);
}
function insert_shipping($fullname,$phone,$address,$email,$note,$user_id)
{
    $sql =
        "INSERT INTO `tbl_shipping`( `fname`, `phone`, `addres`, `email`, `note`, `id_user`)
         VALUES ('$fullname','$phone','$address','$email','$note','$user_id')";
   return pdo_execute_return_lastInsertId($sql);
}
function loadone_shipping($id,$id_shipping)
{
    $sql = "SELECT * FROM tbl_shipping WHERE id_user='$id' AND id_shipping='$id_shipping' LIMIT 1";
    $shipping = pdo_query_one($sql);
    return $shipping;
}
function insert_bill($user_id, $fullname, $email, $phone, $address, $note, $status, $total_money)
{
    $sql =
        "INSERT INTO `dathang`( `user_id`, `fullname`, `email`, `phone`, `address`, `note`, `status`, `total_money`)
                  VALUES ('$user_id','$fullname','$email','$phone','$address','$note','$status','$total_money')";
    pdo_execute_return_lastInsertId($sql);
}
function insert_order_detail($user_id, $order_id, $product_id, $images, $price, $num, $total_money)
{
    $sql =
        "INSERT INTO `order_details`( `user_id`, `order_id`, `product_id`, `images`, `price`, `num`, `total_money`) VALUES
                               ('$user_id','$order_id','$product_id','$images','$price','$num','$total_money')";
    pdo_execute($sql);
}
function loadone_order_detail($id)
{
    $sql =
        "SELECT * FROM order_details WHERE id=" . $id;
    $order_details = pdo_query_one($sql);
    return $order_details;
}
