<?php 
	require_once('models/User.php');
	 

class LoginController
{
	

	function login(){
		//lấy dữ liệu
		$data['email'] = $_POST['email'];
		$data['password'] = $_POST['password'];
		// var_dump($data);
		// die();
		//kiểm tra trong database
		$User_obj = new User();
		$getdata = $User_obj->check($data); //check trả về 1 bảng dữ liệu
// 		echo "<pre>";
// 		var_dump($getdata);
// 		echo "</pre>";
// die();
		if ($getdata != null) {
			$_SESSION['nv']=$getdata;
			$_SESSION['islogin'] = 1;//kiểm tra đang nhâp thahf công

			header('Location: index.php?mod=home&act=homepage');
			// echo "sayyy1111";
			// die();
		}else{

			header('Location:index.php?mod=login&act=form_login');
		}
	}
	// function logout(){
	// 	session_destroy();
	// 	header('Location:index.php?mod=login&act=form_login');
	// }
}




 ?>