<?php
include '../pdo.php';
function insert_bill($user_id,$fullname,$email,$phone,$address,$note,$status,$total_money){
    $sql = 
   "INSERT INTO `dathang`( `user_id`, `fullname`, `email`, `phone`, `address`, `note`, `status`, `total_money`)
                  VALUES ('$user_id','$fullname','$email','$phone','$address','$note','$status','$total_money')";
   pdo_execute_return_lastInsertId($sql);
}
function insert_order_detail($user_id,$order_id,$product_id,$images,$price,$num,$total_money){
    $sql = 
   "INSERT INTO `order_details`( `user_id`, `order_id`, `product_id`, `images`, `price`, `num`, `total_money`) VALUES
                               ('$user_id','$order_id','$product_id','$images','$price','$num','$total_money')";
   pdo_execute($sql);
}
function loadone_order_detail($id){ $sql =
    "SELECT * FROM order_details WHERE id=".$id;
     $order_details = pdo_query_one($sql);
     return $order_details; }
?>