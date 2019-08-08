<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Blogs</title>
    </head>
    <body>
    <?php require 'partials/header.php' ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" >
                        <div class="panel-body">
                        <form role="form" action="./process/new_gallery.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Nombre</label>
                                <input type="text" class="form-control" id="title" autocomplete="off" name="title">
                            </div>
                            <div class="form-group">
                                <label for="category">Categoria</label>
                                <select type="text" id="category" class="form-control"  name="category">
                                <option>Actividades</option>
                                <option>Aulas Domiciliarias</option>
                                <option>Programa de Sensibilización</option>
                                </select>
                                <div>
                                    <label >Fecha</label>
                                    <input  id="date_image" name="date_image" type="date" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control">
                                </div>                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Imagen</label>
                                <input type="file" class="form-control-file" class="btn btn-flat btn-sm" id="image" name="image" />
                                <p class="help-block">Formato de imagenes admitido png, jpg, gif, jpeg</p>                                
                            </div>
                            <button type="submit" class="btn btn-flat btn-sm">Agregar Imagen</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    </body>
    </html>    