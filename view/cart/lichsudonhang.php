<h3>Lịch sử đơn hàng</h3>
<?php
	$id_user = $user['id'];   
    $sql_get_cart = select_Cart($id_user);
?>
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
            <th>In</th>
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
            <td><?php echo $i ?></td>
            <td><?php echo $row['code_cart'] ?></td>
            <td><?php echo $row['fname'] ?></td>
            <td><?php echo $row['adress'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td>
                <?php if($row['cart_status']==0){
    		echo '<a href="">Đang xử lý</a>';
            	}elseif($row['cart_status']==1){
    		echo 'Đã xử lý';
         	}elseif($row['cart_status']==2){
                echo 'Đang giao hàng';
                 }else{
                    echo 'Đã hoàn thành';
                 }
            	?>
            </td>
            <td><?php echo $row['cart_date'] ?></td>
            <td>
                <a href=" ?>">Xem đơn hàng</a>
            </td>
            <td>
                <a href="?>">In Đơn hàng</a>
            </td>
            <td> <?php echo $row['cart_payment'] ?></td>
            
            <?php  } 
            ?>

      
    </tbody>
</table>
