
<!DOCTYPE html>
<html>
<head>
	<title>Login | Animasi</title>

	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "login gagal!!! cek lagi email dan passwordnya";
		}elseif($_GET['pesan']== "lougout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		   }
	}
	?>
	<div class="limiter">
		<div class="container-login100">
			<div class="bg">
				<div class="mobil">
					<img src="images/6ec8fa35800b339aa060d70d67edcf-unscreen.gif">
				</div>
				<form action="auth.php" method="post" onSubmit="return validasi()">
				<div class="login">

					<div class="avatar">
					  <i class="fa fa-user"></i>
					</div>
			
					<h2>Login Form</h2>
			
					<div class="box-login">
					  <i class="fas fa-envelope-open-text"></i>
					  <input type="text" name="email" placeholder="email">
					</div>
			
					<div class="box-login">
					  <i class="fas fa-lock"></i>
					  <input type="password" name="password" placeholder="password">
					</div>
			
					<button type="submit" name="sumbit" class="btn-login" value="LOGIN">Login</button>
					<div class="bottom">
					  <a href="#">Register</a>
					  <a href="#">Forgot Password</a>
					</div>
				</div>
</from>
			</div>
<footer>
  <p>Copyright @ 2018 create by obi
</footer>
</body>
</html>
