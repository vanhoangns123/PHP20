<?php 
require_once('Connection.php');
class Category{
	function getall(){
		$conn_obj= new Connection();
		$query="select * from categories";
		$result=$conn_obj->conn->query($query);
		$categories= array();
		while($row = $result->fetch_assoc()){
			$categories[]=$row;

		}
		return $categories;
	}	
}
?>