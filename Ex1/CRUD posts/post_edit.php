<?php 
    require_once('connect.php');

    // Lấy ra toàn bộ danh mục cha để cho vào select
    // $query = "SELECT * FROM post WHERE parent_id is NULL";

    // $result = $conn->query($query);

    // $categories = array();

    // while ($row = $result->fetch_assoc()) {
    //    $categories[] = $row;
    // }

    // Lấy ra danh mục cần sửa
    $id = $_GET['id'];

    $post = "SELECT * FROM posts WHERE id='".$id."' ";

    $post = $conn->query($post)->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Update Category</h3>
    <hr>
        <form action="post_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" class="form-control" value="<?= $post['title'] ?>" id="" placeholder="" name="title" >
                <input type="hidden" class="form-control" value="<?= $post['id'] ?>" id="" placeholder="" name="id" >
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <img src="images/<?= $post['thumbnail'] ?>" width="100px" height="100px">
                <input type="file" class="form-control"  id="" placeholder="" name="thumbnail">
            </div>
          
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control"  value="<?= $post['slug'] ?>"  id="slug" placeholder="" name="slug">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control"  value="<?= $post['description'] ?>"  id="" placeholder="" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>