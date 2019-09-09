<?php 
require_once('models/User.php');
class UserController{
	function store(){
		$data = $_POST;
		$user_obj= new User();
		$status=$user_obj->insert($data);

		if($status==true){
			header('location:index.php?mod=home&act=homepage');
		}
		else{
			echo"status failed";
		}	
	}


	 
}
 ?>