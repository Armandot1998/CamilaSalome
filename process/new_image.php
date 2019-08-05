<?php
//1 Imagen temporal
function random(){
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwx yz234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmn opqrstuvwxyz234567890";
    $cad = "";
    for($i=0;$i<15;$i++) {
    $cad .= substr($str,rand(0,120),1);
    }
    return $cad;    
}
//los parametros es 
//1.-($_FILES['image']['tmp_name']) la imagen que se va a mover
//2.-$_FILES['image']['type'] el tipo de imagen.
function create_image($obj_File,$type_File){
    require '../database.php';

    $las_return;
    $codigo_fecha = date("Ymd"); 
    $nombre_archivo=$codigo_fecha."_".random().str_replace("image/",".",$type_File);
            
    $sql = "INSERT INTO image(name) VALUES (:name)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $nombre_archivo);
    if ($stmt->execute()) {
        $sql = "INSERT INTO image(name) VALUES (:name)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $nombre_archivo);
        if ($stmt->execute()) {
            $message = 'Successfully created new user';       
            //Recupera id de la imagen
            $stmt = $conn->prepare('SELECT id_image FROM image WHERE name = :name');
            $stmt->bindParam(':name',$nombre_archivo);
            $stmt->execute();
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            if (count($results) > 0) {
                if(move_uploaded_file($obj_File,"../images/".$nombre_archivo)){
                    $las_return=$results['id_image'];
                }
            }
        }
    }
    return $las_return;
}
?>