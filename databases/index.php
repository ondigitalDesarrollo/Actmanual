<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $dbHost = 'localhost';
    $dbName = 'Actmanual';
    $dbUser = 'root';
    $dbPass = 'root';
    try{
        $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exeption $e){
        echo $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Databases Concepts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <h1>Databases Concepts</h1>
        <ul>
            <li>
                <a href="#">List Users</a>
            </li>
            <li>
                <a href="#">Add User</a>
            </li>
        </ul>
    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>