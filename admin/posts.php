<?php
    include_once '../config.php';
    $sql = "SELECT * FROM blog_posts ORDER BY id DESC";
    $query = $pdo->prepare($sql);
    $query->execute();

    $blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <!--Header-->
        <div class="row">
            <header class="col-md-12">
                <h1>Manage Post</h1>
            </header>
        </div>
        <!--Menu-->
        <div class="row">
            <div class="col-md-12">
                 <ul class="nav nav-pills">
                    <li role="presentation"><a href="index.php">Admin Panel</a></li>
                    <li role="presentation" class="active"><a href="#">Manage Posts</a></li>
                </ul> 
            </div>
        </div>
        <br>
        <!--Main-->
        <div class="row">
            <div class="col-md-8">
                <div class="btn-group">
                    <a href="insert-post.php" class="btn btn-default">New Post</a>
                </div>
                <br><br>
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php foreach ($blogPosts as $blogPost):?>
                        <tr>
                            <td><?php echo $blogPost['title'] ?></td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
        <!--Form New Post-->
        <div class="row">
        </div>
        <!--Breadcrums-->
        <div class="row">
            <footer>
                <div class="row">
                    <ol class="breadcrumb">
                        <li class=""><a href="index.php">Admin Panel</a></li>
                        <li class="active">Blog Post</li>
                    </ol>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>