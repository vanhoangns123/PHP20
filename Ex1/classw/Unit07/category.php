<?php 
	require_once('connection.php');

	$slug = $_GET['slug'];

	$query = "SELECT * FROM categories WHERE slug='".$slug."' ";

	$category = $conn->query($query)->fetch_assoc();

	print_r($category);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	
 </body>
 </html>