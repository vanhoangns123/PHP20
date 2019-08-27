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
	function get1(){
		$id=$_GET['id'];
		$conn_obj= new Connection();
		$query = "select * from users where id='".$id."' ";
		echo $query;
		$result=$conn_obj->conn->query($query);
		$users=array();
		while($row=$result->fetch_assoc()){
			$users[]=$row;

		}
		return $users;

	}
}
 ?>