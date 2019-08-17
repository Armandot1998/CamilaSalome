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



<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fundación Camila Salome</title>
  
  <link rel="stylesheet" href="Css/estilo-index.css">
  <!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="Slider/engine1/style.css" />
	<script type="text/javascript" src="slider/engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section --> 
</head>
  <body>
  

  <?php require 'Complementos/navbar.php' ?>
  <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" >
                    <div class="card"><br>
                    <form role="form"  action="./process/new_voluntariado.php"  method="post" enctype="multipart/form-data">
                    <h1 class="text-center"> Voluntariado</h1><br>


                    <div class="container-fluid">
	                <div class="row">
		            <div class="col-md-6">

                    <div class="form-group">
                                    <label for="title">Nombres</label>
                                    <input type="text" class="form-control"  autocomplete="off" name="nombres"  required/>
                                </div>
                                <div class="form-group">    
                                    <label for="author">Apellidos</label>
                                    <input type="text" class="form-control"   name="apellidos" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Cedula</label>
                                    <input type="number" class="form-control"  name="cedula" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Fecha de nacimiento</label>
                                    <input type="date" class="form-control"   name="fecha_nacimiento" required/>
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
                                    <input type="text" class="form-control"   name="telefono" required/>
                                </div>



		            </div>
		            <div class="col-md-6">

                    <div class="form-group">    
                                    <label for="author">Correo</label>
                                    <input type="email" class="form-control" name="correo" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Nivel de Estudios</label>
                                    <input type="text" class="form-control"  name="nivel_estudios" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Especialidad</label>
                                    <input type="text" class="form-control"   name="especialidad" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Lugar de trabajo</label>
                                    <input type="text" class="form-control"   name="lugar_trabajo" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Cargo que desempeña</label>
                                    <input type="text" class="form-control"   name="cargo_trabajo" required/>
                                </div>

                                <div class="form-group">    
                                    <label for="author">Tiempo que dispone para el voluntariado</label>
                                    <input type="text" class="form-control"  name="tiempo_vol" required/>
                                </div>



		           
	                </div>
                    </div>

                                <label>Razones por las que quiere ser voluntario</label>
                                <textarea class="form-control" name ="razones_vol"   rows="10" cols="40" aria-label="With textarea"></textarea>
                                <br>
                                
                                <button type="submit" class="btn btn-flat btn-sm"    class="btn btn-primary">Enviar</button>
                                <br>
                                <br>

                             
                            </form>
                            </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
        

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
   
</div>



</div>
</div><br>
<div class="row" id="">



              

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

</body>
    
  </body>
</html>
