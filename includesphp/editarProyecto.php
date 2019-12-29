<?php

    include('conexion.php');
    session_start();
    $id_usuario = $_SESSION['usuario']['id'];

    $name = $_POST['name'];
    $description = $_POST['description'];
    $id = $_POST['id'];

    $query = "UPDATE proyectos SET nombre='$name', description='$description' WHERE id='$id' and id_usuario='$id_usuario'";
    $result = mysqli_query($connection, $query);
     
    if (!$result){
        die("Error...");
    }

    echo "Actualización con exito!";

?>