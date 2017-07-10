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
                <h1>Admin Panel</h1>
            </header>
        </div>
        <!--Menu-->
        <div class="row">
            <div class="col-md-8">
                <p>Opciones para editar: </p>
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#">Admin Panel</a></li>
                    <li role="presentation"><a href="posts.php">Manage Posts</a></li>
                    <li role="presentation"><a href="insert-post.php">New Posts</a></li>
                </ul> 
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