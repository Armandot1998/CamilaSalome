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
    <meta charset="utf-8">
    <title>Blogs</title>
   </head>
  <body>
  <?php require 'partials/header.php' ?>
  <?php 
  //SELECT * FROM blog inner join image on image.id_image = blog.id_image 
    
    $stmt = $conn->prepare('SELECT blog.*,image.name as name_image FROM blog inner join image on image.id_image = blog.id_image   WHERE blog.id_blog = :id');
    $stmt->bindParam(':id',$_GET['id']);
    $stmt->execute();
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    if (count($results) > 0) {
     $date= date_format(date_create($results['date_blog']), "Y-m-d");
echo'
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" >
                    <div class="panel-body">
                    <form role="form" action="process/update_blog.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" alt="Bootstrap Thumbnail First" src="./images/'.$results['name_image'].'" />
                    </div>
                </div>
                                <div class="form-group">
                                    <label for="title">Título</label>
                                    <input type="text" class="form-control" id="title" name="title" value ="'.$results['title'].'" />
                                </div>
                                <div class="form-group">    
                                    <label for="author">Autor</label>
                                    <input type="text" class="form-control" id="author" name="author"  value ="'.$results['author'].'"  />
                                </div>
                                    <label >Fecha</label>
                                    <input  name="date_blog" type="date" max="3000-12-31" min="1000-01-01"  value ="'.$date.'" class="form-control">
                                </div>
                                <div class="form-group" style="display:none">    
                                  <input type="text" class="form-control" id="id_blog" name="id_blog"  value ="'.$results['id_blog'].'"  />
                                </div>
                                <label>Contenido del blog</label>
                                <textarea class="form-control" id="content" name ="content"   rows="10" cols="40" aria-label="With textarea"  >'.$results['content'].'</textarea>
                                <div class="btn-group">
                                    <button type="button" id= "botonesB" class="btn btn-default"><b>B</b></button>
                                    <button type="button" id= "botonesI" class="btn btn-default"><b><i>I</i></b></button>
                                    <button type="button" id= "botonesU" class="btn btn-default"><b><u>U</u></b></button>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputFile">Si quieres cambiar una imagen elijela aqui, caso contrario dejala en vacio</label>
                                  <input type="file" class="form-control-file" class="btn btn-flat btn-sm" id="image" name="image" />
                                  <p class="help-block">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                                
                                </div>
                                <button type="submit" class="btn btn-primary">Agregar Blog</button>
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
 