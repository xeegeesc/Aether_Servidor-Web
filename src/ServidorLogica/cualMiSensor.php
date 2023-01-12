<?php

include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

if($metodo=='GET') {

    if(isset($_GET["correo"])){

        $correo = $_GET["correo"];
        echo cualMiSensor($correo);

    }else{
        echo "Error en la peticion GET. Parámetro incorrecto. Se espera parámetro 'idSensor'.";
    }


}else{
    echo "Petición errónea, se esperaba un POST para guardar medicion o un GET para obtener bediciones" .http_response_code(400);
}