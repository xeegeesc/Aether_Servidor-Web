<?php

include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

if($metodo=='POST') {
    $nombre = $_POST['nombre'];
    $nombreSinEspacios = str_replace(' ', '-', $nombre);

    $correo = $_POST['correo'];


    if(cambiarNombreUsuario($correo, $nombreSinEspacios)){
        echo ("NOMBRE USUARIO CAMBIADO");
    }
}
?>
