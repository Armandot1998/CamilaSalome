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

<div class="container">
    <ul class="nav nav-tabs " >
      <li class="nav-item" >
        <a class="nav-link active "  href="actividades.php"><font color="black">Actividades</font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active " href="aulas.php"><font color="black">Aulas Domiciliarias</font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active " href="programa.php"><font color="black">Programa de Sensibilización</font></a>
      </li>
    </ul>
  </div>
  <br>
  <?php 
                $rows = 0;
                $stmt = $conn->prepare('SELECT id_gallery, category, image.name as name,title, date_image  FROM gallery inner join image on image.id_image = gallery.id_image where category="Actividades"');
                $stmt->execute();
               // $results = $stmt->fetch(PDO::FETCH_ASSOC);
                echo '<div class="container-fluid">
                ';
                while($results = $stmt->fetch(PDO::FETCH_ASSOC)){

                    if (count($results) > 0) {
                        if($rows==0){
                            echo '               
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">

                            ';
                        }
                        echo '
                                      <div class="col-md-4 ">
                                        <div class="box">
                                          <img class="card-img-top" src="../Imagenes/Gallery-Img/'.$results['name'].'" alt="Image did not load...">
                                        </div>
                                        <div>
                                        <p><h5 class="card-title">'.$results['title'].'</h5></p>
                                        <p><h5 class="card-title">'.date("d/m/Y",strtotime($results['date_image'])).'</h5></p>
                                        <div>
                                      </div>
                            ';
                    $rows = $rows+1;
                        if($rows==3){
                            $rows= 0;
                            echo '               
                                    </div>
                                  </div>
                                </div>                                 
                            ';
                        }
                    }
                    }
                echo '
                </div>
                ';
          ?>

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
