<section class="main">
    <div class="attendance">
        <div class="attendance-list">
            <h1>Thêm mới sản phẩm</h1>
        </div>
        <div class="row">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" onsubmit="return check()">
                <div class="row mb10">Danh mục<br>
                    <select name="iddm">
                        <?php 
                    foreach ( $listcategory as $category) {
                        extract($category);
                        echo ' <option value="'.$id.'">'.$categoryName.'</option>';
                    }
                    ?>
                    </select>
                </div>
                <div class="row mb10"> Tên sản phẩm<br>
                    <input type="text" name="tensp" id="product-name">
                </div>
                <div class="row mb10"> Miêu tả sản phẩm<br>
                    <textarea rows="10" cols="30" name="motasp" id="product-description"></textarea>
                </div>
                
                <div class="row mb10">Giá<br>
                    <input type="text" name="giasp" id="product-price">
                </div>
                <div class="row mb10">Size sản phẩm<br>
                    <input type="text" name="sizesp" id="product-price">
                </div>
                <div class="row mb10"> Khuyến mãi sản phẩm<br>
                    <input type="text" name="khuyenmai" id="product-name">
                </div>
                <div class="row mb10">Hình ảnh<br>
                    <input type="file" name="hinh">
                </div>
                <div class="row mb10">
                    <input type="submit" name="themmoi" value="Thêm Mới" class="btn">
                    <input type="reset" value="Nhập Lại" class="btn">
                    <a href="index.php?act=listsp">
                        <input type="button" value="Danh Sách" class="btn">
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
</section>