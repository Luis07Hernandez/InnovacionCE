<?php


    include('conexion.php');
    session_start();
    $id_usuario = $_SESSION['usuario']['id'];

    $nombre = $_POST['name'];
    $descripcion = $_POST['description'];

    $query = "INSERT INTO proyectos(nombre,description,id_usuario) VALUES ('$nombre','$descripcion',$id_usuario)";
    $result = mysqli_query($connection,$query);

    if(!$result){
        die('Error...');
    }

    echo 'Exito';
?>