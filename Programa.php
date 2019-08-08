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
  </head>
<body>
  <br>
<?php 
  $rows = 0;
  $stmt = $conn->prepare('SELECT id_gallery, category, image.name as name,title, date_image, status  FROM gallery inner join image on image.id_image = gallery.id_image where category="Programa de Sensibilización"');
  $stmt->execute();
  echo '<div class="container-fluid">';
  while($results = $stmt->fetch(PDO::FETCH_ASSOC)){
    if (count($results) > 0) {
      if($rows==0){
        echo '               
              <div class="row">';
      }
        echo 
        '
              <div class="col-sm-4">
                <div class="card  text-center" >
                  <img class="card-img-top" style="height: 20rem;" alt="Bootstrap Thumbnail First" src="./images/'.$results['name'].'" />
                  <div class="card-block">
                    <h5 class="card-title-center">'.$results['title'].'</h5>
                  </div>
                </div>
              </div>';
        $rows = $rows+1;
        if($rows==3){
          $rows= 0;
          echo '               
                <div class="row">';
        }
    }
  }
    echo '</div>';
  ?>

</body>
</html>