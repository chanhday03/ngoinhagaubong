<?php
function loadone_Galery ($id_product){
    $sql = "SELECT * FROM galery WHERE product_id=" . $id_product;
    $galery = pdo_query_one($sql);
    return $galery;
}
function delete_Galery ($id_product){
    $sql ="DELETE FROM `galery` WHERE product_id=$id_product";
    pdo_execute($sql);
}
function update_Galery($id_product,$imag1,$imag2,$imag3,$imag4){
 $sql="UPDATE `galery` SET `image1`='$imag1',`image2`='$imag2',`image3`='$imag3',`image4`='$imag4' WHERE `product_id`='$id_product'";
        pdo_execute($sql);
}
function insert_Galery($id_product,$imag1,$imag2,$imag3,$imag4){
    $sql="INSERT INTO `galery`( `product_id`, `image1`, `image2`, `image3`, `image4`) 
                      VALUES ('$id_product','$imag1','$imag2','$imag3','$imag4')";
        pdo_execute($sql);
}
function get_Number_Product($idsp){
    $sql="SELECT `productNumber` FROM `product` WHERE id='$idsp'";
    $soluongsp = pdo_query($sql);
    return $soluongsp;
}
function update_Number_Product($idsp,$soluong){
    $sql="UPDATE `product` SET`productNumber`='$soluong' WHERE  `id`='$idsp'";
    pdo_execute($sql);
}
function insert_product($tensp, $motasp, $hinh, $giasp, $sizesp, $khuyenmai,$viewsp, $iddm,$soluong)
{
    $sql = "INSERT INTO `product`( `productName`, `productDesc`, `productImage`, `productPrice`, `productSize`, `productPromotion`, `productView`, `category_id`, `productNumber`)
                               VALUES ('$tensp',' $motasp','$hinh','$giasp','$sizesp','$khuyenmai','$viewsp','$iddm','$soluong')";
    return pdo_execute_return_lastInsertId($sql);
}
function delete_product($id)
{
    $sql = "DELETE FROM product WHERE id='$id'";
    pdo_execute($sql);
}
function loadall_Image_Product($id_product){
    $sql = "SELECT * FROM galery WHERE product_id='$id_product' ";
    $listgalery = pdo_query($sql);
    return $listgalery;
}
function loadall_product_home()
{
    $sql = "SELECT * FROM product WHERE 1 ORDER BY id DESC LIMIT 0,15";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadall_product_top10()
{
    $sql = "SELECT * FROM product WHERE 1 ORDER BY productView DESC LIMIT 0,10";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function loadall_product($kyw = "", $iddm = 0, $size = 0)
{
    $sql = "SELECT * FROM product WHERE 1 ";
    if ($kyw != "") {
        $sql .= "  and productName like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and category_id = '" . $iddm . "'";
    }
    if ($size > 0) {
        $sql .= " and productSize = '" . $size . "'";
    }
    $sql .= " ORDER BY id DESC ";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT * FROM category WHERE id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $categoryName;
    } else {
        return "";
    }
}
function loadone_product($id)
{
    $sql = "SELECT * FROM product WHERE id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_product_cungloai($id, $category_id)
{
    $sql = "SELECT * FROM product WHERE category_id = " . $category_id . " AND id <> " . $id;
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function update_product($id, $iddm, $tensp, $motasp, $giasp, $sizesp, $khuyenmai, $hinh,$viewsp,$soluongsp)
{
    $sql = "UPDATE product SET category_id='$iddm' , productName='$tensp', productDesc='$motasp' ,
     productPrice=$giasp , productSize='$sizesp',productPromotion='$khuyenmai' ,productImage='$hinh',productView='$viewsp',productNumber='$soluongsp' WHERE id=" . $id;
    pdo_execute($sql);
}
function loadall_size()
{
    $sql = "SELECT DISTINCT productSize FROM product";
    $listsize = pdo_query($sql);
    return $listsize;
}
?>