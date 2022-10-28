<?php

include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos si el metodo es POST o GET
if($metodo=='POST'){ 

//Cogemos las variables y luego llamamos a guardarMedicion para insertar en la tabla
    $instante = $_POST["instante"];
    $idSensor = $_POST["idSensor"];
    $valor = $_POST["valor"];

    guardarMedicion($instante,$idSensor,$valor);

}else{

    $datos=$_GET['datos'];

    if($datos== 't'){
        //obtenemoso todas las mediciones
	  echo obtenerMediciones();

    } else if($datos=='u'){
        //obtenemos solo la ultima medicion
        echo obtenerUltimaMedicion();
    }
}