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
?>
<?php require 'Complementos/navbar.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>Blog</title>
<link rel="stylesheet" href="Css/estilo-index.css">
</head><br>
  <body>
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
</div>
</div>
</div>
</div>
</div>
</div>

  <?php 
  //SELECT * FROM blog inner join image on image.id_image = blog.id_image 
    
    $stmt = $conn->prepare('SELECT blog.*,image.name as name_image FROM blog inner join image on image.id_image = blog.id_image   WHERE blog.id_blog = :id');
    $stmt->bindParam(':id',$_GET['id']);
    $stmt->execute();
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    if (count($results) > 0) {
     $date= date_format(date_create($results['date_blog']), "Y-m-d");
     ?>
       <script type="text/javascript">
		$(document).ready(function(){
	$('#content').Editor('setText', ['<?php echo $results['content']?>']);

    $('#btn_Agregar').click(function(e){
				e.preventDefault();
				$('#content').text($('#content').Editor('getText'));
				$('#frm_Blog').submit();				
			});
		});	
	</script>
    <?php
    echo'
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1">
               
                </div>
                <div class="col-md-10">
                <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
      <div class="jumbotron">
      <div class="container-fluid">
	<div class="row">
    <div class="col-md-6">
    <img style="max-width:100%;width:auto;height:auto;" alt="Bootstrap Thumbnail First" align="center" src="Imagenes/Blog-Img/'.$results['name_image'].'" />
		</div>
    <div class="col-md-6">
    <div class="card-body card-body-cascade text-center">
    <!-- Title -->
    <h4 class="card-title" ><strong>'.$results['title'].'</strong></h4>
    <!-- Subtitle -->
    <h5 class="blue-text pb-2"><strong>'.$results['author'].'</strong></h5>
    <!-- Text -->
    <p class="card-text">'.$results['date_blog'].' </p><br>

    <!-- Linkedin -->
    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
    <!-- Twitter -->
    <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
    <!-- Dribbble -->
    <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>
  </div>
		</div>
	</div>
</div><br>
      <p class="card-text">'.$results['content'].'</p>
      <a class="btn" href="index.php">Volver »</a>
      </div>
		</div>
	</div>
</div>
<div class="container-fluid"  id="back">
	<div class="row" >
		<div class="col-md-12">
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

<!-- Grid column -->
<div class="col-md-4 mb-3">
  <h6 class="text-uppercase font-weight-bold">
    <a href="#!">Nosotros</a>
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
  <h6 class="text-uppercase font-weight-bold">
    <a href="#!">Programas</a>
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
  <h6 class="text-uppercase font-weight-bold">
    <a href="#!">Información</a>
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
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </div>
</div>
  </body>
</html>

';};

 