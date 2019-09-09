<?php
	
	class check{
		function checkLogin(){

			if($_SESSION['islogin']!=1){
				header('Location:index.php?mod=login&act=form');

		}
	
	}
		}
?>