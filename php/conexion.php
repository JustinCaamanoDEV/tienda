<?php
    $servidor = "localhost";
    $nombreBD = "carrito";
    $user = "root";
    $password = "";
    $conexion = new mysqli($servidor,$user,$password,$nombreBD);
    if($conexion-> connect_error ){
        die("No se pudo conectar con la base de datos");
    }

?>