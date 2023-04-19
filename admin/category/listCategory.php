<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>Danh sách Danh Mục</h1>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Têm Danh Mục </th>
                            <th>Hoạt Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listcategory as $category) {
                            extract($category);
                            $suadm = "index.php?act=suadm&id=" . $id;
                            $xoadm = "index.php?act=xoadm&id=" . $id;
                            echo '<tr>
                            <td><input type="checkbox"></td>
                            <td>' . $id . '</td>
                            <td>' . $categoryName . '</td>
                            <td>
                                <a href="' . $suadm . '"><i class="fa-solid fa-pen"></i></a>    
                                <a  onclick="return confirmDesactiv()" href="' . $xoadm . '" ><i class="fa-solid fa-trash"></i></a>  
                            </td>
                        </tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <div class="">
                    <a href="index.php?act=adddm">
                        <input type="button" value="Thêm mới" class="btn">
                    </a>
                </div>
            </div>
        </section>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->
<script>
    function confirmDesactiv() {
        return confirm("Xóa Danh Mục?");
    }
</script>