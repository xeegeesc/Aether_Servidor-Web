<?php

include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea POST
if($metodo=='POST') {
    if (isset($_POST['idSensor']) && isset($_POST['correo'])) {

        $correo = $_POST['correo'];
        $idSensor = $_POST['idSensor'];

        if(asignarSensorUsuario($correo, $idSensor)){
            echo ("Sensor asignado al usuario");
        }else{
            echo "Ha habido un error al asignar el sensor al usuario";
        }

    }else {
        echo "Error en la peticion POST. Parámetros incorrectos.";
    }

}else{
    echo "Petición errónea, se esperaba un POST" .http_response_code(400);
}