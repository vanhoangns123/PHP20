<?php 
	require_once('connection.php');
	class Category{
		function All(){
			$conn_obj  = new Connection();

			$query = " SELECT * FROM categories WHERE parent_id is NULL ";

			$result = $conn_obj->conn->query($query);

			$categories = array();

			while($row = $result->fetch_assoc()){

				$categories[] = $row;
			}
			return $categories;
		}

		function Postinct($id){

			$conn_obj  = new Connection();

			$query = "SELECT * FROM posts WHERE category_id = (SELECT id FROM categories WHERE id = '".$id."') ";


			$result = $conn_obj->conn->query($query);

			$posts_inct = array();

			while($row = $result->fetch_assoc()){

				$posts_inct[] = $row;
			}
			return $posts_inct;
		}

		// function Count_category($id){
			
		// 	$conn_obj  = new Connection();

		// 	$query = "COUNT(*) FROM posts WHERE category_id = '".$id."'";

		// 	$result = $conn_obj->conn->query($query);

		// 	$categories = array();

		// 	while($row = $result->fetch_assoc()){

		// 		$categories[] = $row;
		// 	}
		// 	return $categories;
		// }
	}
 ?>