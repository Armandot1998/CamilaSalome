<?php
  session_start();

  require 'database.php';

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
	<script type="text/javascript" src="js/jquery-1.12.0.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/editor.js"></script>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/editor.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$('#content').Editor();

//			$('#content').Editor('setText', ['<p style="color:red;">Hola</p>']);

			$('#btn_Agregar').click(function(e){
				e.preventDefault();
				$('#content').text($('#content').Editor('getText'));
				$('#frm_Blog').submit();				
			});
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

<ul>
  <li><a href="./admin_Blog.php">Regresar</a></li>
</ul>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" >
                    <div class="panel-body">
                    <form role="form" action="./process/new_blog.php" method="post" enctype="multipart/form-data"  id="frm_Blog">
                                <div class="form-group">
                                    <label for="title">Título</label>
                                    <input type="text" class="form-control" id="title" autocomplete="off" name="title" />
                                </div>
                                <div class="form-group">    
                                    <label for="author">Autor</label>
                                    <input type="text" class="form-control"  id="author" name="author" />
                                </div>
                                    <label >Fecha</label>
                                    <input  name="date_blog" type="date" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Imagen</label>
                                    <input type="file" class="form-control-file" class="btn btn-flat btn-sm" id="image" name="image" />
                                    <p class="help-block">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                                    
                                </div>
                                <div class="form-group">
                                <label>Contenido del blog</label>
					            	<textarea id="content" name="content"></textarea>
				            	</div>                               
                              
                                <button type="submit" id="btn_Agregar" name ="btn_Agregar" class ="btn btn-primary btn-lg btn-block" >Agregar Blog</button>
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