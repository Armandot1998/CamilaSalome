<?php
    session_start();
    $path_long ="../../../";
    require $path_long.'Conexion/conexion.php';
    require $path_long.'process/new_image.php';

//parametro para Colocar o eliminar imagen (puede estar vacio si no queremos una ruta especifica.)
$name_path ="Blog-Img/"; //OBLIGATORIO - El "   /    " al final

    $id_blog= $_GET['id'];

    if(!$id_blog==""){

        $stmt = $conn->prepare('SELECT image.name as name_image,blog.id_image as id_image FROM blog inner join image on image.id_image = blog.id_image   WHERE blog.id_blog = :id');
        $stmt->bindParam(':id',$id_blog);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        if (count($results) > 0) {
            $name_image = $results['name_image'];
            $id_image = $results['id_image'];
        }

        $sql = 'DELETE FROM blog WHERE blog.id_blog = :id';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id_blog);
        if ($stmt->execute()) {
            $message = 'Successfully created new user';

            delete_image($id_image,$name_image,$name_path,$path_long);       
            header("Location: ../../index.php");

        } else {
            $message = 'Sorry there must have been an issue creating your account';
        }
    } else {
        header("Location: ../../index.php");
    }
?>
             