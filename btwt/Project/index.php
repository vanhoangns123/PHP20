<?php 
$mod = isset($_GET['mod'])?$_GET['mod']: '';
$act = isset($_GET['act'])?$_GET['act']: 'homepage';

	require_once('helper/middleware.php');
	$check=new check();
	session_start();

 
switch ($mod) {
	case 'home':
		// $check->checkLogin();
		require_once('controllers/CategoryController.php');
		require_once('controllers/PostController.php');
		// require_once('controllers/UserController.php');
		$category_obj = new CategoryController();
		$post_obj = new PostController();
		// $user_obj = new UserController();
		switch ($act) {
			case 'homepage':

				$categories =	$category_obj->list1();
				

				$lt_posts = $post_obj->lastest_post();

				$posts_top = $post_obj->top_view();

				$posts = $post_obj->list1();

				require_once('views/homepage.php');

			break;
			default:
			echo "ACT- 404";
			break;
		}
		break;
	// $check->checkLogin();
	case 'about':
		require_once('controllers/CategoryController.php');
		require_once('controllers/PostController.php');
		$category_obj = new CategoryController();
			$post_obj = new PostController();
			switch ($act) {
				case 'aboutpage':
					$posts = $post_obj->list1();

					$categories =	$category_obj->list1();

					$lt_posts = $post_obj->lastest_post();

					$posts_top = $post_obj->top_view();

					require_once('views/about.php');
						break;
				default:
				echo "ACT- 404";
				break;
						}
	break;
	// $check->checkLogin();
	case 'blogandsingle':
		require_once('controllers/CategoryController.php');
		require_once('controllers/PostController.php');
		$category_obj = new CategoryController();
			$post_obj = new PostController();
			switch ($act) {
				case 'singlepage':
					$posts = $post_obj->list1();

					$categories =	$category_obj->list1();

					$lt_posts = $post_obj->lastest_post();

					$posts_top = $post_obj->top_view();

					$posts_dt = $post_obj->detail();

					require_once('views/blog-single.php');
						break;
				default:
				echo "ACT- 404";
				break;
						}
	break;
	// $check->checkLogin();
	case 'contact':
		require_once('controllers/CategoryController.php');
		require_once('controllers/PostController.php');
		$category_obj = new CategoryController();
			$post_obj = new PostController();
			switch ($act) {
				case 'contactpage':
					$posts = $post_obj->list1();

					$categories =	$category_obj->list1();

					$lt_posts = $post_obj->lastest_post();

					$posts_top = $post_obj->top_view();

					require_once('views/contact.php');
						break;
				default:
				echo "ACT- 404";
				break;
						}
	break;
	// $check->checkLogin();
	case 'category':
		require_once('controllers/CategoryController.php');
		require_once('controllers/PostController.php');
		$category_obj = new CategoryController();
			$post_obj = new PostController();
			switch ($act) {
				case 'categorypage':
					$posts_top = $post_obj->top_view();

					$posts = $post_obj->list1();

					$categories =	$category_obj->list1();

					$lt_posts = $post_obj->lastest_post();


					require_once('views/category-page.php');
						break;

				case 'categorychild':
					$posts_top = $post_obj->top_view();

					// $posts = $post_obj->list();

					$categories =	$category_obj->list1();

					$lt_posts = $post_obj->lastest_post();

					$posts_inct = $category_obj->postsinct();

					require_once('views/category-child.php');
						break;
				default:
				echo "ACT- 404";
				break;
						}
	break;

	 
	case 'login':
		require_once('controllers/UserController.php');
		require_once('controllers/LoginController.php');
		$user_obj= new LoginController();
		$user_obj1= new UserController();

		switch ($act) {

			case 'register':
				 echo "1";
				require_once('views/add_user.php');
				break;
			case 'store':
				$dk=$user_obj1->store();
				break;
			case 'form_login':
				require_once('views/login.php');

				break;
			case 'login':
				$user_obj->login();
				break;
			case 'logout':
				 $user_obj->logout();
				break;
			default:
				 
				break;

		}
		break;
	case 'admin':
	require_once('controllers/CategoryController.php');
		require_once('controllers/PostController.php');
			switch ($act) {
				case 'admin':
					require_once('views/admin.php');
					break;
				case 'categories':
					require_once('views/mana_categories.php');
					break;
				default:
					# code...
					break;
			}
			break;	



	default:
	echo "404";
	break;
}

?>
<!-- 
<?php foreach ($posts_top as $post_top ){ ?>
                      
                    <?php } ?> -->