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

    .profile {
        color: #905219;
        display: flex;
        justify-content: center;
        align-items: center;
        column-gap: 5px;
        cursor: pointer;
        font-family: PT+Mono;
    }

    .profile2 {
        display: grid;
        grid-template-columns: 50px 1fr;

    }


    .profile img {
        width: 40px;
        height: 40px;
        width: 100%;
        object-fit: cover;
        object-position: center;
        border-radius: 50%;
        overflow: hidden;
    }

    .profile span {
        font-size: 13px;
        font-weight: 500;
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

    img {
        max-width: 100%;
    }

    .login {
        color: red;
    }

    #soluongsp {
        color: red;
        border: none;
        background: transparent;
        font-weight: bold;
    }

    .comment .form-commnet input {
        padding: 10px 25px;
        margin-top: 20px;
        margin-right: 10px;
        border-radius: 10px;
        cursor: pointer;
        background: whitesmoke;
        border: 1px solid #a68567;
    }

    #soluong::placeholder {
        font-weight: bold;
        color: cyan;
    }

    #soluong {
        width: 60px;
    }

    .camon {
        width: 1248px;
        gap: 50px;
        margin: 0 auto;
        margin-bottom: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
    }

    .camon .logo img {
        width: 100%;
        height: 500px;
    }

    h4 {
        font-weight: bold;
        font-size: 18px;
        color: darkgoldenrod;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    }

    .btn-cmt {
        padding: 10px 25px;
        margin-top: 20px;
        margin-right: 10px;
        border-radius: 10px;
        cursor: pointer;
        background: transparent;
        border: 1px solid #a68567;
    }

    .btn-cmt:hover {
        background: #a68567;
        color: white;
        transition: 1s;
    }
