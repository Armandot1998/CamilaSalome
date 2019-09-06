<?php 
      require 'Conexion/conexion.php';
      $stmt = $conn->prepare('SELECT id_gallery, category, image.name as name,title, date_image  FROM gallery inner join image on image.id_image = gallery.id_image where category="Aulas Domiciliarias"');
      $stmt->execute();
      $Gallery = $stmt->fetchAll(PDO::FETCH_ASSOC); 
  ?>
    <div class="section-content">
        <div class="row">
            <div class="col-md-4">

                <?php if(count($Gallery)>0){?>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <!-- Start Foreach -->
                            <?php $cnt=0;foreach($Gallery as $results){ ?>
                                <div class="item <?php if($cnt==0){ echo 'active'; }?>">
                                    <a href="galeriaAulas.php">  
                <img  src="imagenes/Gallery-Img/<?php  echo $results['name'];?>">
                                    </a>
                                </div>
                            <?php $cnt++; } ?>
                            <!-- End  Foreach -->
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                <?php }  ?>
              <h4 class="font-22 mb-0" align="center">Aulas Domiciliarias</h4>
            </div>

            <div class="col-md-4">
                <?php 
                              $stmt = $conn->prepare('SELECT id_gallery, category, image.name as name,title, date_image  FROM gallery inner join image on image.id_image = gallery.id_image where category="Programa de Sensibilización"');
                              $stmt->execute();
                              $Gallery1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
                              if(count($Gallery1)>0){?>
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php 
                                  $cnt=0;foreach($Gallery1 as $results){
                                  ?>
                                <div class="item <?php if($cnt==0){ echo 'active'; }?>">
                                    <a href="galeriaPrograma.php">  
                                    <img src="imagenes/Gallery-Img/<?php  echo $results['name'];?>">
                                  </a>
                                </div>
                                <?php $cnt++; } ?>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <?php }  ?>
                        <h4 class="font-22 mb-0" align="center">Programa de Sensibilización</h4>
            </div>

            <div class="col-md-4">
                <?php 
                              $stmt = $conn->prepare('SELECT id_gallery, category, image.name as name,title, date_image  FROM gallery inner join image on image.id_image = gallery.id_image where category="Actividades"');
                              $stmt->execute();
                              $Gallery2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
                              if(count($Gallery2)>0){?>
                    <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php 
                                    $cnt=0;foreach($Gallery2 as $results){
                                    ?>
                                <div class="item <?php if($cnt==0){ echo 'active'; }?>">
                                    <a href="galeriaActividades.php">  
                                      <img  src="imagenes/Gallery-Img/<?php  echo $results['name'];?>">
                                  </a>
                                </div>
                                <?php $cnt++; } ?>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel3" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel3" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <?php }  ?>
                        <h4 class="font-22 mb-0" align="center">Actividades</h4>
            </div>
        </div>
    </div>