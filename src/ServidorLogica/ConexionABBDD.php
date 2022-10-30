<?php
//Conexion a la base de datos

//------------------------------------------------------------------------------------------
/*
 * Conectar() es una función que realiza conexion con una BBDD en concreto.
 *
 * @param No dispone de parámetros de entrada.
 *
 * @returns Devuelve los datos de conexion con la BBDD para ser utilizados por las funciones de la lógica de negocio.
 */
//------------------------------------------------------------------------------------------
function Conectar(){

    $serverNombre = "localhost:3306";
    $userNombre = "root";
    $password = "";
    $dbNombre = "proyecto3a";

    $conn = mysqli_connect($serverNombre, $userNombre, $password, $dbNombre);
    //comprobamos que no hay errores
    if (!$conn) {
        http_response_code(500);
        die("Error: " . mysqli_connect_error());
    }
    return $conn;
}

