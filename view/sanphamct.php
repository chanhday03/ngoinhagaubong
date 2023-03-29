<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="./assets/style.css" />
    <script src="https://kit.fontawesome.com/62fe7548c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<style>
    img {
        max-width: 100%;
    }
</style>

<body>
    <section class="prodetails" id="prodetails">
        <div class="single-pro-image">
            <?php
            extract($onesp);
            $img = $img_path . $productImage;
            echo ' <img src="' . $img . '" alt=""
                        width="100%" class="MainImg">';
            ?>
            <div class="small-img-group">
                <div class="small-img-col">
                    <?php
                    extract($onesp);
                    $img = $img_path . $productImage;
                    echo ' <img src="' . $img . '" alt=""
                        width="100%" class="small-img">';
                    ?>
                </div>
                <div class="small-img-col">
                    <?php
                    extract($onesp);
                    $img = $img_path . $productImage;
                    echo ' <img src="' . $img . '" alt=""
                        width="100%" class="small-img">';
                    ?>
                </div>
                <div class="small-img-col">
                    <?php
                    extract($onesp);
                    $img = $img_path . $productImage;
                    echo ' <img src="' . $img . '" alt=""
                        width="100%" class="small-img">';
                    ?>
                </div>
                <div class="small-img-col">
                    <?php
                    extract($onesp);
                    $img = $img_path . $productImage;
                    echo ' <img src="' . $img . '" alt=""
                        width="100%" class="small-img">';
                    ?>
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <?php
            extract($onesp);
            $img = $img_path . $productImage;
            echo '<h3>Home / <p>' . $productName . '</p> </h3>
          <h4 class="name">' . $productName . '</h4>
          <h2 class="price"> Price : 
                ' . $productPrice . '  <ins>đ</ins> <span class="size">/ Size :  ' . $productSize . ' cm</span>
          </h2>
          <form action="index.php?act=addtocart" method="POST">
              <input type="text" name="product_name" value="' . $productName . '" hidden>
              <input type="text" name="product_image" value="' . $img . '" hidden>
              <input type="text" name="product_size" value="' . $productSize . '" hidden>
              <input type="number" name="product_price" value="' . $productPrice . '" hidden>
              Số lượng :
              <input type="number" min="0" name="product_quantity"> <br>
              <button class="btn">Add to cart</button>
            </form>
          <div class="desc"> 
          <h2>//Miêu tả</h2>
          <p>' . $productDesc . '</p>
        </div> <div class="intro">             
        <ul>
         <h3> Điểm nổi bật :</h3>
         <li>- Mặt hàng đa dạng: túi xách, gấu bông, đồng hồ, móc khóa, đồ trang trí…</li>
         <li>- Không gian tràn ngập sắc màu với lối thiết kế vô cùng bắt mắt và đáng yêu.</li>
         <li> - Nhân viên bán hàng thân thiện, nhiệt tình, sẵn sàng tư vấn để khách hàng lựa chọn được được món quà ưng ý nhất.</li>
         <li> - Voucher áp dụng cho sản phẩm thú nhồi bông với mẫu mã, màu sắc, kích cỡ đa dạng.</li>
         <li> - Thích hợp làm quà tặng nhân dịp 8/3.</li>
        </ul>
        
        <ul>
         <h3>Điều kiện sử dụng :</h3>
         <li>- Hotdeal giao voucher đến tận tay khách hàng: miễn phí.…</li>
         <li>- Thời hạn sử dụng voucher: 04/05/2023.</li>
         <li>- Địa điểm sử dụng voucher: Shop Teddy - So1 , Trinh Van Bo. - ĐT: 08.38204120</li>
         <li>- Áp dụng cho các sản phẩm thú nhồi bông.</li>
         <li> - Áp dụng vào tất cả các ngày trong tuần.</li>
         <li> - Mở cửa: 9h -20h </li>
        </ul>
       </div>
        ';
            ?>
    </section>
    <section class="comment">
        <div class="heading">
            <h1>Bình luận sản phẩm<br /><span>comment products</span></h1>
        </div>
        <div class="form-commnet">
            <form action="index.php?act=addcomment&idsp=<?php echo $_GET["idsp"]?>" method="POST">
                <input type="hidden" name="product_id" value="<?php echo $_GET['idsp'] ?>">
                <input type="text" name="description" required >
                <input type="submit" name="guibinhluan" value="Gửi bình luận" class="btn1">
            </form>
            <section class="main">
                <section class="attendance">
                    <div class="attendance-list">
                        <h1>List comment</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th>Name User</th>
                                    <th>Comment Content</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($cmsp as $cmsp):?>
                                <tr>
                                    <td><?php
                                    extract($cmsp);
                                    $idus= $user_id; 
                                    $usnoe = loadone_user($idus);
                                    extract($usnoe); echo $fname?></td>
                                    <td><?php extract($cmsp); echo $description?></td>
                                    <td><?php extract($cmsp); echo $time?></td>
                                    <?php extract($onesp);extract($cmsp); if($_SESSION["id"] == $idus){
                                        echo '<td><a href="index.php?act=delcomment&idsp='.$_GET["idsp"].'&idcm='.$id.'"><button>Delete</button></a></td>';
                                    }
                                    ?>
                                    
                                </tr>
                                <?php endforeach?>
                                
                                <!-- <tr class="active">
                                    <td>02</td>
                                    <td>Balbina Kherr</td>
                                    <td>san pham xau qua</td>
                                    <td>03-24-22</td>
                                    <td><button>Delete</button></td>
                                    <td><button>Edit</button></td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </section>
            </section>
        </div>
    </section>

    <section class="products" id="products">
        <div class="heading">
            <h1>Sản phẩm cùng loại<br /><span>same products</span></h1>
        </div>
        <div class="products-container">
            <div class="box">
                <img src="./assets/images/products_thobong.jpg" alt="" />
                <h2 class="name"><a href="">THỎ BÔNG ĐEO SAO</a></h2>
                <h3 class="price">
                    199.000 <ins>đ</ins><span class="size">/ 48cm</span>
                </h3>
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-heart"></i>
                <span class="discount">-5%</span>
            </div>
            <div class="box">
                <img src="./assets/images/products_kylan.jpg" alt="" />
                <h2 class="name"><a href="">KÌ LÂN BÔNG NGỒI ÔM CẦU VỒNG</a></h2>
                <h3 class="price">
                    199.000 <ins>đ</ins><span class="size">/ 50cm</span>
                </h3>
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-heart"></i>
                <span class="discount">-5%</span>
            </div>
            <div class="box">
                <img src="./assets/images/products_heobong.jpg" alt="" />
                <h2 class="name"><a href="">HEO BÔNG NẰM BỜM THÚ</a></h2>
                <h3 class="price">
                    199.000 <ins>đ</ins><span class="size">/ 48cm</span>
                </h3>
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-heart"></i>
                <span class="discount">-5%</span>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="./assets/js/main.js"></script>
<script>
    // javascipit phan ảnh
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");
    smallimg[0].onclick = function() {
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function() {
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function() {
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function() {
        MainImg.src = smallimg[3].src;
    }
</script>

</html>