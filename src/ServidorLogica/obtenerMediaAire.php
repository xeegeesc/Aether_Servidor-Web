<?php
include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea GET

if($metodo=='POST') {
    if(isset($_POST['idSensor'])){
        $mediaCalidad = obtenerCalidadAire($_POST['idSensor']);
        echo $mediaCalidad;

    }else{
        echo "Parametro del GET incorrecto, Introduzca la idSensor objetivo";
    }

}
