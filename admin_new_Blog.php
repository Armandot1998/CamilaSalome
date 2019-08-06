<?php
  session_start();

  require 'database.php';

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
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blogs</title>
     </head>
  <body>
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script>
    $(document).on('ready',function(){
        $('#botonesB').click(function(){
            var inputText = document.getElementById("content");
            var seleccion = document.getSelection();
            var textOnInput = inputText.value;
            var range;
            if(seleccion.toString().length){
              seleccion.setSelection();
              /*range = seleccion.getRangeAt(0);   
              range.deleteContents();            
      
              range.insertNode(document.createTextNode(replacementText));               }    
              seleccion.insertNode("Holas");
              */
             //var newTextInput = textOnInput.replace(seleccion.toString(),"*"+seleccion.toString()+"*");
                //inputText.value=newTextInput;
            }

        });
    });
</script>
  <script>
        $(document).on('ready',function(){
            $('#botonesI').click(function(){
                var inputText = document.getElementById("content");
                var seleccion = document.getSelection();
                var textOnInput = inputText.value;
                inputText.value=seleccion.selectAllChildren;

                if(seleccion.toString().length){
                    var newTextInput = textOnInput.replace(seleccion.toString(),"+"+seleccion.toString()+"+");
                    inputText.value=seleccion.selectAllChildren();
                }
                seleccion= "nos sese ";

            });
        });
</script>
 <script>
        $(document).on('ready',function(){
            $('#botonesU').click(function(){
                var inputText = document.getElementById("text");
                var seleccion = document.getSelection();
                var textOnInput = inputText.value;
                if(seleccion.toString().length){
                    var newTextInput = textOnInput.replace(seleccion.toString(),"_"+seleccion.toString()+"_");
                    inputText.value=newTextInput;
                }

            });
        });
</script>  
  <?php require 'partials/header.php' ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" >
                    <div class="panel-body">
                    <form role="form" action="./process/new_blog.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Título</label>
                                    <input type="text" class="form-control" id="title" autocomplete="off" name="title" />
                                </div>
                                <div class="form-group">    
                                    <label for="author">Autor</label>
                                    <input type="text" class="form-control"  id="author" name="author" />
                                </div>
                                    <label >Fecha</label>
                                    <input  name="date_blog" type="date" max="3000-12-31" min="1000-01-01" value="<?php echo date("Y-m-d");?>" class="form-control">
                                </div>
                                <label>Contenido del blog</label>
                                <textarea class="form-control" id="content" name ="content"   rows="10" cols="40" aria-label="With textarea"></textarea>
                                <div class="btn-group">
                                    <button type="button" id= "botonesB" class="btn btn-default"><b>B</b></button>
                                    <button type="button" id= "botonesI" class="btn btn-default"><b><i>I</i></b></button>
                                    <button type="button" id= "botonesU" class="btn btn-default"><b><u>U</u></b></button>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Imagen</label>
                                    <input type="file" class="form-control-file" class="btn btn-flat btn-sm" id="image" name="image" />
                                    <p class="help-block">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                                    
                                </div>
                                <button type="submit" class="btn btn-flat btn-sm" class="btn btn-primary">Agregar Blog</button>
                            </form>
                            </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
