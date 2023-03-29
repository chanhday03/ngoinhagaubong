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
    <section class="products" id="products">
        <div class="heading">
            <h1>Sản phẩm theo danh mục <strong style="color : red ">
                    <?= $tendm ?></strong><br /><span>Teddyshop</span></h1>
        </div>
        <div class=" products-container">
            <?php
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $hinh = $img_path.$productImage;
                    echo '<div class="box">
                    <img src="'.$hinh.'"
                        alt="">
                    <h2 class="name"><a href="'.$linksp.'">Name : '.$productName.'</a></h2>
                    <h3 class="price"> Price : 
                    '.$productPrice.'  <ins>đ</ins> <span class="size">/ Size :  '.$productSize.' cm</span>
                    </h3>
                    <i class="fa-solid fa-cart-shopping"></i>
                    <i class="fa-solid fa-heart"></i>
                    <span class="discount">- '.$productPromotion.'%</span>
                </div>';
                }
                ?>
        </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="./assets/js/main.js"></script>

</html>