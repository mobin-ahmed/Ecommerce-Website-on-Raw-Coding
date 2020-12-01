<?php
namespace App\classes;

	class Category{
		public function category($data){
			$connect=mysqli_connect("localhost","root","","ocs");
			$catadd=$data['catadd'];
			$descrip=$data['cat_description'];
			$status=$data['status'];
			$sql="INSERT INTO categories (cat_name,cat_description,status) VALUES('$catadd','$descrip','$status')";
			if(mysqli_query($connect,$sql)){
				$massege="inserted successfully";
				return $massege;
			}
			else{
				die("Query problem".mysqli_error($connect));
			}
		}

		public function catmanage(){
			$connect=mysqli_connect("localhost","root","","ocs");
			$sql="SELECT * FROM categories";
			if(mysqli_query($connect,$sql)){
				$result=mysqli_query($connect,$sql);
				return $result;
			}
			else{
				die("Query Problem".mysqli_error($connect));
			}
		}

		public function catupdate($id){
			$connect=mysqli_connect("localhost","root","","ocs");
			$sql="SELECT * FROM categories WHERE catid='$id'";
			if(mysqli_query($connect,$sql)){
				$result=mysqli_query($connect,$sql);
				$mresult=mysqli_fetch_assoc($result);
				return $mresult;
			}
			else{
				die("Query Problem".mysqli_error($connect));
			}
		}
		public function catupdatein($data){
			$connect=mysqli_connect("localhost","root","","ocs");
			$cat_name=$data['catadd'];
			$cat_des=$data['cat_description'];
			$status=$data['status'];
			$id=$data['id'];
			$sql="UPDATE categories SET cat_name='$cat_name',cat_description='$cat_des',status='$status' WHERE catid='$id'";
			if(mysqli_query($connect,$sql)){
				header("Location: catmanage.php");
			}
			else{
				die("Query Problem".mysqli_error($connect));
			}
		}

		public function catdelete($id){
			$connect=mysqli_connect("localhost","root","","ocs");
			$sql="DELETE FROM categories WHERE catid='$id'";
			if(mysqli_query($connect,$sql)){
				header("Location: catmanage.php");
			}
			else{
				die("Query Problem".mysqli_error($connect));
			}
		}
	}






 ?>