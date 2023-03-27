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

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {



if(isset($_POST['fname']) && 
   isset($_POST['uname'])){

    

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $old_pp = $_POST['old_pp'];
    $id = $_SESSION['id'];

    if (empty($fname)) {
    	$em = "Tên đầy đủ là bắt buộc";
    	header("Location: ../../view/taikhoan/edit.php?error=$em");
	    exit;
    }else if(empty($uname)){
    	$em = "Tên người dùng là bắt buộc";
    	header("Location: ../../view/taikhoan/edit.php?error=$em");
	    exit;
    }else if(empty($email)){
      $em = "Email là bắt buộc";
      header("Location: ../../view/taikhoan/edit.php?error=$em");
      exit;
   }
   else if(empty($adress)){
      $em = "Địa chỉ là bắt buộc";
      header("Location: ../../view/taikhoan/edit.php?error=$em");
      exit;
   }
   else if(empty($phone)){
      $em = "Số điện thoại là bắt buộc";
      header("Location: ../../view/taikhoan/edit.php?error=$em");
      exit;
   }else   {

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
               // Delete old profile pic
               $old_pp_des = "../../upload/$old_pp";
               if(unlink($old_pp_des)){
               	  // just deleted
               	  move_uploaded_file($tmp_name, $img_upload_path);
               }else {
                  // error or already deleted
               	  move_uploaded_file($tmp_name, $img_upload_path);
               }
               

               // update the Database
               $sql = "UPDATE users 
                       SET fname=?, username=?,email=?,adress=?,phone=?, pp=?
                       WHERE id=?";
               $stmt = $conn->prepare($sql);
               $stmt->execute([$fname, $uname,$email,$adress,$phone, $new_img_name, $id]);
               $_SESSION['fname'] = $fname;
               header("Location: ../../view/taikhoan/edit.php?success=Tài khoản của bạn đã được cập nhật thành công");
                exit;
            }else {
               $em = "
               Bạn không thể tải lên các tệp loại này";
               header("Location: ../../view/taikhoan/edit.php?error=$em&$data");
               exit;
            }
         }else {
            $em = "Xảy ra lỗi không xác định được!";
            header("Location: ../../view/taikhoan/edit.php?error=$em&$data");
            exit;
         }

        
      }else {
       	$sql = "UPDATE users 
       	        SET fname=?, username=?,email=?,adress=?,phone=?
                WHERE id=?";
       	$stmt = $conn->prepare($sql);
       	$stmt->execute([$fname, $uname,$email,$adress,$phone, $id]);

       	header("Location: ../../view/taikhoan/edit.php?success=Tài khoản của bạn đã được cập nhật thành công");
   	    exit;
      }
    }


}else {
	header("Location: ../edit.php?error=error");
	exit;
}


}else {
	header("Location: login.php");
	exit;
} 

