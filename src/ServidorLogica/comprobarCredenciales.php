<?php
include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea POST
if($metodo=='POST') {

    //comprobamos que se han enviado los campos correctos como parámetros
    if (isset($_POST['correo']) && isset($_POST['contrasenya'])) {
        $correo = $_POST['correo'];
        $contrasenya = $_POST["contrasenya"];
        $contrasenya_encriptada = hash('sha512', $contrasenya);
        //llamada a la funcion de la lógica de negocio
        if(comprobarCredenciales($_POST['correo'], $contrasenya_encriptada)){
            session_start();
            $_SESSION['usuario'] = $correo;
            header("location: ../ux/bienvenida.php");
            exit();
        }
    } else {
        echo "Error en la peticion GET. Parámetros incorrectos.";
    }
}