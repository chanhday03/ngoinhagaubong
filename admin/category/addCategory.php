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
<section class="main">
    <div class="attendance">
        <div class="attendance-list">
            <h1>Thêm mới loại hàng hóa</h1>
        </div>
        <div class="row formcontent">
            <form action="index.php?act=adddm" method="post" onsubmit="return check()">
                <div class="row mb10"> Mã Loại<br>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="row mb10"> Tên Loại<br>
                    <input type="text" name="tenloai" id="ten-loai">
                </div>
                <div class="nut">
                    <input type="submit" name="themmoi" value="Thêm Mới" class="btn">
                    <input type="reset" value="Nhập Lại" class="btn">
                    <a href=" index.php?act=listdm">
                        <input type="button" value="Danh Sách" class="btn">
                    </a>
                </div>
                <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
            </form>
        </div>
    </div>
    </div>
    </div>
</section>