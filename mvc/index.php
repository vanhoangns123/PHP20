<?php 
$mod=isset($_GET['mod'])?$_GET['mod']:'blog';
$act=isset($_GET['act'])?$_GET['act']:'index';



switch ($mod) {
	case 'category':
		require('controllers/CategoryController.php');
		$controller_obj = new CategoryController();
		switch ($act) {
			case 'list':
			$controller_obj->list1();
			echo"lisst";
			break;
			case 'add':
			$controler_obj->add();
			break;
			case 'add-process':
			echo"add process form";
			break;
			case 'edit':
			echo"edit  form";
			break;
		}
	break;
	/********************/
	case 'post':
		 require_once('controllers/PostController.php');
		 $controller_obj=new PostController();
			switch ($act) {
				case 'list':
					$controller_obj->list1();
					echo"post-list";
					break;
				
				default:
					# code...
					break;
			}
			break;
	case 'user':
		echo "đây là mod = user";
				require_once('controllers/UserController.php');
				$user_obj=new UserController();
			switch ($act) {
				case 'list':
					$user_obj->list1();
					break;
				case 'detail':
					  $user_obj->detail($_GET['id']);
					break;
				default:
					# code...
					break;
			}
				break;
}

?>