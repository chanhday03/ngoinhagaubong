<style>
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Pacifico&display=swap");

.cart {
    font-family: Nunito;
    padding: 100px;
    transform: translate(50px, 100px);
}

.cart-top-wrap {
    display: flex;
    justify-content: center;
    align-items: center;
}

.cart-top {
    height: 2px;
    width: 70%;
    background-color: #dddddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 50px 0 100px;
}

.cart-top-item {
    width: 40px;
    height: 40px;
    border-radius: 50px;
    border: 1px solid #dddddd;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fff;
}

.cart-top-item:nth-child(1) {
    border: 1px solid red;
}

.cart-top-item i {
    color: #dddddd;
}

.cart-top-cart {
    border: 1px solid #0db7ea;
}

.cart-top-cart i {
    color: #0db7ea;
}

.cart-content-left {
    flex: 2;
    padding-right: 12px;
}

.cart-content-left table {
    width: 100%;
    text-align: center;
}

.cart-content-left table th {
    padding-bottom: 30px;
    font-family: var(--main-text-font);
    text-transform: uppercase;
    font-size: 16px;
    color: #333;
    border-collapse: collapse;
    border-bottom: 2px solid #dddddd;
}

.cart-content-left table p {
    font-size: 14px;
    font-family: var(--main-text-font);
    color: #333;
}

.cart-content-left table input {
    width: 30px;
}

.cart-content-left table span {
    display: block;
    width: 20px;
    height: 20px;
    border: 1px solid #dddddd;
    cursor: pointer;
}

.cart-content-left table td {
    padding: 20px 0;
    border-bottom: 2px solid #dddddd;
}

.cart-content-left td:first-child img {
    width: 130px;
}

.cart-content-left td:nth-child(2) {
    max-width: 130px;
}

.cart-content-left td:nth-child(3) img {
    max-width: 30px;
}

.cart-content-right {
    flex: 1;
    padding-left: 12px;
    border-left: 2p solid #dddddd;
}

.cart-content-right table {
    width: 100%;
}

.cart-content-right table th {
    padding-bottom: 30px;
    font-family: var(--main-text-font);
    font-size: 18px;
    color: #333;
    border-collapse: collapse;
    border-bottom: 2px solid #dddddd;
}

.cart-content-right table td {
    font-family: var(--main-text-font);
    font-size: 15px;
    color: #333;
    padding: 6px 0;
}

.cart-content-right tr:nth-child(4) td {
    border-bottom: 2px solid #dddddd;
}

.cart-content-right tr td:last-child {
    text-align: right;
}

.cart-content-right-text {
    margin: 20px 0;
    text-align: center;
}

.cart-content-right-text p {
    font-family: var(--main-text-font);
    font-size: 15px;
    color: #333;
}

.cart-content-right-button {
    text-align: center;
    align-items: center;
}

.cart-content-right-button button {
    padding: 0 18px;
    height: 35px;
    cursor: pointer;
}

.cart-content-right-button button:first-child {
    background-color: #fff;
    border: 1px solid black;
    margin-right: 20px;
}

.cart-content-right-button button:first-child:hover {
    background-color: #fff;
}

.cart-content-right-button button:last-child {
    background-color: black;
    color: #fff;
    border: none;
    border: 1px solid black;
}

.cart-content-right-button button:last-child:hover {
    background-color: #dddddd;
    color: black;
}

.cart-content-right-dangnhap {
    margin-top: 20px;
}

.cart-content-right-dangnhap p {
    font-family: var(--main-text-font);
    font-size: 14px;
    color: #333;
    font-weight: bold;
}

.cart img {
    height: 50px;
}

#tongtien {
    color: red;
    font-size: 24px;
    font-weight: bold;
}
.camon {
    width: 1248px;
    gap: 50px;
    margin: 0 auto;
    margin-bottom: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
}

.camon .logo img {
    width: 100%;
    height: 500px;
}

h4 {
    font-weight: bold;
    font-size: 18px;
    color: darkgoldenrod;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}
