<?php 
require_once('models/Post.php');

class PostController{
	function __construct(){
		echo ">>> Controller:Post";
	}
	function list1(){
		$post_obj=new Post();
		$posts=$post_obj->getall();
		require_once('views/post/list.php');

	}
}
 ?>