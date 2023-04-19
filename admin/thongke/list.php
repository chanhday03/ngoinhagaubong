<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>Danh Sách Thống Kê</h1>
                </div>
                <table>
                    <tr>
                        <th>Mã Danh Mục</th>
                        <th>Tên Danh Mục</th>
                        <th>Số Lượng</th>
                        <th>Giá Cao Nhất</th>
                        <th>Giá Thấp Nhất</th>
                        <th>Giá Trung Bình</th>
                    </tr>
                    <?php
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo ' <tr>
                    <td>' . $madm . '</td>
                    <td>' . $tendm . '</td>
                    <td>' . $countsp . '</td>
                    <td>' . number_format($maxprice)  . '<sup>đ</sup></td>
                    <td>' . number_format( $minprice) . '<sup>đ</sup></td>
                    <td>' . number_format( $avgprice) . '<sup>đ</sup></td>
                </tr>';
                    }

                    ?>

                </table>
                <div class="">
                    <a href="index.php?act=adddm">
                        <a href="index.php?act=bieudo"><input type="submit" value="Xem biểu đồ" class="btn"></a>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->