<?php
    session_start();
    $path_long = "../../../";
    require $path_long.'Conexion/conexion.php';
    require $path_long.'process/new_image.php';

    $message = '';
    $category= $_POST['category'];
    $title= $_POST['title'];
    $date_image= $_POST['date_image'];
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];

//parametro para Colocar o eliminar imagen (puede estar vacio si no queremos una ruta especifica.)
$name_path ="Gallery-Img/"; //OBLIGATORIO - El "   /    " al final

    if(!$title=="" && !$date_image=="" && !$category=="" && !$file_name==""){
        $conditional_file = stripos($file_type,"image/");
        if($conditional_file !== false){
                
            $id_image = create_image($_FILES['image']['tmp_name'],$_FILES['image']['type'],$name_path,$path_long);
                //inserta blog
                $sql = "INSERT INTO gallery(category,id_image,title,date_image) VALUES (:category,:id_image,:title,:date_image)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':category', $category);
                $stmt->bindParam(':id_image', $id_image);
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':date_image', $date_image);
                if ($stmt->execute()) {
                    
                    header("Location: ../../gallery.php");
                    $message = 'Successfully created new user';
                } else {
                    $message = 'Debe  tener una cuenta';
                }
        }else{
            echo "El formato es incorrecto";
        }        
    } else {
        $message = 'Las credenciales no encajan .-.';
    }
     
    
?>
             

                             