<?php 
require_once('connection.php');

class User {
	function insert($data){
		
		$conn_obj=new Connection();
		$query = "INSERT INTO users (id,name,email,password) VALUES ('".$data['id']."','".$data['name']."','".$data['email']."','".$data['password']."')";
		// echo $query;
		// die();
		$status=$conn_obj->conn->query($query);

		return $status;
	}






		function check($data){
			$conn_obj=new Connection();
			// Cau lenh truy van co so du lieu
			$query = "SELECT * FROM users WHERE email= '".$data['email']."' AND password = '".$data['password']."' ";

			// die($query);
			// Thuc thi cau lenh truy van co so du lieu

			$result = $conn_obj->conn->query($query);

			$getdata = $result->fetch_assoc();
			  
			return $getdata;  


		}


}



?>