<?php

include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea POST
if($metodo=='POST') {
    $correo = $_POST['correo'];
    $idSensor = $_POST['idSensor'];

    if(asignarSensorUsuario($correo, $idSensor)){
        echo ("Sensor asignado al usuario");
    }
}