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
<style>
.group {
    display: grid;
    grid-template-columns: 1fr 1fr;

    padding-top: 30px;
}

/* .group:nth-child(2n+1){
    display:flex;
    justify-content: center;
} */

.imageGalery {
    border: 1px solid greenyellow;
    border-radius: 4px;
    max-width: 300px;
    height: 30px;
}

.drop-container {
    position: relative;
    display: flex;
    gap: 10px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 200px;
    padding: 20px;
    border-radius: 10px;
    border: 2px dashed #555;
    color: #444;
    cursor: pointer;
    max-width: 420px;
    transition: background .2s ease-in-out, border .2s ease-in-out;

}

.drop-container:hover {
    background: #eee;
    border-color: #111;
}

.drop-container:hover .drop-title {
    color: #222;
}

.drop-title {
    color: #444;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    transition: color .2s ease-in-out;
}

input[type=file] {
    width: 320px;
    max-width: 100%;
    color: #444;
    padding: 5px;
    background: #fff;
    border-radius: 10px;
    border: 1px solid #555;
}

.rounded-circle {
    border-radius: 50%;
    max-height:80px;
}
</style>

<link rel="stylesheet" type="text/css" href="../view/layout/assets/style.css">
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>Cập Nhật Ảnh Phụ</h1>
                </div>
                <?php
                  
                   if(isset($_GET["idsp"]))$id_product=$_GET["idsp"];
                    $allImage = loadone_Galery($id_product);
                         extract( $allImage );
                        //  var_dump($allImage);
                   
                             ?>
                 <form action="index.php?act=updategalery&idsp=<?=$id_product?>"  method="POST" enctype="multipart/form-data"
                    onsubmit="return confirmDesactiv()">
                <div class="group">

                    <label for="images" class="drop-container">
                        <span class="drop-title">Chọn Ảnh 1</span>
                        <input type="file" id="images" accept="image/*" name="hinh1" required>
                        <input type="hidden" name="old-image1" value="<?=$allImage["image1"]?>">
                        <img src="../upload/<?=$allImage["image1"]?>" class="rounded-circle" style="width: 70px"
                            alt="Lỗi ảnh">

                    </label>
                    <label for="images" class="drop-container">
                        <span class="drop-title">Chọn Ảnh 2</span>
                        <input type="hidden" name="old-image2" value="<?=$allImage["image2"]?>">  
                        <input type="file" id="images" accept="image/*" name="hinh2" required >
                        <img src="../upload/<?=$allImage["image2"]?>" class="rounded-circle" style="width: 70px"
                            alt="Lỗi ảnh">
                    </label>

                </div>
                <div class="group">
                    <label for="images" class="drop-container">
                        <span class="drop-title">Chọn Ảnh 3</span>
                        <input type="hidden" name="old-image3" value="<?=$allImage["image3"]?>">
                        <input type="file" id="images" accept="image/*" name="hinh3" required>
                        <img src="../upload/<?=$allImage["image3"]?>" class="rounded-circle" style="width: 70px"
                            alt="Lỗi ảnh">
                    </label>
                    <label for="images" class="drop-container">
                        <span class="drop-title">Chọn Ảnh 4</span>
                        <input type="hidden" name="old-image4" value="<?=$allImage["image4"]?>">
                        <input type="file" id="images" accept="image/*" name="hinh4" required>
                        <img src="../upload/<?=$allImage["image4"]?>" class="rounded-circle" style="width: 70px"
                            alt="Lỗi ảnh">
                    </label>
                </div>
                  
                     <input type="hidden" name="id_product" value="<?= $id_product?>">
                   
                    <button type="submit" name="capnhat" value="capnhat" class="btn">Cập Nhật Ảnh Phụ</button>
                    <a href="index.php?act=listsp">
                        <input type="button" value="Danh Sách Sản Phẩm" class="btn">
                    </a>
                   


                </form>

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
<script>
function confirmDesactiv() {
    return confirm("Cập Nhật ảnh phụ?");
}

function images() {
    const images = document.querySelector('#images').value;
    document.getElementById('images1').value = images;
}
</script>