</style>
<?php if($productNumber<=0){
    echo '
    <div class="camon">
    <div class="logo">
        <img src="https://i.pinimg.com/564x/33/eb/35/33eb35718e2b37b45c33592f7f484cab.jpg" alt="Lỗi ảnh">
     </div>
     <div class="tittle">
     <h4>Sản phẩm này đã hết, hãy quay lại sau!</h4>
    
     </div>
     </div>';
        }else{?>
<section class="prodetails" id="prodetails">
    <div class="single-pro-image">
        <?php
            extract($onesp);
            $img = $img_path . $productImage;
            echo ' <img src="' . $img . '" alt="Lỗi ảnh"
                        width="100%" class="MainImg">';
            ?>
        <div class="small-img-group pt-4">
            <div class="small-img-col ">
                <?php
                    foreach ($allImage as $value){
                        $img = $img_path . $value["image1"];
                        echo ' <img src="' . $img . '" alt="Lỗi ảnh"
                            width="100%" class="small-img max-h-[250px]">';
                     }
                    ?>
            </div>
            <div class="small-img-col">
                <?php
                    foreach ($allImage as $value){
                        $img = $img_path . $value["image2"];
                        echo ' <img src="' . $img . '" alt="Lỗi ảnh"
                            width="100%" class="small-img max-h-[250px]">';
                     }
                    ?>
            </div>
            <div class="small-img-col">
                <?php
                    foreach ($allImage as $value){
                        $img = $img_path . $value["image3"];
                        echo ' <img src="' . $img . '" alt="Lỗi ảnh"
                            width="100%" class="small-img max-h-[250px]">';
                     }
                    ?>
            </div>
            <div class="small-img-col">
                <?php
                    foreach ($allImage as $value){
                        $img = $img_path . $value["image4"];
                        echo ' <img src="' . $img . '" alt="Lỗi ảnh"
                            width="100%" class="small-img max-h-[250px]">';
                     }
                    ?>
            </div>

        </div>
    </div>
    <div class="single-pro-details">
        <?php
            // index.php?act=addtocart
      
            extract($onesp);
            $img = $img_path . $productImage;
            echo '<h3>Home / <p>' . $productName . '</p>/ lượt xem: '.$productView .' </h3>
          <h4 class="name text-[24px]">' . $productName . '</h4> 
          <h2 class="price"> Giá : 
                ' . $productPrice . '  <ins>đ</ins> <span class="size">/ Size :  ' . $productSize . ' cm</span>
          </h2>
          <h2>Số Lượng (<span class="text-[red] font-bold">ko qua: ' . $productNumber. '</span>): <input id="soluong" autocomplete="off" onkeyup="checksoluong()"
            type="text" value="" placeholder="> = 1" id="soluong" class="border-2 soluong " name="" >
           &ensp; &ensp; Còn lại : <input type="text" value="'.$productNumber.'"
           id="soluongsp" class="border-2 soluongsp " name=""  disabled> sản phẩm</h2>
            <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $productName . '">
                <input type="hidden" name="price" value="' . $productPrice . '">
                <input type="hidden" name="images" value="' . $img . '">
                <input type="hidden" name="size" value="' . $productSize . '">
                <input type="hidden" name="viewsp" value="' . $productView . '">
                <input type="hidden" name="soluongsp" value="' . $productNumber. '">
                <input id="soluong2" type="hidden" name="soluong" value="" >
                <input type="hidden" name="khuyenmai" value="' . $productPromotion . '">
                <button type="submit" name="btn_addtocart" value="btn_addtocart" class="btn"> <i class="fa-solid fa-cart-shopping"></i></button>
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
        <script>
            // function checksoluong2() {
            //          const soluongsp = document.querySelector('#soluongsp').value;

            //          const soluong = document.querySelector('.soluong').value;
            //          alert(soluong );
            //          if(soluong>soluongsp){
            //             alert("Số lượng sản phẩm không được vượt qua sản phẩm còn lại vui lòng nhập lại số lượng");
            //             location.reload();
            //          }else{
            //             document.getElementById('soluong2').value = soluong;
            //          }
            // }
            function checksoluong() {
                const soluong = document.querySelector('.soluong').value;
                document.getElementById('soluong2').value = soluong;
            }

            function confirmDesactiv() {
                return confirm("Gửi bình luận?");
            }
            function confirmDesactiv1() {
                return confirm("Xóa bình luận?");
            }
        </script>
</section>
<section class="comment">
    <div class="heading">
        <h1>Bình luận sản phẩm<br /><span>comment products</span></h1>
    </div>
    <div class="form-commnet">
        <?php if (isset($_SESSION["id"])) {
                echo '<form action="index.php?act=addcomment&idsp=' . $_GET["idsp"] . '" method="POST"  onsubmit="return confirmDesactiv()">
                    <input type="hidden" name="product_id" value="' . $_GET['idsp'] . '">
                    <input type="text" class="border" name="description" required>
                    <button  type="submit" name="guibinhluan" value="guibinhluan" class="btn-cmt">Gửi Bình Luận</button>
                    </form>';
            } else {
                echo '<button><a class="login" href="view/taikhoan/login.php">Đăng nhập</a> để bình luận sản phẩm</button> <br>';
            } ?>
        <!-- <form action="index.php?act=addcomment&idsp=<?php echo $_GET["idsp"] ?>" method="POST">
                <input type="hidden" name="product_id" value="<?php echo $_GET['idsp'] ?>">
                <input type="text" class="border" name="description" required >
                <input type="submit" name="guibinhluan" value="Gửi bình luận" class="btn1">
             -->
        <section class="main">
            <section class="attendance">
                <div class="attendance-list">
                    <h4>Danh Sách Bình Luận</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>Tên</th>
                                <th>Nội Dung</th>
                                <th>Ngày</th>
                                <th>Hoạt Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($cmsp as $cmsp): ?>
                            <tr>
                                <td>
                                    <?php
                                            // var_dump($cmsp);
                                            extract($cmsp);
                                            $idus = $user_id;
                                            $usnoe = loadone_user($idus);
                                            extract($usnoe);
                                            echo $fname ?>
                                </td>
                                <td>
                                    <?php extract($cmsp);
                                            echo $description ?>
                                </td>
                                <td>
                                    <?php extract($cmsp);
                                            echo $time ?>
                                </td>
                                <?php extract($onesp);
                                        extract($cmsp);
                                        if ($_SESSION["id"] == $idus) {
                                            echo '<td>
                                            <a  onclick="return confirmDesactiv1()" href="index.php?act=delcomment&idsp=' . $_GET["idsp"] . '&idcm=' . $id . '">
                                            <button>Delete</button>
                                            </a> 
                                            <br>
                                        <button onclick="showEditComment('.$id.', '.$product_id.')">edit</button>
                                        </td>   
                                        ';
                                        } else {
                                            echo '<td></td>';
                                        }
                                        ?>
                            </tr>
                            <tr>
                                <td>
                                    <div id="comment_<?php echo $id; ?>"></div>
                                </td>
                            </tr>
                            <?php endforeach ?>

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
                    <div id="form-edit-comment"></div>
                </div>
            </section>
        </section>
    </div>
</section>
<?php
}
?>
<section class="products" id="products">
    <div class="heading">
        <h1>Sản phẩm cùng loại<br /><span>same products</span></h1>
    </div>
    <div class="products-container">
        <?php
        foreach ($sp_cung_loai as $sp_cung_loai) {
            extract($sp_cung_loai);
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
                    <button type="submit" name="btn_addtocart" value="btn_addtocart"><i class="fa-solid fa-cart-shopping"></i></button>
                     </form>
                <i class="fa-solid fa-heart"></i>
                <p id="viewsp">' . $productView . ' <i class="fa-solid fa-eye"></i></p>
                </div>';
        }
        ?>
    </div>
</section>


<script>
    function showEditComment(idComment, idProduct) {

        var formEditComment = `<form action="index.php?act=editcomment&idsp=${idProduct}&idcm=${idComment}" method="POST">
                    <input type="hidden" name="idcm" value=${idComment}>
                    <input type="text" class="border" name="description" >
                    <input type="submit" name="editbinhluan" value="Sửa bình luận" class="btn1">
                    </form>`
        const contentComment = document.getElementById(`comment_${idComment}`)
        contentComment.innerHTML = formEditComment

    }
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="./assets/js/main.js"></script>
<script>
    // javascipit phan ảnh
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");
    smallimg[0].onclick = function () {
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function () {
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function () {
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function () {
        MainImg.src = smallimg[3].src;
    }
</script>