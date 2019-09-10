<?php
  session_start();
  $long_path ='../';
  require $long_path.'Conexion/conexion.php';
  require $long_path.'process/simple_process.php';
  require $long_path.'process/import_meta.php';

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
  if(empty($user)){
    header("Location: login.php");
  }
  $blogs_x_pagina = 6;
  if(!$_GET){
    header('Location:./index.php?pagina=1');
  };
  $rows = 0;
                $stmt = $conn->prepare('SELECT 
                id_blog
                , title
                , author
                , date_blog
                , image.name as name
                , content 
                , date_format(date_blog,"%m") as b_mounth
                , date_format(date_blog,"%d") as b_day
                , date_format(date_blog,"%Y") as b_year
            FROM blog 
                INNER JOIN image on image.id_image = blog.id_image 
            WHERE type_blog = "BL"
            ORDER BY date_blog DESC ');
                         $stmt->execute();
                         $results = $stmt->rowCount();
             
                         $paginas = $results/$blogs_x_pagina;
                         $paginas = ceil($paginas);
                         if($_GET['pagina']> $paginas || $_GET['pagina']<= 0 ){
                           header('Location:./index.php?pagina=1');
                         }
                         $iniciar = ($_GET['pagina']-1)*$blogs_x_pagina;           
             // $results = $stmt->fetch(PDO::FETCH_ASSOC);
             $num_of_result=1;
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin-Blog</title>
        <!-- Meta import-->
        <?php import_meta($long_path);
    ?>
            <!--Nvar, Avtive -->
            <script>
                $(document).ready(function() {
                    var x = document.getElementById("NvarBlog");
                    x.className = "active";
                });
            </script>
                <link rel="stylesheet" href="../css/estilo-imagen-Card.css">

    </head>

    <body>
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            function EjecutarSweetAlert(boton) {
                $("#".concat(boton.id)).click(function() {
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
                                window.location = './Admin-Blog/process/delete_blog.php?id=' + boton.name;
                            } else {
                                swal("Operación cancelada!");
                            }
                        });
                });
            };
        </script>
        <?php 
      require 'partials/navbar2.php';
      ?>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-2">
                        <a href="./Admin-Blog/admin_new_Blog.php" id="navbarDropdownMenuLink" class="btn btn-primary btn-lg  mt-20">CREAR NUEVO BLOG</a>
                    </div>
                    <div class="col-md-5">
                    </div>
                </div>
            </div>
            <hr>
            <!--=========================CAJAS DE BLOGS================================-->
            <div class="container-fluid">
                <?php 

                while($results = $stmt->fetch(PDO::FETCH_ASSOC)){
                    if (count($results) > 0) {
                      if($num_of_result>$iniciar && $num_of_result<=$iniciar+$blogs_x_pagina){

                        if($rows==0){
        ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">

                                <?php                        } ?>

                                    <div class="col-md-4">
                                        <article class="post clearfix mb-sm-30 border-bottom-theme-color-2px bg-silver-light">
                                            <div class="entry-header">
                                                <div class="post-thumb thumb">

                                                    <!-- EN ESTA PARTE VA LA IMAGEN DE LA NOTICIA -->
                                                    <div class="box">
                                                        <img  src="<?php echo  $long_path ?>imagenes/Blog-Img/<?php echo  $results['name'] ?>" alt="Image did not load...">
                                                    </div>

                                                    <!-- EDITAR HASTA AQUÍ -->

                                                </div>
                                            </div>
                                            <div class="entry-content p-20 pr-10">
                                                <div class="entry-meta media mt-0 no-bg no-border">
                                                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                        <ul>

                                                            <!-- EN ESTA PARTE VA LA FECHA DE LA NOTICIA -->
                                                            <li class="font-16 text-white font-weight-600 border-bottom">
                                                                <?php echo  $results['b_year'] ?>
                                                            </li>
                                                            <li class="font-10 text-white text-uppercase">
                                                                <?php echo  mounth_date($results['b_mounth']) ?>-
                                                                    <?php echo  $results['b_day'] ?>
                                                            </li>
                                                            <!-- EDITAR HASTA AQUÍ -->

                                                        </ul>
                                                    </div>
                                                    <div class="media-body pl-15">
                                                        <div class="event-content pull-left flip">

                                                            <!-- EN ESTA PARTE VA EL TITULO DE LA NOTICIA -->
                                                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="./Detalle-Blog.php?id=<?php echo  $results['id_blog'] ?>"><?php echo  $results['title'] ?></a></h4>
                                                            <!-- EDITAR HASTA AQUÍ -->

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- EN ESTA PARTE VA UN PARRAFO DE LA NOTICIA -->
                                                <p class="mt-10" align="justify">
                                                    <?php echo  resumir(strip_tags($results['content'],'<br>'), 500, ".", "…") ?>
                                                </p>
                                                <!-- EDITAR HASTA AQUÍ -->
                                                <p>
                                                    <a class="btn btn-warning btn-sm  mt-10" href="./Admin-Blog/admin_edit_blog.php?id=<?php echo $results['id_blog'] ?>">Modificar</a>
                                                    <a class="btn btn-danger btn-sm  mt-10" id="btnSA_<?php echo $results['id_blog'] ?>" name="<?php echo $results['id_blog'] ?>" onClick="EjecutarSweetAlert(this)">Eliminar</a>
                                                </p>

                                                <!-- EDITAR HASTA AQUÍ -->

                                                <div class="clearfix"></div>
                                            </div>
                                        </article>
                                    </div>
                                    <?php
                            $num_of_result= $num_of_result+1;

                    $rows = $rows+1;
                        if($rows==3){
                            $rows= 0;
                            ?>
                            </div>
                        </div>
                    </div>
                    <?php                        
                        }
                    }
                  }
                }
          ?>
            </div>

            <div class="section-title text-center">

                <nav aria-lave="Pagina de ejemplo">
                    <ul class="pagination">
                        <li class="page-item  <?php echo $_GET['pagina'] >=1 ? 'disabled' : '' ?> ">
                            <a class="page-link" href="./index.php?pagina=<?php echo ($_GET['pagina'])-1 ?>">Anterior</a></li>
                        <?php for($i=0;$i<$paginas;$i++): ?>
                            <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>  ">
                                <a class="page-link" href="./index.php?pagina=<?php echo $i+1 ?>">
                                    <?php echo $i+1 ?>
                                </a>
                            </li>
                            <?php endfor ?>

                                <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?> ">
                                    <a class="page-link" href="./index.php?pagina=<?php echo ($_GET['pagina'])+1 ?>">Siguiente</a>
                                </li>
                    </ul>
                </nav>
            </div>
    </body>

    </html>