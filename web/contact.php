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

			<div class="row">
				<div class="col-12" style="border: none; margin-top: 20px; background-color: rgb(240,240,240);">
					<h2 style="color: green;">Short description about us</h2>
					<span style="overflow-wrap: break-word;">
						24 hours || 7 days a week || 365 days a year Live Technical Support
						As it is an online shop,we are ready to serve you all the time long. 
						if you feel any doubt,please contact us through your email.
						you can comment us,follow us and hopping that you will by buy our products.
					</span>
				</div>

				<div class="col-7 conform" style="border: none; margin-top: 20px; text-align: center; background-color: rgb(240,240,240);">
					<h2 style="color: green;">Contact Us</h2>
					<form action="" method="post">

						<div style="padding-top: 10px;">
							<label>Email</label>
							<input type="email" name="email" placeholder="mobinahmed102345@gmail.com" required style="width: 70%; height: 50px; border-radius: 10px;">
						</div>


						<div style="padding-top: 10px;">
							<label>Mobile</label>
							<input type="number" name="mobile" required style="width: 70%; height: 50px; border-radius: 10px;">
						</div>

						<div style="padding-top: 10px;">
							<label>Comments</label>
							<textarea name="comments" required style="width: 70%; height: 150px; border-radius: 10px;"></textarea>
						</div>

						<div style="padding-top: 10px;" align="center">
							<input type="submit" name="btn" value="submit" style="width: 40%; height: 50px; border-radius: 10px; font-size: 20px; font-style: italic; background-color: green; color: white;">
						</div>

						<br>

						<h2 style="color: green; margin-top: 10px;">OR</h2>

						<div class="col-6 footer3" style="border: none;">
							<h3 style="margin-left: 20px; color: green;">Contacts</h3>
							<ul>
								<li><span style="color: black;">Location: </span><a href="https://www.google.com/sylhet">Sylhet,Bangladesh</a></li>
								<li><span style="color: black;">Mobile: 01314890701</span></li>
								<li><span style="color: black;">Email: </span><a href="">mobinahmed102345@gmail.com</a></li>
							</ul>
						</div>
					</form>
				</div>

				<div class="col-4 cominfo" style=" border: none; margin-top: 20px; margin-left: 10px; background-color: rgb(230,230,230);">
					<h2 style="color: green;">Company Info</h2>
					<ul>
						<li>Online Cloth Shop</li>
						<li>Sylhet</li>
						<li>Phone: 01314890701</li>
						<li>Email: mobinahmed102345@gmail.com</li>
					</ul>
				</div>
			</div>


			<?php include 'includes/footer.php'; ?>
		</div>
		
	</body>
</html>	