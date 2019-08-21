<?php
  session_start();

  require '../../Conexion/conexion.php';

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
	<title></title>
	<script type="text/javascript" src="../../js/jquery-1.12.0.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/editor.js"></script>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/editor.css">
	<script type="text/javascript">
		$('#btn_Agregar').click(function(e){
				e.preventDefault();
				$('#frm_Gallery').submit();				
			});
		});	
	</script>
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" >
                    <div class="panel-body">
                    <div class="card">
                    <div class="card-body">
                    <form role="form" action="crud/new_gallery.php" method="post" enctype="multipart/form-data"  id="frm_Gallery">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control-file" class="btn btn-flat btn-sm" id="image" name="image" />
                                <p class="help-block">Si quieres cambiar una imagen elijela aqui, caso contrario dejala en vacio</p>
                            </div>

                            <div class="form-group">
                                <label for="title">Título</label>
                                <input type="text" class="form-control" id="title" name="title" />
                            </div>
                            <div class="form-group">
                                <label for="category">Categoria</label>
                                <select type="text" id="category" class="form-control"  name="category">
                                    <option>Actividades</option>
                                    <option>Aulas Domiciliarias</option>
                                    <option>Programa de Sensibilización</option>
                                </select>
                                <div>
                                    <label >Fecha</label>
                                    <input id="date_image" name="date_image" type="date" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control">
                                </div>                                
                            </div>
                            <div class="form-group" style="display:none">
                                <input type="text" class="form-control" id="id_gallery" name="id_gallery"  />
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="../gallery.php" id="navbarDropdownMenuLink" class="btn btn-info" >Cancelar</a>                            
                                    <button type="submit" id="btn_Agregar" name ="btn_Agregar" class="btn btn-success"> Agregar </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>          
                    
                            </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
	
</body>
</html>
