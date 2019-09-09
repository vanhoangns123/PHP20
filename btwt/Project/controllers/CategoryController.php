<?php 
require_once('models/Category.php');
	class CategoryController{
		function __construct(){

		}
		function list1(){
			$category_obj = new Category();

			$categories = $category_obj->All();

			return $categories;
		}

		function postsinct(){

			$id = $_GET['id'];

			$category_obj = new Category();

			$posts_inct = $category_obj->Postinct($id);

			return $posts_inct;


		}


		// function count(){

		// 	$id = $_GET['id'];

		// 	$category_obj = new Category();

		// 	$categories = $category_obj->Count_category($id);

		// 	require_once('views/layouts/sidebar.php');
		// }

		
	}
 ?>