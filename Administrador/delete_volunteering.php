<?php
    session_start();
    require '../Conexion/conexion.php';

    $id_volunteering= $_GET['id'];

    if(!$id_volunteering==""){
//parametro para Colocar o eliminar imagen (puede estar vacio si no queremos una ruta especifica.)
    $sql = 'DELETE FROM volunteering WHERE volunteering.id_volunteering = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_volunteering);
        if ($stmt->execute()) {
            $message = 'Successfully created new user';
            header("Location: voluntariado.php");
        } else {
            $message = 'Sorry there must have been an issue creating your account';
        }
    }else{
        header("Location: voluntariado.php");
    } 
?>