<style>
.lichsumuahang {
    width: 1248px;
    gap: 50px;
    margin: 0 auto;
    margin-bottom: 50px;
}

h4 {
    font-weight: bold;
    color: brown;
    font-size: 20px;
    margin-top: 40px;
}

th {
    background-color: #a68567;
}

th:last-of-type {
    border-bottom: 2px solid #a68567;
}
</style>

<?php
	$id_user = $user['id'];   
    $sql_get_cart = select_Cart($id_user);
?>
<div class="lichsumuahang">
    <h4>Lịch sử đơn hàng</h4>
    <table class="table table-hover table-bordered">
        <thead class="bg-light">
            <tr>
                <th>Id</th>
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Tình trạng</th>
                <th>Ngày đặt</th>
                <th>Quản lý</th>

                <th>Hình thức thanh toán</th>
            </tr>

        </thead>
        <tbody>
            <?php 
               
               $i=0;
                foreach( $sql_get_cart as $row){
                    
                  $i++;
                    ?>
            <tr>
                <td>
                    <?php echo $i ?>
                </td>
                <td>
                    <?php echo $row['code_cart'] ?>
                </td>
                <td>
                    <?php echo $row['fname'] ?>
                </td>
                <td>
                    <?php echo $row['adress'] ?>
                </td>
                <td>
                    <?php echo $row['email'] ?>
                </td>
                <td>
                    <?php echo $row['phone'] ?>
                </td>
                <td class="">
                    <?php if($row['cart_status']==0){
    		echo '<p class="font-bold text-[red]">Đang xử lý</p>';
            	}elseif($row['cart_status']==1){
    		echo '<p class="font-bold text-[green]">Đã xử lý</p>';
         	}elseif($row['cart_status']==2){
                echo '<p class="font-bold text-[orange]">Đang giao hàng</p>';
                 }else{
                    echo '<p class="font-bold text-[blue]">Đã hoàn thành</p>';
                 }
            	?>
                </td>
                <td>
                    <?php echo $row['cart_date'] ?>
                </td>
                <td class="text-[green] font-bold hover:text-[red]">
                    <a
                        href="index.php?act=xemdonhang&code=<?php echo $row['code_cart'] ?>&id_shipping=<?php echo $row['id_shipping'] ?>">Xem
                        đơn hàng</a>
                </td>

                <td>
                    <?php echo $row['cart_payment'] ?>
                </td>
            </tr>
            <?php  } 
            ?>
        </tbody>
    </table>
</div>