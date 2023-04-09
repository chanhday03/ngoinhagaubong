<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>List Product</h1>
                </div>
                <div class="head-header">
                    <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw" value="">
                        <select name="iddm">
                            <option value="0" selected>Tất cả</option>
                            <?php 
                            foreach ( $listcategory as $category) {
                                extract($category);
                                echo ' <option value="'.$id.'">'.$categoryName.'</option>';
                            }
                            ?>
                        </select>
                        <input type="submit" name="listok" value="Go" class="go">

                    </form>
                    <div class="">
                        <a href="index.php?act=addsp">
                            <input type="button" value="Add New" class="btn">
                        </a>
                    </div>
                </div>

                <table>
                    <tr>
                        <th></th>
                        <th>ID Product</th>
                        <th>Name Product</th>
                        <th>Desc Product</th>
                        <th>Image Product</th>
                        <th>Price Product</th>
                        <th>Size Product</th>
                        <th>Promotion Product</th>
                        <th>View Product</th>
                        <th>Action</th>
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
                    <td>'.$productDesc.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$productPrice.'</td>
                    <td>'.$productSize.'</td>
                    <td>'.$productPromotion.' %</td>
                    <td>'.$productView.'</td>
                    <td>
                        <a href="'.$suasp.'"><i class="fa-solid fa-pen"></i></a>    
                        <a href="'.$xoasp.'"><i class="fa-solid fa-trash"></i></a>               
                    </td>
                </tr>';
                }
             ?>
                </table>
            </div>
        </section>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->