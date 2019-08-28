<!DOCTYPE html>
<html lang="es">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Somos una Fundación sin fines de lucro, dedicada a Programa de Atención educativa domiciliaria para estudiantes con cáncer y enfermedades catastróficas en la ciudad de Quito. buscamos ayudar a los niños, niñas y adolescentes que por su situación de enfermedad no pueden asistir a una institución educativa, para que tengan continuidad en sus estudios y sea fácil su reincorporación escolar; prestamosademás ayuda socioemocional a los niños y sus familias." />
<meta name="keywords" content="fundacion, fundacion sin fines de lucro, ayuda social, cancer, lucha contra el cancer, niños con cancer, ayuda socioemocional, educacion a domicilio, enfermedades catastroficas, atencion educativa domiciliaria, " />
<meta name="author" content="AG MediaEstudio" />

<!-- Page Title -->
<title>Fundación Camila Salome - Galerias</title>

<!-- Favicon and Touch Icons -->
 <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">

<link href="Administrador/Admin-Gallery/styles/main2.css" rel="stylesheet">
<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="boxed-layout pt-40 pb-40 pt-sm-0" data-bg-img="imagenes/colores.jpg">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper" class="clearfix">
  
  <!-- Header -->
  <?php require 'header.php' ?>
  
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="imagenes/bggaleria.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Programa de Sensibilización</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Gallery Grid 3 -->
    <section>
      <div class="container">
      <?php 
                  require 'Conexion/conexion.php';
                  $rows = 0;
                  $stmt = $conn->prepare('SELECT id_gallery, category, image.name as name,title, date_image  FROM gallery inner join image on image.id_image = gallery.id_image where category="Programa de Sensibilización"');
                  $stmt->execute();
                // $results = $stmt->fetch(PDO::FETCH_ASSOC);
                  echo '<div class="container-fluid ">
                  ';
                  while($results = $stmt->fetch(PDO::FETCH_ASSOC)){

                      if (count($results) > 0) {
                          if($rows==0){
                              echo ' 
                              <div class="row">
                              <div class="col-md-12 ">
                              <div class="row">
                              ';
                          }
                          echo '
                          <div class="col-md-4  pp-gallery ">
                            <div  class="box">
                              <a href="imagenes/Gallery-Img/'.$results['name'].'" class="img-link rel="ligthbox">
                                <figure class="pp-effect">
                                  <img class="zoom img-fluid"  src="imagenes/Gallery-Img/'.$results['name'].'" alt="">
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
      </div>
    </section>

  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <?php require 'footer.php' ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script>
(function () {
        $('.img-link').magnificPopup({

        gallery: {
          enabled: true
        },
        removalDelay: 300, // Delay in milliseconds before popup is removed
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
        type:'image'

        });
    }());
    </script>   
<link href="Administrador/Admin-Gallery/scripts/main.css" rel="stylesheet">
</body>

</html>