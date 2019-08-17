
<?php
    session_start();
      
    require '../Conexion/conexion.php';
    require './new_image.php';

    $message = '';
    $title= $_POST['title'];
    $author= $_POST['author'];
    $date_blog= $_POST['date_blog'];
    $content= $_POST['content'];
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];

    if(!$title=="" && !$date_blog=="" && !$content=="" && !$file_name==""){

        $conditional_file = stripos($file_type,"image/");
        if($conditional_file !== false){
                
            $id_image = create_image($_FILES['image']['tmp_name'],$_FILES['image']['type']);
                //inserta blog
                $sql = "INSERT INTO blog(title,author,date_blog,id_image,content) VALUES (:title,:author,:date_blog,:id_image,:content)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':author', $author);
                $stmt->bindParam(':date_blog', $date_blog);
                $stmt->bindParam(':id_image', $id_image);
                $stmt->bindParam(':content', $content);
                if ($stmt->execute()) {
                    $message = 'Successfully created new user';
                    header("Location: ../Administrador/index.php");

                } else {
                    $message = 'Sorry there must have been an issue creating your account';
                }
        }else{
            echo "no vale tu formato pana";
        }        
    } else {
        echo "No tienes todos los campos requeridos llenos";
    }
     
    
?>
             