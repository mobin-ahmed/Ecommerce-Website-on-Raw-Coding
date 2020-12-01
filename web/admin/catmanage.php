<?php

	session_start();
	
	if($_SESSION['id']==null && $_SESSION['user_name']==null && $_SESSION['email']==null){
		header("Location: index.php");
	}
	
	require_once "../vendor/autoload.php";
	use App\classes\AdminLogin;

	if(isset($_GET['logout'])){
		AdminLogin::AdminLogout();
	}

	$cat=new App\classes\Category();
	$result=$cat->catmanage();

	if(isset($_GET['id'])){
		$cat->catdelete($_GET['id']);
	}

	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta name="author" content="Mobin Ahmed">
	<title>Add Category</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/adminstyle.css">
</head>
<body>
	
	<div class="container" style="background-color: rgb(145,50,215);">

		<?php include 'includes/dashboard-demo.php' ?>
	
		<div class="row" style="justify-content: space-around;">
			<div class="col-3" style="height: auto; background-color: white;">
				<button style="padding: 10px; background-color: orange; border-radius: 10px;"><a href="catadd.php">Add Category</a></button>
				<button style="padding: 10px; background-color: orange; border-radius: 10px;"><a href="catmanage.php">Category List</a></button>
				<button style="padding: 10px; background-color: orange; border-radius: 10px;"><a href="">x</a></button>
				<button style="padding: 10px; background-color: orange; border-radius: 10px;"><a href="">Add Category</a></button>
				<button style="padding: 10px; background-color: orange; border-radius: 10px;"><a href="">Add Category</a></button>
				<button style="padding: 10px; background-color: orange; border-radius: 10px;"><a href="">Add Category</a></button>
				<button style="padding: 10px; background-color: orange; border-radius: 10px;"><a href="">Add Category</a></button>
				<button style="padding: 10px; background-color: orange; border-radius: 10px;"><a href="">Add Category</a></button>
				<button style="padding: 10px; background-color: orange; border-radius: 10px;"><a href="">Add Category</a></button>
				<button style="padding: 10px; background-color: orange; border-radius: 10px;"><a href="">Add Category</a></button>

			</div>
			<div class="col-8" style="height: 500px; background-color: white;">
				<div style="width: 100%; background-color: black; color: white;">
					<p>Manage the Category List<p>
				</div>

				<div class="col-9" style="align-content: center; padding: 10px; background-color: orange; color: white;">
					<table border="1">
						<thead>
							<tr>
								<th>SL</th>
								<th>Category Name</th>
								<th>Description</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php while($mresult=mysqli_fetch_assoc($result)) { ?>
								<tr>
									<td><?php echo $mresult['catid']; ?></td>
									<td><?php echo $mresult['cat_name']; ?></td>
									<td><?php echo $mresult['cat_description']; ?></td>
									<td><?php echo $mresult['status']; ?></td>
									<td>
										<a href="catupdate.php?id=<?php echo $mresult['catid']; ?>">Update</a>
										<a href="?id=<?php echo $mresult['catid']; ?>">/Delete</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	<script src="../assets/js/jquery-3.4.1.js"></script>
	<script src="../assets/js/poppers.js"></script>
	<script src="../assets/js/bootstrap.js"></script>
	<script src="../assets/js/script.js"></script>
</body>
</html>