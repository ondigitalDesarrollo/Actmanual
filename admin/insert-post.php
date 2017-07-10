<?php
    include_once '../config.php';
    $result = false;
    $alertDanger =  '<span class="label label-danger">Publicación Erronea</span>';
    $alertSuccess =  '<span class="label label-success">Publicación Exitosa</span>';

    if(!empty($_POST)){
        $sql = 'INSERT INTO blog_posts(title, content) VALUES (:title, :content)';
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'title' => $_POST["title"],
            'content' => $_POST["content"]
        ]);
    }

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
                <h1>Insert Post</h1>
            </header>
        </div>
        <!--Menu-->
        <div class="row">
            <div class="col-md-8">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="index.php">Admin Panel</a></li>
                    <li role="presentation"><a href="posts.php">Manage Posts</a></li>
                </ul> 
            </div>
        </div>
        <!--Main-->
        <div class="row">
            <div class="col-md-8">
                <div class="btn-group">
                    <a href="posts.php" class="btn btn-default">Back</a>
                    <a href="#" class="btn btn-primary">New Post</a>
                </div>
                <h3>Insert your Content</h3>
                <form action="insert-post.php" method="post">
                    <?php
                         echo (!$result) ? '' : $alertSuccess;
                    ?>
                    <div class="form-group">
                        <label for="title">Into title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder='Ex."The Big Cow Green"' required>
                    </div>
                    <div class="form-group">
                        <label for="content">Into Content</label>
                        <textarea type="text" class="form-control" name="content" id="content" rows="5" placeholder='Ex."Once Upon a time..."' required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Publicar</button>
                </form>
            </div>
        </div>
        <br><br>
        <!--Breadcrumb-->
        <div class="row">
            <footer>
                <div class="row">
                    <ol class="breadcrumb">
                        <li class="active">Admin Panel</li>
                        <li class="active"><a href="../index.php">Blog</a></li>
                    </ol>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>