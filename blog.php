
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


<!DOCTYPE html>
<html lang="es">
<head>

<title>Fundación Camila Salomé - Blog</title>

<?php require'meta.php'; ?>


</head>
<body class="boxed-layout pt-40 pb-40 pt-sm-0" data-bg-img="imagenes/colores.jpg">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper" class="clearfix">
  
  
  <?php require'header.php'; ?>
  
 
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

             <!-- INICIO DEL BLOQUE -->
            <div class="col-md-6">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 

                    <!-- EN ESTA PARTE VA LA IMAGEN DE LA NOTICIA -->
                    <img src="imagenes/blog/1.jpg" alt="" class="img-responsive img-fullwidth"> 
                     <!-- EDITAR HASTA AQUÍ -->

                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>

                        <!-- EN ESTA PARTE VA LA FECHA DE LA NOTICIA -->
                        <li class="font-16 text-white font-weight-600">9</li>
                        <li class="font-12 text-white text-uppercase">Nov</li>
                         <!-- EDITAR HASTA AQUÍ -->

                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">

                        <!-- EN ESTA PARTE VA EL TITULO Y ENLACE DE LA NOTICIA -->
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="noticia.php">La terapia del abrazo</a></h4>
                         <!-- EDITAR HASTA AQUÍ -->

                        <!-- EN ESTA PARTE VA EL AUTOR DE LA NOTICIA -->
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> Por Patricio Armas</span>  
                         <!-- EDITAR HASTA AQUÍ -->

                      </div>
                    </div>
                  </div>

                  <!-- EN ESTA PARTE VA UN PARRAFO DE LA NOTICIA -->
                  <p class="mt-10" align="justify">Probablemente existan pocas terapias naturales tan sencillas, económicas y agradables como las de dar y recibir abrazos, un bálsamo para el cuerpo y el alma, según la creadora del “sistema de abrazoterapia“, Lía Barbery, quien indica que es “útil cuando sobran las palabras o no encontramos las adecuadas, y es un gesto en el que se compromete, desde la mirada, hasta el latir del corazón”.</p>
                   <!-- EDITAR HASTA AQUÍ -->

                  <!-- EN ESTA PARTE VA EL ENLACE HACIA LA NOTICIA -->
                  <a href="noticia.php" class="btn-read-more">Leer más</a>
                   <!-- EDITAR HASTA AQUÍ -->

                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <!-- FIN DEL BLOQUE -->

            <!-- INICIO DEL BLOQUE -->
            <div class="col-md-6">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 

                    <!-- EN ESTA PARTE VA LA IMAGEN DE LA NOTICIA -->
                    <img src="imagenes/blog/2.jpg" alt="" class="img-responsive img-fullwidth"> 
                     <!-- EDITAR HASTA AQUÍ -->

                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <!-- EN ESTA PARTE VA LA FECHA DE LA NOTICIA -->
                        <li class="font-16 text-white font-weight-600">24</li>
                        <li class="font-12 text-white text-uppercase">Oct</li>
                         <!-- EDITAR HASTA AQUÍ -->

                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">

                        <!-- EN ESTA PARTE VA EL TITULO Y ENLACE DE LA NOTICIA -->
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="noticia.php">Capacitación a las maestras domiciliarias de la fundación Camila Salomé</a></h4>
                         <!-- EDITAR HASTA AQUÍ -->

                        <!-- EN ESTA PARTE VA EL AUTOR DE LA NOTICIA -->
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> Por Patricio Armas</span>       
                         <!-- EDITAR HASTA AQUÍ -->

                      </div>
                    </div>
                  </div>

                  <!-- EN ESTA PARTE VA UN PARRAFO DE LA NOTICIA -->
                  <p class="mt-10" align="justify">En el marco de colaboración que existe entre el MINEDUC y la FUNDACIÓN CAMILA SALOMÉ, desde el martes 11 hasta el viernes 14 de octubre participamos en la capacitación sobre Normas de Bioseguridad impartida por funcionarios del Ministerio de Salud. Muchas gracias, esto nos ayudará a brindar un servicio de calidad a todos los niños y adolescentes con cáncer y otras enfermedades catastróficas.</p>
                   <!-- EDITAR HASTA AQUÍ -->

                  <!-- EN ESTA PARTE VA EL ENLACE HACIA LA NOTICIA -->
                  <a href="noticia.php" class="btn-read-more">Leer más</a>
                   <!-- EDITAR HASTA AQUÍ -->

                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <!-- FIN DEL BLOQUE -->

            <!-- INICIO DEL BLOQUE -->
            <div class="col-md-6">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 

                    <!-- EN ESTA PARTE VA LA IMAGEN DE LA NOTICIA -->
                    <img src="imagenes/blog/3.jpg" alt="" class="img-responsive img-fullwidth"> 
                     <!-- EDITAR HASTA AQUÍ -->

                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>

                        <!-- EN ESTA PARTE VA LA FECHA DE LA NOTICIA -->
                        <li class="font-16 text-white font-weight-600">15</li>
                        <li class="font-12 text-white text-uppercase">Oct</li>
                         <!-- EDITAR HASTA AQUÍ -->

                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">

                        <!-- EN ESTA PARTE VA EL TITULO Y ENLACE DE LA NOTICIA -->
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="noticia.php">Visitando a niños y niñas</a></h4>
                         <!-- EDITAR HASTA AQUÍ -->

                        <!-- EN ESTA PARTE VA EL AUTOR DE LA NOTICIA -->
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> Por Patricio Armas</span>   
                         <!-- EDITAR HASTA AQUÍ -->

                      </div>
                    </div>
                  </div>

                  <!-- EN ESTA PARTE VA UN PARRAFO DE LA NOTICIA -->
                  <p class="mt-10" align="justify">La Fundación Camila Salomé y el grupo de clowns Zapatitos de Colores se hicieron presente para llevar un momento de alegría a los niños con cáncer. Gracias guerreros de la vida, son los mejores maestros en valor, fe y esperanza.</p>
                   <!-- EDITAR HASTA AQUÍ -->

                  <!-- EN ESTA PARTE VA EL ENLACE HACIA LA NOTICIA -->
                  <a href="noticia.php" class="btn-read-more">Leer más</a>
                   <!-- EDITAR HASTA AQUÍ -->

                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <!-- FIN DEL BLOQUE -->

            <!-- INICIO DEL BLOQUE -->
            <div class="col-md-6">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 

                    <!-- EN ESTA PARTE VA LA IMAGEN DE LA NOTICIA -->
                    <img src="imagenes/blog/4.jpg" alt="" class="img-responsive img-fullwidth"> 
                     <!-- EDITAR HASTA AQUÍ -->

                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>

                        <!-- EN ESTA PARTE VA LA FECHA DE LA NOTICIA -->
                        <li class="font-16 text-white font-weight-600">5</li>
                        <li class="font-12 text-white text-uppercase">Oct</li>
                         <!-- EDITAR HASTA AQUÍ -->

                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">

                        <!-- EN ESTA PARTE VA EL TITULO Y ENLACE DE LA NOTICIA -->
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="noticia.php">PEDAGOGÍA DEL AMOR Y AULAS DOMICILIARIAS.</a></h4>
                         <!-- EDITAR HASTA AQUÍ -->

                        <!-- EN ESTA PARTE VA EL AUTOR DE LA NOTICIA -->
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> Por Patricio Armas</span>         
                         <!-- EDITAR HASTA AQUÍ -->

                      </div>
                    </div>
                  </div>

                  <!-- EN ESTA PARTE VA UN PARRAFO DE LA NOTICIA -->
                  <p class="mt-10">Hablando de la pedagogía del amor, hay muchos criterios que fortalecen, la necesidad de generar aprendizajes significativos donde el amor sea el eje integrador, así refieren algunos autores: “Los cambios tan dinámicos que se producen en la sociedad obligan a desarrollar una educación diferente, una formación espiritual, más sana, una PEDAGOGÍA DEL CARIÑO, una PEDAGOGÍA DEL AMOR, una PEDAGOGÍA DE LA TERNURA, una PEDAGOGÍA DE LOS AFECTOS, en fin, una EDUCACIÓN DEL CORAZÓN, que es el despertador del alma.</p>
                   <!-- EDITAR HASTA AQUÍ -->

                  <!-- EN ESTA PARTE VA EL ENLACE HACIA LA NOTICIA -->
                  <a href="noticia.php" class="btn-read-more">Leer más</a>
                   <!-- EDITAR HASTA AQUÍ -->

                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <!-- FIN DEL BLOQUE -->
            
            <!-- INICIO DEL BLOQUE -->
            <div class="col-md-6">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 

                    <!-- EN ESTA PARTE VA LA IMAGEN DE LA NOTICIA -->
                    <img src="imagenes/blog/HDV1.jpg" alt="" class="img-responsive img-fullwidth"> 
                     <!-- EDITAR HASTA AQUÍ -->

                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>

                        <!-- EN ESTA PARTE VA LA FECHA DE LA NOTICIA -->
                        <li class="font-16 text-white font-weight-600">4</li>
                        <li class="font-12 text-white text-uppercase">Jul</li>
                         <!-- EDITAR HASTA AQUÍ -->

                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">

                        <!-- EN ESTA PARTE VA EL TITULO Y ENLACE DE LA NOTICIA -->
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="noticia.php">AYER AMANECIÓ INSPIRADA.</a></h4>
                         <!-- EDITAR HASTA AQUÍ -->

                        <!-- EN ESTA PARTE VA EL AUTOR DE LA NOTICIA -->
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> Por Alexandra Valencia G.</span>         
                         <!-- EDITAR HASTA AQUÍ -->

                      </div>
                    </div>
                  </div>

                  <!-- EN ESTA PARTE VA UN PARRAFO DE LA NOTICIA -->
                  <p class="mb-15" align="justify">Es la una de la tarde y Estefy, de siete años, llega de la mano de Luz, su madre, a casa para empezar la clase del día. Viene sonriendo al indicarnos sus botas nuevas. A sus siete años, el cabello de Estefy es bastante corto comparado con el de su hermana, la quimioterapia que le ayuda a combatir la leucemia que le diagnosticaron hace aproximadamente dos años.</p>
                  <p align="justify">Debido a su condición, a Estefy les es imposible asistir regularmente a la escuela por sus constantes tratamientos. Durante una de las sesiones en SOLCA, escuchó entre los padres de familia sobre una fundación que apoyaba a los niños y niñas con clases gratuitas en sus casas para que sigan estudiando y no pierdan el año que es su mayor temor.</p>
                   
                   <!-- EDITAR HASTA AQUÍ -->

                  <!-- EN ESTA PARTE VA EL ENLACE HACIA LA NOTICIA -->
                  <a href="noticia2.php" class="btn-read-more">Leer más</a>
                   <!-- EDITAR HASTA AQUÍ -->

                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <!-- FIN DEL BLOQUE -->
          </div>
        </div>
      </div>
    </section>
  </div>
  
  
  
  <?php require'footer.php'; ?>

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<script src="js/custom.js"></script>

</body>

</html>