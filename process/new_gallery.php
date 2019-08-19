<?php
    session_start();
      
    require './Conexion/conexion.php';
    require 'new_image.php';

    $message = '';
    $title= $_POST['title'];
    $category= $_POST['category'];
    $date_image= $_POST['date_image'];
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];

    if(!$title=="" && !$date_image=="" && !$category=="" && !$file_name==""){
        $conditional_file = stripos($file_type,"image/");
        if($conditional_file !== false){
                
            $id_image = create_image($_FILES['image']['tmp_name'],$_FILES['image']['type']);
                //inserta imagen
                $sql = "INSERT INTO gallery(category,id_image,title,date_image) VALUES (:category,:id_image,:title,:date_image)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':category', $category);
                $stmt->bindParam(':id_image', $id_image);
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':date_image', $date_image);
                if ($stmt->execute()) {
                    
                    header("Location: ../admin_addImg.php");
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
             