<!-- INDICACIONES

- ESTA SECCION AGREGAR TODAS LAS NOTICIAS QUE SE DESEEN
- LA PRIMERA NOTICIA EDITADA SIEMPRE SERÁ LA PRIMERA EN SALIR ES DECIR SERÁ LA MÁS RECIENTE
- PARA AGREGAR UNA NOTICIA NUEVA COPIAR TODO EL BLOQUE COMPLETO Y REEMPLAZAR CON LA INFORMACIÓN CORRESPONDIENTE
- EN ESTA SECCIÓN DE IGUAL MANERA AGREGAR LA SIGUIENTE INFORMACIÓN:

  - TITULO DE LA NOTICIA
  - UN PARRARO PEQUEÑO DE LA NOTICIA
  - UNA FOTO DE LA NOTICIA TAMAÑO 360px X 245px (ES NECESARIO QUE LA IMAGEN SIEMPRE ESTE A ESTA MEDIDA)

- SOLO EDITAR LAS PARTES QUE SE INDICAN Y SUBIR EN EL SERVIDOR
- UBICAR LOS TEXTOS UNICAMENTE EN LA LETRAS BLANCAS
- EN LOS ENLACES HACIA LAS NOTICIAS SIEMPRE PONER EL NOMBRE DE LA NOTICIA EJEMPLO: terapiadelabrazo.html

 -->
 <?php
    require './Conexion/conexion.php';
    require './process/simple_process.php';
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>

        <title>Fundación Camila Salomé - Blog</title>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <?php 
       $blogs_x_pagina = 6;
       if(!$_GET){
         header('Location:./blog.php?pagina=1');
       };
       $rows = 0;
       $stmt = $conn->prepare('SELECT id_blog
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
                               ORDER BY date_blog DESC');
       $stmt->execute();
       $results = $stmt->rowCount();

       $paginas = $results/$blogs_x_pagina;
       $paginas = ceil($paginas);
       if($_GET['pagina']> $paginas || $_GET['pagina']<= 0 ){
         header('Location:blog.php?pagina=1');
       }
       $iniciar = ($_GET['pagina']-1)*$blogs_x_pagina;
       require './header.php'; 
    ?>

    </head>

    <body class="boxed-layout pt-40 pb-40 pt-sm-0" data-bg-img="imagenes/colores.jpg">
        <div id="fb-root"></div>

        <div id="wrapper" class="clearfix">

            <div class="main-content">

                <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="imagenes/blog.jpg">
                    <div class="container pt-100 pb-50">
                        <div class="section-content pt-100">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title text-white">Blog</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row multi-row-clearfix">
                            <div class="blog-posts">
                                <?php 
                $num_of_result=1;
                while($results = $stmt->fetch(PDO::FETCH_ASSOC)){
                  if (count($results) > 0) {
                    if($num_of_result>$iniciar && $num_of_result<=$iniciar+$blogs_x_pagina){
                        if($rows==0){
                            ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">

                <?php   }   ?>

                                                    <!-- INICIO DEL BLOQUE -->
                                                    <div class="col-md-4">
                                                        <article class="post clearfix mb-30 bg-lighter">
                                                            <div class="entry-header">
                                                                <div class="post-thumb thumb">

                                                                    <!-- EN ESTA PARTE VA LA IMAGEN DE LA NOTICIA -->
                                                                    <img src="./imagenes/Blog-Img/<?php echo $results['name'] ?>" alt="" class="img-responsive img-fullwidth">
                                                                    <!-- EDITAR HASTA AQUÍ -->

                                                                </div>
                                                            </div>
                                                            <div class="entry-content p-20 pr-10">
                                                                <div class="entry-meta media mt-0 no-bg no-border">
                                                                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                                        <ul>
                                                                            <!-- EN ESTA PARTE VA LA FECHA DE LA NOTICIA -->
                                                                            <li class="font-16 text-white font-weight-600 border-bottom">
                                                                                <?php echo $results['b_year'] ?>
                                                                            </li>
                                                                            <li class="font-10 text-white text-uppercase">
                                                                                <?php echo mounth_date($results['b_mounth']) ?>-
                                                                                    <?php echo $results['b_day'] ?>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="media-body pl-15">
                                                                        <div class="event-content pull-left flip">

                                                                            <!-- EN ESTA PARTE VA EL TITULO Y ENLACE DE LA NOTICIA -->
                                                                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a  href="./Detalle-Blog.php?id=<?php  echo $results['id_blog'] ?>"> <?php  echo $results['title'] ?></a></h4>
                                                                            <!-- EDITAR HASTA AQUÍ -->

                                                                            <!-- EN ESTA PARTE VA EL AUTOR DE LA NOTICIA -->
                                                                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> <?php  echo $results['author'] ?></span>
                                                                            <!-- EDITAR HASTA AQUÍ -->

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- EN ESTA PARTE VA UN PARRAFO DE LA NOTICIA -->
                                                                <p class="mt-10" align="justify">
                                                                    <?php  echo resumir(strip_tags($results['content'],'<br>'), 500, ".", "…") ?>
                                                                </p>
                                                                <!-- EDITAR HASTA AQUÍ -->

                                                                <!-- EN ESTA PARTE VA EL ENLACE HACIA LA NOTICIA -->
                                                                <a href="./Detalle-Blog.php?id=<?php echo  $results['id_blog'] ?>" class="btn-read-more">Leer más</a>
                                                                <!-- EDITAR HASTA AQUÍ -->

                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <!-- FIN DEL BLOQUE -->
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
                        </div>
                    </div>
                    <div class="section-title text-center">

                    <nav aria-lave="Pagina de ejemplo">
                        <ul class="pagination">
                            <li class="page-item  <?php echo $_GET['pagina'] >=1 ? 'disabled' : '' ?> ">
                                <a class="page-link" href="blog.php?pagina=<?php echo ($_GET['pagina'])-1 ?>">Anterior</a></li>
                            <?php for($i=0;$i<$paginas;$i++): ?>
                                <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>  ">
                                    <a class="page-link" href="blog.php?pagina=<?php echo $i+1 ?>">
                                        <?php echo $i+1 ?>
                                    </a>
                                </li>
                                <?php endfor ?>

                                    <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?> ">
                                        <a class="page-link" href="blog.php?pagina=<?php echo ($_GET['pagina'])+1 ?>">Siguiente</a>
                                    </li>
                        </ul>
                    </nav>
            </div>
                </section>
            </div>

            <?php require './footer.php'; 
                require './meta.php'; 

            ?>
                <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        </div>

        <script src="./js/custom.js"></script>

    </body>

    </html>