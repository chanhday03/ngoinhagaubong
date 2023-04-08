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
function loadall_danhsach_sp()
{
    $sql = "SELECT COUNT(id) as count FROM `product`";
    $listdssp = pdo_query($sql);
    return $listdssp;
}
function loadall_danhsach_user()
{
    $sql = "SELECT COUNT(id) as count FROM `users`";
    $listdsuser = pdo_query($sql);
    return $listdsuser;
}
function loadall_danhsach_comment()
{
    $sql = "SELECT COUNT(id) as count FROM `comment`";
    $listdscomment = pdo_query($sql);
    return $listdscomment;
}
function loadall_danhsach_feedback()
{
    $sql = "SELECT COUNT(id) as count FROM `feedback`";
    $listdsfeedback = pdo_query($sql);
    return $listdsfeedback;
}