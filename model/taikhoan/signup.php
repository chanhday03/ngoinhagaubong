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

if(isset($_POST['fname']) && 
   isset($_POST['uname']) &&  
   isset($_POST['pass'])){

    

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "fname=".$fname."&uname=".$uname;
    
    if (empty($fname)) {
    	$em = "Tên đầy đủ là bắt buộc";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else if(empty($uname)){
    	$em = "Tên tài khoản là bắt buộc";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Mật khẩu là bắt buộc";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else {
      // hashing the password
      $pass = password_hash($pass, PASSWORD_DEFAULT);

      if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
         
         $img_name = $_FILES['pp']['name'];
         $tmp_name = $_FILES['pp']['tmp_name'];
         $error = $_FILES['pp']['error'];
         
         if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if(in_array($img_ex_to_lc, $allowed_exs)){
               $new_img_name = uniqid($uname, true).'.'.$img_ex_to_lc;
               $img_upload_path = '../../upload/'.$new_img_name;
               move_uploaded_file($tmp_name, $img_upload_path);

               // Insert into Database
               $sql = "INSERT INTO users(fname, username, password, pp) 
                 VALUES(?,?,?,?)";
               $stmt = $conn->prepare($sql);
               $stmt->execute([$fname, $uname, $pass, $new_img_name]);

               header("Location: ../../view/taikhoan/signup.php?success=Tài khoản của bạn đã được tạo thành công");
                exit;
            }else {
               $em = "Bạn không thể tải lên các tệp loại này";
               header("Location: ../../view/taikhoan/signup.php?error=$em&$data");
               exit;
            }
         }else {
            $em = "
            Xảy ra lỗi không xác định được!";
            header("Location: ../../view/taikhoan/signup.php?error=$em&$data");
            exit;
         }

        
      }else {
       	$sql = "INSERT INTO users(fname, username, password) 
       	        VALUES(?,?,?)";
       	$stmt = $conn->prepare($sql);
       	$stmt->execute([$fname, $uname, $pass]);

       	header("Location: ../../view/taikhoan/signup.php?success=Tài khoản của bạn đã được tạo thành công");
   	    exit;
      }
    }


}else {
	header("Location: ../../view/taikhoan/signup.php?error=error");
	exit;
}