<?php 
require_once('connect.php');
$data=$_POST;
$query="insert into posts (id,title description,content) values('".$data['id']."','".$data['title']."','".$data['description'].",'".$data['content']."')";

echo "$query";

 ?>