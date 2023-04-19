<script>
    function getElement(query) {
        return document.querySelector(query)
        // const element = document.querySelectorAll(query)
        // if (element.length >= 1) return element;
        // if (element.length === 1) return element[0];
        // return false;
    }
    function checkIsNotEmpty(elementName, message) {
        if (elementName.value.trim() === "") {
            alert(message);
            return false;
        }
        return true
    }
    function checkIsNumber(elementName, message) {
        if (isNaN(elementName.value.trim())) {
            alert(message);
            return false;
        }
        return true
    }

    function check() {
        const productName = getElement("#product-name")
        // const productDesc = getElement("#product-description")
        const productPrice = getElement("#product-price")
        const productSize = getElement("#product-size")
        const productImage = getElement('input[type=file]');

        const a = checkIsNotEmpty(productName, 'Tên sản phẩm không được để trống');
        // const b = checkIsNotEmpty(productDesc, 'Mô tả sản phẩm không được để trống');
        const c = checkIsNotEmpty(productPrice, 'Giá sản phẩm không được để trống');
        const d = checkIsNotEmpty(productSize, 'Kích thước sản phẩm không được để trống');
        const e = checkIsNotEmpty(productImage, 'Ảnh sản phẩm không được để trống');
        const f = checkIsNumber(productPrice, 'Giá sản phẩm phải là số');
        return a && b && c && d && e && f
    }

</script>
<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>Thêm mới Sản Phẩm</h1>
                </div>
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data"
                    onsubmit="return check()">
                    <div class="input-label">Danh Mục<br>
                        <select class="input-base" name="iddm">
                            <?php 
                        foreach ( $listcategory as $category) {
                            extract($category);
                            echo ' <option value="'.$id.'">'.$categoryName.'</option>';
                        }
                        ?>
                        </select>
                    </div>
                    <div class="input-label" class="row mb10">Tên Sản Phẩm<br>
                        <input class="input-base" type="text" name="tensp" id="product-name">
                    </div>
                    <div class="input-label" class="row mb10">Mô Tả Sản Phẩm<br>
                        <textarea class="input-base" rows="5" cols="30" name="motasp"
                            id="product-description"></textarea>
                    </div>

                    <div class="input-label" class="row mb10">GIá Sản Phẩm<br>
                        <input class="input-base" type="text" name="giasp" id="product-price">
                    </div>
                    <div class="input-label" class="row mb10">Kích Thước Sản Phẩm<br>
                        <input class="input-base" type="text" name="sizesp" id="product-size">
                    </div>
                    <div class="input-label" class="row mb10"> Khuyến Mãi<br>
                        <input class="input-base" type="text" name="khuyenmai" id="khuyenmai">
                    </div>
                    <div class="input-label" class="row mb10">Lượt Xem<br>
                        <input class="input-base" type="text" name="viewsp" id="viewsp">
                    </div>
                    <div class="input-label" class="row mb10"> Số Lượng <br>
                        <input class="input-base" type="text" name="soluongsp" id="soluong">
                    </div>
                    <div class="input-label" class="row mb10">Hình Ảnh<br>
                        <input type="file" name="hinh">
                    </div>

                    <div class="nut">
                        <input type="submit" name="themmoi" value="Thêm Mới" class="btn">
                        <input type="reset" value="Làm Mới" class="btn">
                        <a href="index.php?act=listsp">
                            <input type="button" value="Danh Sách Sản Phẩm" class="btn">
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