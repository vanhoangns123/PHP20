<?php 

require_once('Connection.php');

class User{
	function getall(){
		$conn_obj=new Connection();
		$query = "select * from users";
		$result=$conn_obj->conn->query($query);
		$users=array();
		while($row=$result->fetch_assoc()){
			$users[]=$row;

		}
		return $users;
	}
	function get1($id){
		$conn_obj= new Connection();
		$query = "select * from users where id='".$id."' ";
		//echo $query;
		$result=$conn_obj->conn->query($query);
		$user= $result->fetch_assoc();
		return $user;

	}
}
 ?>