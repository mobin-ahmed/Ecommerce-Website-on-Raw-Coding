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

	$updateId=$_GET['id'];

	$result=$cat->catupdate($updateId);

	$massage='';
	if(isset($_POST['btn'])){
		$cat->catupdatein($_POST);
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
				<button style="padding: 10px; background-color: orange; border-radius: 10px;"><a href="">Add Category</a></button>
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
					<p>Update the Category<p>
				</div>

				<div class="col-9" style="align-content: center; padding: 10px; background-color: orange;">
					
					<form action="" method="post">
						<div>
							<span>Category Name: </span>
							<input type="text" name="catadd" style="width: 100%;" placeholder="Add Category" required value="<?php echo $result['cat_name']; ?>">
							<input type="hidden" name="id" value="<?php echo $result['catid']; ?>">
						</div>
						<div>
							<span>Description: </span>
							<textarea name="cat_description" style="width: 100%;" placeholder="Description" required><?php echo $result['cat_description']; ?></textarea>
						</div>
						<div>
							<span>Status: </span>
							<input type="number" name="status" placeholder="status will 0 ro 1" required value="<?php echo $result['status']; ?>">
						</div>
						<input type="submit" name="btn" value="Update">
					</form>
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