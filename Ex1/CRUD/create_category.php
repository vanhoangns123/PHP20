<?php 
require_once('connect.php');
$query='select *from categories where parent_id is NULL';
$categories=$conn->query($query);


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		de
 	</title >
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 </head>
 <body>
 	<br>
 	<form action="create_category_process.php" method="POST" > 
 		<label>name</label>
		<input type="text" name="category_name">
		<select>
				



		</select>






 	</form>
 </body>
 </html>