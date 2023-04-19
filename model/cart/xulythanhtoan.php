<?php echo "Xử lý thanh toán";
require "mail/sendmail.php";
$id_user = $user["id"];
$code_cart = rand(0, 9999);
$cart_payment = $_POST['payment'];
$id_shipping = $_POST['id_shipping'];
$tongTien = $_POST['tongTien'];
$email = $_POST['email'];
$cart_status = 0;
var_dump($_POST);
// config mail
$id_user = $user["id"];
$customerName = $user["fname"];
$customerEmail = $user['email'];
$address = $user['adress'];
$phone = $user['phone'];
$id_shipping = $_POST["id_shipping"];
$sql_get_vanchuyen =  loadone_shipping($id_user, $id_shipping);
// giao diện gửi mail 
$info = "<div style='background-color:#ffffff'><div style='background-color:#ffffff;color:#000000'>
<div style='margin:0px auto;width:600px'>
	<div style='padding:30px 20px'>
		<table align='center' bgcolor='#dcf0f8' border='0' cellpadding='0' cellspacing='0' style='margin:0;padding:0;background-color:#ffffff;width:100%!important;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px' width='100%'>'
			<tbody>
			<tr>
			<td>
			<h1 style='font-size:17px;font-weight:bold;color:#444;padding:0 0 5px 0;margin:0'>Cảm ơn quý khách <b style='color:red;'>$customerName</b> đã đặt hàng tại ChanhDay,</h1>
						<p style='margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;'>ChanhDay
						   rất vui thông báo đơn hàng <b style='text-transform: uppercase;'>11111</b>  của quý khách đã được tiếp nhận và đang trong quá trình xử lý. ChanhDay sẽ thông báo đến quý khách ngay khi hàng chuẩn bị được giao.</p>
					</td>
				</tr>
				<tr>
					<td style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px'>
						<table border='0' cellpadding='0' cellspacing='0' width='100%'>'
							<thead>
								<tr>
									<th align='left' style='padding:6px
										9px 0px
										9px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;font-weight:bold' width='50%'>Thông tin thanh toán</th>
									<th align='left' style='padding:6px
										9px 0px
										9px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;font-weight:bold;' width='50%'> Địa chỉ giao hàng
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style='padding:3px 9px 9px
										9px;border-top:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal' valign='top'><span style='text-transform:capitalize'>
										   $customerName</span><br>
										<a href='mailto:phancuong.qt@gmail.com' target='blank'>$customerEmail</a><br>
										$phone
									</td>
									<td style='padding:3px 9px 9px
										9px;border-top:0;border-left:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal' valign='top><span style='text-transform:capitalize'>Lê Trang</span><br>
										<a href='mailto:phancuong.qt@gmail.com' target='_blank'>$customerEmail</a><br>
									   $address<br>
										SĐT: $phone
									</td>
								</tr>
								<tr>
									<td colspan='2' style='padding:7px
										9px 0px
										9px;border-top:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444' valign='top'>
										<p style='font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal'><strong>Phương
												thức thanh toán:
											</strong> Thanh toán tiền
											mặt khi nhận hàng<br>
											<strong>Thời gian giao hàng
												dự kiến:</strong> Dự
											kiến giao hàng 3 ngày - không giao ngày Chủ
											Nhật <br>
											<strong>Phí vận chuyển:
											</strong> 0đ<br>
										</p>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				<tr>
					<td>&nbsp;
						<p>Một lần nữa ChanhDay cảm ơn quý khách.</p>
					</td>
				</tr>
		   </tbody
		'</table></div></div></div></div>";
// var_dump($_SESSION['mycart'] );
if ($cart_payment == 'transfer' || $cart_payment == 'cash') {
	//insert vào đơn hàng
	$id_cart = insert_cart($id_user, $code_cart, $cart_status, $cart_payment, $id_shipping);
	foreach ($_SESSION['mycart'] as $value) {
		$id_product = $value['id'];
		$soluongmua = $value['soluong'];
		insert_order_details($id_cart, $code_cart, $id_product, $id_user, $soluongmua);
	}
	$title = "[ChanhDay] Thông Tin Đơn Hàng Của Bạn !";
	$content = $info;
	$mailcustomer =$sql_get_vanchuyen['email'];;
	$mail = new Mailer();
	$mail->order($title, $content, $mailcustomer);
}
header('Location:index.php?act=');