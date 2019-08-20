<?php 
require_once('connect.php');
$query ='select * from categories where parent_id is null;';
$categories=$conn->query($query);


 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	

 	<h1>lissth of cate</h1>
 	

	<ul>
		<?php while($category=$categories ->fetch_assoc()) { ?>
		<li>
			<a href="#"></a>
		</li>
		<ul>
			
			
		</ul>



	</ul>


 </body>
 </html>