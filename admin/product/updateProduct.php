<?php 
// if(is_array($product)){
// extract($product);
// }

// $hinhpath="../upload/".$productImage;
// if(is_file($hinhpath)){
// $hinh = "<img src=' ".$hinhpath." ' height='80'> " ;
// }else{
// $hinh = 'No photo';
// }
?>
<div class="row">
    <div class="row formtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data"
            onsubmit="return checkUpdate()">
            <div class="row mb10">
                <select name="iddm" id="" class="input_second">
                    <option selected>Tất cả</option>
                    <?php foreach ($listcategory as $category) {
					extract($category);
					 ?>
                    <option value="<?= $id ?>" <?php if($category['id'] == $product['category_id']):?> selected
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
            <div class="row mb10"> Tên sản phẩm<br>
                <input type="text" name="tensp" id="product-name" value="<?= $productName ?>">
            </div>
            <div class=" row mb10">Mô tả<br>
                <textarea rows="10" cols="30" name="motasp" id=" product-description"
                    value="<?= $productDesc ?>"></textarea>
            </div>
            <div class="row mb10">Hình ảnh<br>
                <input type="file" name="hinh">
            </div>
            <input type="hidden" name="oldImage" value="<?= $productImage?>">
            <input type="text" name="soluongsp" id="product-count" value="<?= $productCount?>">
    </div>
    <div class="row mb10">Giá<br>
        <input type="text" name="giasp" id="product-price" value="<?= $productPrice ?>">
    </div>
    <div class="row mb10">Size<br>
        <input type="text" name="sizesp" id="product-size" value="<?= $productSize ?>">
    </div>


    <div class="row mb10">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" name="capnhat" value="Cập Nhật" class="btn1">
        <input type="reset" value="Nhập Lại" class="btn1">
        <a href="index.php?act=listsp">
            <input type="button" value="Danh Sách" class="btn1">
        </a>
    </div>
    <?php
                 if(isset($thongbao) && ($thongbao!= "" )) 
                  echo $thongbao;       
             ?>
    </form>
</div>
</div>
</div>
</div>