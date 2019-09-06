<?php
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
                            WHERE type_blog = "HV"
                            ORDER BY date_blog DESC ');

?>

    <!-- ****** Testimonials Area Start ****** -->

    <div class="row">
        <div class="col-12">
            <div class="testimonials-content">
                <div class="caviar-testimonials-slides owl-carousel">
                    <!-- Single Testimonial Area -->
                    <?php
                            $stmt->execute();
                            while($results = $stmt->fetch(PDO::FETCH_ASSOC)){
                                if (count($results) > 0) {
                            ?>

                        <div class="col-xs-12 ">

                            <div class="single-testimonial">

                                <article class="post clearfix mb-sm-30 border-bottom-theme-color-2px bg-silver-light">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb">

                                            <!-- EN ESTA PARTE VA LA IMAGEN DE LA NOTICIA -->
                                            <div class="box">
                                                <img class="card-img-top" src="./imagenes/Blog-Img/<?php echo  $results['name'] ?>" alt="Image did not load...">
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
                                        <p class="mt-10" align="justify"><?php echo  resumir(strip_tags($results['content'],'<br>'), 500, ".", "…") ?></p>
                                        <!-- EDITAR HASTA AQUÍ -->

                                        <!-- EN ESTA PARTE VA EL ENLACE HACIA LA NOTICIA -->
                                        <a href="./Detalle-Blog.php?id=<?php echo  $results['id_blog'] ?>" class="btn btn-default btn-sm btn-theme-colored mt-10">Leer más</a>
                                        <!-- EDITAR HASTA AQUÍ -->

                                        <div class="clearfix"></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    <?php 
                            } 
                        }

                     ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/active.js"></script>
    <!-- ****** Testimonials Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <!-- Popper js -->
    <!-- Bootstrap-4 js -->
    <!-- All Plugins js -->
    <!-- Active JS -->
