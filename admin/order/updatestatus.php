<?php
if(isset($_POST["capNhatTrangThaiDonHang"]))
{
    $code_cart = $_POST["code_cart"];
    $cart_status = $_POST["cart_status"];
    update_Cart_Status($cart_status,$code_cart);
   
    
}?>