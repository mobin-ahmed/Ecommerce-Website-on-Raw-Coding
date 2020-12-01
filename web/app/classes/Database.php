<?php
namespace App\classes;
	
	class Database{
		public function dbConnection(){
			$hostName="localhost";
			$userName="root";
			$password="";
			$dbName="ocs";

			$link=mysqli_connect($hostName,$userName,$password,$dbName);
			return $link;
		}
	}
?>