<?php 
	require_once('connection.php');
	class Post{

		function All(){
			$conn_obj = new Connection();

			$query = "SELECT * FROM posts ORDER BY created_at DESC";

			$result = $conn_obj->conn->query($query);

			$posts = array();

			while($row = $result->fetch_assoc()){

				$posts[] = $row;
			}
			
			return $posts;
		}

		function Lastest_post(){
			$conn_obj = new Connection();

			$query = "SELECT * FROM posts ORDER BY created_at ASC LIMIT 3";

			$result = $conn_obj->conn->query($query);

			$lt_posts = array();

			while($row = $result->fetch_assoc()){

				$lt_posts[] = $row;
			}
			
			return $lt_posts;
		}


		function Top_view(){
			$conn_obj  = new Connection();

			$query = " SELECT * FROM posts ORDER BY view_count  DESC LIMIT 3";

			$result = $conn_obj->conn->query($query);

			$posts_top1 = array();

			while($row = $result->fetch_assoc()){
				$posts_top1[] = $row;
			}
			return $posts_top1;
		}

		function Detail($id){
			$conn_obj  = new Connection();

			$query = " SELECT * FROM posts WHERE id = '".$id."'";

			$result = $conn_obj->conn->query($query);

			$posts_dt = $result->fetch_assoc();

			return $posts_dt;
		}
		function long(){
			$conn_obj=new Connection();
			$query ="SELECT content from posts where view_count max(values)";
			$result=$conn_obj->conn->query($query);
			$post_max_view=$result->fetch_assoc();
			return $post_max_view;


		}
		// function Count_post($category_id){
		// 	$conn_obj  = new Connection();

		// 	$query = "COUNT(*) FROM posts WHERE category_id = '".$category_id."' )";

		// 	$count_posts = $conn_obj->conn->query($query);

		// 	return $count_posts;

		// }
	}
 ?>