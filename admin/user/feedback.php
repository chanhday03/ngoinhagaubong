<section class="main">
    <div class=" attendance">
        <div class="attendance-list">
            <h1>Danh sách User</h1>
        </div>
        <table>
            <tr>
                <th></th>
                <th>Mã Feedback</th>
                <th>Mã người người dùng</th>  
                <th>Mood</th>
                <th>Note</th>
                <th>Thời gian</th>
                <th>Action</th>
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
                       <a href="'.$xoafb.'"><i class="fa-solid fa-trash"></i></a>
                    </td>
                    </tr>';
                    }
                 ?>
        </table>
        <div class="row mb10">
            <a href="index.php?act=feedback">
                <input type="button" value="Nhập thêm" class="btn">
            </a>
        </div>
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
    img{
        height:50px;
        width: 40px;
    }
    #note{
        max-width: 250px;
    word-wrap: break-word;
    }
    </style>
</body>