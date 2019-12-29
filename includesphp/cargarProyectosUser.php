<?php

    include('conexion.php');
    session_start();

    $id_usuario= $_SESSION['usuario']['id'];
    $query = "SELECT * FROM proyectos WHERE id_usuario='".$id_usuario."'";
    $result = mysqli_query($connection,$query);

    if(!$result){
        die("Error");
    }

    
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'name' => $row['nombre'],
      'description' => $row['description'],
      'id' => $row['id'],
      'id_usuario' => $row['id_usuario']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>