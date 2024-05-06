<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdadriana";
    $conexion = mysqli_connect($servername,$username,$password, $dbname);
    $consulta = "SELECT * FROM persona";
    $resultado = mysqli_query($conexion, $consulta);
    $datos = array();

    while ($fila = mysqli_fetch_assoc($resultado)) {
        $datos[] = $fila;
    }
    mysqli_close($conexion);
    echo json_encode($datos, JSON_UNESCAPED_UNICODE);

