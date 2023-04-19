<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>Danh Sách Tài Khoản</h1>
                </div>
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Tài Khoản</th>
                        <th>Mật Khẩu</th>
                        <th>Ảnh</th>
                        <th>Email</th>
                        <th>Địa Chỉ</th>
                        <th>SĐT</th>
                        <th>Vai Trò</th>
                        <th>Hoạt Động</th>
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
                               <a onclick="return confirmDesactiv1() "  href="'.$xoatk.'"><i class="fa-solid fa-trash"></i></a>
                            </td>
                            </tr>';
                            }
                        
                            if(isset($_POST["capNhatVaiTro"])){
                                $id = $_POST["code_cart"];
                                $role = $_POST["cart_status"];
                                update_role($role,$id);
                               
                              
                             
                            }
                           ?>
                </table>
                <div class="">
                <!-- index.php?act=update_Role -->
                <form action="" method="POST" onsubmit="return confirmDesactiv()">
                        <div class="mb-3">
                            <label class="form-label">Điền Mã Người dùng</label>
                            <input class="user_id form-control" type="text"  name="code_cart" value="" required="" autocomplete="off" onkeyup="user_id()" placeholder="Code Cart">
                        </div>
                        <div>
                            <div class="mb-3">
                                <label class="form-label">Người dùng</label>
                                <input type="radio" class=" form-control user_role" name="user_role" value=""  required="" onclick="setInputValue_1()">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Admin</label>
                                <input type="radio" class=" form-control user_role" name="user_role" value="" onclick="setInputValue_2() ">
                            </div>
                           
                        </div>
                        <input id="user_role" type="hidden" name="code_cart" value="">
                        <input class="cart_status2"  type="hidden" name="cart_status" value="">
                        <button type="submit" name="capNhatVaiTro" value="capNhatVaiTro" class="btn" >Cập nhật Vai Trò Người Dùng</button>
                        <button type="button" class="btn" onclick="tai_lai_trang()">Tải lại trang</button>
                       
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->

<script>
   function confirmDesactiv() {
    return confirm("Bạn có muốn thay đổi vai trò người dùng không?");
}
function confirmDesactiv1() {
    return confirm("Xóa Tài Khoản?");
}
     function tai_lai_trang(){
            location.reload();
        }
    const form = document.querySelector('.formbtn');
    const cart_status = document.querySelector('.cart_status');
    const hidden = document.querySelector('.cart_status2');
    function setInputValue_1() {
    hidden.setAttribute("value", "0");
    alert('Đã chọn trạng thái "Người Dùng"');
}

function setInputValue_2() {
    hidden.setAttribute("value", "1");
    alert('Đã chọn trạng thái "ADMIN"');
}
// function alert2(){
 
//             alert("Đã cập nhật vai trò thành công, hãy Tải lại trang");
    
        
//     } 
function user_id(){
        const user_id = document.querySelector('.user_id').value;
        document.getElementById('user_role').value = user_id;
        }
</script>
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
