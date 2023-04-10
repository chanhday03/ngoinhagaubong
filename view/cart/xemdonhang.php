<p>Đơn hàng của bạn</p>
<?php
	$code_cart = $_GET['code'];
    $listDonHang = loadall_donhang($code_cart);
    // echo'<pre>';
    // var_dump( $listDonHang);
    // die;
?>
<table class="table table-hover table-bordered">
    <thead class="bg-light">
        <tr>
            <th>Id</th>
            <th>Mã đơn hàng</th>
            <th>Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Đơn Giá</th>
            <th>SIZE</th>
            <th>Khuyến Mãi</th>
            <th>Thành Tiền</th>
            
        </tr>

    </thead>
    <tbody>
        <?php 
               
               $i=0;
               $thanhTien=0;
               $tongTien = 0;
                foreach( $listDonHang as $row):
                  $thanhTien =(($row['productPrice']-($row['productPrice']*($row['productPromotion']/100)))*$row['soluongmua'] );
                  $i++;
                  $tongTien+=$thanhTien;
                    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['code_cart'] ?></td>
            <td><img class="w-[50px]" src="upload/<?php echo $row['productImage'] ?>" alt="Lỗi ảnh"></td>
            <td><?php echo $row['productName'] ?></td>
            <td><?php echo $row['soluongmua'] ?></td>
            <td><?php echo $row['productPrice'] ?></td>
            <td>
                <?php echo $row['productSize'] ?>
            </td>
            <td> <?php echo $row['productPromotion'] ?></td>
            <td >
            <?php echo  number_format($thanhTien,0,',','.')?><sup>vnđ</sup>
            </td>
        </tr>
        <?php endforeach
        ?>
        <?php
        $tongTienDonHang=0;
        $ship=0;
        if($tongTien<300000){
            $ship=30000;
            $tongTienDonHang=$tongTien+$ship;}
        else{
            $tongTienDonHang=$tongTien;
            $ship=0; 
        }?>
         <tr>
         <td>Tổng tiền Đơn Hàng</td>
         <td><span class="text-[red]">(Đã tính cả phí ship <?=$ship?> VNĐ)</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
        <td></td>
        <td id="tongtien" colspan="2" class="text-[red] font-black flex justify-center"> <?php echo  number_format($tongTienDonHang,0,',','.')?><sup>vnđ</sup></td>
        <?php
        $xoadh = '<a href="index.php?act=deleteDonHang&code_cart='.$row['code_cart'].'&id_shipping='.$_GET['id_shipping'].'"> <button class="btn_submit"   type="submit" name="huyDonHang" value="huyDonHang"><i class=" fa-solid fa-trash"></button>';
        if($row['cart_status']==0){
             echo '<td class="text-green-800 text-[24px] font-black hover:text-[26px]"  >'.$xoadh.'</td> ';
        }else echo '<td></td>';
        ?>    
    </tr>
        
    </tbody>
</table>
<style>
  
</style>