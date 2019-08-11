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
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="js/jquery-1.12.0.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/editor.js"></script>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/editor.css">
    <script type="text/javascript">
		$(document).ready(function(){
			$('#content').Editor();

		//	$('#content').Editor('setText', ['<p style="color:red;">Hola</p>']);

		});	
	</script>
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


</style>

   </head>
  <body>
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
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="panel-body">
                    <form role="form" action="./process/update_blog.php" method="post" enctype="multipart/form-data"  id="frm_Blog">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4" align="center">

                                    <img style="max-width:100%;width:auto;height:auto;" alt="Bootstrap Thumbnail First" align="center" src="Imagenes/Blog-Img/'.$results['name_image'].'" />
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
                                <input type="text" class="form-control" id="title" name="title" value="'.$results['title'].'" />
                            </div>
                            <div class="form-group">
                                <label for="author">Autor</label>
                                <input type="text" class="form-control" id="author" name="author" value="'.$results['author'].'" />
                            </div>
                            <label>Fecha</label>
                            <input name="date_blog" type="date" max="3000-12-31" min="1000-01-01" value="'.$date.'" class="form-control">
                            <div class="form-group" style="display:none">
                                <input type="text" class="form-control" id="id_blog" name="id_blog" value="'.$results['id_blog'].'" />
                            </div>
                            <div class="form-group">
                                <label>Contenido del blog</label>
                                <textarea id="content" name="content"></textarea>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <a href="Administrador/index.php" id="navbarDropdownMenuLink" class="btn btn-default" >Cancelar</a>
                            
                            </div>
                            <div class="col-md-6">
                            <button type="submit" id="btn_Agregar" name="btn_Agregar" class="btn btn-success" btn-lg btn-block">Guardar</button>
                            </div>
                          </div>
                        </form>
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

';

}
 