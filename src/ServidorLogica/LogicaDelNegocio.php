<?php
include 'BaseDeDatos.php';
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

function guardarMedicion($idSensor,$valorMedicion,$momentoMedicion, $latitud, $longitud)
{
    //llamamos a la funcion previamente creada para guardar las mediciones
    if (GuardarMedicionBBDD($idSensor,$valorMedicion,$momentoMedicion, $latitud, $longitud)) {
        echo "Guardado";
        return true;

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

        $respuesta["idMedicion"] = $fila["idMedicion"];
        $respuesta["idSensor"] = $fila ["idSensor"];
        $respuesta["valorMedicion"] = $fila ["valorMedicion"];
        $respuesta["momentoMedicion"] = $fila ["momentoMedicion"];
        $respuesta["latitud"] = $fila ["latitud"];
        $respuesta["longitud"] = $fila ["longitud"];

        $resultado[$i] = $respuesta;
        $i++;

    }
    echo json_encode($resultado);
    return true;
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
        $respuesta["idMedicion"] = $fila["idMedicion"];
        $respuesta["idSensor"] = $fila ["idSensor"];
        $respuesta["valorMedicion"] = $fila ["valorMedicion"];
        $respuesta["momentoMedicion"] = $fila ["momentoMedicion"];
        $respuesta["latitud"] = $fila ["latitud"];
        $respuesta["longitud"] = $fila ["longitud"];

        $resultado[$i] = $respuesta;
        $i++;

    }
    echo json_encode($resultado);
    return true;

}//obtenerUltimaMedicion


//------------------------------------------------------------------------------------------
/*
 * registrarUsuario() es una función que crea un usuario en la BBDD guardando el nombre, el correo y su contraseña.
 * La funcion comprueba que no existan ya ese correo y contraseña en la BBDD.
 *
 * @param nombre nombre de la persona que se va a registrar.
 * @param correo email perteneciente al usuario que se va a registrar.
 * @param contrasenya la contraseña que estará asociada a la cuenta del usuario.
 *
 * @returns Devuelve true si el registro se ha podido realizar, si no se ha podido realizar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function registrarUsuario($nombre, $correo, $contrasenya)
{
    if (!comprobarCredenciales($correo, $contrasenya)) {
        //llamamos a la funcion previamente creada para guardar las mediciones
        if (registrarUsuarioBBDD($nombre, $correo, $contrasenya)) {
            //echo "Usuario Guardado";
            return true;
        }
    } else {
        http_response_code(401);
        return false;
    }

}//registrarUsuario()


//------------------------------------------------------------------------------------------
/*
 * comprobarCorreo() es una función que comprueba si existe en la BBDD el correo que llega como parámetro.
 *
 * @param correo Correo que se quiere verificar si esta en la BBDD o no.

 *
 * @returns Devuelve true si el la comprobacion se ha podido realizar, si no se ha podido realizar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function comprobarCorreo($correo){

    if (comprobarCorreoBBDD($correo)) {
        //echo "Credenciales correctas";
        $credenciales = comprobarCorreoBBDD($correo);
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
}//comprobarCorreo()

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

//------------------------------------------------------------------------------------------
/*
 * cambiarContrasenya() es una función que cambia la contraseña de un usuario comprobando el correo y la contraseña antigua.
 *
 * @param correo email que debe pertenecer a algun usario de la BBDD.
 * @param contrasenya la contraseña que esta asociada a la cuenta del usuario.
 * @param nuevaContrasenya la nueva contraseña que estará asociada a la cuenta del usuario.
 *
 * @returns Devuelve true si se ha cambiado la contraseña del usuario en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function cambiarContrasenya($correo, $contrasenya, $nuevaContrasenya)
{
    //llamamos a la funcion previamente creada para guardar las mediciones
    if (comprobarCredencialesBBDD($correo, $contrasenya)) {
        //echo "Credenciales correctas";

        if (cambiarContrasenyaBBDD($correo, $contrasenya, $nuevaContrasenya)) {
            //return comprobarCredencialesBBDD($correo,$contrasenya);
            echo ("cambiarContrasenya llega");
            return true;
        } else {
            return false;
        }
    } else {
        http_response_code(401);
        die();
    }
}//cambiarContrasenya()


//------------------------------------------------------------------------------------------
/*
 * borrarUsuario() es una función que borra un usuario comprobando el correo y la contraseña que tiene en la BBDD.
 *
 * @param correo email que debe pertenecer al usario de la BBDD.
 * @param contrasenya la contraseña que esta asociada a la cuenta del usuario.

 * @returns Devuelve true si se ha borrado el usuario en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function borrarUsuario($correo, $contrasenya)
{

    if (comprobarCredenciales($correo, $contrasenya)) {

        if (borrarUsuarioBBDD($correo, $contrasenya)) {

            echo ("borrarUsuario llega");
            return true;
        } else {
            return false; //Falta excepciones
        }
    } else {
        http_response_code(401);
        die();
    }
}//borrarUsuario()

//------------------------------------------------------------------------------------------
/*
 * obtenerDatosUsuario() es una función que obtiene los datos de un usuario en la BBDD según su correo.
 *
 * @param correo email que debe pertenecer a algun usario de la BBDD.
 *
 *
 * @returns Devuelve un json con los datos si el usuario se ha podido encontrar en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá la excepción.
 */
