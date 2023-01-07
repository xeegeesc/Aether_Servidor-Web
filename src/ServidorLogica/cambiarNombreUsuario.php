<?php

include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

if($metodo=='POST') {
    if (isset($_POST['nombre']) && isset($_POST['correo'])) {
        $nombre = $_POST['nombre'];
        $nombreSinEspacios = str_replace(' ', '-', $nombre);

        $correo = $_POST['correo'];

        if(cambiarNombreUsuario($correo, $nombreSinEspacios)){
            echo ("NOMBRE USUARIO CAMBIADO");
        }else{
            echo "Ha habido un error cambiando el nombre.";
        }
    }else {
        echo "Error en la peticion GET. Parámetros incorrectos.";
    }
}else{
    echo "Petición errónea, se esperaba un POST" .http_response_code(400);
}
?>
