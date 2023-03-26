<section class="products" id="products">
    <div class="heading">
        <h1>Tất cả sản phẩm nội bật <br /><span>Teddyshop</span></h1>
        <a href="#" class="btn">Shop now<i class="fa-solid fa-circle-right"></i></a>
    </div>
    <div class="products-container">
        <?php
            foreach ($dssp as $sp) {
                extract($sp);
                $linksp="index.php?act=product&category_id=".$id;
                $hinh = $img_path.$productImage;
                echo '<div class="box">
                <img src="'.$hinh.'"
                    alt="">
                <h2 class="name"><a href="">Name : '.$productName.'</a></h2>
                <h3 class="price"> Price : 
                '.$productPrice.'  <ins>đ</ins> <span class="size">/ Size :  '.$productSize.' cm</span>
                </h3>
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-heart"></i>
                <span class="discount"> '.$productPromotion.'%</span>
            </div>';
            }
            ?>
    </div>
    </div>
</section>
