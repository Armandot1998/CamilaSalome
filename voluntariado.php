
<!DOCTYPE html>
<html lang="es">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Somos una Fundación sin fines de lucro, dedicada a Programa de Atención educativa domiciliaria para estudiantes con cáncer y enfermedades catastróficas en la ciudad de Quito. buscamos ayudar a los niños, niñas y adolescentes que por su situación de enfermedad no pueden asistir a una institución educativa, para que tengan continuidad en sus estudios y sea fácil su reincorporación escolar; prestamosademás ayuda socioemocional a los niños y sus familias." />
<meta name="keywords" content="fundacion, fundacion sin fines de lucro, ayuda social, cancer, lucha contra el cancer, niños con cancer, ayuda socioemocional, educacion a domicilio, enfermedades catastroficas, atencion educativa domiciliaria, " />
<meta name="author" content="AG MediaEstudio" />



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

<!-- Page Title -->
<title>Fundación Camila Salomé - Voluntariado</title>

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
    <section class="inner-header divider parallax layer-overlay overlay-dark-6" data-bg-img="imagenes/volun.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">VOLUNTARIADO</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="index.php">Inicio</a></li>
                <li class="active text-theme-colored">Formulario</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-3">
            <div class="border-1px p-25">
              <h4 class="text-theme-colored text-uppercase m-0">DÉJANOS TU INFORMACIÓN</h4>
              <div class="line-bottom mb-30"></div>
              <form role="form"  action="./process/new_voluntariado.php"  method="post" enctype="multipart/form-data">

              <div class="row">
              <div class="form-group">
                                    <label for="title">Nombres</label>
                                    <input type="text" class="form-control" placeholder="Ingrese sus nombres"  autocomplete="off" name="nombres"  required/>
                                </div>
                                <div class="form-group">    
                                    <label for="author">Apellidos</label>
                                    <input type="text" class="form-control" placeholder="Ingrese sus apellidos"  name="apellidos" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Cedula</label>
                                    <input type="number" class="form-control" placeholder="Ingrese cedula de identidad"  name="cedula" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Fecha de nacimiento</label>
                                    <input type="date" class="form-control"    name="fecha_nacimiento" required/>
                                </div>

                                <div class="form-group">    
                                <label   >Nacionalidad</label>
                                <select class="form-control" name="nacionalidad">
                                <option>Afganistán</option>
                                <option>Alemania</option>
                                <option>Arabia Saudita</option>
                                <option>Argentina</option>
                                <option>Australia</option>
                                <option>Bélgica</option>
                                <option>Bolivia</option>
                                <option>Brasil</option>
                                <option>Camboya</option>
                                <option>Canadá</option>
                                <option>Chile</option>
                                <option>China</option>
                                <option>Colombia</option>
                                <option>Corea</option>
                                <option>Costa Rica</option>
                                <option>Cuba</option>
                                <option>Dinamarca</option>
                                <option>Ecuador</option>
                                <option>Egipto</option>
                                <option>El Salvador</option>
                                <option>Escocia</option>
                                <option>España</option>
                                <option>Estados Unidos</option>
                                <option>Estonia</option>
                                <option>Etiopia</option>
                                <option>Filipinas</option>
                                <option>Finlandia</option> 
                                <option>Francia</option>
                                <option>Gales</option>                                                               
                                <option>Grecia</option>
                                <option>Guatemala</option>
                                <option>Haití</option>
                                <option>Holanda</option>
                                <option>Honduras</option>                               
                                <option>Indonesia</option>                              
                                <option>Inglaterra</option>                             
                                <option>Irak</option>                               
                                <option>Irán</option>                               
                                <option>Irlanda</option>                            
                                <option>Israel</option>                             
                                <option>Italia</option>                             
                                <option>Japón</option>                              
                                <option>Jordania</option>                           
                                <option>Laos</option>                               
                                <option>Letonia</option>                            
                                <option>Lituania</option>                           
                                <option>Malasia</option>                            
                                <option>Marruecos</option>                          
                                <option>Laos</option>                               
                                <option>Letonia</option>                            
                                <option>Lituania</option>                           
                                <option>Malasia</option>                              
                                <option>Marruecos</option>
                                <option>México</option>                               
                                <option>Nicaragua</option>                               
                                <option>Noruega</option>                              
                                <option>Nueva Zelanda</option>                        
                                <option>Panamá</option>
                                <option>Paraguay</option>                             
                                <option>Perú</option>                               
                                <option>Polonia</option>                            
                                <option>Portugal</option>                           
                                <option>Puerto Rico</option>
                                <option>Republica Dominicana</option>                              
                                <option>Rumania</option>                             
                                <option>Rusia</option>                               
                                <option>Suecia</option>                              
                                <option>Suiza</option>
                                <option>Tailandia</option>                               
                                <option>Taiwán</option>                       
                                <option>Turquía</option>                               
                                 <option>Ucrania</option>                              
                                <option>Uruguay</option>
                                <option>Venezuela</option>                             
                                <option>Vietnam</option>                               
                               </select>





                                </div>

                                <div class="form-group">    
                                    <label for="author">Telefono</label>
                                    <input type="text" class="form-control" placeholder="Ingrese su numero de telefono"  name="telefono" required/>
                                </div>

                               
                                <div class="form-group">    
                                    <label for="author">Correo</label>
                                    <input type="email" class="form-control" placeholder="Ingrese su correo electronico" name="correo" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Nivel de Estudios</label>
                                    <input type="text" class="form-control" placeholder="Ingrese nivel de estudio (actual)" name="nivel_estudios" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Especialidad</label>
                                    <input type="text" class="form-control" placeholder="Ingrese su especialidad"   name="especialidad" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Lugar de trabajo</label>
                                    <input type="text" class="form-control"  placeholder="Ingrese su lugar de trabajo" name="lugar_trabajo" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Cargo que desempeña</label>
                                    <input type="text" class="form-control"  placeholder="Ingrese cargo que desempeña" name="cargo_trabajo" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Tiempo que dispone para el voluntariado</label>
                                    <input type="text" class="form-control" placeholder="Ingrese tiempo disponible para el voluntariado"  name="tiempo_vol" required/>
                                </div>

                                <label for="author">Actividades en las que podría colaborar</label>

