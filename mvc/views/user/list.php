<?php 
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>posts</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="post_add.php" class="btn btn-primary">Add New post</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>name</th>
                <th>email</th>                
                 
                <th>creat_at</th>

            </thead>
            <?php foreach($users as $user) { ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email']?></td>
                    
                
                <td><?= $user['created_at'] ?></td>
                <td>
                    <a href="index.php?mod=user&&act=detail&&id=<?= $user['id']?>" class="btn btn-primary">Detail</a>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>