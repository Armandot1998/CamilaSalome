<?php
  session_start();

  require '../Conexion/conexion.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-Voluntariado</title><!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
 
</head>

<body >
<?php if(!empty($user)): 
  require 'partials/navbar.php';?>
            <?php else: ?>
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
            <title>Login</title>
            <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
            <link rel="stylesheet" href="assets/css/style.css">
        </head>
        <body>
          <?php require 'partials/header.php' ?>
          <?php if(!empty($message)): ?>
            <p>
              <?= $message ?>
            </p>
          <?php endif; ?>
            <form action="login.php" method="POST">
              <input name="email" type="text" placeholder="Ingrese su corréo electrónico">
              <input name="password" type="password" placeholder="Ingrese si contraseña">
              <input type="submit" value="Entrar">
            </form>
          <?php endif; ?>
        </body>
      </html>
      
</body>
</html>
