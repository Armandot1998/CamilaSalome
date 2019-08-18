<?php
  session_start();

  require 'Conexion/conexion.php';

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
?> <?php require 'Complementos/navbar.php' ?>
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
<body><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-179223">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-179223">
					</li>
					<li data-slide-to="1" data-target="#carousel-179223">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="Imagenes/img1.jpg" />
						<div class="carousel-caption">
            <h4>
            Somos una Organización sin fines de lucro dedicada a
            programa de aulas gratuitas domiciliarias para estudiantes con cáncer y enfermedades catastróficas en la ciudad
            de Quito.
</h4>
            <input type="button" id="but1" class="btn btn-warning btn-rounded" onclick=" location.href='http://www.google.com' " value="Conoce más .."/> 
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="Imagenes/img2.jpg" />
						<div class="carousel-caption">
						 <h4>
             Dirigida a niños, niñas y adolecentes con cáncer u otras
            enfermedades catastróficas que requieren reposo domiciliário prolongado.
</h4>
            <input type="button" id="but1" class="btn btn-warning btn-rounded" onclick=" location.href='http://www.google.com' " value="Conoce más .."/>
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-179223" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-179223" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>
</div><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
    <div class="view">
  <img src="Imagenes/Aulas.png" class="img-fluid" alt="placeholder">
  <div class="mask flex-center waves-effect waves-light rgba-teal-ligth">
  </div>
</div>
<h2>
				Aulas Domiciliarias
			</h2>
			<p>Para niños y niñas con cáncer y enfermedades catastróficas.</p>
			<p>
				<a class="btn" href="#">Conoce más »</a>
			</p>
		</div>
		<div class="col-md-4">
		<div class="view">
  <img src="Imagenes/Amigos.png" class="img-fluid" alt="placeholder">
  <div class="mask flex-center waves-effect waves-light rgba-teal-ligth">
  </div>
</div>
<h2>
			Amigos de Camila
			</h2>
			<p>Genera un compromiso y participación activa.</p>
			<p>
				<a class="btn" href="#">Conoce más »</a>
			</p>
		</div>
		<div class="col-md-4">
    <div class="view">
  <img src="Imagenes/Apoyo.png" class="img-fluid" alt="placeholder">
  <div class="mask flex-center waves-effect waves-light rgba-teal-ligth">
  </div>
</div>
<h2>
				Apoyo Socioemocional
			</h2>
			<p>Apoyo socioemocional para nuestros pacientes, estudiantes y sus familias.</p>
			<p>
				<a class="btn" href="#">Conoce más »</a>
			</p>
		</div>
	</div>
</div><br>
<div class="container-fluid">
	<div class="row"  id="nost">
		<div class="col-md-7">
			<img width="640" height="450" alt="Bootstrap Image Preview" src="Imagenes/Nosotros.jpg" class="rounded" />
		</div>
		<div class="col-md-5">
    <div class="text-1">
			<p> Somos una Organización sin fines de lucro aprobada mediante Resolución N°319 MINEDUC SEDMQ-2016
            del Ministerio de Educación del Ecuador, dedicada a la
            “Atención Educativa Domiciliaria para estudiantes con cáncer
            y enfermedades catastróficas en la ciudad de Quito”,
            programa que busca ayudar a los niños, niñas y adolescentes
            que por su situación de enfermedad no pueden asistir a su institución educativa
            de origen y no están hospitalizados, para que tengan continuidad
            en sus estudios y sea fácil su reincorporación escolar;
            prestamos además ayuda socioemocional a los niños y sus familias.</p><br>
            <a class="btn" href="#">Conoce más »</a>
</div>  
		</div>
	</div>
</div><br>
<div class="row" id="nost">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Nuestra Galería
			</h3>
		</div>
	</div><hr size="8px" >
</div><br>
  <div class="col-lg-4 col-md-12 mb-3">

    <img src="Imagenes/Hospital.jpg" class="img-fluid z-depth-1"
      alt="Responsive image">
  </div>
  <div class="col-lg-4 col-md-6 mb-3">

    <img src="Imagenes/AulasD.jpg" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <div class="col-lg-4 col-md-6 mb-3">

    <img src="Imagenes/Vacacional.jpg" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
