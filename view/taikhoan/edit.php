<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

include '../../model/user.php';

$user = getUserById($_SESSION['id'], $conn);

 ?>
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../layout/assets/profile.css">
</head>
<body>
    <?php if ($user) { ?>

    <div class="d-flex justify-content-center align-items-center vh-100">
        
        <form class="shadow w-450 p-3" 
              action="../../model/taikhoan/edit.php" 
              method="post"
              enctype="multipart/form-data">

            <h4 class="display-4  fs-1">Chỉnh sửa hồ sơ</h4><br>
            <!-- error -->
            <?php if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            
            <!-- success -->
            <?php if(isset($_GET['success'])){ ?>
            <div class="alert alert-success" role="alert">
              <?php echo $_GET['success']; ?>
            </div>
            <?php } ?>
          <div class="mb-3">
            <label class="form-label">Họ và tên</label>
            <input type="text" 
                   class="form-control"
                   name="fname"
                   value="<?php echo $user['fname']?>">
          </div>

          <div class="mb-3">
            <label class="form-label">Tên tài khoản</label>
            <input type="text" 
                   class="form-control"
                   name="uname"
                   value="<?php echo $user['username']?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" 
                   class="form-control"
                   name="email"
                   value="<?php echo $user['email']?>" >
          </div>
          <div class="mb-3">
            <label class="form-label">Địa chỉ</label>
            <input type="text" 
                   class="form-control"
                   name="adress"
                   value="<?php echo $user['adress']?>" >
          </div>
          <div class="mb-3">
            <label class="form-label">Số điện thoại</label>
            <input type="text" 
                   class="form-control"
                   name="phone"
                   value="<?php echo $user['phone']?>" >
          </div>

          <div class="mb-3">
            <label class="form-label">Ảnh đại diện</label>
            <input type="file" 
                   class="form-control"
                   name="pp">
            <img src="../../upload/<?=$user['pp']?>"
                 class="rounded-circle"
                 style="width: 70px">
            <input type="text"
                   hidden="hidden" 
                   name="old_pp"
                   value="<?=$user['pp']?>" >
          </div>
          
          <button type="submit" class="btn btn-primary">Cập nhật</button>
          <a href="../../index.php" class="link-secondary">Trang chủ</a>
        </form>
    </div>
    <?php }else{ 
        header("Location: ../header.php");
        exit;

    } ?>
</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>