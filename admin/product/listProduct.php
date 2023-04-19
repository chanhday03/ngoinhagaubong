<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>Danh Sách Sản Phẩm</h1>
                </div>
                <div class="head-header">
                    <form action="index.php?act=listsp" method="post">
                        <input type="hidden" name="kyw" value="">
                        <select name="iddm">
                            <option value="0" selected>Tất cả</option>
                            <?php 
                            foreach ( $listcategory as $category) {
                                extract($category);
                                echo ' <option value="'.$id.'">'.$categoryName.'</option>';
                            }
                            ?>
                        </select>
                        <input type="submit" name="listok" value="Đi" class="go">

                    </form>
                    <div class="">
                        <a href="index.php?act=addsp">
                            <input type="button" value="Thêm Mới" class="btn">
                        </a>
                        
                    </div>
                </div>

                <table>
                    <tr>
                        <th></th>
                        <th>Mã Sản Phẩm</th>
                        <th>Tên Sản Phẩm </th>
                        <th>Mô Tả</th>
                        <th>Hình Ảnh</th>
                        <th>Giá</th>
                        <th>Kích Thước</th>
                        <th>Khuyến Mãi</th>
                        <th>Lượt Xem</th>
                        <th> Số Lượng Trong Kho</th>
                        <th>Hoạt Động</th>
                    </tr>
                    <?php 
                foreach ($listproduct as $product){
                extract($product);
                $suasp = "index.php?act=suasp&id=" . $id;
                $xoasp = "index.php?act=xoasp&id=" . $id;
                $hinhpath="../upload/".$productImage;
                if(is_file($hinhpath)){
                    $hinh = "<img src=' ".$hinhpath." ' height='80'> " ;
                }else{
                    $hinh = 'No photo';
                }
                echo '<tr>
                    <td><input type="checkbox"></td>
                    <td>'.$id.'</td>
                    <td>'.$productName.'</td>
                    <td id="desc">'.$productDesc.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.number_format($productPrice) .'<sup>đ</sup></td>
                    <td>'.$productSize.' cm</td>
                    <td>'.$productPromotion.' %</td>
                    <td>'.$productView.' <i class="fa-solid fa-eye"></i></td>
                    <td>'.$productNumber.'</td>
                    <td>
                        <a  href="'.$suasp.'"><i class="fa-solid fa-pen"></i></a>    
                        <a  onclick="return confirmDesactiv()" href="'.$xoasp.'"><i class="fa-solid fa-trash"></i></a>               
                    </td>
                </tr>';
                }
             ?>
                </table>
            </div>
        </section>
    </main>
    <style>
        #desc{
            max-width: 200px;
            word-wrap: break-word;
        }
    </style>
    <!-- MAIN -->
</section>
<!-- CONTENT -->
<script>
    function confirmDesactiv() {
    return confirm("Xóa sản phẩm?");
}
</script>