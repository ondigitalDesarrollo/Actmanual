<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'config.php';
$result = false;

if (!empty($_POST)) {
    $id = $_POST['id'];
    $newName = $_POST['name'];
    $newEmail = $_POST['email'];

    $sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
    $query = $pdo->prepare($sql);

    $result = $query->execute([
        'id' => $id,
        'name' => $newName,
        'email' => $newEmail
    ]);

    $nameValue = $newName;
    $emailValue = $newEmail;
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=:id";
    $query = $pdo->prepare($sql);

    $query->execute([
        'id' => $id
    ]);

    $row = $query->fetch(PDO::FETCH_ASSOC);
    $nameValue = $row['name'];
    $emailValue = $row['email'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <h1>Update User</h1>
       <div class="row">
            <ol class="breadcrumb">
                <li class=""><a href="index.php">Inicio</a></li>
                <li class=""><a href="list.php">List Users</a></li>
                <li class=""><a href="add.php">Add User</a></li>
                <li class="active">Update User</li>
            </ol>
       </div>
       <div class="row">
            <div class="col-md-8">
                <form action="update.php" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input id="name" name="name" type="text" class="form-control" value="<?php echo $nameValue; ?>" required>
                    </div>
                     <div class="form-group">
                        <label for="email">Name:</label>
                        <input id="email" name="email" type="email" class="form-control" value="<?php echo $emailValue; ?>" required>
                        <input id="id" name="id" type="hidden" class="form-control" value="<?php echo $id; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Uptade</button>
                </form>
            </div>
            <div class="col-md-4">
                <?php
                  if ($result) {
                        echo '<div class="alert alert-success">Tus datos se actualizaron correctamente</div>';
                  }
                ?>
            </div>
        </div>      
    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>