<?php
    if(is_array($dm)){
    extract($dm);
    }
?>
<section class="main">
    <div class="attendance">
        <div class="attendance-list">
            <h1>Cập nhật danh mục</h1>
        </div>
        <div class="table">
            <form action="index.php?act=updatedm" method="post" onsubmit="return checkUpdate()">
                <div class="row mb10"> Mã Loại<br>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="row mb10"> Tên Loại<br>
                    <input type="text" name="tenloai" id="ten-loai"
                        value="<?php if(isset($categoryName) && ($categoryName != "")) echo $categoryName ; ?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id ; ?>">
                    <input type="submit" name="capnhat" value="Cập Nhật" class="btn">
                    <input type="reset" value="Nhập Lại" class="btn">
                    <a href="index.php?act=listdm">
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
    </div>
</section>