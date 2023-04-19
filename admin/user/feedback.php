<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>Danh sách góp ý</h1>
                </div>
                <table>
                    <tr>
                        <th></th>
                        <th>Mã góp ý</th>
                        <th>Mã người dùng</th>
                        <th>Cảm xúc</th>
                        <th>Ghi chú</th>
                        <th>Thời gian</th>
                        <th>Hoạt động</th>
                    </tr>

                    <?php 
                   
                           foreach ($listFeedBack as $feedback) {
                            extract($feedback);
                            $suafb = "index.php?act=suafb&id=" . $id;
                            $xoafb = "index.php?act=xoafb&id=". $id;
                            echo '<tr>
                            <td><input type="checkbox"></td>
                            <td>' . $id . '</td>
                            <td>' . $user_id . '</td>
                            <td>' . $mood. '</td>
                            <td id="note">' . $note . '</td>
                            <td>' . $created . '</td>
                            <td>
                               <a  onclick="return confirmDesactiv()" href="'.$xoafb.'"><i class="fa-solid fa-trash"></i></a>
                            </td>
                            </tr>';
                            }
                         ?>
                </table>
                <!-- <div class="">
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
<script>
    function confirmDesactiv() {
    return confirm("Xóa Góp Ý?");
}
</script>