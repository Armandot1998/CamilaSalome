<!-- INDICACIONES

- ESTA SECCION ES UNICAMENTE DE LA PARTE DEL BLOG DE LA WEB DE INICIO, AQUI UNICAMENTE IRAN LAS TRES ULTIMAS NOTICIAS DEL BLOG
- SOLO SE NECESITAM TRES COSAS

  - TITULO DE LA NOTICIA
  - UN PARRARO PEQUEÑO DE LA NOTICIA
  - UNA FOTO DE LA NOTICIA TAMAÑO 360px X 280px (ES NECESARIO QUE LA IMAGEN SIEMPRE ESTE A ESTA MEDIDA)

- SOLO EDITAR LAS PARTES QUE SE INDICAN Y SUBIR EN EL SERVIDOR
- UBICAR LOS TEXTOS UNICAMENTE EN LA LETRAS BLANCAS
- EN LOS ENLACES HACIA LAS NOTICIAS SIEMPRE PONER EL NOMBRE DE LA NOTICIA EJEMPLO: terapiadelabrazo.html

 -->
<?php
    require './Conexion/conexion.php';
    require './process/simple_process.php';
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
                                inner join image on image.id_image = blog.id_image 
                            order by id_blog DESC ');
    $stmt->execute();
// $results = $stmt->fetch(PDO::FETCH_ASSOC);
    echo '
    <section id="blog">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2 class="text-uppercase line-bottom-center mt-0" style="color: #7fb03e; font-family: Playfair Display, serif;"><span class="font-weight-600">Noticias</span></h2>
                        <div class="title-icon">
                            <i class="flaticon-charity-hand-holding-a-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
    ';
    while($results = $stmt->fetch(PDO::FETCH_ASSOC)){
        if (count($results) > 0) {
            if($rows==0){
                echo '               
            <div class="section-content">
                <div class="row">
                ';
            }
                echo '
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <article class="post clearfix mb-sm-30 border-bottom-theme-color-2px bg-silver-light">
                            <div class="entry-header">
                                <div class="post-thumb thumb">
                    
                                    <!-- EN ESTA PARTE VA LA IMAGEN DE LA NOTICIA -->
                                    <img src="./imagenes/Blog-Img/'.$results['name'].'" alt="" class="img-responsive img-fullwidth">
                                    <!-- EDITAR HASTA AQUÍ -->
                    
                                </div>
                            </div>
                            <div class="entry-content p-20 pr-10">
                                <div class="entry-meta media mt-0 no-bg no-border">
                                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                        <ul>
                    
                                            <!-- EN ESTA PARTE VA LA FECHA DE LA NOTICIA -->
                                            <li class="font-16 text-white font-weight-600 border-bottom">'.$results['b_year'].'</li>
                                            <li class="font-10 text-white text-uppercase">'.mounth_date($results['b_mounth']).'-'.$results['b_day'].'</li>
                                            <!-- EDITAR HASTA AQUÍ -->
                    
                                        </ul>
                                    </div>
                                    <div class="media-body pl-15">
                                        <div class="event-content pull-left flip">
                    
                                            <!-- EN ESTA PARTE VA EL TITULO DE LA NOTICIA -->
                                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="./Detalle-Blog.php?id='.$results['id_blog'].'">'.$results['title'].'</a></h4>
                                            <!-- EDITAR HASTA AQUÍ -->
                    
                                        </div>
                                    </div>
                                </div>
                    
                                <!-- EN ESTA PARTE VA UN PARRAFO DE LA NOTICIA -->
                                <p class="mt-10" align="justify">Probablemente existan pocas terapias naturales tan sencillas, económicas y agradables como las de dar y recibir abrazos, un bálsamo para el cuerpo y el alma, según la creadora del “sistema de abrazoterapia“, Lía Barbery, quien indica que es “útil cuando sobran las palabras o no encontramos las adecuadas, y es un gesto en el que se compromete, desde la mirada, hasta el latir del corazón”.</p>
                                <!-- EDITAR HASTA AQUÍ -->
                    
                                <!-- EN ESTA PARTE VA EL ENLACE HACIA LA NOTICIA -->
                                <a href="./Detalle-Blog.php?id='.$results['id_blog'].'" class="btn btn-default btn-sm btn-theme-colored mt-10">Leer más</a>
                                <!-- EDITAR HASTA AQUÍ -->
                    
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                ';
                $rows = $rows+1;
                    if($rows==3){
                        $rows= 0;
                        echo '               
                </div>
            </div>                                 
                        ';
                    }
        }
    }
    echo '
        </div>
    </section>               
    ';
?>