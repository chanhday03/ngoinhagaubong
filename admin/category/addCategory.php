<script>
    function check() {
        let category = document.querySelector("#ten-loai");
        if (category.value.trim() === "") {
            alert("Bạn cần điền đầy đủ thông tin !");
            return false;
        }
        return true;
    }
</script>
<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>Thêm mới Danh Mục</h1>
                </div>
                <form action="index.php?act=adddm" method="post" onsubmit="return check()">
                    <div class="input-label">ID<br>
                        <input class="input-base" type="text" name="maloai" disabled>
                    </div>
                    <div class="input-label"> Tên Danh Mục<br>
                        <input class="input-base" type="text" name="tenloai" id="ten-loai">
                    </div>
                    <div class="nut">
                        <input type="submit" name="themmoi" value="Thêm Mới" class="btn">
                        <input type="reset" value="Làm Mới" class="btn">
                        <a href=" index.php?act=listdm">
                            <input type="button" value="Danh Sách Danh Mục" class="btn">
                        </a>
                    </div>
                    <?php
                        if (isset($thongbao) && ($thongbao != ""))
                            echo $thongbao;
                        ?>
                </form>
            </div>
        </section>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->