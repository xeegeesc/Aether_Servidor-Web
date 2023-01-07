<?php

include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea GET

if($metodo=='GET') {
    if(isset($_GET['correo'])){
       if(disponeSensor($_GET['correo'])){
           echo true;
           return true;
       }else{
           echo false;
           return false;
       }


    }else{
        echo "Parametro del GET incorrecto, Introduzca la idSensor objetivo";
        return null;
    }

}else{
    echo "Petición errónea, se esperaba un GET" .http_response_code(400);
}