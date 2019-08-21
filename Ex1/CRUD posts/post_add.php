<?php 
    require_once('connect.php');

    $query = "SELECT * FROM posts WHERE parent_id is NULL";

    $result = $conn->query($query);

    $categories = array();

    while ($row = $result->fetch_assoc()) {
       $categories[] = $row;
    }

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
    <h3 align="center">Add New post</h3>
    <hr>
        <form action="post_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">id</label>
                <input type="text" class="form-control" id="" placeholder="" name="id" >
            </div>
            <div class="form-group">
                <label for="">title</label>
                <input type="file" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">description  </label>
                <select class="form-control" id="" placeholder="" name="description">
                    <option value="0">Danh muc cha</option>
                <?php foreach ($posts as $post) {?>
                    <option value="<?= $post['id'] ?>"><?= $post['name'] ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">content</label>
                <input type="text" class="form-control" id="slug" placeholder="" name="content">
            </div>
           
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>