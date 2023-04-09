<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <section class="table-data">
            <div class="table-box">
                <div class="head">
                    <h1>List Order</h1>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Code Cart</th>
                            <th>Tên khách hàng</th>
                
                            <th>ID Product</th>
                            <th>ID_Ship</th>
                            <th>Số Lượng Mua</th>
                            <th>Cart Status</th>

                            <th>Cart Payment</th>
                            <th>Note</th>
                            <th>Cart Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=0;
                            $sql_get_cart_Details = select_Cart_Details();
                            foreach( $sql_get_cart_Details as $row):
                           ?>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><?php echo $i?></td>
                            <td><?php echo $row['code_cart'] ?></td>
                            <td><?php echo $row['fname'] ?></td>
                            <td><?php echo $row['id_product'] ?></td>
                            <td><?php echo $row['id_shipping'] ?></td>
                            <td><?php echo $row['soluongmua'] ?></td>
                            <td><span class="status completed"> <?php if($row['cart_status']==0){
    		                   echo '<a href="">Đang xử lý</a>';
                              	}elseif($row['cart_status']==1){
    		                  echo 'Đã xử lý';
                              	}elseif($row['cart_status']==2){
                              echo 'Đang giao hàng';
                             }else{
                                  echo 'Đã hoàn thành';
                               }
                            	?></span></td>
                            <td><?php echo $row['cart_payment'] ?></td>
                            <td><?php echo $row['note'] ?></td>
                            <td><?php echo $row['cart_date'] ?></td>

                        </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
                <div class="">
                    <form action="index.php?act=updatestatus" method="POST" >
                        <div class="mb-3">
                            <label class="form-label">Điền Code Cart muốn cập nhật trạng thái</label>
                            <input class="codecart form-control" type="text"  name="code_cart" value="" required="" onkeyup="codeCart()" placeholder="Code Cart">
                        </div>
                        <div>
                            <div class="mb-3">
                                <label class="form-label">Đang xử lý</label>
                                <input type="radio" class=" form-control cart_status" name="cart_status" value=""  required="" onclick="setInputValue_1()">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Đã xử lý</label>
                                <input type="radio" class=" form-control cart_status" name="cart_status" value="" onclick="setInputValue_2() ">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Đang Giao Hàng</label>
                                <input type="radio" class=" form-control cart_status" name="cart_status" value=""  onclick="setInputValue_3()">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Đã Hoàn Thành</label>
                                <input type="radio" class=" form-control cart_status" name="cart_status" value=""  onclick="setInputValue_4()">
                            </div>
                        </div>
                        <input id="code_cart2" type="hidden" name="code_cart" value="">
                        <input class="cart_status2"  type="hidden" name="cart_status" value="">
                        <button type="submit" name="capNhatTrangThaiDonHang" value="capNhatTrangThaiDonHang" class="btn">Cập nhật trạng thái đơn hàng</button>
                       
                    </form>

                </div>
            </div>
        </section>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->
<script>
    const form = document.querySelector('.formbtn');
    const cart_status = document.querySelector('.cart_status');
    const hidden = document.querySelector('.cart_status2');
    function setInputValue_1() {
    hidden.setAttribute("value", "0");
    alert('Đã chọn trạng thái "Đang Xử Lý"');
}

function setInputValue_2() {
    hidden.setAttribute("value", "1");
    alert('Đã chọn trạng thái "Đã Xử Lý"');
}

function setInputValue_3() {
    hidden.setAttribute("value", "2");
    alert('Đã chọn trạng thái "Đang Giao Hàng"');
}

function setInputValue_4() {
    hidden.setAttribute("value", "3");
    alert('Đã chọn trạng thái "Đã Hoàn Thành"');
}
function codeCart(){
        const codecart = document.querySelector('.codecart').value;
        document.getElementById('code_cart2').value = codecart;
        }
</script>