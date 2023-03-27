    <div class="danhmuc">
        <div class="heading">
            <h1>Danh mục</h1>
        </div>
        <div class="menu_dm">
            <ul>
                <!-- <?php 
    foreach ($dsdm as $dm) {
        extract($dm);
        $linkdm = "index.php?act=product&category_id=".$id;
        echo '<li>
        <a href="'.$linkdm.'">'.$categoryName.'</a>
    </li>';
        # code...
    }
                ?> -->
                <!-- <li>
                    <a href="#">Gấu bông</a>
                </li>
                <li>
                    <a href="#">Phụ kiện</a>
                </li> -->
            </ul>
        </div>
        <div class="searchbox">
            <form action="" method="post">
                <input type="text" name="" id="" placeholder="Search ... " />
                <a class="fa-solid fa-magnifying-glass" id="search-icon"></a>
            </form>
        </div>
    </div>
    <!-- categories -->
    <section class="categories" id="categories">
        <div class="heading">
            <h1>Top 10 Sản phẩm được yêu thích nhất<br /><span>Teddyshop</span></h1>
            <a href="#" class="btn">Order now<i class="fa-solid fa-circle-right"></i></a>
        </div>
        <div class="categories-container">
            <div class="box box1">
                <img src="https://i.pinimg.com/236x/7a/b4/f3/7ab4f3473bcf859b390864f243148890.jpg" alt="" />
                <h2><a href="">Con cáo</a></h2>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="box box2">
                <img src="https://i.pinimg.com/236x/b4/33/04/b43304ffe75fe4e7cfa6c9d5ea2398da.jpg" alt="" />
                <h2><a href="">Cây nấm</a></h2>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="box box3">
                <img src="https://i.pinimg.com/564x/75/e9/51/75e9514a3f6d4b4fcc338aa52dc1cb1a.jpg" alt="" />
                <h2><a href="">Chim cánh cụt</a></h2>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="box box4">
                <img src="https://i.pinimg.com/236x/7a/b4/f3/7ab4f3473bcf859b390864f243148890.jpg" alt="" />
                <h2><a href="">Con cao</a></h2>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="box box5">
                <img src="https://i.pinimg.com/236x/7a/b4/f3/7ab4f3473bcf859b390864f243148890.jpg" alt="" />
                <h2><a href="">Con cao</a></h2>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="box box6">
                <img src="https://i.pinimg.com/236x/7a/b4/f3/7ab4f3473bcf859b390864f243148890.jpg" alt="" />
                <h2><a href="">Con cao</a></h2>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="box box7">
                <img src="https://i.pinimg.com/236x/7a/b4/f3/7ab4f3473bcf859b390864f243148890.jpg" alt="" />
                <h2><a href="">Con cao</a></h2>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="box box8">
                <img src="https://i.pinimg.com/236x/7a/b4/f3/7ab4f3473bcf859b390864f243148890.jpg" alt="" />
                <h2><a href="">Con cao</a></h2>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="box box9">
                <img src="https://i.pinimg.com/236x/7a/b4/f3/7ab4f3473bcf859b390864f243148890.jpg" alt="" />
                <h2><a href="">Con cao</a></h2>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="box box10">
                <img src="https://i.pinimg.com/236x/7a/b4/f3/7ab4f3473bcf859b390864f243148890.jpg" alt="" />
                <h2><a href="">Con cao</a></h2>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
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
                $hinh = $img_path.$productImage;
                echo '<div class="box">
                <img src="'.$hinh.'"
                    alt="">
                <h2 class="name"><a href="">Name : '.$productName.'</a></h2>
                <h3 class="price"> Price : 
                '.$productPrice.'  <ins>đ</ins> <span class="size">/ Size :  '.$productSize.'</span>
                </h3>
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-heart"></i>
                <span class="discount">'.$productPromotion.'%</span>
            </div>';
            }
            ?>
        </div>
       
        </div>
    </section>