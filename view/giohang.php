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
                            <th>Sảm phẩm</th>
                            <th>Tên Sảm phẩm</th>
                            <!-- <th>Màu</th> -->
                            <th>Đơn giá</th>
                            <th>Size</th>
                            <th>SL</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr><?php $d= 0; $Tong=0;$tsp = 0 ?>
                        <?php foreach($_SESSION["addtocart"] as $cart):?>
                            <tr>
                            <td>
                                <img src="<?php echo $cart[1]?>" alt="">
                            </td>
                            <td>
                                <p><?php echo $cart[0]?></p>
                            </td>
                            <!-- <td><img src="" alt=""></td> -->
                            <td>
                                <p<><?php echo $cart[3]?><sup>đ</sup></p>
                            </td>
                            <td><p><?php echo $cart[2]?> cm</p></td>
                            <td><P><?php echo $cart[4];$tsp +=$cart[4]; ?></P></td>
                            <td>
                            <p<><?php echo $cart[3]*$cart[4];$Tong = $Tong+($cart[3]*$cart[4]) ?><sup>đ</sup></p>
                            </td>
                            <td><a href="./index.php?act=delcart&idcart=<?php echo $d;$d++?>"><input type="Button" value="X"></a></td>
                        </tr>
                        <?php endforeach ?> 
                    </table>
                </div>
                <div class="cart-content-right">
                    <table>
                        <tr>
                            <th colspan="2">Tổng tiền giỏ hàng</th>
                        </tr>
                        <tr>
                            <td>TỔNG SẢN PHẨM</td>
                            <td><?php echo $tsp?></td>
                        </tr>
                        <tr>
                            <td>TỔNG TIỀN HÀNG</td>
                            <td>
                                <p><?php echo $Tong?><sup>đ</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td>TẠM TÍNH</td>
                            <td style=" font-weight: bold;"><?php echo $Tong?> <sup>đ</sup></td>
                        </tr>
                    </table>
                    <!-- <div class="cart-content-right-text">
                        <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 300.000 đ</p>
                        <p style="color: red; font-weight: bold;">Mua thêm <span
                                style="font-size: 18px;">131.000đ</span> để được miễn phí SHIP</p>
                    </div> -->
                    <div class="cart-content-right-button">
                        <a href="?act=home"><button>TIẾP TỤC MUA SẮM</button></a>
                        <button>THANH TOÁN</button>
                    </div>
                    <div class="cart-content-right-dangnhap">
                        <p>Tài khoản TeddyShop</p> <br>
                        <p>Hãy <a href="" style="color:red;" >Đăng nhập</a>  tài khoản tích điểm thành viên</p>
                    </div>
                </div>
            </div>
        </div>
    </section>