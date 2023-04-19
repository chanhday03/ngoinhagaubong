<style>
    #viewsp i {
        border: none;
        margin: 2px;
        color: rgb(135, 132, 129);
    }



    .products {
        max-width: 1248px;
        margin-left: auto;
        margin-right: auto;
    }

    .products-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
        margin-top: 20px;
    }

    .products-container .box {
        padding: 20px;
        box-shadow: 1px 2px 11px 4px rgba(237, 175, 94, 0.15);
        border-radius: 5px;
        position: relative;
    }

    .products-container .box:hover {
        box-shadow: 0 0 0 2px rgb(224, 178, 121);
        transform: rotate(6deg);
        transition: 0.3s;
    }

    .products-container .box img {
        width: 100%;
        height: 200px;
        object-fit: contain;
        object-position: center;
        border-radius: 20px;
    }

    .products-container .box h2 {
        color: #905219;
        font-size: 18px;
        font-weight: bold;
        margin-top: 10px;
    }

    .products-container .box .price {
        /* display: flex;
        justify-content: space-between;
        align-items: center; */
        font-size: 20px;
        font-weight: 600;
        margin-top: 5px;
        color: var(--orange-color);
    }

    .products-container .box .price ins {
        text-decoration: underline;
        color: red;
        font-size: 18px;
    }

    .size ul li {
        font-weight: bold;
        width: 50px;
        padding: 3px 5px;
        font-size: 13px;
        border-radius: 5px;
        margin-top: 10px;
        border: 1px solid #905219;
        color: #905219;
    }

    .size ul li a {
        margin-left: 5px;
    }

    .size ul li:hover {
        color: white;
        background-color: #905219;
    }
</style>
<link rel="stylesheet" href="layout/assets/style.css" />
<div class="danhmuc">
    <div class="heading">
        <h1>Category</h1>
    </div>
    <div class="menu_dm">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li>
    <a href="' . $linkdm . '">' . $categoryName . '</a>
</li>';
            }
            ?>
        </ul>
    </div>
</div>
<!-- categories -->
<section class="products" id="products">
    <div class="heading">
        <h1>Top 10 sản phẩm yêu thích<br /><span>Teddyshop</span></h1>
        <a href="#" class="btn">Đặt hàng ngay<i class="fa-solid fa-circle-right"></i></a>
    </div>
    <div class="categories-container">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $productImage;
            echo '<div class="box box1">
            <img src=" ' . $img . ' " alt="" />
            <h2><a href=" ' . $linksp . ' ">' . $productName . '</a></h2>
            <i class=" fa-solid fa-arrow-right"></i>
        </div>';
        }
        ?>


    </div>
</section>
<!-- product -->
<section class="products" id="products">
    <div class="heading">
        <h1>Tất cả sản phẩm <br /><span>Teddyshop</span></h1>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Chọn size</button>
            <div id="myDropdown" class="dropdown-content">
                <?php
                foreach ($listsize as $size) {
                    extract($size);
                    $linksize = "index.php?act=sanpham&size=" . $productSize;
                    echo '<a href="' . $linksize . '">' . $productSize . '</a>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="products-container">
        <?php
        foreach ($spnew as $sp) {
            extract($sp);
            $hinh = $img_path . $productImage;
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            echo '<div class="box">
                <img src="' . $hinh . '"
                    alt="">
                <h2 class="name"><a href="' . $linksp . '">' . $productName . '</a></h2>
                <div class="price">
                    ' . number_format($productPrice) . '<ins> đ</ins>
                    <!-- '.$productNumber .'  -->
                </div>
                <div class="size">
                    <ul>
                        <li><a href="">' . $productSize . 'cm</a></li>
                    </ul>
                </div>
                <span class="discount">-' . $productPromotion . '%</span>
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $productName . '">
                <input type="hidden" name="price" value="' . $productPrice . '">
                <input type="hidden" name="images" value="' . $hinh . '">
                <input type="hidden" name="size" value="' . $productSize . '">
                <input type="hidden" name="khuyenmai" value="' . $productPromotion . '">
                <input type="hidden" name="viewsp" value="' . $productView . '">
                <input type="hidden" name="soluongsp" value="' . $productNumber. '">
                <button type="submit" name="btn_addtocart" value="btn_addtocart">   <i class="fa-solid fa-cart-shopping"></i></button>
                 </form>
                <i class="fa-solid fa-heart"></i>
                <p id="viewsp">' . $productView . ' <i class="fa-solid fa-eye"></i></p>
                


               
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