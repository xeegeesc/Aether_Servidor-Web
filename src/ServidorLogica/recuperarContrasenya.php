<?php

include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea POST
if($metodo=='POST') {

    $correo=$_POST['correo'];
    $codigo=$_POST['codigo'];
    $contrasenya=$_POST['contrasenya'];
    $contrasenya_encriptada = hash('sha512', $contrasenya);
    if(verificarToken($correo, $codigo)){
        if(recuperarContrasenya($correo, $contrasenya_encriptada)){
            echo ("contraseña cambiada");
            header("location: ../../ux/index.php");

        }
    }


}