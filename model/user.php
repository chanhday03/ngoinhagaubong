<?php
function insert_user($email,$user,$pass){
    $sql="INSERT INTO user(email,userName,passWord) values ('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user , $pass){
    $sql = "SELECT * FROM user WHERE user='".$user."' AND passWord='".$pass."' " ;
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
    $sql="SELECT * FROM users ORDER BY id DESC";
    $listuser=pdo_query($sql);
    return $listuser;
}
function delete_user($id)
{
    $sql = "delete from users where id=" . $id;
    pdo_execute($sql);
}
function getUserById($id, $db){
    $sql = "SELECT * FROM users WHERE id = ?";
	$stmt = $db->prepare($sql);
	$stmt->execute([$id]);
    
    if($stmt->rowCount() == 1){
        $user = $stmt->fetch();
        return $user;
    }else {
        return 0;
    }
}
?>
