<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>Danh sách vận chuyển</h1>
                </div>
                <table>
                    <tr>
                        <th></th>
                        <th>Mã vận chuyển</th>
                        <th>Họ Và Tên Của Khách Hàng</th>
                        <th>Số Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Email</th>
                        <th>Ghi Chú</th>
                        <th>Mã Người Dùng</th>
                        <!-- <th>Action</th> -->
                    </tr>

                    <?php 
                   
                           foreach ($listshipping as $shipping) {
                            extract($shipping);
                          
                            // $xoashipping = "index.php?act=xoashipping&id_shipping=". $id_shipping;
                            echo '<tr>
                            <td><input type="checkbox"></td>
                            <td>' . $id_shipping . '</td>
                            <td>' . $fname . '</td>
                            <td>' . $phone. '</td>
                            <td>' . $addres . '</td>
                            <td>' . $email . '</td>
                            <td id="note">' . $note . '</td>
                            <td>' . $id_user. '</td>
                           
                            </tr>';
                            }
                         ?>
                </table>
                <!-- 
                 <td>
                               <a href="'.$xoashipping.'"><i class="fa-solid fa-trash"></i></a>
                            </td>    
                <div class="">
                    <a href="index.php?act=feedback">
                        <input type="button" value="Add New" class="btn">
                    </a>
                </div> -->
            </div>
        </section>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->

<body>
    <style>
        img {
            height: 50px;
            width: 40px;
        }

        #note {
            max-width: 250px;
            word-wrap: break-word;
        }
    </style>
</body>