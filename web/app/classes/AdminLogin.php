<?php
namespace App\classes;
use App\classes\Database;

	class AdminLogin{
		public function adminLogin($data){

			$email=$data['email'];
			$password=md5($data['password']);

			$sql="SELECT * FROM admins WHERE email='$email' AND password='$password'";
			if(mysqli_query(Database::dbConnection(),$sql)){
				
				$queryResult=mysqli_query(Database::dbConnection(),$sql);
				// echo "<pre>";
				// print_r($queryResult);
				
				$admins=mysqli_fetch_assoc($queryResult);
				// echo "<pre>";
				// print_r($admins);
				
				 if($admins){
					session_start();
					$_SESSION['id']=$admins['id'];
					$_SESSION['user_name']=$admins['user_name'];
					$_SESSION['email']=$admins['email'];
					header("Location: dashboard.php");
				}

				else{
					$massage="Wrong email or password";
					return $massage;
				}
			}
			else{
				die("Query problem".mysqli_error(Database::dbConnection()));
			}

		}

		public function adminLogout(){
			session_start();

			unset($_SESSION['id']);
			unset($_SESSION['user_name']);
			unset($_SESSION['email']);

			header("Location:index.php");
		}
	}
?>