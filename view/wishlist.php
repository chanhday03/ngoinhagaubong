<style>
/* .danhmuc {
        max-width: 1248px;
        transform: translate(50px, 300px);

    } */
    .fa-heart{
        color:red !important;
    }
</style>
<link rel="stylesheet" href="layout/assets/style.css" />
<!-- categories -->
<!-- product -->
<section class="products" id="products">
    <div class="heading">
        <h1>Tất cả sản phẩm yêu thích <br /><span>Teddyshop</span></h1>
        <a href="#" class="btn">Shop now<i class="fa-solid fa-circle-right"></i></a>
    </div>
    <div class="products-container">
        <?php
        // echo '<pre>';
        // print_r($wishlist);
        // echo '</pre>';
        // die();
        foreach ($wishlist as $sp) {
            extract($sp);
            $hinh = $img_path . $productImage;
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            echo '<div class="box">
                <img src="' . $hinh . '"
                    alt="">
                <h2 class="name"><a href="' . $linksp . '">Name : ' . $productName . '</a></h2>
                <h3 class="price"> Price : 
                ' . $productPrice . '  <ins>đ</ins> <span class="size">/ Size :  ' . $productSize . '</span>
                </h3>
                <span class="discount">- ' . $productPromotion . '%</span>
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $productName . '">
                <input type="hidden" name="price" value="' . $productPrice . '">
                <input type="hidden" name="images" value="' . $hinh . '">
                <input type="hidden" name="size" value="' . $productSize . '">
                <input type="hidden" name="khuyenmai" value="' . $productPromotion . '">
                <button type="submit" name="btn_addtocart" value="btn_addtocart">   <i class="fa-solid fa-cart-shopping"></i></button>
                 </form>
                 <a href="?act=deletewishlist&id='.$id.'"> <i class="fa-solid fa-heart"></i> </a>
            </div>';
        }
        ?>
    </div>
    <!-- index.php?act=addtocart -->
    </div>
</section>