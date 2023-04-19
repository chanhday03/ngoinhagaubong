<script>
    function checkUpdate() {
        let category = document.querySelector("#ten-loai");
        if (category.value.trim() === "") {
            alert("Bạn cần điền đầy đủ thông tin !");
            return false;
        }
        return true;
    }
</script>
<?php
    if(is_array($dm)){
    extract($dm);
    }
?>
<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>Cập Nhật Danh Mục</h1>
                </div>
                <form action="index.php?act=updatedm" method="post" onsubmit="return checkUpdate()">
                    <div class="">ID<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="">Tên Danh Mục<br>
                        <input type="text" name="tenloai" id="ten-loai"
                            value="<?php if(isset($categoryName) && ($categoryName != "")) echo $categoryName ; ?>">
                    </div>
                    <div class="">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id ; ?>">
                        <input type="submit" name="capnhat" value="Cập Nhật" class="btn">
                        <input type="reset" value="Reset" class="btn">
                        <a href="index.php?act=listdm">
                            <input type="button" value="Danh Sách Danh Mục" class="btn">
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