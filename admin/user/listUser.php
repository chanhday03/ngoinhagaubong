<section class="main">
    <div class=" attendance">
        <div class="attendance-list">
            <h1>Danh sách User</h1>
        </div>
        <table>
            <tr>
                <th></th>
                <th>Mã tài khoản</th>
                <th>Tên người dùng</th>
                <th>Tên đăng nhập</th>
                <th>Email</th>
                <th>Mật khẩu</th>
                <th>Hình ảnh</th>
                <th>Điện thoại</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
                <th>Action</th>
            </tr>
            <?php 
                   foreach ($listuser as $user) {
                    extract($user);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=". $id;
                    echo '<tr>
                    <td><input type="checkbox"></td>
                    <td>' . $id . '</td>
                    <td>'.$fname.'</td>
                    <td>' . $username . '</td>
                    <td>' . $email. '</td>
                    <td id="pass">' . $password. '</td>
                    <td><img src="../upload/'.$pp.'" alt="Lỗi ảnh" /></td>
                    <td>' . $adress . '</td>
                    <td>' . $phone. '</td>
                    
                    <td>' . $role . '</td>
                    <td>
                       <a href="'.$xoatk.'"><i class="fa-solid fa-trash"></i></a>
                    </td>
                    </tr>';
                    }
                 ?>
        </table>
        <div class="row mb10">
            <a href="index.php?act=listuser">
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
    #pass{
        max-width: 300px;
    word-wrap: break-word;
    }
    </style>
</body>