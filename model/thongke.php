<?php
function loadall_thongke()
{
    $sql = "SELECT category.id as madm , category.categoryName as tendm , count(product.id) as countsp ,
min(product.productPrice) as minprice, max(product.productPrice) as maxprice , avg(product.productPrice) as avgprice ";
    $sql .= "FROM product left join category on category.id = product.category_id ";
    $sql .= "group by category.id order by category.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}