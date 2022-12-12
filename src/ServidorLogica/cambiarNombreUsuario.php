<?php

include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

if($metodo=='POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];


    if(cambiarNombreUsuario($correo, $nombre)){
        echo ("contraseña cambiada");
    }
}
?>
