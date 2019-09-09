<?php 
		require_once('models/Post.php');

	class PostController{
		function __construct(){
		}
		function list1(){
			$post_obj = new Post();
			$posts = $post_obj->All();
			return $posts;
		}

		function lastest_post(){
			$post_obj = new Post();
			$lt_posts = $post_obj->Lastest_post();
			return $lt_posts;
		}

		function top_view(){
			$post_obj = new Post();
			$posts_top1 = $post_obj->Top_view();
			return $posts_top1;
		}

		function detail(){
			$id = $_GET['id'];
			$post_obj = new Post();
			$posts_dt = $post_obj->Detail($id);
			return $posts_dt;
		}

		// function count_posts(){
		// 	$post_obj = new Post();
		// 	$count_posts = $post_obj->Count_post();
		// 	return $count_posts;
		// }

	}
 ?>