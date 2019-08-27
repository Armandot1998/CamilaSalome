
<?php
    session_start();
    //Parametro para retroceder a carpeta raiz, si 
    $path_long = "../../../";//OBLIGATORIO - El "   /    " al final

    require $path_long.'Conexion/conexion.php';
    require $path_long.'process/new_image.php';

    $message = '';
    $category= $_POST['category'];
    $title= $_POST['title'];
    $date_image= $_POST['date_image'];
    $id_gallery= $_POST['id_gallery'];
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $ConditionalFile = "N";
    $sql_N ="";

    $name_image = "";
    $id_image_D = "";

    //parametro para Colocar o eliminar imagen (puede estar vacio si no queremos una ruta especifica.)
    $name_path ="Gallery-Img/"; //OBLIGATORIO - El "   /    " al final


    if(!$title=="" && !$date_image=="" && !$category=="" ){
        
        if(!$file_name==""){
            $conditional_file = stripos($file_type,"image/");
            if($conditional_file !== false){

                    //Recupera id de la imagen
                $stmt = $conn->prepare('SELECT image.name as name_image,gallery.id_image as id_image FROM gallery inner join image on image.id_image = gallery.id_image   WHERE gallery.id_gallery = :id');
                $stmt->bindParam(':id',$id_gallery);
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
                
        //inserta gallery
        $sql = "UPDATE gallery SET category = :category, title = :title,date_image= :date_image'.$sql_N.' where id_gallery = :id_gallery";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':category', $category);
        if($ConditionalFile==="Y"){
            $stmt->bindParam(':id_image', $id_image);
        }
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':date_image', $date_image);
        $stmt->bindParam(':id_gallery', $id_gallery);

        if ($stmt->execute()) {
            $message = 'Successfully created new user';
        } else {
            $message = 'Sorry there must have been an issue creating your account';
        }
        if($ConditionalFile==="Y"){
            //Eliminar imagen
            delete_image($id_image_D,$name_image,$name_path,$path_long);       
        }       
        header("Location: ../../../Administrador/gallery.php");
    } else {
        $message = 'error';
    }
?>
             