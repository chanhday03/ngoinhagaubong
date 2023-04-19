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
		background: #8f7d6b;
	}

	h1 {
		color: #8f7d6b;
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
		border-top: 2px solid #a68567;
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

	button {
		border: none;
		outline: none;
		padding: 8px;
		width: 252px;
		color: white;
		font-size: 16px;
		cursor: pointer;
		margin-top: 20px;
		border-radius: 5px;
		background: #a68567;
		border: 1px solid #a68567;
		margin-bottom: 20px;
	}

	button:hover {
		color: #a68567;
		background: white;
	}

	p {
		margin: 20px;
	}

	a {
		color: #8f7d6b;
		text-decoration: none;
	}

	a:hover {
		text-decoration: underline;
	}

	.nut {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
</style>

<body>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Login Form</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div class="container">
			<div class="login">
				<form action="../../model/taikhoan/login.php" method="post">
					<h1>Đăng Nhập</h1>
					<hr>
					<p>Chào mừng bạn đến với TeddyShop!</p>
					<?php if(isset($_GET['error'])){ ?>
					<div role="alert" style="color: red; font-style: italic;">
						<?php echo $_GET['error']; ?>
					</div>
					<?php } ?>
					<label class="form-label">Tên tài khoản</label>
					<input type="text" class="form-control" name="uname"
						value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
					<label class="form-label">Mật khẩu</label>
					<input type="password" class="form-control" name="pass">
					<button>Đăng Nhập</button>
					<div class="nut">
						<a href="signup.php" class="link-secondary">Đăng Kí</a>
						<a href="#">Quên mật khẩu ?</a>
					</div>
					<closeform></closeform>
				</form>
			</div>
			<div class="pic">
				<img src="https://i.pinimg.com/564x/0a/46/40/0a4640ea95a77f44f6298b4b5a1ca973.jpg">
			</div>
		</div>
	</body>

	</html>