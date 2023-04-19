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

include '../../model/user.php';

$user = getUserById($_SESSION['id'], $conn);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sign Form | By Chanh</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    /* background: #c78d74; */
  }

  .container {
    width: 100%;
    display: flex;
    max-width: 800px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
  }

  .edit {
    width: 400px;
  }

  form {
    width: 250px;
    margin: 10px auto;
  }

  h1 {
    margin: 20px;
    text-align: center;
    font-weight: bolder;
    text-transform: uppercase;
  }

  p {
    text-align: center;
    margin: 10px;
  }

  h2 {
    color: #b07e68;
  }

  hr {
    border-top: 2px solid #e4a387;
  }

  .pic img {
    width: 450px;
    height: 80%;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
  }

  form label {
    display: block;
    font-size: 16px;
    font-weight: 550;
    padding: 5px;
  }

  input {
    width: 100%;
    margin: 2px;
    border: none;
    outline: none;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid gray;
  }

  button,
  .nut {
    border: none;
    outline: none;
    padding: 8px;
    width: 252px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
    background: #e4a387;
    border: 1px solid #e4a387;
  }

  button:hover {
    color: #e4a387;
    background: white;
  }

  p {
    margin: 20px;
  }

  a {
    text-decoration: none;
    margin-left: 90px;
  }

  .nut {
    color: white;
  }

  .nut:hover {
    color: rgb(230, 176, 176);
    background-color: white;
    text-decoration: none;
  }

  img {
    border-radius: 10px;
    width: 80px;
    height: 80px;
  }


  .alert {
    color: rgb(245, 82, 82);
  }
</style>

<body>
  <?php if ($user) { ?>
  <div class="container">
    <div class="edit">
      <form action="../../model/taikhoan/edit.php" method="post" enctype="multipart/form-data">
        <h2 style="text-align: center;">Update Profile</h2>
        <hr>
        <!-- <p>Welcome to TeddyShop!</p> -->
        <?php if(isset($_GET['error'])){ ?>
        <div role="alert" style="color: red; font-style: italic;">
          <?php echo $_GET['error']; ?>
        </div>
        <?php } ?>

        <!-- success -->
        <?php if(isset($_GET['success'])){ ?>
        <div role="alert" style="color: blue ; font-style: italic;">
          <?php echo $_GET['success']; ?>
        </div>
        <?php } ?>
        <label class="form-label">Tên người dùng</label>
        <input type="text" class="form-control" name="fname" value="<?php echo $user['fname']?>">
        <label class="form-label">Tên tài khoản </label>
        <input type="text" class="form-control" name="uname" value="<?php echo $user['username']?>">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $user['email']?>">
        <label class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" name="adress" value="<?php echo $user['adress']?>">
        <label class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" name="phone" value="<?php echo $user['phone']?>">
        <label class="form-label">Ảnh đại diện</label>
        <input type="file" class="form-control" name="pp">
        <img src="../../upload/<?=$user['pp']?>" class="rounded-circle" style="width: 70px">
        <input type="text" hidden="hidden" name="old_pp" value="<?=$user['pp']?>">
        <button type="submit" class="btn btn-primary">Cập nhật tài khoản</button>
        <div class="nut">
          <a href="../../index.php" class="link-secondary">Trang chủ</a>
        </div>
        <closeform></closeform>
      </form>
    </div>
    <div class="pic">
      <img src="https://i.pinimg.com/564x/66/48/00/6648001817c77eb3568ecf4b35f99888.jpg">
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