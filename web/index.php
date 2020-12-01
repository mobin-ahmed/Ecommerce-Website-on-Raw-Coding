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
			<div class="row">
				<div class="col-12" style="min-height: 100px; max-height: 600px; background-color: purple;">
					<div class="col-2 logo" style="height: 80px; padding-top: 10px; padding-left: 20px; margin: 10px; border: none; background-color: rgb(0,56,100)">
						<a class="logo" href="index.php" style="color: orange; margin-left: 5px; font-size: 30px; font-style: italic;">Online Cloth Shop</a>
					</div>

					<nav>
						<ul class="main-ul menu-area">
							<li style="margin-left: 25px;"><a href="index.php">HOME</a></li>
							<li><a href="products.php">PRODUCTS</a></li>
							<li><a href="brand.php">BRAND</a></li>
							<li><a href="cart.php">CART</a></li>
							<li><a href="contact.php">CONTACT</a></li>
						</ul>
					</nav>

					<button style="margin-left: 45px; font-size: 20px; color: white;  height: 40px; margin-top: 20px; border-radius: 10px; background-color: green; " onclick="popup()"><!-- <a href="login.php" style="font-size: 20px; text-decoration: none; color: white;">Log In/Resgister</a> -->Login/Register</button>
					<h4 id="c1">fhf</h4>
				</div>
			</div>

			<div class="container login" style="width: 60%; height: auto; border: 5px solid blue; display: none;" id="log">
			<button onclick="popout()" style="font-size: 20px; background-color: red; color: white;">X</button>
			<div class="row">
				
				<div>

				<div class="col-5 login"style="border: dashed navy; padding: 20px 0px 0px 50px; float: left;">

					<h2 style="color: green;">Login</h2>
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
							<input type="submit" name="btn" value="login" style="width: 40%; height: 50px; border-radius: 10px; font-size: 20px; font-style: italic; background-color: green; color: white;">
						</div>
						<div style="padding: 10px;">
							<a href="" style="">Foget Password</a>
						</div>
					</form>
				</div>
			</div>


			<div class="col-6 register"style="border: dashed navy; padding: 20px 0px 0px 50px; float: left; margin-left: 5px;">
					<h2 style="color: green;">Create New Account</h2>
					<form action="" method="post">
						<div style="padding-top: 10px;">
							<label>First Name</label>
							<input type="text" name="firstName" placeholder="Mobin" required style="width: 70%; height: 50px; border-radius: 10px;">
						</div>

						<div style="padding-top: 10px;">
							<label>Last Name</label>
							<input type="text" name="lastName" placeholder="Ahmed" required style="width: 70%; height: 50px; border-radius: 10px;">
						</div>
						<div style="padding-top: 10px;">
							<label>Email</label>
							<input type="email" name="email" placeholder="mobinahmed102345@gmail.com" required style="width: 70%; height: 50px; border-radius: 10px;">
						</div>
						
						<div style="padding-top: 10px;">
							<label>Password</label>
							<input type="password" name="password" required style="width: 70%; height: 50px; border-radius: 10px;">
						</div>

						<div style="padding-top: 10px;">
							<label>Confirm Password</label>
							<input type="password" name="confirmPassword" required style="width: 70%; height: 50px; border-radius: 10px;">
						</div>

						<div style="padding-top: 10px;">
							<label>Mobile</label>
							<input type="number" name="mobile" required style="width: 70%; height: 50px; border-radius: 10px;">
						</div>

						<div style="padding-top: 10px;">
							<input type="checkbox" name="checkout" required style="border-radius: 10px;">
							<label>terms & conditions checked</label>
						</div>

						<div style="padding-top: 10px;" align="center">
							<input type="submit" name="btn" value="create" style="width: 40%; height: 50px; border-radius: 10px; font-size: 20px; font-style: italic; background-color: green; color: white;">
							<a href="term-condition.php" style="margin-left: 10px;">Read terms & conditions</a>
						</div>
					</form>
				</div>
			</div>

			
		</div>


			<?php include 'includes/slider.php'; ?>

			<div class="row">
				<h3 style="margin-bottom: 0px;">NEW PRODUCTS</h3>
				<div class="col-12" style="min-height: 400px; height: auto; border: none;">
					<div class="row">
						<div class="col-3 p1" style="height: 500px; margin-left: 40px; margin-top: 30px;">
							<img src="assets/images/p21.jpg" alt=""  height="350" width="100%"  onmouseover="imgst(this)" onmouseleave="imgback(this)">
							<p style="margin-left: 30px;">$70</p>
							<button style="height: 50px; margin-left: 30px;"><a href="preview.php" style="text-decoration: none; font-size: 20px;">Add To Cart</a></button>
						</div>

						<div class="col-3 p2" style="height: 500px; margin-left: 40px; margin-top: 30px;">
							<img src="assets/images/p17.jpg" alt="" height="350" width="100%"  onmouseover="imgst(this)" onmouseleave="imgback(this)">
							<p style="margin-left: 30px;">$70</p>
							<button style="height: 50px; margin-left: 30px;"><a href="preview.php" style="text-decoration: none; font-size: 20px;">Add To Cart</a></button>
						</div>

						<div class="col-4 p3" style="height: 500px; margin-left: 40px; margin-top: 30px;">
							<img src="assets/images/p23.jpg" alt="" height="350" width="100%"  onmouseover="imgst(this)" onmouseleave="imgback(this)">
							<p style="margin-left: 30px;">$70</p>
							<button style="height: 50px; margin-left: 30px;"><a href="preview.php" style="text-decoration: none; font-size: 20px;">Add To Cart</a></button>
						</div>
					</div>

					<div class="row">
						<div class="col-3 p4" style="height: 500px; margin-left: 40px; margin-top: 30px;">
							<img src="assets/images/p26.jpg" alt="" height="350" width="100%"  onmouseover="imgst(this)" onmouseleave="imgback(this)">
							<p style="margin-left: 30px;">$70</p>
							<button style="height: 50px; margin-left: 30px;"><a href="preview.php" style="text-decoration: none; font-size: 20px;">Add To Cart</a></button>
						</div>

						<div class="col-3 p5" style="height: 500px; margin-left: 40px; margin-top: 30px;">
							<img src="assets/images/woo.jpg" alt="" height="350" width="100%" onmouseover="imgst(this)" onmouseleave="imgback(this)">
							<p style="margin-left: 30px;">$70</p>
							<button style="height: 50px; margin-left: 30px;"><a href="preview.php" style="text-decoration: none; font-size: 20px;">Add To Cart</a></button>
						</div>

						<div class="col-4 p6" style="height: 500px; margin-left: 40px; margin-top: 30px;">
							<img src="assets/images/woo4.jpg" alt="" height="350" width="100%"  onmouseover="imgst(this)" onmouseleave="imgback(this)">
							<p style="margin-left: 30px;">$70</p>
							<button style="height: 50px; margin-left: 30px;"><a href="preview.php" style="text-decoration: none; font-size: 20px;">Add To Cart</a></button>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 style="margin-bottom: 0px;">SELECT YOURS</h3>
				<div class="col-12" style="min-height: 400px; height: auto; border: none;">
					<div class="row">
						<div class="col-3 p7" style="height: 500px; margin-left: 40px; margin-top: 30px;">
							<img src="assets/images/20.jpg" alt="" height="350" width="100%">
							
							<button style="height: 50px; margin-left: 30px;"><a href="preview.php" style="text-decoration: none; font-size: 20px;">MANS</a></button>
						</div>

						<div class="col-3 p8" style="height: 500px; margin-left: 40px; margin-top: 30px;">
							<img src="assets/images/a7.png" alt="" height="350" width="100%">
							
							<button style="height: 50px; margin-left: 30px;"><a href="preview.php" style="text-decoration: none; font-size: 20px;">WOMENS</a></button>
						</div>

						<div class="col-4 p9" style="height: 500px; margin-left: 40px; margin-top: 30px;">
							<img src="assets/images/p23.jpg" alt="" height="350" width="100%">
							
							<button style="height: 50px; margin-left: 30px;"><a href="preview.php" style="text-decoration: none; font-size: 20px;">KIDS</a></button>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 style="margin-bottom: 0px;">FASHION</h3>
				<div class="col-12" style="min-height: 400px; height: auto; border: none;">

					<div class="row">
						<div class="col-3 p10" style="height: 500px; margin-left: 40px; margin-top: 30px;">
							<img src="assets/images/24.jpg" alt="" height="350" width="100%">
							<p style="margin-left: 30px;">$70</p>
							<button style="height: 50px; margin-left: 30px;"><a href="preview.php" style="text-decoration: none; font-size: 20px;">Add To Cart</a></button>
						</div>

						<div class="col-3 p11" style="height: 500px; margin-left: 40px; margin-top: 30px;">
							<img src="assets/images/a4.png" alt="" height="350" width="100%">
							<p style="margin-left: 30px;">$70</p>
							<button style="height: 50px; margin-left: 30px;"><a href="preview.php" style="text-decoration: none; font-size: 20px;">Add To Cart</a></button>
						</div>

						<div class="col-4 p12" style="height: 500px; margin-left: 40px; margin-top: 30px;">
							<img src="assets/images/p3.jpg" alt="" height="350" width="100%">
							<p style="margin-left: 30px;">$70</p>
							<button style="height: 50px; margin-left: 30px;"><a href="preview.php" style="text-decoration: none; font-size: 20px;">Add To Cart</a></button>
						</div>
					</div>
				</div>
			</div>

			<?php include 'includes/footer.php'; ?>
		</div>


		<script src="assets/js/script.js"></script>
	</body>
</html>