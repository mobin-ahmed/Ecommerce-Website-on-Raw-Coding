<div class="row">
		<div class="col-12" style="background-color: black; padding: 10px; display: flex; height: 70px;">
			<nav>
					<div>
						<img src="../assets/images/user-profile-icon.jpg" height="20" width="20">
						<span style="color: white;"><?php echo $_SESSION['user_name']; ?></span>
						<a href="?logout=true" style="color: white; text-decoration: none;">/Logout</a>
					</div>
			</nav>
		</div>
	</div>
	<div class="row" style="margin-top: 20px;">
		<div class="col-12" style="background-color: rgb(105,40,205); padding: 10px; display: flex;">
			<nav class="dash">
					<div>
						<img src="../assets/images/mobile-net-icon.jpg" height="20" width="20">
						<a href="dashboard.php">Dashboard</a>
					</div>
					<div>
						<img src="../assets/images/user-profile-icon.jpg" height="20" width="20">
						<a href="">User profile</a>
					</div>
					<div><a href="">Change Password</a></div>
					<div>
						<img src="../assets/images/inbox-icon.png" height="20" width="20">
						<a href="">Inbox</a>
					</div>
					<div>
						<img src="../assets/images/visit-website-icon.png" height="20" width="20">
						<a href="">Visit Website</a>
					</div>
			</nav>
		</div>
	</div>