<?php
//Conexion a la base de datos
function Conectar(){

        $serverNombre = "localhost:3306";
        $userNombre = "jmarzoz_Medidas";
        $password = "proyecto3a";
        $dbNombre = "jmarzoz_medidas";

        $conn = mysqli_connect($serverNombre, $userNombre, $password, $dbNombre);
        //comprobamos que no hay errores
        if (!$conn) {
            http_response_code(500);
            die("Error: " . mysqli_connect_error());
        }
        return $conn;
}
