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

}else if($metodo=='GET'){

    //Comprobamos los parámetros de entrada del GET para diferenciar qué se quiere obtener de la BBDD
    if(isset($_GET['datos'])){
        $datos=$_GET['datos'];

        //Comprobamos el parametro datos para saber si se quiere obtener la ultima medicion o todas las que hay en la BBDD
        if($datos== 't'){
            //obtenemoso todas las mediciones
            echo obtenerMediciones();

        } else if($datos=='u'){
            //obtenemos solo la ultima medicion
            echo obtenerUltimaMedicion();
        }
    }else if(isset($_GET['correo'])&&isset($_GET['contrasenya'])) {

        echo comprobarCredenciales($_GET['correo'], $_GET['contrasenya']);
    }
}