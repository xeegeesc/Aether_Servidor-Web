<?php
include './BaseDeDatos.php';
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

function guardarMedicion($instante, $idSensor, $valor)
{
    //llamamos a la funcion previamente creada para guardar las mediciones
    if (GuardarMedicionBBDD($instante, $idSensor, $valor)) {
        echo "Guardado";

    } else {
        http_response_code(401);
        die();
    }

}//guardarMedicion()

//------------------------------------------------------------------------------------------
/*
 * obtenerMediciones() es una función que obtiene todas las mediciones guardadas en BBDD.
 *
 * @param No dispone de parametros de entrada.
 *
 * @returns devuelve un JSON del resultado de la busqueda (en este caso todas las mediciones de la BBDD).
 */
//------------------------------------------------------------------------------------------

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
}//obtenerMediciones()

//------------------------------------------------------------------------------------------
/*
 * obtenerUltimaMedicion() es una función obtiene la ultima medicion guardada en la BBDD.
 *
 * @param no tiene parametros de entrada.
 *
 * @returns devuelve un JSON con la ultima medicion registrada en la BBDD.
 */
//------------------------------------------------------------------------------------------
function obtenerUltimaMedicion()
{

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

}//obtenerUltimaMedicion
//------------------------------------------------------------------------------------------
/*
 * comprobarCredenciales() es una función que comprueba que existan esa combinacion de correo y contraseña en la BBDD.
 *
 * @param correo email que debe pertenecer a algun usario de la BBDD.
 * @param contrasenya la contraseña que esta asociada a la cuenta del usuario.
 *
 * @returns Devuelve true si el usuario se ha podido encontrar en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function comprobarCredenciales($correo, $contrasenya)
{
    //llamamos a la funcion previamente creada para guardar las mediciones
    if (comprobarCredencialesBBDD($correo, $contrasenya)) {
        //echo "Credenciales correctas";
        $credenciales = comprobarCredencialesBBDD($correo, $contrasenya);
        $i = 0;
        //Comprueba el numero de usuarios que ha encontrado la query. Si es mayor que 0, quiere decir que ha encontrado un usario
        //con ese correo y contraseña.
        while ($fila = mysqli_fetch_array($credenciales)) {
            $i++;
        }
        if ($i > 0) {
            //return comprobarCredencialesBBDD($correo,$contrasenya);
            return true;
        } else {
            return false;
        }
    } else {
        http_response_code(401);
        die();
    }
}//comprobarCredenciales()