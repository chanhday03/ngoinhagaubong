    <style>
        .danhmuc{
            max-width: 1248px;
          transform: translate(50px,300px);
   
        }
        
    </style>
    <link rel="stylesheet" href="layout/assets/style.css" />
    <div class="danhmuc">
        <div class="heading">
            <h1>Danh mục</h1>
         </div>
         <div class="menu_dm">
            <ul>
                <?php 
                   foreach ($dsdm as $dm) {
                   extract($dm);
                  $linkdm = "index.php?act=product&category_id=".$id;
                  echo '<li>
                   <a href="'.$linkdm.'">'.$categoryName.'</a>
                  </li>';
      
                 }
                 ?> 
               
            </ul>
        </div>
        <div class="searchbox">
            <form action="" method="post">
                <input type="text" name="" id="" placeholder="Search ... " required/>
                <button><a class="fa-solid fa-magnifying-glass" id="search-icon"></a></button> 
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
                <span class="discount">'.$productPromotion.'%</span>
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="name" value="'.$productName.'">
                <input type="hidden" name="price" value="'.$productPrice.'">
                <input type="hidden" name="images" value="'.$hinh.'">
                <input type="hidden" name="size" value="'.$productSize.'">
                <input type="hidden" name="khuyenmai" value="'.$productPromotion.'">
                <button type="submit" name="btn_addtocart" value="btn_addtocart">   <i class="fa-solid fa-cart-shopping"></i></button>
                 </form>
                <i class="fa-solid fa-heart"></i>
                


               
            </div>';
            }
            ?>
        </div>
        <!-- index.php?act=addtocart -->
        </div>
        
    </section>
    <section class="about" id="about">
    <img src="https://i.pinimg.com/564x/93/b5/10/93b510a30b653ad2a059012e2a6e1f88.jpg" alt="" />
    <div class="about-text">
        <span>About Us</span>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
            deserunt fugiat est in laudantium nostrum tempora omnis quo suscipit
            quidem accusantium, numquam aspernatur architecto hic eius! Ipsum quis
            hic maxime?
        </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
        <a href="#" class="btn">
            Learn more<i class="fa-solid fa-circle-right"></i></a>
    </div>
</section>
<section class="customers" id="customers">
    <h2>Why Customer's Love Us?</h2>
    <div class="customers-container">
        <div class="box">
            <i class="fa-solid fa-quote-right"></i>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
            </div>
            <p class="comment">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                pariatur tempora vitae delectus quisquam in quasi error? Tenetur,
                possimus architecto repellendus ab magni culpa voluptate,
                necessitatibus in, iste suscipit fugiat.
            </p>
            <div class="review-profile">
                <img src="https://i.pinimg.com/236x/7c/85/2b/7c852b4db3689f52e2a68f6624f2f56a.jpg" alt="" />
                <h3>ChanhDay</h3>
            </div>
        </div>
        <div class="box">
            <i class="fa-solid fa-quote-right"></i>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
            </div>
            <p class="comment">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                pariatur tempora vitae delectus quisquam in quasi error? Tenetur,
                possimus architecto repellendus ab magni culpa voluptate,
                necessitatibus in, iste suscipit fugiat.
            </p>
            <div class="review-profile">
                <img src="https://i.pinimg.com/236x/7c/85/2b/7c852b4db3689f52e2a68f6624f2f56a.jpg" alt="" />
                <h3>ChanhDay</h3>
            </div>
        </div>
        <div class="box">
            <i class="fa-solid fa-quote-right"></i>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
            </div>
            <p class="comment">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                pariatur tempora vitae delectus quisquam in quasi error? Tenetur,
                possimus architecto repellendus ab magni culpa voluptate,
                necessitatibus in, iste suscipit fugiat.
            </p>
            <div class="review-profile">
                <img src="https://i.pinimg.com/236x/7c/85/2b/7c852b4db3689f52e2a68f6624f2f56a.jpg" alt="" />
                <h3>ChanhDay</h3>
            </div>
        </div>
        <div class="box">
            <i class="fa-solid fa-quote-left"></i>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
            </div>
            <p class="comment">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                pariatur tempora vitae delectus quisquam in quasi error? Tenetur,
                possimus architecto repellendus ab magni culpa voluptate,
                necessitatibus in, iste suscipit fugiat.
            </p>
            <div class="review-profile">
                <img src="https://i.pinimg.com/236x/7c/85/2b/7c852b4db3689f52e2a68f6624f2f56a.jpg" alt="" />
                <h3>ChanhDay</h3>
            </div>
        </div>
        <div class="box">
            <i class="fa-solid fa-quote-right"></i>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
            </div>
            <p class="comment">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                pariatur tempora vitae delectus quisquam in quasi error? Tenetur,
                possimus architecto repellendus ab magni culpa voluptate,
                necessitatibus in, iste suscipit fugiat.
            </p>
            <div class="review-profile">
                <img src="https://i.pinimg.com/236x/7c/85/2b/7c852b4db3689f52e2a68f6624f2f56a.jpg" alt="" />
                <h3>ChanhDay</h3>
            </div>
        </div>
    </div>
</section>