</div><br>
<div class="row" id="nost">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Notícias
			</h3>
		</div>
	</div><hr size="8px" >
</div><br>
               <!--=========================CAJAS DE BLOGS================================-->
               <?php 
                $rows = 0;
                $stmt = $conn->prepare('SELECT id_blog, title, author, date_blog, image.name as name, content FROM blog inner join image on image.id_image = blog.id_image order by id_blog DESC limit 6');
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
                              <div class="row">                                 ';
                        }
                        echo '
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" alt="Bootstrap Thumbnail First" src="Imagenes/Blog-Img/'.$results['name'].'" />
                                    <div class="card-block">
                                        <h5 class="card-title">'.$results['title'].'</h5>
                                        <p>
                                        <a  class="btn btn-outline-secondary btn-rounded waves-effect" href="Detalle-Blog.php?id='.$results['id_blog'].'">Detalles »</a>
                                        </p>
                                    </div>
                                </div>
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
                echo '</div>';
                
                ?>
</div><br>
<br><br>
<div class="container-fluid"  id="back">
	<div class="row" >
		<div class="col-md-12">
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

<!-- Grid column -->
<div class="col-md-4 mb-3">
  <h6 class="text-uppercase font-weight-bold"><br>
    <a href="#!" id="col">Nosotros</a>
  </h6>
  <p id="an">Yánez Pinzón N26-56 entre <br>Av. Colón 
y La Niña Edf. Frago, Ofc. 1 
Quito - Ecuador</p>
                <a class="nav-link" href="#">
                  <i class="fa fa-phone"></i> + 593 22556 747
                  <span class="sr-only">(current)</span>
                </a>
                <a class="nav-link" href="#">
                  <i class="fab fa-telegram-plane"></i> info@camilasalome.org
                  <span class="sr-only">(current)</span>
                </a>
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-md-4 mb-3">
  <h6 class="text-uppercase font-weight-bold"><br>
    <a href="#!" id="col">Programas</a>
  </h6>
  <a class="nav-link" href="#">
                   Aulas Domiciliárias
                  <span class="sr-only">(current)</span>
                </a>
                <a class="nav-link" href="#">
                  Apoyo Socioemocional
                  <span class="sr-only">(current)</span>
                </a>
                <a class="nav-link" href="#">
                  Amigo de Camila
                  <span class="sr-only">(current)</span>
                </a>
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-md-4 mb-3">
  <h6 class="text-uppercase font-weight-bold"><br>
    <a href="#!" id="col">Información</a>
  </h6>
  <a class="nav-link" href="#">
                  Código de Ética
                  <span class="sr-only">(current)</span>
                </a>
                <a class="nav-link" href="#">
                  Transparencia
                  <span class="sr-only">(current)</span>
                </a>
                <a class="nav-link" href="#">
                  Donaciones
                  <span class="sr-only">(current)</span>
                </a>
                <a class="nav-link" href="#">
                  Voluntariado
                  <span class="sr-only">(current)</span>
                </a>
</div>
</div>
<!-- Grid row-->
<hr class="rgba-white-light" style="margin: 0 15%;">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
    <div class="mb-5 flex-center">

<!-- Facebook -->
<a class="fb-ic">
  <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
</a>
<!-- Twitter -->
<a class="tw-ic">
  <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
</a>
<!-- Google +-->
<a class="gplus-ic">
  <i class="fab fa-youtube fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
</a>
<!--Instagram-->
<a class="ins-ic">
  <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
</a>
</div>
		</div>
	</div>
 <!-- Copyright -->
 <div class="footer-copyright text-center py-3" id="fin">© 2019 Copyright:
    <a href="#" id="ng">YAVIRAC Developers</a>
  </div>
  <!-- Copyright -->
		</div>
		<div class="col-md-1">
		</div>
  </div>
</div>
<div class="contenedor">
  <p class="panim"><b>ATENCIÓN</p>
  <ul class="anim">
    <li>EDUCATIVA</li>
    <li>DOMICILIARIA</li>
    <li>GRATUITA</li>
  </ul>
</div>
</body>
</html>