</style>
<?php
 if(empty($_SESSION["mycart"])){
       echo'<div class="camon">
       <div class="logo">
           <img src="https://i.pinimg.com/564x/33/eb/35/33eb35718e2b37b45c33592f7f484cab.jpg" alt="">
       </div>
       <div class="tittle">
     <h4>Giỏ hàng của bạn đang trống, cần thêm ít nhất một sản phẩm để tiếp tục!</h4>
     <a href="index.php" class="btn"><button>TIẾP TỤC MUA SẮM</button></a>
       </div>
   </div>';                 
 }else{?>
<section class="cart w-full">
    <div class="container">
        <div class="cart-top-wrap">
            <div class="cart-top">
                <div class="cart-top-cart cart-top-item ">
                    <a href="index.php?act=viewcart"><i class="fa-sharp fa-solid fa-cart-shopping "></i></a>
                </div>
                <div class="cart-top-cart cart-top-item">
                    <a href=""><i class="fa-sharp fa-solid fa-location-dot"></i></a>
                </div>
                <div class="cart-top-cart cart-top-item">
                    <a href=""><i class="fa-regular fa-credit-card"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="cart-content row">
            <div class="cart-content-left">
                <table class="table table-hover table-bordered">
                    <thead class="bg-light">
                        <th>Mã sản phẩm</th>
                        <th>Sảm phẩm</th>
                        <th>Tên Sảm phẩm</th>
                        <th>Size</th>
                        <th>SL</th>
                        <th>Giá cả</th>
                        <th>Khuyến mãi</th>
                        <th>Thành tiền</th>

                        <th>Xóa</th>
                    </thead>
                    <?php 
                        // echo "<pre>";
                        // var_dump($_SESSION["mycart"]);
                     
                    
                      
                        $tong = 0;
                        $i=0;
                       
                        foreach($_SESSION["mycart"] as $cart){
                            $id = $cart['id'];
                            $name = $cart['name'];
                            $images = $cart['image'];
                            $size = $cart['size'];
                            $soLuong= $cart['soluong'];
                            $price = $cart['price'];
                            $khuyenmai= $cart['khuyenmai'];
                            $soTien =  ($price -  ($price *($khuyenmai/100)))*$soLuong;
                            $tong+=$soTien;
                            $xoasp = '<a href="index.php?act=deletecart&idcart='.$i.'"> <input type="submit" value="Xóa"></a>';
                            echo '
                            <tr>
                            <td>'.$id.'</td>
                            <td><img src="'.$images.'" alt=""></td>
                            <td>
                                <p>'.$name.'</p>
                            </td>
                           
                            <td>
                                <p>'. $size.'</p>
                            </td>
                            <td><p class="w-12">'. $soLuong.'</p></td>
                            <td>
                                <p>'. $price.' <sup>đ</sup></p>
                            </td>
                            
                            <td>
                                 <p>'. $khuyenmai.'%</p>
                             </td>
                              <td>
                                   <p>'. $soTien .' <sup>đ</sup></p>
                              </td> 
                             
                             
                            <td>'.$xoasp.'</td>
                            </tr>';
                            $i+=1;
                        }
                    
                        echo'
                        <br>
                     
                       
                        <td >Tổng tiền giỏ hàng</td>
                       
                        <td></td>
                        <td></td>
                        <td></td>  
                        <td></td>
                        <td></td>
                        <td></td>
                     
                       <td  id="tongtien">  '.number_format($tong).'<sup>vnđ</sup></td>
                       <td></td>
                        ';
                       
                        // $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

                        // if($pageWasRefreshed ) {
                        // //    unset($_SESSION["mycart"]);
                        // array_splice($_SESSION['mycart'],0,1);
                        // }
                       ?>

                </table>
            </div>
            <div class="cart-content-right">
                <div class="cart-content-right-text">
                    <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 300.000 đ</p>
                    <?php  $e=0;if($tong<300000){
                            $e=300000-$tong;
                            echo'<p style="color: red; font-weight: bold;">Mua thêm <span
                            style="font-size: 18px;">'.number_format($e).' VNĐ</span> để được miễn phí SHIP</p>';
                    }else{
                        echo '<p style="color: red; font-weight: bold;">Tổng tiền đã vượt qua 300000 VNĐ nên bạn sẽ đc miễn phí Ship </p>';
                    }
                      ?>

                </div>
                <div class="cart-content-right-button">
                    <a href="index.php"><button>TIẾP TỤC MUA SẮM</button></a>
                    <?php if(isset($user["id"])){
                         echo '  <a href="index.php?act=bill "><button>VẬN CHUYỂN</button></a>';
                          }else{
                            echo ' <a href="index.php?act=dangnhap"><button>Vui lòng <span class="text-[aqua] font-black">Đăng Nhập</span> để tiếp tục</button></a>';
                           }?>

                </div>
                <div class="cart-content-right-dangnhap">
                    <p>Tài khoản TeddyShop</p> <br>
                    <p>Hãy <a href="">Đăng nhập</a> tài khoản tích điểm thành viên</p>
                </div>

            </div>
        </div>
    </div>
</section>
<?php
}?>