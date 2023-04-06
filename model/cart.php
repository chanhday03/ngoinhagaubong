<?php
function loadall_thongke(){
    $sql="select category.id as madm, category.categoryName as tendm, count(product.id) as countsp , min(product.productPrice) as minprice, max(product.productPrice) as maxprice, avg(product.productPrice) as avgprice";
    $sql.=" from product left join category on category.id=product.category_id";
    $sql.=" group by category.id order by category.id desc";
    $listthongke=pdo_query($sql);
    return $listthongke;
}
?>