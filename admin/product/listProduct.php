<section class="main">
    <div class=" attendance">
        <div class="attendance-list">
            <h1>Danh sách sản phẩm</h1>
        </div>
        <div class="attendance-header">
            <form action="index.php?act=listsp" method="post">
                <input class="header-search" type="text" name="kyw" value="">
                <select name="iddm" class="header-select">
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
            <a href="index.php?act=addsp">
                <input type="button" value="Nhập thêm" class="btn">
            </a>
        </div>
        <section class="main">
            <div class="attendance">
                <div class="attendance-list">
                    <table>
                        <tr>
                            <th></th>
                            <th>ID Product</th>
                            <th>Name Product</th>
                            <th>Desc Product</th>
                            <th>Image Product</th>
                            <th>Price Product</th>
                            <th>Size Product</th>
                            <th>Khuyến mãi Product</th>
                            <th>Action</th>
                        </tr>
                        <?php 
                    foreach ($listproduct as $product){
                    extract($product);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath="../upload/".$productImage;
                    if(is_file($hinhpath)){
                        $hinh = "<img src=' ".$hinhpath." ' height='80' > " ;
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
                        <td></td>
                        <td>
                            <a href="'.$suasp.'"><i class="fa-solid fa-pen"></i></a>    
                            <a href="'.$xoasp.'"><i class="fa-solid fa-trash"></i></a>               
                        </td>
                    </tr>';
                    }
                 ?>
                    </table>
                </div>

                </form>
            </div>
        </section>
    </div>
    </div>
    </div>
</section>

<body>
    <style>
        .fa-trash {
            color: red;
            font-size: 30px;
        }

        .fa-pen {
            color: greenyellow;
            font-size: 30px;
            margin-right: 30px;
        }
    </style>
</body>