<?php
function loadall_danhsach_dm()
{
    $sql = "SELECT category.id as madm , category.categoryName as tendm , count(product.id) as countsp ,
min(product.productPrice) as minprice, max(product.productPrice) as maxprice , avg(product.productPrice) as avgprice ";
    $sql .= "FROM product left join category on category.id = product.category_id ";
    $sql .= "group by category.id order by category.id desc";
    $listdsdm = pdo_query($sql);
    return $listdsdm;
}
function Count_sp()
{
    $sql = "SELECT COUNT(id) as count FROM `product`";
    $Countsp = pdo_query($sql);
    return $Countsp;
}
function Count_user()
{
    $sql = "SELECT COUNT(id) as count FROM `users`";
    $Countuser = pdo_query($sql);
    return $Countuser;
}
function Count_comment()
{
    $sql = "SELECT COUNT(id) as count FROM `comment`";
    $Countcomment = pdo_query($sql);
    return $Countcomment;
}
function Count_feedback()
{
    $sql = "SELECT COUNT(id) as count FROM `feedback`";
    $Countfeedback = pdo_query($sql);
    return $Countfeedback;
}
function count_Cart(){
    $sql = "SELECT COUNT(id_cart) as count FROM `tbl_cart`";
    $CountCart = pdo_query($sql);
    return $CountCart;
}