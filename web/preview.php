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

				<div class="col-3" style="height: 270px; margin-left: 30px;">
					<img src="assets/images/7.jpg" alt="" height="270" width="100%">
				</div>

				<div class="col-6" style="background-color: rgb(240,240,240); border: none; margin-left: 40px; text-align: center;">
					<h2 style="color: navy;">Man's half brand t-shirt</h2>

					<p>warm and soft,hope everybody will like it</p>


					<div>
						<span>Price: </span>
						<span style="color: red;"> $32 </span>
						</div>

					<div>
						<span>Catagory: </span>
						<span style="color: red;"> T-Shirt </span>
					</div>

					<div>
						<span>Brand: </span>
						<span style="color: red;"> Chrismatic </span>
					</div>
										

					<div>
						<span>Select: </span>
						<input type="number" name="buy" placeholder="how many" style="height: 40px; border-radius: 10px;">
					</div>

					<div>
						<a href="cart.php"><button type="button" name="btn" style="height: 40px; border-radius: 10px;">Buy</button></a>
					</div>
				</div>
			</div>

			<div class="row" style="margin-top: 10px;">
				<div class="col-8 prod" style="text-align: center; margin-left: 20px; background-color: rgb(240,240,240); border: none;">
					<h2 style="color: green;">Product Details</h2>

					<br>

					<div style="float: left;">
		
						<h4>sizes:</h4>
							<ul>
								<li>m-size</li>
								<li>l-size</li>
								<li>xl-size</li>
								<li>xll-size</li>
							</ul>
											
					</div>

					<div style="float: left; margin-left: 80px;">
						<h4>colours:</h4>
						<ul>
							<li>black</li>
							<li>blue</li>
							<li>white</li>
							<li>brown</li>
						</ul>											
					</div>
											
				</div>

	
				<div class="col-3 cat" style="float: left; margin-left: 10px; text-align: center; background-color: navy;">
					<h2 style="color: white;">Catagories</h2>
					<ul style="list-style-type: none;" class="cat-ul">
						<li>MAN</li>
						<li>WOMEN</li>
						<li>KIDS</li>
					</ul>
				</div>
			</div>


			<?php include 'includes/footer.php'; ?>
		</div>
		
	</body>
</html>