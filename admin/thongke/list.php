<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>List Statistical</h1>
                </div>
                <table>
                    <tr>
                        <th>ID Category</th>
                        <th>Name Category</th>
                        <th>Quantity</th>
                        <th>Max Price</th>
                        <th>Min Price</th>
                        <th>Average price</th>
                    </tr>
                    <?php
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo ' <tr>
                    <td>' . $madm . '</td>
                    <td>' . $tendm . '</td>
                    <td>' . $countsp . '</td>
                    <td>' . $maxprice . '</td>
                    <td>' . $minprice . '</td>
                    <td>' . $avgprice . '</td>
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