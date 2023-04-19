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
		background: #c78d74;
	}

	h1 {
		color: #c78d74;
	}

	.container {
		width: 100%;
		display: flex;
		max-width: 850px;
		background: #fff;
		border-radius: 15px;
		box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
	}

	.login {
		width: 400px;
	}

	form {
		width: 250px;
		margin: 60px auto;
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

	hr {
		border-top: 2px solid #e4a387;
	}

	.pic img {
		width: 450px;
		height: 100%;
		border-top-right-radius: 15px;
		border-bottom-right-radius: 15px;
	}

	form label {
		display: block;
		font-size: 16px;
		font-weight: 600;
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
		margin-bottom: 8px;
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
		display: flex;
		justify-content: end;
		align-items: center;
		margin-top: 5px;
		font-size: 18px;
	}

	a:hover {
		color: rgb(230, 176, 176);
		background-color: white;
		text-decoration: none;
	}



	.alert {
		color: rgb(245, 82, 82);
	}
</style>

<body>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Sign Form | By Chanh</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div class="container">
			<div class="login">
				<form class="shadow w-450 p-3" action="../../model/taikhoan/signup.php" method="post"
					enctype="multipart/form-data">
					<h1>Đăng kí</h1>
					<hr>
					<p>Chào mừng bạn đến với TeddyShop!</p>
					<?php if(isset($_GET['error'])){ ?>
					<div role="alert" style="color: red; font-style: italic;">
						<?php echo $_GET['error']; ?>
					</div>
					<?php } ?>

					<?php if(isset($_GET['success'])){ ?>
					<div role="alert" style="color: blue; font-style: italic;">
						<?php echo $_GET['success']; ?>
					</div>
					<?php } ?>
					<label class="form-label">Tên người dùng</label>
					<input type="text" class="form-control" name="fname"
						value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
					<label class="form-label">Tên tài khoản </label>
					<input type="text" class="form-control" name="uname"
						value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
					<label class="form-label">Mật khẩu</label>
					<input type="password" class="form-control" name="pass">
					<label class="form-label">Ảnh đại diện</label>
					<input type="file" class="form-control" name="pp">
					<button>Đăng Kí</button>
					<a href="login.php" class="link-secondary">Đăng Nhập</a>
					<closeform></closeform>
				</form>
			</div>
			<div class="pic">
				<img src="https://i.pinimg.com/564x/eb/56/60/eb5660d1fbd4b321b5d94c7472db3024.jpg">
			</div>
		</div>
	</body>

	</html>