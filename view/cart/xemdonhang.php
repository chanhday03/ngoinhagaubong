<p>Đơn hàng của bạn</p>
<?php
	$code_cart = $_GET['code_cart'];
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
            <th>Mã Sản Phẩm</th>
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
                //   $spadd = ['id'=>$row['id_product'],'soLuong'=>$row['soluongmua']];
                //   $spnew =[]; 
                //   array_push( $spnew,$spadd);  
                //   var_dump( $spnew);
                    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['code_cart'] ?></td>
            <td><?php echo $row['id_product'] ?></td>
            <td><img class="w-[50px]" src="upload/<?php echo $row['productImage'] ?>" alt="Lỗi ảnh"></td>
            <td><?php echo $row['productName'] ?></td>
            <td><?php echo $row['soluongmua'] ?></td>
            <td><?php echo $row['productPrice'] ?></td>
            <td>
                <?php echo $row['productSize'] ?>
            </td>
            <td> <?php echo $row['productPromotion'] ?></td>
            <td>
                <?php echo  number_format($thanhTien)?><sup>vnđ</sup>
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
            <td></td>
            <td id="tongtien" colspan="2" class="text-[red] font-black flex justify-center">
                <?php echo  number_format($tongTienDonHang)?><sup>vnđ</sup></td>
            <?php
        $xoadh = '
        <form action="" method="post" onsubmit="return confirmDesactiv()">
        <input type="hidden" name="id_product" value="">
        <button type="submit" name="HuyDonHang" value="HuyDonHang" class="" > Hủy Đơn Hàng </button>
         </form>';
        if($row['cart_status']==0){
             echo '<td class="text-green-800 text-[18px] font-black "  >'.$xoadh.'</td> ';
        }else echo '<td></td>';
        if(isset($_POST["HuyDonHang"])){
            foreach($listDonHang as $row){
                $soLuong=0;
			    $soLuongsp=0;
			    $id_product = $row['id_product'];
				$soluongmua = intval($row['soluongmua']);
				// var_dump($id_product);
                // var_dump($soluongmua);
                $listNumber=get_Number_Product($id_product);
                foreach($listNumber as $row){
					$soLuongsp=$row["productNumber"];
				}
                $soLuong = $soLuongsp + $soluongmua;
                update_Number_Product($id_product,$soLuong);
              
            }
            // var_dump($spnew);
            $id_shipping = $_GET["id_shipping"];
            $code_cart=$_GET["code_cart"];
            delete_Cart_Details ($code_cart);
            delete_Cart ($code_cart);
            delete_shipping($id_shipping);
        
            header("location:index.php?act=lichsudonhang");
        }
   
        ?>
        </tr>
        <!-- index.php?act=deleteDonHang&code_cart='.$row['code_cart'].'&id_shipping='.$_GET['id_shipping'].' -->
    </tbody>
</table>
<style>

</style>
<script>
function confirmDesactiv() {
    return confirm("Bạn có muốn hủy đơn hàng?");
}

function alert1() {
    alert("Đã Hủy Đơn Hàng Thành Công");
}
</script>