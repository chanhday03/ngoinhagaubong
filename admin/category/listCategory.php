<section class="main">
    <section class="attendance">
        <div class="attendance-list">
            <h1>List Category</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Name </th>
                        <th>Action</th>
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
                            <a href="' . $xoadm . '" ><i class="fa-solid fa-trash"></i></a>  
                        </td>
                    </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</section>

<body>
    <style>
        .fa-trash {
            color: red;
            font-size: 25px;
        }

        .fa-pen {
            color: greenyellow;
            font-size: 25px;
            margin-right: 30px;
        }
    </style>
</body>