
<?php
  if(isset($user ['id'])){
  ?>
<!-- Responsive Arrow Progress Bar -->
<div class="cart-top-wrap">
    <div class="cart-top">
        <div class="cart-top-cart cart-top-item">
            <a href="index.php?act=viewcart"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="cart-top-cart cart-top-item">
            <a href="index.php?act=bill"><i class="fa-sharp fa-solid fa-location-dot"></i></a>
        </div>
        <div class="cart-top-cart cart-top-item border-[red]">
            <a href="index.php?act=hinhthucthanhtoan"><i class="fa-regular fa-credit-card"></i></a>
        </div>
    </div>
</div>
<?php
  } 
  ?>
<div class="container">
  	<form action="pages/main/xulythanhtoan.php" method="POST">
	<div class="row">
  
  
 		
  	<div class="col-md-8">
  		<h4>Thông tin vận chuyển và giỏ hàng</h4>
  		<ul>
  			<li>Họ và tên vận chuyển : <b></b></li>
  			<li>Số điện thoại : <b></b></li>
  			<li>Địa chỉ : <b></b></li>
  			<li>Ghi chú : <b></b></li>
  		</ul>
  		<h5>Giỏ hàng của bạn</h5>
  		<table style="width:100%;text-align: center;border-collapse: collapse;" border="1">
		  <tr>
		    <th>Id</th>
		    <th>Mã sp</th>
		    <th>Tên sản phẩm</th>
		    <th>Hình ảnh</th>
		    <th>Số lượng</th>
		    <th>Giá sản phẩm</th>
		    <th>Thành tiền</th>
		 
		   
		  </tr>
		  <?php
		  if(isset($_SESSION['my_cart'])){
		var_dump($_SESSION['my_cart']);
		  	$i = 0;
		  	$tongtien = 0;
		  	foreach($_SESSION['cart'] as $cart_item){
		  		$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
		  		$tongtien+=$thanhtien;
		  		$i++;
		  ?>
		  <tr>
		    <td><?php echo $i; ?></td>
		    <td><?php echo $cart_item['masp']; ?></td>
		    <td><?php echo $cart_item['tensanpham']; ?></td>
		    <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
		    <td>
		    	<a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
		    	<?php echo $cart_item['soluong']; ?>
		    	<a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>

		    </td>
		    <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ'; ?></td>
		    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
		   
		  </tr>
		  <?php
		  	}
		  ?>
		   <tr>
		    <td colspan="8">
		    	<p style="float: left;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p><br/>
		    
		      <div style="clear: both;"></div>
		    
		      
		     


		    </td>

		   
		  </tr>
		  <?php	
		  }else{ 
		  ?>
		   <tr>
		    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
		   
		  </tr>
		  <?php
		  } 
		  ?>
		 
		</table>
  	</div>
  	<style type="text/css">
  		.col-md-4.hinhthucthanhtoan .form-check {
		    margin: 11px;
		}
  	</style>

  	<div class="col-md-4 hinhthucthanhtoan">
  		<h4>Phương thức thanh toán</h4>
  		<div class="form-check">
		  <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="tienmat" checked>
		  <label class="form-check-label" for="exampleRadios1">
		    Tiền mặt
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="chuyenkhoan">
		  <label class="form-check-label" for="exampleRadios2">
		    Chuyển khoản
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="payment" id="exampleRadios4" value="vnpay">
		  <img src="images/vnpay.png" height="20" width="64">
		  <label class="form-check-label" for="exampleRadios4">
		    Vnpay
		  </label>
		</div>
		<input type="submit" value="Thanh toán ngay" name="redirect" class="btn btn-danger">
		
		</form>

		<p></p>
	
		<?php
		$tongtien = 0;
		foreach($_SESSION['cart'] as $key => $value){
			$thanhtien = $value['soluong']*$value['giasp'];
  			$tongtien+=$thanhtien;

		} 
		$tongtien_vnd = $tongtien;
		$tongtien_usd = round($tongtien/22667);
		?>
		<input type="hidden" name="" value="<?php echo $tongtien_usd ?>" id="tongtien">
		<div id="paypal-button"></div>

		<form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="pages/main/xulythanhtoanmomo.php">
            <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">              	
			<input type="submit" name="momo" value="Thanh toán MOMO QRcode" class="btn btn-danger">

		</form>

		<p></p>
		
		<form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="pages/main/xulythanhtoanmomo_atm.php">
		<input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">        
		<input type="submit" name="momo" value="Thanh toán MOMO ATM" class="btn btn-danger">

		</form>
		<p></p>
		<form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="pages/main/onepay.php">
		<input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">        
		<input type="submit" name="momo" value="Thanh toán ONEPAY" class="btn btn-danger">

		</form>

		 </div>
		 	
		 </div>

		  
	

		</div>