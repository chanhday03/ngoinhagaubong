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
                    <h1>Add New Category</h1>
                </div>
                <form action="index.php?act=adddm" method="post" onsubmit="return check()">
                    <div class="">ID<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class=""> Name Category<br>
                        <input type="text" name="tenloai" id="ten-loai">
                    </div>
                    <div class="nut">
                        <input type="submit" name="themmoi" value="Add New" class="btn">
                        <input type="reset" value="Reset" class="btn">
                        <a href=" index.php?act=listdm">
                            <input type="button" value="List Category" class="btn">
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