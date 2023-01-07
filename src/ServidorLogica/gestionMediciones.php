<?php

include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos si el metodo es POST o GET
if($metodo=='POST'){

    //Comprobamos los parámetros de entrada del POST para diferenciar qué se quiere insertar en la BBDD
    if(isset($_POST["idSensor"])&&isset($_POST["valorMedicion"])&&isset($_POST["momentoMedicion"])&&isset($_POST["latitud"])&&isset($_POST["longitud"])){
        //Cogemos las variables y luego llamamos a guardarMedicion para insertar en la tabla
        $idSensor = $_POST["idSensor"];
        $valorMedicion = $_POST["valorMedicion"];
        $momentoMedicion = $_POST["momentoMedicion"];
        $latitud = $_POST["latitud"];
        $longitud = $_POST["longitud"];

        guardarMedicion($idSensor,$valorMedicion,$momentoMedicion, $latitud, $longitud);
    }else{
        echo "Error en la peticion POST. Parámetros incorrectos.";

    }

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
    }else{
        echo "Error en la peticion GET. Parámetro incorrecto. Se espera parámetro 'datos'.";
    }
}else{
    echo "Petición errónea, se esperaba un POST para guardar medicion o un GET para obtener bediciones" .http_response_code(400);
}