//------------------------------------------------------------------------------------------
function obtenerDatosUsuario($correo)
{
    //Llamamos de nuevo a la funcion previamente creada
    try{
        $datosUsuario = obtenerDatosUsuarioBBDD($correo);

        $resultadoDatos = array();
        $i = 0;
        while ($fila = mysqli_fetch_array($datosUsuario)) {
            $respuesta["nombre"] = $fila["nombre"];
            $respuesta["correo"] = $fila ["correo"];
            $respuesta["idAvatar"] = $fila ["idAvatar"];

            $resultadoDatos[$i] = $respuesta;
            $i++;
        }

        return json_encode($respuesta);
    }catch (mysqli_sql_exception $exception){
        return $exception;
    }
}//obtenerDatosUsuario()

//------------------------------------------------------------------------------------------
/*
 * obtenerCalidadAire() es una función que obtiene un porcentaje de O3 en el aire a lo largo del día hasta el momento actual.
 *
 * @param idSensor UUID en texto del sensor del cual se quieren recibir las medidas
 *
 * @returns Devuelve un porcentaje de O3 en el aire a lo largo del día si todo ha ido bien , si no se ha podido recoger las medidas de la BBDD o ha habido algun error
 * la funcion devolverá la excepción.
 */
//------------------------------------------------------------------------------------------
function obtenerCalidadAire($idSensor)
{
    //Llamamos de nuevo a la funcion previamente creada
    try{
        $datosMedidas = obtenerCalidadAireBBDD($idSensor);

        $resultadoDatos = array();
        $i = 0;
        while ($fila = mysqli_fetch_array($datosMedidas)) {
            $respuesta["idMedicion"] = $fila["idMedicion"];
            $respuesta["valorMedicion"] = $fila ["valorMedicion"];
            $resultadoDatos[$i] = $respuesta;

            $i++;
        }
        $jsonResupuesta=json_encode($resultadoDatos);
        $valorTotal=0;
        $valorMaximoSensor = 1980;
        for($i =0;$i<sizeof($resultadoDatos);$i++){
            $cadaMedicion=$resultadoDatos[$i];
            $valorMedicion=$cadaMedicion["valorMedicion"];
            $valorTotal=$valorTotal+ floatval($valorMedicion);
        }
        $media=$valorTotal/sizeof($resultadoDatos);
        $porcentaje = round(($media*100)/$valorMaximoSensor, 2) ;
        return $porcentaje;
        //return json_encode($respuesta);
    }catch (mysqli_sql_exception $exception){
        return $exception;
    }
}//obtenerDatosUsuario()


//------------------------------------------------------------------------------------------
/*
 * recuperarContrasenya() es una función que cambia la contraseña que tiene un usuario en la BBDD.
 *
 * @param correo email que debe pertenecer al usario de la BBDD.
 * @param contrasenya_encriptada la contraseña que esta asociada a la cuenta del usuario.

 * @returns Devuelve true si se ha cambiado la contraseña en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function recuperarContrasenya($correo, $contrasenya_encriptada){
    if(recuperarContrasenyaBBDD($correo,$contrasenya_encriptada)){
        return true;
    }else{
        return false;}
}

//------------------------------------------------------------------------------------------
/*
 * cambiarNombreUsuario() es una función que cambia el nombre que tiene un usuario en la BBDD.
 *
 * @param correo email que debe pertenecer al usario de la BBDD.
 * @param nombre el nombre que está asociado a la cuenta del usuario.

 * @returns Devuelve true si se ha cambiado el nombre en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function cambiarNombreUsuario($correo, $nombre){
    if(cambiarNombreUsuarioBBDD($correo,$nombre)){
        return true;
    }else{
        return false;
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