<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$result = false;
require_once 'config.php';
if(!empty($_POST)){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $sql = 'INSERT INTO users(name,email, password) VALUES (:name, :email, :password)';

    $query = $pdo->prepare($sql);

    $result = $query->execute([
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <h1>Add User</h1>
       <div class="row">
            <ol class="breadcrumb">
                <li><a href="index.php">Inicio</a></li>
                <li class=""><a href="list.php">List Users</a></li>
                <li class="active">Add User</li>
            </ol>
       </div>
        <div class="row">
            <div class="col-md-8">
                <form action="add.php" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Me llamo:" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input id="email" name="email" type="email" class="form-control" placeholder="Mi correo es:" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Mi Megapassword es:" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            <div class="col-md-4">
                <?php
                    if($result){
                        echo '<div class="alert alert-success">Se Guardaron tus Datos</div>';
                    }
                ?>
            </div>
        </div>       
    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>