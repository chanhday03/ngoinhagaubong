<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>Update Product</h1>
                </div>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data"
                    onsubmit="return checkUpdate()">
                    <div class="row mb10">
                        <select name="iddm" id="" class="input_second">
                            <option selected>Tất cả</option>
                            <?php foreach ($listcategory as $category) {
					extract($category);
					 ?>
                            <option value="<?= $id ?>" <?php if($category['id']==$product['category_id']):?> selected
                                <?php endif?>>
                                <?= $categoryName ?>
                            </option>
                            <?php } ?>
                        </select><br>
                    </div>
                    <?php 
                // var_dump($item);
                extract($product);
            ?>
                    <div class=""> Tên sản phẩm<br>
                        <input type="text" name="tensp" id="product-name" value="<?= $productName ?>">
                    </div>
                    <div class="">Mô tả<br>
                        <textarea rows="10" cols="30" name="motasp" id=" product-description"
                            value=""><?= $productDesc ?></textarea>
                    </div>
                    <div class="">Hình ảnh<br>
                        <input type="file" name="hinh">
                        <a href="index.php?act=updategalery&idsp=<?=$id?>">
                        <input type="button" value="Cập Nhật Ảnh Phụ" class="btn">
                    </a>
                    </div>
                    <input type="hidden" name="oldImage" value="<?= $productImage?>">
            </div>
            <div class="">Giá<br>
                <input type="text" name="giasp" id="product-price" value="<?= $productPrice ?>">
            </div>
            <div class="">Size<br>
                <input type="text" name="sizesp" id="product-size" value="<?= $productSize ?>">
            </div>
            <div class="">Khuyến mãi<br>
                <input type="text" name="khuyenmai" id="product-promotion" value="<?= $productPromotion?>">
            </div>
            <div class="">View Product<br>
                <input type="text" name="viewsp" id="product-view" value="<?= $productView?>">
            </div>
            <div class="">Số Lượng<br>
                <input type="text" name="soluongsp" id="product-number" value="<?= $productNumber?>">
            </div>
            <div class="">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập Nhật Sản Phẩm" class="btn">
               
                <a href="index.php?act=listsp">
                    <input type="button" value="Danh sách Sản Phẩm" class="btn">
                </a>
               
            </div>
            <?php
                 if(isset($thongbao) && ($thongbao!= "" )) 
                  echo $thongbao;       
             ?>
            </form>
            </div>
        </section>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->