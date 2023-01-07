<?php
include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea GET

if($metodo=='GET') {
    if(isset($_GET['idSensor'])){
        $mediaCalidad = obtenerCalidadAire($_GET['idSensor']);
        echo $mediaCalidad;

    }else{
        echo "Parametro del GET incorrecto, Introduzca la idSensor objetivo";
    }

}else{
    echo "Petición errónea, se esperaba un GET" .http_response_code(400);
}
