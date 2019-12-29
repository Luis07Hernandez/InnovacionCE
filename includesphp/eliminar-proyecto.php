<?php

    include('conexion.php');
    session_start();
    $id_usuario = $_SESSION['usuario']['id'];

    $id = $_POST['id'];
    
    $query = "DELETE FROM proyectos WHERE id=$id and id_usuario=$id_usuario";
    $result = mysqli_query($connection,$query);

    if(!$result){
        die('Error...');
    }

    echo "Eliminado con exito...";
?>