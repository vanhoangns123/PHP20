<?php 
require_once('Connection.php');
class Post{
	function getall(){
		$conn_obj=new Connection();
		$query = "select * from posts";
		$result=$conn_obj->conn->query($query);
		$posts=array();
		while($row=$result->fetch_assoc()){
			$posts[]=$row;

		}
		return $posts;
	}
}
 ?>