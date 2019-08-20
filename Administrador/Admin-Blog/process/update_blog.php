
<?php
    session_start();
    //Parametro para retroceder a carpeta raiz, si 
    $path_long = "../../../";//OBLIGATORIO - El "   /    " al final

    require $path_long.'Conexion/conexion.php';
    require $path_long.'process/new_image.php';

    $message = '';
    $title= $_POST['title'];
    $author= $_POST['author'];
    $date_blog= $_POST['date_blog'];
    $content= $_POST['content'];
    $id_blog= $_POST['id_blog'];
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $ConditionalFile = "N";
    $sql_N ="";

    $name_image = "";
    $id_image_D = "";

    //parametro para Colocar o eliminar imagen (puede estar vacio si no queremos una ruta especifica.)
    $name_path ="Blog-Img/"; //OBLIGATORIO - El "   /    " al final


    if(!$title=="" && !$date_blog=="" && !$content=="" ){
        
        if(!$file_name==""){
            $conditional_file = stripos($file_type,"image/");
            if($conditional_file !== false){

                    //Recupera id de la imagen
                $stmt = $conn->prepare('SELECT image.name as name_image,blog.id_image as id_image FROM blog inner join image on image.id_image = blog.id_image   WHERE blog.id_blog = :id');
                $stmt->bindParam(':id',$id_blog);
                $stmt->execute();
                $results = $stmt->fetch(PDO::FETCH_ASSOC);
                if (count($results) > 0) {
                    $name_image = $results['name_image'];
                    $id_image_D = $results['id_image'];
                } 
                $id_image = create_image($_FILES['image']['tmp_name'],$_FILES['image']['type'],$name_path,$path_long);
                $sql_N =',id_image = :id_image
                        ';
                $ConditionalFile="Y";
            }else{
                echo "El archivo seleccionado no es una imagen.";
            }   
        }
                
        //inserta blog
        $sql = 'UPDATE blog SET title = :title, author= :author ,date_blog= :date_blog,content = :content '.$sql_N.' where id_blog = :id_blog';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':date_blog', $date_blog);
        if($ConditionalFile==="Y"){
            $stmt->bindParam(':id_image', $id_image);
        }
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':id_blog', $id_blog);

        if ($stmt->execute()) {
            $message = 'Successfully created new user';
        } else {
            $message = 'Sorry there must have been an issue creating your account';
        }
        if($ConditionalFile==="Y"){
            //Eliminar imagen
            delete_image($id_image_D,$name_image,$name_path,$path_long);       
        }       
        header("Location: ../../../Administrador/index.php");
    } else {
        $message = 'Sorry, those credentials do not match';
    }
?>
             