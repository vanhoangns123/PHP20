<?php 
require_once('models/User.php');

class UserController{
	function __construct(){
		echo ">>> Controller:USERs";
	}
	function list1(){
		$user_obj=new User();
		$users=$user_obj->getall();
		require_once('views/user/list.php');

	}
	function detail($id){
		$user_obj=new User();
		$user=$user_obj->get1($id);
		require_once('views/user/detail.php');
	}
}
 ?>