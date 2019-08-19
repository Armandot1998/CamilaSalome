<?php
  session_start();

  require 'Conexion/conexion.php';?>
<?php require 'Complementos/navbar.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fundación Camila Salome</title>
  <link rel="shortcut icon" href="Imagenes/icono.jpg" />
  <link rel="stylesheet" href="Css/estilo-index.css">
  <!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="Slider/engine1/style.css" />
	<script type="text/javascript" src="slider/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
</head>
<style>
  #h1{
    font-size: 100px;
  }
</style><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
        <div class="row">
<div class="view">
  <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(137).jpg" class="img-fluid" alt="Image of ballons flying over canyons with mask pattern one.">
  <div class="mask pattern-3 flex-center waves-effect waves-light">
    <b><h1 id="h1" class="white-text">BLOG</h1><b>
  </div>
</div><br>
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
                                 ';
                        }
                        echo '
                        <div class="col-md-4">
                        <img class="card-img-top" width="45" height="290" alt="Bootstrap Thumbnail First" src="Imagenes/Blog-Img/'.$results['name'].'" />
                        <p><h5 class="card-title">'.$results['title'].'</h5></p>
                        <p>
                          <a class="btn btn-outline-secondary waves-effect" href="Detalle-Blog.php?id='.$results['id_blog'].'">Detalles</a>
                        </p>
                      </div>
                            ';
                    $rows = $rows+1;
                        if($rows==3){
                            $rows= 0;
                            echo '               
                                 <div class="row">
                                 ';
                        }
                    }
                    }
                echo '</div>';?>
    </div>
    </div>
		<div class="col-md-1">
		</div>
	</div>
</div>