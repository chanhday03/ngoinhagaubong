<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>List User</h1>
                </div>
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Fname</th>
                        <th>UserName</th>
                        <th>Password</th>
                        <th>Image</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                           foreach ($listuser as $user) {
                            extract($user);
                            if($role==0){
                                $role="Người Dùng";
                            }elseif($role==1){
                                $role = "ADMIN";
                            }
                            $suatk = "index.php?act=suatk&id=" . $id;
                            $xoatk = "index.php?act=xoatk&id=". $id;
                            echo '<tr>
                            <td><input type="checkbox"></td>
                            <td>' . $id . '</td>
                            <td>'.$fname.'</td>
                            <td>' . $username . '</td>
                            <td id="pass">' . $password. '</td>
                            <td><img src="../upload/'.$pp.'" alt="Lỗi ảnh" /></td>
                            <td>' . $email. '</td>
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
                <!-- <div class="">
                    <a href="index.php?act=listUser">
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
        .fa-trash {
            color: red;
            font-size: 30px;
        }

        .fa-pen {
            color: greenyellow;
            font-size: 30px;
            margin-right: 30px;
        }

        img {
            height: 50px;
            width: 40px;
        }

        #pass {
            max-width: 250px;
            word-wrap: break-word;
        }
    </style>
</body>