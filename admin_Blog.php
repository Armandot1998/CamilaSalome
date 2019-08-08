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
?>  <?php require 'partials/header.php' ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to you WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                        <a href="admin_new_Blog.php" id="navbarDropdownMenuLink"class ="btn btn-danger btn-lg btn-block" >Crear nuevo Blog</a>
            </div>

                <!--=========================CAJAS DE BLOGS================================-->
                <?php 
                $rows = 0;
                $stmt = $conn->prepare('SELECT id_blog, title, author, date_blog, image.name as name, content FROM blog inner join image on image.id_image = blog.id_image order by date_blog DESC');
                $stmt->execute();
               // $results = $stmt->fetch(PDO::FETCH_ASSOC);
                echo '<div class="container-fluid">
                ';
                while($results = $stmt->fetch(PDO::FETCH_ASSOC)){

                    if (count($results) > 0) {
                        if($rows==0){
                            echo '               
                                 <div class="row">
                                 ';
                        }
                        echo '
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" alt="Bootstrap Thumbnail First" src="./images/'.$results['name'].'" />
                                    <div class="card-block">
                                        <h5 class="card-title">'.$results['title'].'</h5>
                                        <p class="card-text">'.$results['content'].'</p>
                                        <p>
                                            <a class="btn btn-primary" href="admin_edit_blog.php?id='.$results['id_blog'].'">Modificar</a> <a class="btn" href="#">Eliminar</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            ';
                    $rows = $rows+1;
                        if($rows==3){
                            $rows= 0;
                            echo '               
                                 <div class="row">
                                 ';
                        }
                    }
                    }
                echo '</div>';
                
                ?>

  </body>
</html>