<div class="custom-control custom-checkbox">
 <input type="checkbox" class="custom-control-input" id="actividad1" value="Auxiliar docente" name="1actv">
 <label class="custom-control-label" for="actividad1">Auxiliar docente</label>
</div>

<div class="custom-control custom-checkbox">
 <input type="checkbox" class="custom-control-input" id="actividad2" value="Temas administrativos" name="2actv">
 <label class="custom-control-label" for="actividad2">Temas administrativos</label>
</div>

<div class="custom-control custom-checkbox">
 <input type="checkbox" class="custom-control-input" id="actividad3" value="Ayuda psicológica" name="3actv">
 <label class="custom-control-label" for="actividad3">Ayuda psicologica</label>
</div>


<div class="custom-control custom-checkbox">
 <input type="checkbox" class="custom-control-input" id="actividad4" value="Asuntos legales" name="4actv">
 <label class="custom-control-label" for="actividad4">Asuntos legales</label>
</div>


<div class="custom-control custom-checkbox">
 <input type="checkbox" class="custom-control-input" id="actividad5" value="Actividades extra curriculares" name="5actv">
 <label class="custom-control-label" for="actividad5">Actividades extra curriculares</label>
</div>


<div class="custom-control custom-checkbox">
 <input type="checkbox" class="custom-control-input" id="actividad6" value="Manejo de imagen de la fundación" name="6actv">
 <label class="custom-control-label" for="actividad6">Manejo de imagen de la fundacion</label>
</div>


<div class="custom-control custom-checkbox">
 <input type="checkbox" class="custom-control-input" id="actividad7" value="Manejo de redes sociales" name="7actv">
 <label class="custom-control-label" for="actividad7">Manejo de redes sociales</label>
</div>


<div class="custom-control custom-checkbox">
 <input type="checkbox" class="custom-control-input" id="actividad8" value="Gestión de búsqueda de fondos" name="8actv">
 <label class="custom-control-label" for="actividad8">Gestion de búsqueda de fondos</label>
</div>

<div class="custom-control custom-checkbox">
 <input type="checkbox" class="custom-control-input" id="actividad9" value="Gestión Gubernamental" name="9actv">
 <label class="custom-control-label" for="actividad9">Gestion Gubernamental</label>
</div>



                   
		           
	                
                    </div>

                                <label>Razones por las que quiere ser voluntario</label>
                                <br>
                   
                                <textarea class="form-control" name ="razones_vol" placeholder="Ingrese los motivos por los que desea ser voluntario"  rows="10" cols="40" aria-label="With textarea"></textarea>
                                <br>

                                <p>Certifico que toda la información está ceñida a la más estricta verdad y en caso de ser aceptado, me comprometo a respetar y a cumplir los Estatutos de la Fundación, a guardar confidencialidad de toda la información y documentación que conozca y lo maneje, cuidar con diligencia y lealtad sus intereses y a colaborar en lo que esté a mi alcance con los demás miembros, en búsqueda de la excelencia personal y organizacional.</p>
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" required>
                                <label class="custom-control-label" >Si, lo he leido</label>
                                </div>


                                
                                <button type="submit" class="btn btn-flat btn-sm"    class="btn btn-primary">Enviar</button>
                                <br>
                                <br>

                    
</div>
              </form>
              <!-- Appointment Form Validation-->
              <script type="text/javascript">
                $("#appointment_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
            </div>
          </div>
        </div>
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

</body>

</html>