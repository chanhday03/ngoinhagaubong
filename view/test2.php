<?php
echo '<pre>';
var_dump($_POST);
var_dump($_FILES);
$target_dir = "../upload/";
if(isset($_FILES['hinh1']['name']) AND !empty($_FILES['hinh1']['name'])) {
    $hinh1 = basename($_FILES['hinh1']['name']);
    $target_file1 = $target_dir . $hinh1;
    move_uploaded_file($_FILES["hinh1"]["tmp_name"], $target_file1);
}else{
    $hinh1=$_POST["old-image"];
}
if(isset($_FILES['hinh2']['name']) AND !empty($_FILES['hinh2']['name'])) {
    $hinh2 = basename($_FILES['hinh2']['name']);
    $target_file1 = $target_dir . $hinh2;
    move_uploaded_file($_FILES["hinh2"]["tmp_name"], $target_file1);
}else{
    $hinh2=$_POST["old-image"];
}
if(isset($_FILES['hinh3']['name']) AND !empty($_FILES['hinh3']['name'])) {
    $hinh3 = basename($_FILES['hinh3']['name']);
    $target_file1 = $target_dir . $hinh3;
    move_uploaded_file($_FILES["hinh3"]["tmp_name"], $target_file1);
}else{
    $hinh3=$_POST["old-image"];
}
if(isset($_FILES['hinh4']['name']) AND !empty($_FILES['hinh4']['name'])) {
    $hinh4 = basename($_FILES['hinh4']['name']);
    $target_file1 = $target_dir . $hinh4;
    move_uploaded_file($_FILES["hinh4"]["tmp_name"], $target_file1);
}else{
    $hinh4=$_POST["old-image"];
}
$id_product=$_POST["id_product"];
?>