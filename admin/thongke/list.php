<section class="main">
    <div class=" attendance">
        <div class="attendance-list">
            <h1>Thống kê</h1>
        </div>
        <table>
            <tr>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>SL sản phẩm</th>
                <th>Giá cao nhất</th>
                <th>Giá thấp nhất</th>
                <th>Giá trung bình</th>
                
            </tr>
            <?php
                foreach($listthongke as $thongke){
                    extract($thongke);
                    echo '<tr>
                        <td>' . $madm . '</td>
                        <td>'.$tendm.'</td>
                        <td>' . $countsp . '</td>
                        <td>' .$maxprice.'</td>
                        <td>' . $minprice . '</td>
                        <td>' . $avgprice . '</td>                        
                        </tr>';
                }
                
                //    foreach ($listuser as $user) {
                //     extract($user);
                //     $suatk = "index.php?act=suatk&id=" . $id;
                //     $xoatk = "index.php?act=xoatk&id=". $id;
                //     echo '<tr>
                //     <td><input type="checkbox"></td>
                //     <td>' . $id . '</td>
                //     <td>'.$fname.'</td>
                //     <d>' . $username . '</td>
                //     <td class=listuser>' . $password. '</td>
                //     <td><img src="../upload/'.$pp.'" alt="" width="100px" height="50px"></td>
                //     <td>' .$email.'</td>
                //     <td>' . $adress . '</td>
                //     <td>' . $phone . '</td>
                //     <td>' . $role . '</td>
                //     <td>
                //        <a href="'.$xoatk.'"><i class="fa-solid fa-trash"></i></a>
                //     </td>
                //     </tr>';
                //     }
                 ?>
        </table>
        </form>
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
    .listuser{
        max-width: 250px;
        word-wrap: break-word;
    }
    </style>
</body>