<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ngôi nhà gấu bông</title>
    <link rel="stylesheet" href="view/layout/assets/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<style>
.danhmuc {
    padding-top: 20px;
    max-width: 1248px;
    margin: 0 auto;
}
</style>

<body>
    <!-- header -->
    <header>
        <a href="" class="logo">
            <img src="https://i.pinimg.com/564x/63/e4/c9/63e4c923c2467000cf6dbb3a0499bf61.jpg" alt="" />
        </a>
        <div class="fa-solid fa-bars" id="menu-icon"></div>
        <div class="navbar">
            <a href="index.php">Trang Chủ</a>
            <a href="#">Giới thiệu</a>
            <div class="dropdown">
                <button class="dropbtn">Sản phẩm
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">Gấu bông</a>
                    <a href="#">Phụ Kiện</a>
                </div>
            </div>
            <a href="#">Liên Hệ</a>
            <a href="#">Góp Ý</a>
        </div>
        <div class="icons">
            <a href="#" class="fa-solid fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" placeholder="Tên sản phẩm bạn muốn.." />
            <input type="submit" name="timkiem" value="Tìm">
        </form>
        <div class="profile">
            <?php 
            if(isset($_SESSION['user'])){
                  extract($_SESSION['user']);
                  echo '<img src="https://i.pinimg.com/564x/12/c3/a7/12c3a7ad1deac1c7c93c435bd8e09cbf.jpg" alt="" />
                  <span>ChanhDay hihi</span>';           
            }else{
                 echo '<div class="navlogin">
                 <ul>
                     <a href="view/taikhoan/dangnhap.php">
                         <li>Log in</li>
                     </a>
                     <a href="view/taikhoan/dangky.php">
                         <li>Register</li>
                     </a>            
                 </ul>
                 <div id="direction">
                
                 </div>
             </div>';
            }
            ?>

            <!-- 
                  <a href="#">    <li>Cập nhật tài khoản</li></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                         <path fill-rule="evenodd"
                             d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                     </svg> -->
        </div>
    </header>
    <!-- home -->
    <section class="home" id="home">
        <div class="banner">
            <div class="swiper-container home-slider">
                <div class="swiper-wrapper wrapper">
                    <div class="slideshow"></div>
                    <div class="swiper-slide slide">
                        <div class="content">
                            <span>teddyshop</span>
                            <h3>Gấu bông Kuromi</h3>
                            <p>
                                Bộ sưu tập những mẫu Gấu Bông Kuromi, Gấu Bông Kuromi được thiết kế với chất liệu cao
                                cấp, đường chỉ may & độ hoàn thiện các chi tiết đạt mức tinh xảo, giúp Gấu Bông Kuromi
                                nỗi bật, rất dễ thương & đáng yêu
                            </p>
                            <a href="#" class="btn">Order now</a>
                        </div>
                        <div class="image">
                            <img src="https://i.pinimg.com/564x/63/2d/e8/632de8fd243b344b00afe88c8a77e312.jpg" alt="" />
                        </div>
                    </div>
                    <!-- slide2 -->
                    <div class="swiper-slide slide">
                        <div class="content">
                            <span>teddyshop</span>
                            <h3>Gấu bông Kuromi</h3>
                            <p>
                                Hơn +100 mẫu Gấu Teddy với nhiều thiết kế Teddy khác nhau, Gấu Teddy cao cấp được nhập
                                khẩu trực tiếp và được nhồi 100% Bông Gòn đàn hồi trắng nên rất êm khi ôm.
                                Chuyên mục này sẽ giới thiệu với các bạn những mẫu Gấu Teddy đang HOT nhất và được đông
                                đảo giới trẻ yêu thích nhất.
                                Đặc biệt Gấu Bông Teddy của gaubongcaocap.com đều được nhập khẩu 100% các bạn nhé.
                            </p>
                            <a href="#" class="btn">Order now</a>
                        </div>
                        <div class="image">
                            <img src="https://i.pinimg.com/736x/07/25/0c/07250c6d8abf9c2abdf1b09006ae6806.jpg" alt="" />
                        </div>
                    </div>
                    <!-- slide3 -->
                    <div class="swiper-slide slide">
                        <div class="content">
                            <span>teddyshop</span>
                            <h3>Gấu bông Kuromi</h3>
                            <p>
                                Gấu bông cao cấp, đẹp chính hãng giá rẻ chưa bao giờ lại mua
                                dễ đến thế! Hãy đến với Shop Gấu bông Teddy có cho mình các
                                sản phẩm to, nhỏ, dễ thương.
                            </p>
                            <a href="#" class="btn">Order now</a>
                        </div>
                        <div class="image">
                            <img src="https://i.pinimg.com/564x/89/32/b5/8932b55b60900afab9230d89e7e12958.jpg" alt="" />
                        </div>
                    </div>
                    <!-- slide4 -->
                    <div class="swiper-slide slide">
                        <div class="content">
                            <span>teddyshop</span>
                            <h3>Gấu bông Kuromi</h3>
                            <p>
                                Vì là Gấu nhập khẩu cao cấp nên các bạn vui lòng không so sánh giá với Gấu bông Fake bán
                                ngoài lề đường & các shop nhỏ lẻ bán phá giá nhé.
                                Gấu Teddy được gia công tại Thái Lan & Quảng Châu. Là loại Gấu Teddy cao cấp, được xuất
                                khẩu sang thị trường Đông Nam Á, Úc, Malaysia & Việt Nam.
                            </p>
                            <a href="#" class="btn">Order now</a>
                        </div>
                        <div class="image">
                            <img src="https://i.pinimg.com/564x/ad/46/da/ad46da0f690fdd823ef3bbea803e7347.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <div class="note">
        <div class="ship">
            <img src="view/layout/assets/images/note_ship.jpg" alt="">
            <p>GIAO HÀNG TẬN NHÀ</p>
        </div>
        <div class="gift">
            <img src="view/layout/assets/images/note_gift.jpg" alt="">
            <p>GÓI QUÀ SIÊU ĐẸP</p>
        </div>
        <div class="ship">
            <img src="view/layout/assets/images/note_wash.jpg" alt="">
            <p>CÁCH GIẶT GẤU BÔNG</p>
        </div>
        <div class="ship">
            <img src="view/layout/assets/images/note_help.jpg" alt="">
            <p>BẢO QUẢN GẤU BÔNG</p>
        </div>
    </div>