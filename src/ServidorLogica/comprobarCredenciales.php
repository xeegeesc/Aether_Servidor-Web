<?php
include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea POST
if($metodo=='POST') {

    //comprobamos que se han enviado los campos correctos como parámetros
    if (isset($_POST['correo']) && isset($_POST['contrasenya'])) {

        //llamada a la funcion de la lógica de negocio
        echo comprobarCredenciales($_POST['correo'], $_POST['contrasenya']);
    } else {
        echo "Error en la peticion GET. Parámetros incorrectos.";
    }
}