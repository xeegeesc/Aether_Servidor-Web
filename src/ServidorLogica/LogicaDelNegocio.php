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
}

//------------------------------------------------------------------------------------------
/*
 * asignarSensorUsuario() es una función que asigna un usuario a un sensor en la BBDD.
 *
 * @param correo email que debe pertenecer al usario de la BBDD.
 * @param idSensor id del sensor el cual va a ser asignado.

 * @returns Devuelve true si se ha asignado en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function asignarSensorUsuario($correo, $idSensor){
    if(asignarSensorUsuarioBBDD($correo,$idSensor)){
        return true;
    }else{
        return false;
    }
}

//------------------------------------------------------------------------------------------
/*
 * verificarToken() es una función que verifica que el codigo generado como seguridad al crear un usuario o recuperar la contraseña es el correcto.
 *
 * @param correo email que debe pertenecer al usario de la BBDD.
 * @param codigo codigo que se quiere comparar con el de BBDD.

 * @returns Devuelve true si el codigo coincide, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function verificarToken($correo, $codigo)
{
    if(verificarTokenBD($correo,$codigo)){
        return true;
    }else{
        return false;}
}

//------------------------------------------------------------------------------------------
/*
 * insertarCodigo() es una función que inserta el codigo recibido en el correo de verificacion en la BBDD.
 *
 * @param correo email que debe pertenecer al usario de la BBDD.
 * @param codigo codigo recibido en el correo de verificación.

 * @returns Devuelve true si se ha insertado la conbinacion correo-codigo en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function insertarCodigo($correo, $codigo)
{
    if(insertarCodigoBBDD($correo,$codigo)){
        return true;
    }else{
        return false;}
}


//------------------------------------------------------------------------------------------
/*
 * disponeSensor() es una función que inserta el codigo recibido en el correo de verificacion en la BBDD.
 *
 * @param correo email que debe pertenecer al usario de la BBDD.
 * @param codigo codigo recibido en el correo de verificación.

 * @returns Devuelve true si se ha insertado la conbinacion correo-codigo en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function disponeSensor($correo){
    if(disponeSensorBBDD($correo)){

            $datosSensor = disponeSensorBBDD($correo);

        $i = 0;
        while ($fila = mysqli_fetch_array($datosSensor)) {
            $i++;
        }
        if($i!=0){
            return true;
        }else{
            return false;
        }

    }else{
        return null;
    }
}

//------------------------------------------------------------------------------------------
/*
 * guardarMedición() es una función que guarda los valores de una medición realizada en la BBDD.
 *
 * @param instante instante en el que se ha tomado la medición.
 * @param idSensor ID del sensor que ha realizado la medición.
 * @param valor valor de O3 captado en la medición.
 *
 * @returns No devuelve nada.
 */
//------------------------------------------------------------------------------------------

function guardarTActivo($idSensor,$TActivo)
{
    //llamamos a la funcion previamente creada para guardar las mediciones
    if (insertarTActivoBBDD($idSensor,$TActivo )) {
        echo "Guardado";
        return true;

    } else {
        http_response_code(401);
        die();
    }

}//guardarMedicion()

function obtenerTActivo($idSensor)
{
    //llamamos a la funcion para obtener el tiempo que ha estado activo el sensor

    $TActivo = obtenerTActivoBBDD($idSensor);


    return $TActivo;
}//obtenerTActivoBBDD()


//------------------------------------------------------------------------------------------
/*
 * guardarMedición() es una función que guarda los valores de una medición realizada en la BBDD.
 *
 * @param instante instante en el que se ha tomado la medición.
 * @param idSensor ID del sensor que ha realizado la medición.
 * @param valor valor de O3 captado en la medición.
 *
 * @returns No devuelve nada.
 */
//------------------------------------------------------------------------------------------

function guardarDistRecorrida($idSensor, $DistRecorrida)
{
    //llamamos a la funcion previamente creada para guardar las mediciones
    if (insertarDistRecorridaBDD($idSensor, $DistRecorrida)) {
        echo "Guardado";
        return true;

    } else {
        http_response_code(401);
        die();
    }

}//guardarMedicion()

function obtenerDistRecorrida($idSensor)
{
    //llamamos a la funcion para obtener el tiempo que ha estado activo el sensor

    $DistRecorrida = obtenerDistRecorridaBBDD($idSensor);

    return $DistRecorrida;
}//obtenerTActivoBBDD()