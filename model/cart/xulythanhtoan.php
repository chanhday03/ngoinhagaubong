<?php echo"Xử lý thanh toán";
// echo '<pre>';
// var_dump($_POST);
// die;
    $id_user = $user["id"];
	$code_cart = rand(0,9999);
	$cart_payment = $_POST['payment'];
	$id_shipping = $_POST['id_shipping'];
	$tongTien = $_POST['tongTien'];
	$cart_status=0;
	// var_dump($_SESSION['mycart'] );
		


	if($cart_payment == 'transfer' || $cart_payment == 'cash'){
	//insert vào đơn hàng
	 $id_cart=insert_cart($id_user,$code_cart,$cart_status,$cart_payment,$id_shipping);
		foreach($_SESSION['mycart'] as $value){
			    $id_product = $value['id'];
				$soluongmua = $value['soluong'];
				insert_order_details($id_cart,$code_cart,$id_product,$id_user,$soluongmua);
		}
		}
		header('Location:index.php?act=camon');
?>