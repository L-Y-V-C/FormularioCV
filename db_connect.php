<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "formcv";

    $conexion = new mysqli_connect($server, $user, $pass, $db);

    if($conexion -> connect_errno){
        die("Error de conexion".$conexion -> connect_errno);
    }else{
        echo "Conexion satisfactoria";
    }
?>
