<?php 
function insert_category($tenloai){
    $sql = "INSERT INTO category(categoryName) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function delete_category($id){
    $sql = "DELETE FROM category WHERE id=" .$id;
    pdo_execute($sql);
}
function loadall_category(){
    $sql = "SELECT * FROM category ORDER BY id DESC ";
    $listcategory =  pdo_query($sql);
    return $listcategory;
}
function loadone_category($id){
    $sql = "SELECT * FROM category WHERE id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_category($id,$tenloai){
    $sql = "UPDATE category SET categoryName='".$tenloai."' WHERE id=".$id;
    pdo_execute($sql);
}
?>