<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once 'config.php';

    $queryResult = $pdo->query("SELECT * FROM users");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <h1>User List</h1>
       <div class="row">
            <ol class="breadcrumb">
                <li class=""><a href="index.php">Inicio</a></li>
                <li class="active">List Users</li>
                <li class=""><a href="add.php">Add User</a></li>
            </ol>
       </div>
       <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    <?php 
                        while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
                            echo '<tr>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '</tr>';
                        }
                    ?>
                </table>
            </div>
       </div>
    </main>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>