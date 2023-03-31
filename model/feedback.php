<?php
include 'pdo.php';

// echo '<pre>';
// var_dump($_POST);die;
if(isset($_POST["user_id"])){
    $user_id = $_POST["user_id"];
    $note = $_POST["note"];
$emoji = $_POST["emoji"];
$sql =  "INSERT INTO `feedback`( `user_id`, `mood`, `note`) VALUES ($user_id,'$emoji','$note')";
pdo_execute($sql);
}else{
    $note = $_POST["note"];
    $emoji = $_POST["emoji"];
    $sql =  "INSERT INTO `feedback`(  `mood`, `note`) VALUES ('$emoji','$note')";
pdo_execute($sql);
}


   

header("location:../index.php?act=feedback");
?>