<?php 
$id=$_GET['id'];
require_once('connect.php');

$query = "DELETE FROM posts WHERE id=".$id;

$status = $conn->query($query);

if($status == TRUE){
	header('Location: posts.php');
}else{
	echo "Error";
}

?>
