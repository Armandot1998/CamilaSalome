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
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">


</head>

<body>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
      function EjecutarSweetAlert(boton){
        $("#".concat(boton.id)).click(function (){
			    swal({
			      title: "¿Está seguro?",
			      text: "Una vez eliminado, no podrá recuperar este archivo!",
			      icon: "warning",
			      buttons: true,
			      dangerMode: true,
			    })
			    .then((willDelete) => {
			      if (willDelete) {

      				swal("El archivo ha sido eliminado!", {
				        icon: "success",
				      });
            window.location ='./Admin-Blog/process/delete_blog.php?id='+boton.name;
			  } else {
				swal("Operación cancelada!");
			  }
			});	
		});
      }    
    ;
</script>
    <?php if(!empty($user)): ?>
        <nav class="navbar navbar-expand-md navbar-dark pink mb-5 no-content scrolling-navbar fixed-top">
            <div class="container">
                <!-- Breadcrumb-->
                <div class="mr-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb clearfix d-none d-md-inline-flex pt-0">
                            <li class="breadcrumb-item"><a class="white-text" href="#!">Administrar</a><i class="fas fa-angle-double-right mx-2 white-text" aria-hidden="true"></i></li>
                        </ol>
                        <a href="#" class="btn btn-flat btn-sm" role="button">
                            <font color="white">Blog</font>
                        </a>
                        <a href="./admin_new_Blog.php" class="btn btn-flat btn-sm" role="button">
                            <font color="white">Voluntariado</font>
                        </a>
                        <a href="#" class="btn btn-flat btn-sm" role="button">
                            <font color="white">Galeria</font>
                        </a>
                    </nav>
                </div>
            </div>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <a class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" href="logout.php">Salir</a>
            </ul>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-3">
                    <a href="./Admin-Blog/admin_new_Blog.php" id="navbarDropdownMenuLink" class="btn btn-outline-primary waves-effect">Crear nuevo Blog</a>
                </div>
                <div class="col-md-8">
                </div>
            </div>
        </div>
        <hr>
        <!--=========================CAJAS DE BLOGS================================-->
        <?php 
                $rows = 0;
                $stmt = $conn->prepare('SELECT id_blog, title, author, date_blog, image.name as name, content FROM blog inner join image on image.id_image = blog.id_image order by id_blog DESC');
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
                                      <div class="col-md-4">
                                          <img class="card-img-top" alt="Bootstrap Thumbnail First" src="../Imagenes/Blog-Img/'.$results['name'].'" />
                                          <p><h5 class="card-title">'.$results['title'].'</h5></p>
                                          <p>
                                            <a class="btn btn-outline-secondary waves-effect" href="./Admin-Blog/admin_edit_blog.php?id='.$results['id_blog'].'">Modificar</a>
                                            <a class="btn btn-outline-danger waves-effect" id="btnSA_'.$results['id_blog'].'" name ="'.$results['id_blog'].'" onClick= "EjecutarSweetAlert(this)">Eliminar</a>
                                          </p>
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

