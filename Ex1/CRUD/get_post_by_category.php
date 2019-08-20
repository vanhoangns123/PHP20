<?php  
	require_once('connect.php');
	$slug=$_GET['slug'];
	$query='select * from categories c JOIN postsp WHERE c.slug = '".$slug."';'
	$posts=$conn.query($query);


?>
<!DOCTYPE html>
<html>
<head>
	<title>list post of categories</title>
</head>
<body>
	<table>
		<thead>
			<th>index</th>
			<th>title</th>
			<th>thumnail</th>
			<th>description</th>
		</thead>
		<?php 
		$index=1;
		while ($post=$posts->fetch_assoc()) {
			?>
		<tr><?=$index++?></tr>	
		    <tr></tr>
		






		 ?>







	</table>


</body>
</html>