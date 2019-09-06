<?php
    session_start();
    $path_long ="../../../";
    require $path_long.'Conexion/conexion.php';
    require $path_long.'process/new_image.php';

//parametro para Colocar o eliminar imagen (puede estar vacio si no queremos una ruta especifica.)
$name_path ="Blog-Img/"; //OBLIGATORIO - El "   /    " al final

    $id_blog= $_GET['id'];
    $type_blog ='';
    if(!$id_blog==""){

        $stmt = $conn->prepare('SELECT 
                                    image.name as name_image
                                    ,blog.id_image as id_image 
                                    ,blog.type_blog as type_blog
                                FROM blog 
                                    INNER JOIN image on image.id_image = blog.id_image   
                                WHERE blog.id_blog = :id');
        $stmt->bindParam(':id',$id_blog);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        if (count($results) > 0) {
            $name_image = $results['name_image'];
            $id_image = $results['id_image'];
            $type_blog= $results['type_blog'];
        }

        $sql = 'DELETE FROM blog WHERE blog.id_blog = :id';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id_blog);
        if ($stmt->execute()) {
            $message = 'Successfully created new user';

            delete_image($id_image,$name_image,$name_path,$path_long);      
            if($type_blog=='BL'){
                header("Location: ../../index.php");
            } else{
                header("Location: ../../Historias-De-Vida.php");
            }
            

        } else {
            $message = 'Sorry there must have been an issue creating your account';
        }
    } else {
        header("Location: ../../index.php");
    }
?>
             