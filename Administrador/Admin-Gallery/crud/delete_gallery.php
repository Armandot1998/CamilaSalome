<?php
    session_start();
    $path_long ="../../../";
    require $path_long.'Conexion/conexion.php';
    require $path_long.'process/new_image.php';

//parametro para Colocar o eliminar imagen (puede estar vacio si no queremos una ruta especifica.)
$name_path ="Gallery-Img/"; //OBLIGATORIO - El "   /    " al final

    $id_gallery= $_GET['id'];

    if(!$id_gallery==""){

        $stmt = $conn->prepare('SELECT image.name as name_image,gallery.id_image as id_image FROM gallery inner join image on image.id_image = gallery.id_image   WHERE gallery.id_gallery = :id');
        $stmt->bindParam(':id',$id_gallery);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        if (count($results) > 0) {
            $name_image = $results['name_image'];
            $id_image = $results['id_image'];
        }

        $sql = 'DELETE FROM gallery WHERE gallery.id_gallery = :id';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id_gallery);
        if ($stmt->execute()) {
            $message = 'Successfully created new user';

            delete_image($id_image,$name_image,$name_path,$path_long);       
            header("Location: ../../gallery.php");

        } else {
            $message = 'Sorry there must have been an issue creating your account';
        }
    } else {
        header("Location: ../../gallery.php");
    }
?>