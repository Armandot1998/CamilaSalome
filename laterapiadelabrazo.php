<!-- INDICACIONES

- ESTA SECCION SE AGREGA TODA LA NOTICIA COMPLETA
- REEMPLAZAR CON LA INFORMACIÓN CORRESPONDIENTE
- LA FOTO DE LA NOTICIA SERÁ DE TAMAÑO 360px X 245px (ES NECESARIO QUE LA IMAGEN SIEMPRE ESTE A ESTA MEDIDA)
- SOLO EDITAR LAS PARTES QUE SE INDICAN Y SUBIR EN EL SERVIDOR
- UBICAR LOS TEXTOS UNICAMENTE EN LA LETRAS BLANCAS

 -->


<!DOCTYPE html>
<html lang="es">

<?php require'meta.php'; ?>

<head>

<!-- EDITAR TITULO DE LA NOTICIA -->
<title>La terapia del abrazo</title>
<!-- FIN DE LA EDICIÓN -->

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
              <h3 class="title text-white">Noticias</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- NOTICIA COMPLETA -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 

                    <!-- EN ESTA PARTE VA LA IMAGEN DE LA NOTICIA -->
                    <img src="imagenes/blog/1.jpg" alt="" class="img-responsive img-fullwidth"> 
                     <!-- EDITAR HASTA AQUÍ -->

                  </div>
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>

                        <!-- EN ESTA PARTE VA LA FECHA DE LA NOTICIA -->
                        <li class="font-16 text-white font-weight-600">7</li>
                        <li class="font-12 text-white text-uppercase">Ene</li>
                         <!-- EDITAR HASTA AQUÍ -->

                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">

                         <!-- EN ESTA PARTE VA EL TITULO DE LA NOTICIA -->
                        <h4 class="entry-title text-white text-uppercase m-0"><a href="#">LA TERAPIA DEL ABRAZO</a></h4>
                         <!-- EDITAR HASTA AQUÍ -->

                        <!-- EN ESTA PARTE VA EL AUTOR DE LA NOTICIA -->
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i>Por Patricio Armas</span>
                         <!-- EDITAR HASTA AQUÍ -->

                      </div>
                    </div>
                  </div>

                  <!-- EN ESTA PARTE VA UN PARRAFO DE LA NOTICIA -->
                  <p class="mb-15" align="justify">Probablemente existan pocas terapias naturales tan sencillas, económicas y agradables como las de dar y recibir abrazos, un bálsamo para el cuerpo y el alma, según la creadora del “sistema de abrazoterapia“, Lía Barbery, quien indica que es “útil cuando sobran las palabras o no encontramos las adecuadas, y es un gesto en el que se compromete, desde la mirada, hasta el latir del corazón”.</p>
                   <!-- EDITAR HASTA AQUÍ -->
                  
                 

                  <!-- EN ESTA PARTE VA UN PARRAFO DE LA NOTICIA -->
                  <p align="justify">“Al abrazarnos comunicamos con alta eficacia las emociones que experimenta nuestro cuerpo y que nuestros sentimientos quieren trasmitir. Son una expresión pura del corazón que trasciende los idiomas.</p>
                   <!-- EDITAR HASTA AQUÍ -->


                  <div class="mt-30 mb-0">
                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                  </div>
                  
                  <div class="fb-comments" data-href="https://www.facebook.com/fundacioncamilasalome" data-numposts="5"></div>
                  
                </div>
              </article>
              
            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>

  <?php require'footer.php'; ?>

<script src="js/custom.js"></script>

</body>

</html>