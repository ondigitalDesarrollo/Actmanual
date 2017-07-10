<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$user = null;
$query = null;

if (!empty($_POST)) {
    require_once 'config.php';

    $query = "SELECT * FROM users WHERE email = :email AND password = :password ";
    $prepared = $pdo->prepare($query);
    $prepared->execute([
        'email' => $_POST['email'],
        'password' => md5($_POST['password'])
    ]);
    
    $user = $prepared->fetch(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fake Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <h1>Fake Login</h1>
       <div class="row">
            <ol class="breadcrumb">
                <li class=""><a href="index.php">Inicio</a></li>
                <li class=""><a href="list.php">List Users</a></li>
                <li class=""><a href="add.php">Add User</a></li>
                <li class=""><a href="update.php?id=">Update User</a></li>
                <li class="active">Fake Login</li>
            </ol>
       </div>

        <div class="row">
            <div class="col-md-6">
                <form action="fake-login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input id="email" name="email" type="text" class="form-control" placeholder="Mi correo es:" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Mi Megapassword es:" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>       
       <div class="row">
            <div class="col-md-6">
                <h2>Query</h2>
                <div class="well well-sm">
                    <?php 
                        print_r($query);
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2>User Data</h2>
                <div class="well well-sm">
                     <?php 
                        print_r($user);
                    ?>
                </div>
            </div>
       </div>
    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>