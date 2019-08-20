<?php 
	require_once('connection.php');

	$data = $_POST;

	$target_dir = "images/";  // thư mục chứa file upload

    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
   
    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
     	// nếu upload file không có lỗi 
       	$file_name = basename($_FILES["thumbnail"]["name"]);
       	if($data['parent_id'] != 0){
       		$query = "INSERT INTO categories (name,slug,description,thumbnail,parent_id) VALUES ('".$data['name']."','".$data['slug']."','".$data['description']."','".$file_name."','".$data['parent_id']."')";
       	}else{
       		$query = "INSERT INTO categories (name,slug,description,thumbnail) VALUES ('".$data['name']."','".$data['slug']."','".$data['description']."','".$file_name."')";
       	}
       	

       	echo "$query";

		$status = $conn->query($query);

		if($status == TRUE){
			header('Location: categories.php');
		}else{
			echo "Error";
		}
    } else { // Upload file có lỗi 
        echo "Sorry, there was an error uploading your file.";
    }

 ?>