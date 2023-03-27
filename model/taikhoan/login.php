<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "ngoinhagaubong";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}
?>
<?php 
session_start();

if(isset($_POST['uname']) && 
   isset($_POST['pass'])){

   

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "uname=".$uname;
    
    if(empty($uname)){
    	$em = "Tên người dùng là bắt buộc";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Mật khẩu là bắt buộc";
    	header("Location: ../login.php?error=$em&$data");
	    exit;
    }else {

    	$sql = "SELECT * FROM users WHERE username = ?";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$uname]);

      if($stmt->rowCount() == 1){
          $user = $stmt->fetch();

          $username =  $user['username'];
          $password =  $user['password'];
          $fname =  $user['fname'];
          $id =  $user['id'];
          $pp =  $user['pp'];

          if($username === $uname){
             if(password_verify($pass, $password)){
                 $_SESSION['id'] = $id;
                 $_SESSION['fname'] = $fname;
                 $_SESSION['pp'] = $pp;
                 header("Location: ../../index.php");
                 exit;
             }else {
               $em = "Tên người dùng hoặc mật khẩu sai";
               header("Location: ../../view/taikhoan/login.php?error=$em&$data");
               exit;
            }

          }else {
            $em = "Tên người dùng hoặc mật khẩu sai";
            header("Location: ../../view/taikhoan/login.php?error=$em&$data");
            exit;
         }

      }else {
         $em = "Tên người dùng hoặc mật khẩu sai";
         header("Location: ../../view/taikhoan/login.php?error=$em&$data");
         exit;
      }
    }


}else {
	header("Location: ../../view/taikhoan/login.php?error=error");
	exit;
}
