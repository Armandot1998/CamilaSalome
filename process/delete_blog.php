<?php
    session_start();
      
    require '../database.php';
    require './new_image.php';

    $message = '';
    $id_blog= $_GET['id'];
        echo $id_blog;
?>
             