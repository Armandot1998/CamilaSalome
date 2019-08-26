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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin-Galeria</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Css/estilo-imagen-Card.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
    <!-- Querys-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">  
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/table.js"></script>

</head>
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
            window.location ='delete_volunteering.php?id='+boton.name;
			  } else {
				swal("Operación cancelada!");

			  }
			});	
		});
      }    
    ;
</script>  
<body >
<?php if(!empty($user)):
require 'partials/navbar.php';
?>
  <br>
  <br>  
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card text-left">
          <div class="card-body">
            <h1>Datos de los Voluntarios</h1>
            <hr>    
            <div class="table-responsive">
              <table id="example" class="table table-bordered"   cellspacing="2" width="100%">
                <thead  class="thead-dark">
                  <tr>
                    <th class="text-center" >#</th>
                    <th class="text-center" >Nombres</th>
                    <th class="text-center">Apellido</th>
                    <th class="text-center">Cedula</th>
                    <th class="text-center">Fecha de nacimiento</th>
                    <th class="text-center">Nacionalidad</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Nivel de estudios</th>
                    <th class="text-center">Especialidad</th>
                    <th class="text-center">Lugar de trabajo</th>
                    <th class="text-center">Cargo que ejerce</th>
                    <th class="text-center">Razones del voluntariado</th>
                    <th class="text-center">Atividades que puede colaborar</th>
                    <th class="text-center">Tiempo Voluntariado</th>
                    <th class= "text-center">Acciones</th>

                  </tr>     
                </thead>
                <tbody>
                  <?php 
                   $stmt = $conn->prepare("SELECT * FROM volunteering");
                   $stmt->execute();
                   $Gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);
                   foreach($Gallery as $results){ ?>
                    <tr>
                      <td class="text-center"><?php echo $results['id_volunteering'];?></td>
                      <td class="text-center"><?php echo $results['names'];?></td>
                      <td class="text-center"><?php echo $results['lastname'];?></td>
                      <td class="text-center"><?php echo $results['id'];?></td>
                      <td class="text-center"><?php echo $results['birthday'];?></td>
                      <td class="text-center"><?php echo $results['nationality'];?></td>
                      <td class="text-center"><?php echo $results['telephone'];?></td>
                      <td class="text-center"><?php echo $results['email'];?></td>
                      <td class="text-center"><?php echo $results['studies'];?></td>
                      <td class="text-center"><?php echo $results['specialty'];?></td>
                      <td class="text-center"><?php echo $results['place_work'];?></td>
                      <td class="text-center"><?php echo $results['workloads'];?></td>
                      <td class="text-center"><?php echo $results['reasons_vol'];?></td>
                      <td class="text-center"><?php echo $results['activities'];?></td>
                      <td class="text-center"><?php echo $results['time_vol'];?></td>
                      <td class="text-center"><a class="btn btn-outline-danger " id="btnSA_<?php echo $results['id_volunteering'];?>" name="<?php echo $results['id_volunteering'];?>"  onClick= "EjecutarSweetAlert(this)"><span class="fas fa-trash-alt"></span></a></td>
                      </tr>                              
                  <?php } ?>
                  </tbody>
              </table>
            </div>  
            </div>
          </div>
        </div>
      </div>
    </div>              
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