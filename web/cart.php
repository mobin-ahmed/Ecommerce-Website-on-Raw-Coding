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

			<div class="row" style="border: 1px dashed purple;">
				<h2 style="color: green;">The Cart</h2>

						<table style="border: 5px solid blue; border-style: ridge; border-radius: 10px; width: 100%">
							<thead style="background-color: navy; color: white;">
								<tr class="main-tr">
									<th>Product Name</th>
									<th>Image</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total_Price</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="main-tr">
									<td>Product Title</td>
									<td><img src="assets/images/p23.jpg" alt="" height="50" width="50" /></td>
									<td>$20000</td>
									<td>
										<input type="number" name="quantity" placeholder="update">

										<a href=""><button>Update</button></a>
									</td>

									<td>$40000</td>
									<td> <a href="" style="color: red;">&Cross;</a> </td>
								</tr>

								<tr class="main-tr">
									<td>Product Title</td>
									<td><img src="assets/images/p3.jpg" alt="" height="50" width="50" /></td>
									<td>$20000</td>
									<td>
										<input type="number" name="quantity" placeholder="update">

										<a href=""><button>Update</button></a>
									</td>

									<td>$40000</td>
									<td> <a href="" style="color: red;">&Cross;</a> </td>
								</tr>

								<tr class="main-tr">
									<td>Product Title</td>
									<td><img src="assets/images/p21.jpg" alt="" height="50" width="50" /></td>
									<td>$20000</td>
									<td>
										<input type="number" name="quantity" placeholder="update">

										<a href=""><button>Update</button></a>
									</td>

									<td>$40000</td>
									<td> <a href="" style="color: red;">&Cross;</a> </td>
								</tr>

								<tr class="main-tr">
									<td>Product Title</td>
									<td><img src="assets/images/p23.jpg" alt="" height="50" width="50" /></td>
									<td>$20000</td>
									<td>
										<input type="number" name="quantity" placeholder="update">

										<a href=""><button>Update</button></a>
									</td>

									<td>$40000</td>
									<td> <a href="" style="color: red;">&Cross;</a> </td>
								</tr>

								<tr class="main-tr">
									<td>Product Title</td>
									<td><img src="assets/images/p3.jpg" alt="" height="50" width="50" /></td>
									<td>$20000</td>
									<td>
										<input type="number" name="quantity" placeholder="update">

										<a href=""><button>Update</button></a>
									</td>

									<td>$40000</td>
									<td> <a href="" style="color: red;">&Cross;</a> </td>
								</tr>

								<tr class="main-tr">
									<td>Product Title</td>
									<td><img src="assets/images/p21.jpg" alt="" height="50" width="50" /></td>
									<td>$20000</td>
									<td>
										<input type="number" name="quantity" placeholder="update">

										<a href=""><button>Update</button></a>
									</td>

									<td>$40000</td>
									<td> <a href="" style="color: red;">&Cross;</a> </td>
								</tr>
							</tbody>
						</table>

			</div>

			<div class="row">
				<div class="col-3 checkcon" style="float: left;">
							<div>
								<button style="margin: 30px; transform: skew(-45deg); border-radius: 10px; width: 70%; height: 70px; background-color: orange; font-size: 30px;"><a href="login.php" style="color: navy; text-decoration: none;">CHECKOUT</a></button>
							</div>

							<div>
								<button style="margin: 30px 30px 30px 40px; transform: skew(-45deg); border-radius: 10px; width: 70%; height: 70px; background-color: green; font-size: 30px;"><a href="index.php" style="color: white; text-decoration: none;">Continue Shopping</a></button>
							</div>
						</div>

						<div class="col-9 pcart" style="float: left; background-color: navy; color: white;">
							<p>
								You should carefully checkout this cart.Make sure you are not in the wrong track.
								Best wishes,thanks.
							</p>
						</div>
			</div>


			<?php include 'includes/footer.php'; ?>
		</div>
		
	</body>
</html>