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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="./Admin-Gallery/styles/main.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</head>
<style>
img.zoom {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}

.transition {
    -webkit-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
    .modal-header {
   
     border-bottom: none;
}
    .modal-title {
        color:#000;
    }
    .modal-footer{
      display:none;  
    }
 </style> 
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
                $stmt = $conn->prepare('SELECT id_gallery, category, image.name as name,title, date_image  FROM gallery inner join image on image.id_image = gallery.id_image where category="Aulas Domiciliarias"');
                $stmt->execute();
               // $results = $stmt->fetch(PDO::FETCH_ASSOC);
                echo '<div class="container-fluid mt-40">
                ';
                while($results = $stmt->fetch(PDO::FETCH_ASSOC)){

                    if (count($results) > 0) {
                        if($rows==0){
                            echo ' 
                            <div class="row">
                            <div class="col-md-10 ">
                            <div class="row">
                            ';
                        }
                        echo '
                        <div class="col-md-4  pp-gallery ">
                          <div class="box">
                            <a href="../imagenes/Gallery-Img/'.$results['name'].'" class="fancybox" rel="ligthbox">
                              <figure class="pp-effect">
                                <img class="zoom img-fluid"  src="../imagenes/Gallery-Img/'.$results['name'].'" alt="">
                                <figcaption>
                                  <div class="h4">'.$results['title'].'</div>
                                  <p>'.date("d/m/Y",strtotime($results['date_image'])).'</p>
                                </figcaption>
                              </figure>
                            </a>     
                          </div>        
                        </div>         
                                                        
                            ';
                    $rows = $rows+1;
                        if($rows==3){
                            $rows= 0;
                            echo ' </div>
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

<script>
$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
    
</script>    
<link href="./Admin-Gallery/scripts/main.css" rel="stylesheet">
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
