<?php 
function insert_product($tensp,$motasp,$hinh,$giasp,$sizesp,$khuyenmai,$iddm){
    $sql = "INSERT INTO `product`( `productName`, `productDesc`, `productImage`, `productPrice`, `productSize`, `productPromotion`, `category_id`) VALUES ('$tensp','$motasp','$hinh',$giasp,'$sizesp','$khuyenmai',$iddm)";
    pdo_execute($sql);
}
function delete_product($id){
    $sql = "DELETE FROM product WHERE id='$id'";
    pdo_execute($sql);
}
function loadall_product_home(){
    $sql = "SELECT * FROM product WHERE 1 ORDER BY id DESC LIMIT 0,15" ; 
    $listproduct =  pdo_query($sql);
    return $listproduct;
}

function loadall_product_top10(){
    $sql = "SELECT * FROM product WHERE 1 ORDER BY productView DESC LIMIT 0,10" ; 
    $listproduct =  pdo_query($sql);
    return $listproduct;
}
function loadall_product($kyw="",$iddm=0){
    $sql = "SELECT * FROM product WHERE 1 " ; 
    if($kyw != "" ){
        $sql .= "  and productName like '%".$kyw."%'"; 
    }
    if($iddm >0 ){
     $sql .= " and category_id = '".$iddm."'"; 
    } 
    $sql .=" ORDER BY id DESC ";
    $listproduct = pdo_query($sql); 
    return $listproduct; 
} 
    function load_ten_dm($iddm){ 
        if($iddm > 0 ) { 
            $sql = "SELECT * FROM category WHERE id=".$iddm; 
            $dm = pdo_query_one($sql); 
            extract($dm); 
            return $categoryName; 
        }else{ 
            return ""; 
        } 
    } 
    function loadone_product($id){ 
        $sql ="SELECT * FROM product WHERE id=".$id; 
        $sp = pdo_query_one($sql); 
        return $sp; 
    }
    function load_product_cungloai($id,$category_id){ 
        $sql = "SELECT * FROM product WHERE category_id = ".$category_id." AND id <> ".$id; 
        $listproduct = pdo_query($sql); 
        return $listproduct; 
    } 
    function update_product($id,$iddm,$tensp,$motasp,$giasp,$sizesp,$khuyenmai,$hinh){ 
        $sql = "UPDATE product SET category_id='$iddm' , productName='$tensp', productDesc='$motasp' , productPrice=$giasp , productSize='$sizesp',productPromotion='$khuyenmai' ,productImage='$hinh'WHERE id=".$id; pdo_execute($sql);
    }
?>