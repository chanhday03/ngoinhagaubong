<?php
 

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
    
    include '../../model/user.php';
    
    $user = getUserById($_SESSION['id'], $conn);
    
    }
    ?>
   <style>
    section{
        transform:translate(0;100px);
    }
   </style> 
<section  class="delivery pt-36  mb-[350px] grid grid-cols-2">
    <div class="container">
        <div class="form-infor row ">
            <?php
            // var_dump($user);
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
                   
                    $gia=$cart[5]-($cart[5]*($cart[6]/100));
                    $tong+=$gia;
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
                echo '
                <th>Tổng Tiền</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                 <td>
                 <p class="text-[red]">'.$tong.'<sup>đ</sup></p>
                 </td>
                ';?>
            
            </tbody>
        </table>
            <!-- index.php?billconfirm -->
           

        </div>
    </div>
 <div class="delivery-content-right col-md-6 offset-1">
 <form action="model/cart/bill.php" method="post">
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
                        <input type="text" class="form-control border" name="note" >
                    </div>   
                    <input type="hidden" class="form-control border" name="tongtien" value="<?=$tong?>" > 
                <div class="form-group back-to-order row mt-2">
                    <a href="../../index.php?act=viewcart" class="text-decoration-none
                                        col-md-6" style="color: orange;">
                        << Quay lại giỏ hàng</a>
                            <button type="submit" class="btn-light
                                        col-md-6 border font-weight-bold" name="btn_hoaDon" value="btn_hoaDon">THANH
                                TOÁN VÀ GIAO HÀNG</button>
                </div>
            </form>

    </div>
    </div>
    </div>
</section>
