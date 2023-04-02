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
        const productDesc = getElement("#product-description")
        const productPrice = getElement("#product-price")
        const productSize = getElement("#product-size")
        const productImage = getElement('input[type=file]');
    
        const a = checkIsNotEmpty(productName, 'Ten sản phẩm không được để trống');
        const b = checkIsNotEmpty(productDesc, 'Mô tả sản phẩm không được để trống');
        const c = checkIsNotEmpty(productPrice, 'Giá sản phẩm không được để trống');
        const d = checkIsNotEmpty(productSize, 'Kich thuoc sản phẩm không được để trống');
        const e = checkIsNotEmpty(productImage, 'Ảnh sản phẩm không được để trống');
        const f = checkIsNumber(productPrice, 'Giá sản phẩm phải là số')
        return a && b && c && d && e && f
    }
</script>

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
                    <input type="text" name="sizesp" id="product-size">
                </div>
                <div class="row mb10"> Khuyến mãi sản phẩm<br>
                    <input type="text" name="khuyenmai" id="khuyenmai">
                </div>
                <div class="row mb10">Hình ảnh<br>
                    <input type="file" name="hinh">
                </div>
                <div class="nut">
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