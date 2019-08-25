<?php 
	require_once('connect.php');

	$data = $_POST;

	$target_dir = "images/";  // thư mục chứa file upload

    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
   
    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
     	// nếu upload file không có lỗi 
     	$file_name = basename($_FILES["thumbnail"]["name"]);




     	
      // if($data['parent_id'] != 0){
     	// 	$query = "UPDATE posts SET id = '".$data['id']."',title = '".$data['title']."',description = '".$data['description']."',thumbnail = '".$file_name."' WHERE id = ".$data['id'];
     	// }else{
     		$query = "UPDATE posts SET id = '".$data['id']."',title = '".$data['title']."',description = '".$data['description']."',thumbnail = '".$file_name."' WHERE id = ".$data['id'];
     	// }
     	
    // } else { // Upload file có lỗi 
    //   echo "ko up anh moi";
    //   if($data['parent_id'] != 0){
    //     $query = "UPDATE posts SET name = '".$data['name']."',slug = '".$data['slug']."',description = '".$data['description']."',parent_id='".$data['parent_id']."' WHERE id = ".$data['id'];
    //   }else{
    //     $query = "UPDATE posts SET name = '".$data['name']."',slug = '".$data['slug']."',description = '".$data['description']."' WHERE id = ".$data['id'];
    //   }

    }

    $status = $conn->query($query);
    echo "$query";
    if($status == TRUE){
      header('Location: posts.php');
    }else{
      echo "Error";
    }

 ?>