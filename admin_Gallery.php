<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['id'])) {
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
<?php require 'partials/gallery.php' ?>
<!DOCTYPE html>
<html>
  <head>
  <link href="css/gallery.css">
  </head>
  <body>
  <div class="container">
    <div class=" pull-right">
        <a href="admin_addImg.php" class="btn btn-primary"><b>+</b> nueva imagen</a>
    </div>
        
        <table class="table table-striped table-bordered " width="100%">
            <thead class="white">
                
                <tr>
                <th class="text-center" >#</th>
                <th class="text-center" >Imagen</th>
                <th class="text-center">Titulo</th>
                <th class="text-center">Dia</th>
                <th class="text-center">Acciones</th>
                </tr>
            </thead>
      <?php 
        $rows = 0;
        $stmt = $conn->prepare('SELECT id_gallery, category, image.name as name,title, date_image, status  FROM gallery inner join image on image.id_image = gallery.id_image');
        $stmt->execute();
        
        while($results = $stmt->fetch(PDO::FETCH_ASSOC)){
          if (count($results) > 0) {
              if($rows==0){
                echo '               
                  <div class="row">
                  ';
              }
              echo '
                
                    <tbody class="white ">
                        <tr>
                        <td class="text-center">'.$results['id_gallery'].'</td>
                        <td class="text-center"><img width="200" height="150" src="images/'.$results['name'].'" /></td>
                        <td class="text-center">'.$results['title'].'</td>
                        <td class="text-center">'.$results['date_image'].'</td>
                        <td class="text-center">
                        <a class="btn btn-primary btn-round btn-just-icon btn-sm" href="admin_editImg.php?id='.$results['id_gallery'].'"> <i class="fas fa-edit"></i></a>
                            <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-just-icon btn-sm" data-original-title="" title="">
                                    <i class="fas fa-close"></i>
                                </button>
                        </tr>
                    </tbody>
                
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
        echo '</div>'; ?>
    </table>
    </div>  
    </div> 
  </body>
</html>
