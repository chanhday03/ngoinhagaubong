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
                <th>Mật khẩu</th>
                <th>ảnh</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
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
                    <td class=listuser>' . $password. '</td>
                    <td><img src="../upload/'.$pp.'" alt="" width="100px" height="50px"></td>
                    <td>' .$email.'</td>
                    <td>' . $adress . '</td>
                    <td>' . $phone . '</td>
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

        .listuser {
            max-width: 250px;
            word-wrap: break-word;
        }
    </style>
</body>