<?php 
	require_once('connection.php');

	$slug = $_GET['slug'];

	$query = "DELETE FROM categories WHERE slug='".$slug."' ";

	$status = $conn->query($query);

	if($status == TRUE){
		header('Location: categories.php');
	}else{
		echo "Error";
	}
	
 ?>