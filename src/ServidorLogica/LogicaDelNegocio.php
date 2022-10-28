<?php
include './BaseDeDatos.php';
    //--------------------------------------------------------------------
    //--------------------------------------------------------------------
    function guardarMedicion($instante,$idSensor,$valor)
    {
        //llamamos a la funcion previamente creada para guardar las mediciones
        if (GuardarMedicionBBDD($instante,$idSensor,$valor)) {
            echo "Guardado";

        } else {
            http_response_code(401);
            die();
        }

    }
    //---------------------------------------------------------------------
    //---------------------------------------------------------------------
    function obtenerMediciones()
    {
        //llamamos a la funcion para obtener las mediciones que hemos creado previamente

        $Mediciones = obtenerMedicionesBBDD();

        $resultado = array();
        $i = 0;
        while ($fila = mysqli_fetch_array($Mediciones)) {
            $respuesta = [];
            $respuesta["instante"] = $fila ["instante"];
            $respuesta["idSensor"] = $fila ["idSensor"];
            $respuesta["valor"] = $fila ["valor"];


            $resultado[$i] = $respuesta;
            $i++;

        }
        echo json_encode($resultado);
    }
    //--------------------------------------------------------------------
    //--------------------------------------------------------------------
    function obtenerUltimaMedicion(){

		//Llamamos de nuevo a la funcion previamente creada
        $Medicion = obtenerUltimaMedicionBBDD();

        $resultado = array();
        $i = 0;
        while ($fila = mysqli_fetch_array($Medicion)) {
            $respuesta = [];
            $respuesta["instante"] = $fila ["instante"];
            $respuesta["idSensor"] = $fila ["idSensor"];
            $respuesta["valor"] = $fila ["valor"];
			
            $resultado[$i] = $respuesta;
            $i++;

        }
        echo json_encode($resultado);

    }