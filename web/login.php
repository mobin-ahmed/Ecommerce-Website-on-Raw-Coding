<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="author" content="Mobin Ahmed">
		<title>Online-Cloth-Shop Website</title>
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>

		<div class="container">
			<?php include 'includes/header.php'; ?>


			<div>
				<div class="col-5 login"style="border: dashed navy; padding: 20px 0px 0px 50px; float: left;">
					<h2 style="color: green;">Login</h2>
					<form onsubmit="return logvalidation()" action="" method="post">
						<div style="padding-top: 10px;">
							<label>Email</label>
							<input type="email" id="email" name="email" placeholder="mobinahmed102345@gmail.com" style="width: 70%; height: 50px; border-radius: 10px;">
						</div>
						<div style="padding-top: 10px;">
							<label>Username</label>
							<input type="text" id="username" name="username" placeholder="mobinahmed" style="width: 70%; height: 50px; border-radius: 10px;">
						</div>
						<div style="padding-top: 10px;">
							<label>Password</label>
							<input type="password" id="ps"  name="password" style="width: 70%; height: 50px; border-radius: 10px;">
							<p id="pserr"></p>
						</div>
						<div style="padding-top: 10px;" align="center">
							<input type="submit" name="btn" value="login" style="width: 40%; height: 50px; border-radius: 10px; font-size: 20px; font-style: italic; background-color: green; color: white;">
						</div>
						<div style="padding: 10px;">
							<a href="" style="margin-left: 180px;">Foget Password</a>
						</div>
					</form>
				</div>
			</div>


			<div class="col-6 register"style="border: dashed navy; padding: 20px 0px 0px 50px; float: left; margin-left: 50px; ">
					<h2 style="color: green;">Create New Account</h2>
					<form onsubmit="return regvalidation()" action="" method="post">
						<div style="padding-top: 10px;">
							<label>First Name</label>
							<input type="text" id="firstName" name="firstName" placeholder="Mobin" style="width: 70%; height: 50px; border-radius: 10px;">
						</div>

						<div style="padding-top: 10px;">
							<label>Last Name</label>
							<input type="text" id="lastName" name="lastName" placeholder="Ahmed" style="width: 70%; height: 50px; border-radius: 10px;">
						</div>
						<div style="padding-top: 10px;">
							<label>Email</label>
							<input type="email" id="email" name="email" placeholder="mobinahmed102345@gmail.com" style="width: 70%; height: 50px; border-radius: 10px;">
						</div>
						
						<div style="padding-top: 10px;">
							<label>Password</label>
							<input type="password" id="ps" name="password" style="width: 70%; height: 50px; border-radius: 10px;">
						</div>

						<div style="padding-top: 10px;">
							<label>Confirm Password</label>
							<input type="password" id="cps" name="confirmPassword" style="width: 70%; height: 50px; border-radius: 10px;">
						</div>

						<div style="padding-top: 10px;">
							<label>Mobile</label>
							<input type="number" id="mbl" name="mobile" style="width: 70%; height: 50px; border-radius: 10px;">
							<p id="mblerr"></p>
						</div>

						<div style="padding-top: 10px;">
							<input type="checkbox" name="checkout" style="border-radius: 10px;">
							<label>terms & conditions checked</label>
						</div>

						<div style="padding-top: 10px;" align="center">
							<input type="submit" name="btn" value="create" style="width: 40%; height: 50px; border-radius: 10px; font-size: 20px; font-style: italic; background-color: green; color: white;">
							<a href="term-condition.html" style="margin-left: 10px;">Read terms & conditions</a>
						</div>
					</form>
				</div>

			<?php include 'includes/footer.php'; ?>
		</div>
		<script src="assets/js/script.js"></script>
	</body>
</html>