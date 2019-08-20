<?php 
define ('SERVER_NAME','localhost:3307');
define('DATABASE_NAME','btvnu4');
define('USERNAME',"root");
define('PASSWORD',"");
$conn= new mysqli(SERVER_NAME,USERNAME,PASSWORD,DATABASE_NAME);
$conn->set_charset("utf8");
echo"<pre>";
print_r($conn);
echo"<pre>";



 ?>
