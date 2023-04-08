<?php
  if(isset($user ['id'])){
  ?>
<!-- Responsive Arrow Progress Bar -->
<div class="cart-top-wrap">
    <div class="cart-top">
        <div class="cart-top-cart cart-top-item">
            <a href="index.php?act=viewcart"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
        </div>
        <div class="cart-top-cart cart-top-item border-[red]">
            <a href="index.php?act=bill"><i class="fa-sharp fa-solid fa-location-dot"></i></a>
        </div>
        <div class="cart-top-cart cart-top-item">
            <a href=""><i class="fa-regular fa-credit-card"></i></a>
        </div>
    </div>
</div>
<?php
  } 
  ?>
<div class="flex w-full justify-center ">
    <div class="container grid grid-cols-2 gap-4">

        <?php
        if(isset($user)){
        $id = $user['id'];
        $name = $user['fname'];
        $email = $user['email'];
        $adress = $user['adress'];
        $phone = $user['phone'];
       }else{
        $id="";
        $name = "";
        $email="";
        $adress ="";
        $phone ="";
       }
       ?>
       
       <form action=" index.php?act=themvanchuyen" autocomplete="off" method="post">
            <h4 class="text-[red]">Thông tin vận chuyển</h4>
            <?php
                 if(isset($id)&&$id!=""){
                    echo '<div class="form-group">
                    <label>Mã Khách Hàng </label>
                    <input type="text" class="form-control border border" name="fname" required value="'.$id .'">
                    </div>';
                 }?>

            <div class="form-group">
                <label>Họ tên <code>*</code></label>
                <input type="text" class="form-control border border" name="fname" required="" value="<?=$name?>">
            </div>
            <div class="form-group">
                <label>Điện thoại <code>*</code></label>
                <input type="text" class="form-control border" name="phone" required="" value="<?=$phone?>">
            </div>
            <div class="form-group mt-2">
                <label>Địa chỉ <code>*</code></label>
                <input type="text" class="form-control border" name="adress" required="" value="<?=$adress?>">
            </div>
            <div class="form-group mt-2">
                <label>Email <code>*</code></label>
                <input type="text" class="form-control border" name="email" required="" value="<?=$email ?>">
            </div>
            <div class="form-group mt-2">
                <label>Ghi Chú </label>
                <input type="text" class="form-control border" name="note">
            </div>
            <!-- <input type="hidden" class="form-control border" name="tongtien" value="<?=$tong?>" >  -->
            <div class="form-group back-to-order row mt-2">
                <a href="index.php?act=viewcart" class="text-decoration-none
                                        col-md-6" style="color: orange;">
                    << Quay lại giỏ hàng</a>
                        <button type="submit" class="btn-light
                                        col-md-6 border font-weight-bold" name="themvanchuyen" value="themvanchuyen"
                            onclick="vanchuyen()"> THÊM VẬN CHUYỂN</button>
            </div>
            <script>
            function vanchuyen() {
                alert("Cập nhật vận chuyển thành công");
            }
            </script>;
        </form>

        <div class="row">

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
                   
                    $gia=($cart[5]-($cart[5]*($cart[6]/100)))*$cart[4];
                    $tong+=$gia;
                   ;
                     echo '
                     <tr>
                       <td ><img class="h-[50px]" src="'.$cart[2].'" alt="Lỗi ảnh"></td>
                       <td>'.$cart[1].'</td>
                       <td>'.$cart[6].'%</td>
                       <td>'.$cart[4].'</td>
                       <td>
                        <p>'.$cart[5].'<sup>đ</sup></p>
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
            <a href="index.php?act=hinhthucthanhtoan">Hình thức thanh toán</a>
        </div>

    </div>
</div>