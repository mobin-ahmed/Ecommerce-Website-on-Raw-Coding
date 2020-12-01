<?php

	//this is a ADMIN login page

	session_start();

	if(isset($_SESSION['id'])){
		if(isset($_SESSION['id'])){
			if(isset($_SESSION['id'])){
				header("Location: dashboard.php");
			}
		}
	}


	require_once "../vendor/autoload.php";
	use App\classes\AdminLogin;

	$massage='';
	if(isset($_POST['btn'])){
	
	$massage=AdminLogin::adminLogin($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="author" content="Mobin Ahmed">
		<title>Online-Cloth-Shop Website</title>
		<link rel="stylesheet" href="../assets/css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-8 admin-div admin">
					<h2 style="color: orange;">Admin Login</h2>
					<form action="" method="post">
						<div style="padding-top: 10px;">
							<label>Email</label>
							<input type="email" name="email" placeholder="mobinahmed102345@gmail.com" required style="width: 70%; height: 50px; border-radius: 10px;">
						</div>
						<div style="padding-top: 10px;">
							<label>Username</label>
							<input type="text" name="username" placeholder="mobinahmed" required style="width: 70%; height: 50px; border-radius: 10px;">
						</div>
						<div style="padding-top: 10px;">
							<label>Password</label>
							<input type="password" name="password" required style="width: 70%; height: 50px; border-radius: 10px;">
						</div>
						<div style="padding-top: 10px;" align="center">
							<input type="submit" name="btn" value="Go" style="width: 40%; height: 50px; border-radius: 10px; font-size: 20px; font-style: italic; background-color: navy; color: white;">
							<span>password: 98765</span>
						</div>
						<div style="padding: 10px;" class="forget">
							<a href="" style="margin-left: 20px;">Foget Password</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>