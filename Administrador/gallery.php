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
            window.location ='./Admin-Gallery/crud/delete_gallery.php?id='+boton.name;
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
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card text-left">
          <div class="card-body">
            <a class="btn btn-primary" href="./Admin-Gallery/admin_gallery.php">
              Nueva Imagen 
              <span class="fa fa-plus-circle"></span>
            </a>
            <hr>    
            <div class="table-responsive">
              <table id="example" class="display" cellspacing="2" width="100%">
                <thead>
                  <tr>
                    <th class="text-center" >#</th>
                    <th class="text-center" >Imagen</th>
                    <th class="text-center">Titulo</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Acciones</th>
                  </tr>     
                </thead>
                <tbody>
                  <?php 
                   $stmt = $conn->prepare("SELECT id_gallery, image.name as name,title, date_image  FROM gallery inner join image on image.id_image = gallery.id_image");
                   $stmt->execute();
                   $Gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);
                   foreach($Gallery as $results){ ?>
                    <tr>
                      <td class="text-center"><?php echo $results['id_gallery'];?></td>
                      <td class="text-center"><img width="150" height="130" src="../imagenes/Gallery-Img/<?php  echo $results['name'];?>" /></td>
                      <td class="text-center"><?php echo $results['title'];?></td>
                      <td class="text-center"><?php echo  date("d/m/Y",strtotime($results['date_image']));?></td>
                      <td class="text-center"><a class="btn btn-outline-secondary " href="./Admin-Gallery/admin_galleryU.php?id=<?php echo $results['id_gallery'];?>"><span class="fas fa-edit"></span></a>                      
                                              <a class="btn btn-outline-danger " id="btnSA_<?php echo $results['id_gallery'];?>" name ="<?php echo $results['id_gallery'];?>" onClick= "EjecutarSweetAlert(this)"><span class="fas fa-trash-alt"></span></a></td>
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