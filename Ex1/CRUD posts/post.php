 
<?php 
 require_once('connect.php');
 $id=$_GET['id'];
$query="select * from posts where id=".$id;
//echo $query;

$result=$conn->query($query);
$post = $result->fetch_assoc();
$detail=$post;
 // print_r($detail);

?>

 
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>post</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="posts.php" class="btn btn-primary">Add New posts</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>title</th>
                <th>description</th>                
                <th>content</th>
                <th>#</th>

            </thead>
        
            <tr>
                <td><?= $post['id'] ?></td>
                <td><?= $post['title'] ?></td>
                <td><?= $post['description']?></td>
                    
                
                <td><?= $post['content'] ?></td>
                <td>
                    <a href="post.php?id=<?= $post['id'] ?>" class="btn btn-primary">Detail</a>
                    <a href="category_edit.php?slug=<?= $category['slug'] ?>" class="btn btn-success">Edit</a>
                    <a href="category_delete.php?slug=<?= $category['slug'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        
        </table>
    </div>
</body>
</html>