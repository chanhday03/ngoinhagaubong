<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <title>Gio hang</title>
    <script
    src="https://kit.fontawesome.com/62fe7548c5.js"
    crossorigin="anonymous"
  ></script>
</head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Pacifico&display=swap");
    .cart{
    font-family: Nunito;
    padding: 100px ;
    transform:translate(0,100px);
}
.cart-top-wrap{
    display: flex;
    justify-content: center;
    align-items: center;
}
.cart-top{
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
.cart img{
    height:50px;
}
#tongtien{
    color:red;
    font-size:24px;
    font-weight: bold;
}
</style>

<body>
    <section class="cart">
        <div class="container">
            <div class="cart-top-wrap">
                <div class="cart-top">
                    <div class="cart-top-cart cart-top-item">
                        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="cart-top-cart cart-top-item">
                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                    </div>
                    <div class="cart-top-cart cart-top-item">
                        <i class="fa-regular fa-credit-card"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cart-content row">
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Sảm phẩm</th>
                            <th>Tên Sảm phẩm</th>
                            <th>Size</th>
                            <th>SL</th>
                            <th>Giá cả</th>
                            <th>Khuyến mãi</th>
                            <th>Thành tiền</th>
                          
                            <th>Xóa</th>
                        </tr>
                        <?php 
                        // echo "<pre>";
                        // var_dump($_SESSION["mycart"]);
                        // session_destroy();
                    
                        ?>
                       <?php
                        $tong = 0;
                        $i=0;
                        foreach($_SESSION["mycart"] as $cart){
                            $id = $cart[0];
                            $name = $cart[1];
                            $images = $cart[2];
                            $size = $cart[3];
                            $soLuong= $cart[4];
                            $price = $cart[5];
                            $khuyenmai= $cart[6];
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
                            <td><input type="number" value="'.$soLuong.'" min="1"></td>
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
                        }
                        $i+=1;
                        echo'
                        <br>
                     
                       
                        <td >Tổng tiền giỏ hàng</td>
                       
                        <td></td>
                        <td></td>
                        <td></td>  
                        <td></td>
                        <td></td>
                        <td></td>
                       <td  id="tongtien">  '.$tong.'<sup>vnđ</sup></td>
                       
                        ';?> 
                           
                    </table>
                </div>
                <div class="cart-content-right">
                    <div class="cart-content-right-text">
                        <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 300.000 đ</p>
                        <p style="color: red; font-weight: bold;">Mua thêm <span
                                style="font-size: 18px;">131.000đ</span> để được miễn phí SHIP</p>
                    </div>
                    <div class="cart-content-right-button">
                        <a href="index.php"><button>TIẾP TỤC MUA SẮM</button></a>
                        <a href="index.php?act=bill
                        "><button>THANH TOÁN</button></a>
                    </div>
                    <div class="cart-content-right-dangnhap">
                        <p>Tài khoản TeddyShop</p> <br>
                        <p>Hãy <a href="">Đăng nhập</a>  tài khoản tích điểm thành viên</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</body>

</html>