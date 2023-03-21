<?php
function insert_user($email,$user,$pass){
    $sql="INSERT INTO user(email,userName,passWord) values ('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user , $pass){
    $sql = "SELECT * FROM user WHERE user='".$userName."' AND passWord='".$pass."' " ;
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_user($id,$user,$pass,$email,$tel,$address){
    $sql = "UPDATE user SET userName='".$user."' ,  passWord='".$pass."' , email='".$email."' , tel='".$tel."' , address='".$address."' WHERE id=".$id;
    pdo_execute($sql);
}
function checkemail($email){
    $sql="SELECT * FROM user WHERE email='".$email."'";
    $sp =  pdo_query_one($sql);
    return $sp;
}
function loadall_user(){
    $sql="SELECT * FROM user ORDER BY id DESC";
    $listuser=pdo_query($sql);
    return $listuser;
}
function delete_user($id)
{
    $sql = "delete from user where id=" . $id;
    pdo_execute($sql);
}
?>