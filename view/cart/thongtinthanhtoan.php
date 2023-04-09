<div class="">
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
    <style>
    .k1 {
        display: grid;
        grid-template-columns: 70% 1fr;
        grid-gap: 30px;
    }
    </style>
    <div class="thongtinthanhtoan ">

        <div class="row k1 pl-8">
            <div class="col-md-8 pl-4">

                <?php
 	            $id_user = $user["id"];
	            $id_shipping=$_POST["id_shipping"];
 	            $sql_get_vanchuyen =  loadone_shipping($id_user,$id_shipping);
	            $sql = "SELECT COUNT(id_shipping) as count FROM `tbl_shipping` WHERE id_user='$id_user'";
	            $count= pdo_query($sql);
             	if($count>0){
 		
 	          	$name = $sql_get_vanchuyen['fname'];
 	          	$phone = $sql_get_vanchuyen['phone'];
 		        $address = $sql_get_vanchuyen['addres'];
 		        $note = $sql_get_vanchuyen['note'];
		        $email = $sql_get_vanchuyen['email'];
 	            }else{

 	           	$name = '';
 	           	$phone = '';
 	          	$address = '';
 	         	$note = '';
		        $email  = '';
                	}
	
 	                 ?>
                <h4>Thông tin vận chuyển và giỏ hàng</h4>
                <ul>
                    <?php if(isset( $user["id"])){
				        echo'<li>Mã khách hàng : <b>'. $id_user.'</b></li>';
		            	}else{
			         	echo "";
		            	}?>
                    <li>Họ và tên vận chuyển : <b><?php echo $name ?></b></li>
                    <li>Số điện thoại : <b><?php echo $phone ?></b></li>
                    <li>Email : <b><?php echo $email ?></b></li>
                    <li>Địa chỉ : <b><?php echo $address ?></b></li>
                    <li>Ghi chú : <b><?php echo $note ?></b></li>
                </ul>

                <h5 class="text-[red]">Giỏ hàng của bạn</h5>
                <table class="table table-hover table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giảm giá</th>
                        <th>Số lượng</th>
                        <th>Giá</th>

                        <th>Thành tiền</th>


                    </tr>

                </thead>
                <tbody>
                    <?php 
                // echo '<pre>';
                // var_dump($_SESSION['mycart']);
                $tong=0;
                $gia=0;
               
                foreach($_SESSION['mycart'] as $cart){
                   
                    $gia=($cart['price']-($cart['price']*($cart['khuyenmai']/100)))*$cart['soluong'];
                    $tong+=$gia;
                   ;
                     echo '
                     <tr>
                       <td ><img class="h-[50px]" src="'.$cart['image'].'" alt="Lỗi ảnh"></td>
                       <td>'.$cart['name'].'</td>
                       <td>'.$cart['khuyenmai'].'%</td>
                       <td>'.$cart['soluong'].'</td>
                       <td>
                        <p>'.$cart['price'].'<sup>đ</sup></p>
                      </td>
                     
                      <td>
                      
                      <p>'. $gia.'<sup>đ</sup></p>
                       </td>
                      
                      </tr>';
                }
              
                if($tong<300000){
                    $ship=30000;
                    $tongTien=$tong+$ship;}
                else{
                    $tongTien=$tong;
                    $ship=0; 
                }
                echo '
                <th>Tổng Tiền </span></th>
                <td><span class="text-[red]">(Đã tính cả phí ship '.$ship.' VNĐ)</td>
                <td></td>
                <td></td>
                <td></td>
              
                 <td>
                 <p class="text-[red]">'.$tongTien.'<sup>đ</sup></p>
                 </td>
                ';?>

                </tbody>
            </table>

            </div>
            <div class="col-md-4 hinhthucthanhtoan">
            <form action="index.php?act=xulythanhtoan" method="post">
                <h4>Phương thức thanh toán</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="cash"
                        checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Tiền mặt
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios2"
                        value="transfer">
                    <label class="form-check-label" for="exampleRadios2">
                        Chuyển khoản
                    </label>
                </div>
                <input type="hidden" name="tongTien" value="<?=$tongTien?>">
                    <input type="hidden" name="id_shipping" value="<?=$id_shipping?>">
                    <button type="submit" name="xulythanhtoan" value="xulythanhtoan"
                        class="btn border-[red] border btn-danger"> <i class="fa-solid fa-cart-shopping"></i></button>



                </form>
            </div>
        </div>