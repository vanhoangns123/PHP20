<?php 
require_once('models/Category.php');
class CategoryController  
{
	function __construct(){		
		echo ">>>>Controller:Category";
	}

	function list1(){
		$category_obj=new Category();
		$categories=$category_obj->getAll();
		require_once('views/category/list.php');
	}

	function find(){
		echo"adđ";
	}
}






?>