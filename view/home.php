<div class="danhmuc">
    <div class="heading">
        <h1>Danh mục</h1>
    </div>
    <div class="menu_dm">
        <ul>
            <?php 
foreach ($dsdm as $dm) {
    extract($dm);
    $linkdm = "index.php?act=sanpham&iddm=".$id;
    echo '<li>
    <a href="'.$linkdm.'">'.$categoryName.'</a>
</li>';
}
            ?>
        </ul>
    </div>
</div>
<!-- categories -->
<section class="categories" id="categories">
    <div class="heading">
        <h1>Top 10 Sản phẩm được yêu thích nhất<br /><span>Teddyshop</span></h1>
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" placeholder="Tên sản phẩm bạn muốn.." />
            <input type="submit" name="timkiem" value="Tìm">
        </form>
    </div>
    <div class="categories-container">
        <?php 
            foreach($dstop10 as $sp){
                extract($sp);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $img = $img_path.$productImage; 
                echo '<div class="box box1">
            <img src=" '.$img.' " alt="" />
            <h2><a href=" '.$linksp.' ">'.$productName.'</a></h2>
            <i class=" fa-solid fa-arrow-right"></i>
        </div>';
        }
        ?>
    </div>
</section>
<div class="sliderImage">
    <div class="images">
        <div class="item" style="--i: 1">
            <img src="https://i.pinimg.com/564x/ae/eb/9a/aeeb9aaf8bfc3984a57ad882d7f7d8c8.jpg" />
        </div>
        <div class="item" style="--i: 2">
            <img src="https://i.pinimg.com/564x/c7/c0/c9/c7c0c91662e5493f309a877743a1abe9.jpg" />
        </div>
        <div class="item" style="--i: 3">
            <img src="https://i.pinimg.com/564x/93/a2/ab/93a2ab6a6f163ed4bd76cdd14323f8bf.jpg" />
        </div>
        <div class="item" style="--i: 4">
            <img src="https://i.pinimg.com/564x/4e/c6/57/4ec65795eadba193a8c4686a8149b716.jpg" />
        </div>
        <div class="item" style="--i: 5">
            <img src="https://i.pinimg.com/564x/28/41/6c/28416c671d8127f9151f718c8859b71a.jpg" />
        </div>
        <div class="item" style="--i: 6">
            <img src="https://i.pinimg.com/564x/78/a8/98/78a898bf598ca2a058a5543bb95701d5.jpg" />
        </div>
    </div>
    <button id="prev">
        << /button>
            <button id="next">></button>
</div>
<!-- product -->
<section class="products" id="products">
    <div class="heading">
        <h1>Tất cả sản phẩm nội bật <br /><span>Teddyshop</span></h1>
        <a href="#" class="btn">Shop now<i class="fa-solid fa-circle-right"></i></a>
    </div>
    <div class="products-container">
        <?php
            foreach ($spnew as $sp) {
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