<?php
function insert_binhluan($description, $user_id, $product_id, $time)
{
    $sql = "insert into comment(description,user_id,product_id,time)  values ('$description', '$user_id', '$product_id', '$time')";
    pdo_execute($sql);
}

function delete_binhluan($product_id){
    $sql=" delete from binhluan where id=".$id;
    pdo_execute($sql);
}

function get_binhluan($product_id)
{
    $sql = "select * from comment where 1";
    if ($product_id>0) $sql .=" AND product_id='".$product_id."'";
    $sql.=" order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
