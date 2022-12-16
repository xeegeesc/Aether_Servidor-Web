<?php
include './ConexionABBDD.php';


    function GuardarMedicionBBDD($instante, $idSensor, $valor)
    {
        //Insertamos en la bbdd y comrpbamos si se guarda
        $sql = "INSERT INTO `medida` (`instante`, `idSensor`, `valor`) VALUES ('$instante', '$idSensor', '$valor')";
        if (mysqli_query(Conectar(), $sql)) {

           return true;

        } else {
            return false;
        }
    }

    //----------------------------------------------------------------
    //----------------------------------------------------------------
    function obtenerMedicionesBBDD(){
        //obtenemos lo que necesitamos de la tabla medida
        $sql = "SELECT * FROM `medida`";
        return mysqli_query(Conectar(),$sql);

    }

    //-----------------------------------------
    //-----------------------------------------
    function obtenerUltimaMedicionBBDD($tipo){
        //obtenemos solo el ultimo valor de la tabla para ver el ultimo
        $sql = "SELECT * FROM `medida` WHERE `instante` = (SELECT MAX(`instante`) FROM `medida`)";
        return mysqli_query(Conectar(),$sql);
    }
}//comprobarCredencialesBBDD()


//------------------------------------------------------------------------------------------
/*
 * cambiarContrasenyaBBDD() es una función que cambia la contraseña de un usuario comprobando el correo y la contraseña antigua.
 *
 * @param correo email que debe pertenecer a algun usario de la BBDD.
 * @param contrasenya la contraseña que esta asociada a la cuenta del usuario.
 * @param nuevaContrasenya la nueva contraseña que estará asociada a la cuenta del usuario.
 *
 * @returns Devuelve true si se ha cambiado la contraseña del usuario en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function cambiarContrasenyaBBDD($correo,$contrasenya, $nuevaContrasenya){

    //$sql = "UPDATE `usuario` SET `contrasenya` = '".$nuevaContrasenya."' WHERE `correo`='".$correo."' AND `contrasenya`='".$contrasenya."'";
    //return mysqli_query(Conectar(),$sql);
    $sql ="UPDATE `usuario` SET `contrasenya` = '".$nuevaContrasenya."' WHERE `correo`='".$correo."'"; /*."' AND `contrasenya`='".$contrasenya."'"*/;
    if (mysqli_query(Conectar(), $sql)) {
        echo "cambiarCOntrasenyaBBDD funcionaa ";
        return mysqli_query(Conectar(),$sql);

    } else {
        return false;
    }
}

//------------------------------------------------------------------------------------------
/*
 * borrarUsuarioBBDD() es una función que borra un usuario comprobando el correo y la contraseña que tiene en la BBDD.
 *
 * @param correo email que debe pertenecer al usario de la BBDD.
 * @param contrasenya la contraseña que esta asociada a la cuenta del usuario.

 * @returns Devuelve true si se ha borrado el usuario en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function borrarUsuarioBBDD($correo,$contrasenya){

    //$sql = "UPDATE `usuario` SET `contrasenya` = '".$nuevaContrasenya."' WHERE `correo`='".$correo."' AND `contrasenya`='".$contrasenya."'";
    //return mysqli_query(Conectar(),$sql);
    $sql ="DELETE FROM `usuario` WHERE `correo`='".$correo."' AND `contrasenya`='".$contrasenya."'";
    if (mysqli_query(Conectar(), $sql)) {
        echo "borrarUsuarioBBDD funcionaa ";
        return mysqli_query(Conectar(),$sql);

    } else {
        return false;
    }
}

//------------------------------------------------------------------------------------------
/*
 * obtenerDatosUsuarioBBDD() es una función que obtiene los datos de un usuario en la BBDD según su correo.
 *
 * @param correo email que debe pertenecer a algun usario de la BBDD.
 *
 *
 * @returns Devuelve la query del sql que se ha realizado con los datos si el usuario se ha podido encontrar en la BBDD,
 * si no se ha podido encontrar o ha habido algun error la funcion devolverá la excepción.
 */
//------------------------------------------------------------------------------------------
function obtenerDatosUsuarioBBDD($correo){
    //obtenemos solo el ultimo valor de la tabla para ver el ultimo
    $sql = "SELECT * FROM `usuario` WHERE `correo`='".$correo."'";
    return mysqli_query(Conectar(),$sql);
}//obtenerDatosUsuarioBBDD()

//------------------------------------------------------------------------------------------
/*
 * obtenerCalidadAireBBDD() es una función que obtiene las medidas de O3 en el aire a lo largo del día hasta el momento actual.
 *
 * @param idSensor UUID en texto del sensor del cual se quieren recibir las medidas
 *
 * @returns Devuelve la query del sql que se ha realizado con los datos de O3 en el aire a lo largo del día si todo ha ido bien ,
 * si no se ha podido recoger las medidas de la BBDD o ha habido algun error la funcion devolverá la excepción.
 */
//------------------------------------------------------------------------------------------
function obtenerCalidadAireBBDD($idSensor){
    $milliseconds = floor(microtime(true) * 1000);
    //obtenemos solo el ultimo valor de la tabla para ver el ultimo
    $sql = "SELECT * FROM `medida` WHERE `momentoMedicion` > ($milliseconds-86400000) AND `idSensor`='$idSensor'";
    return mysqli_query(Conectar(),$sql);
}//obtenerUltimaMedicionBBDD()

/*
function insertarCodigoBBDD($correo,$codigo){
    $sql = "insert into passwords (email, codigo) values('$correo','$codigo')";
    if (mysqli_query(Conectar(), $sql)) {
        return true;

    } else {
        return false;
    }
}*/


//------------------------------------------------------------------------------------------
/*
 * recuperarContrasenyaBBDD() es una función que cambia la contraseña que tiene un usuario en la BBDD.
 *
 * @param correo email que debe pertenecer al usario de la BBDD.
 * @param contrasenya_encriptada la contraseña que esta asociada a la cuenta del usuario.

 * @returns Devuelve true si se ha cambiado la contraseña en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function recuperarContrasenyaBBDD($correo,$contrasenya_encriptada){
    $sql="UPDATE usuario SET contrasenya='$contrasenya_encriptada' where correo='$correo'";

    if (mysqli_query(Conectar(), $sql)) {
        return true;

    } else {
        return false;
    }
}

//------------------------------------------------------------------------------------------
/*
 * cambiarNombreUsuarioBBDD() es una función que cambia el nombre que tiene un usuario en la BBDD.
 *
 * @param correo email que debe pertenecer al usario de la BBDD.
 * @param nombre el nombre que está asociado a la cuenta del usuario.

 * @returns Devuelve true si se ha cambiado el nombre en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function cambiarNombreUsuarioBBDD($correo,$nombre){
    $sql="UPDATE usuario SET nombre='$nombre' where correo='$correo'";
    if (mysqli_query(Conectar(), $sql)) {
        return true;

    } else {
        return false;
    }
}
//------------------------------------------------------------------------------------------
/*
 * asignarSensorUsuarioBBDD() es una función que asigna un usuario a un sensor en la BBDD.
 *
 * @param correo email que debe pertenecer al usario de la BBDD.
 * @param idSensor id del sensor el cual va a ser asignado.

 * @returns Devuelve true si se ha asignado en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function asignarSensorUsuarioBBDD($correo,$idSensor){
    $sql="UPDATE sensor SET idUsuario='$correo' where idSensor='$idSensor'";
    if (mysqli_query(Conectar(), $sql)) {
        return true;

    } else {
        return false;
    }
}

//------------------------------------------------------------------------------------------
/*
 * verificarTokenBBDD() es una función que verifica que el codigo generado como seguridad al crear un usuario o recuperar la contraseña es el correcto.
 *
 * @param correo email que debe pertenecer al usario de la BBDD.
 * @param codigo codigo que se quiere comparar con el de BBDD.

 * @returns Devuelve true si el codigo coincide, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function verificarTokenBD($correo,$codigo){
    $sql = "SELECT * FROM passwords WHERE email='$correo' and codigo='$codigo'";
    if (mysqli_query(Conectar(), $sql)) {
        return true;

    } else {
        return false;
    }
}

//------------------------------------------------------------------------------------------
/*
 * insertarCodigoBBDD() es una función que inserta el codigo recibido en el correo de verificacion en la BBDD.
 *
 * @param correo email que debe pertenecer al usario de la BBDD.
 * @param codigo codigo recibido en el correo de verificación.

 * @returns Devuelve true si se ha insertado la conbinacion correo-codigo en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function insertarCodigoBBDD($correo,$codigo){
    $sql = "insert into passwords (email, codigo) values('$correo','$codigo')";
    if (mysqli_query(Conectar(), $sql)) {
        return true;

    } else {
        return false;
    }
}


function disponeSensorBBDD($correo){
    $sql = "SELECT * FROM sensor WHERE idUsuario='$correo'";
    if (mysqli_query(Conectar(), $sql)) {
        return mysqli_query(Conectar(),$sql);
    } else {
        return false;
    }
}

//------------------------------------------------------------------------------------------
/*
 * obtenerTActivoBBDD() es una función obtiene los usuarios activos guardados en la BBDD.
 *
 * @param tiene como parametro de entrada a un usuario.
 *
 * @returns devuelve un JSON con el tiempo que los usuarios están activos en la BBDD.
 */
//------------------------------------------------------------------------------------------
function obtenerTActivoBBDD($idSensor){
    //obtenemos solo el ultimo valor de la tabla para ver el ultimo
    $sql = "SELECT 'TActivo' FROM `estadousuario` WHERE `idSensor` = $idSensor)";
    return mysqli_query(Conectar(),$sql);
}//obtenerTActivoBBDD()

//------------------------------------------------------------------------------------------
/*
 * insertarTActivosBBDD() es una función que inserta el tiempo que lleva activo un sensor
 *
 * @param no tiene como parametros de entrada
 *
 * @returns devuelve un JSON con la ultima medicion registrada en la BBDD.
 */
//------------------------------------------------------------------------------------------
function insertarTActivoBBDD($idSensor, $TActivo){
    $sql="insert into estadousuario (idSensor,TActivo) values('$idSensor','$TActivo')";
    return mysqli_query(Conectar(),$sql);
}//insertarTActivoBDD()


//------------------------------------------------------------------------------------------
/*
 * obtenerTActivoBBDD() es una función obtiene los usuarios activos guardados en la BBDD.
 *
 * @param tiene como parametro de entrada a un usuario.
 *
 * @returns devuelve un JSON con el tiempo que los usuarios están activos en la BBDD.
 */
//------------------------------------------------------------------------------------------
function obtenerDistRecorridaBBDD($idSensor){

    $sql = "SELECT 'DistRecorrida' FROM `estadousuario` WHERE `idSensor` = $idSensor)";
    return mysqli_query(Conectar(),$sql);
}//obtenerDistRecorridoBBDD()

//------------------------------------------------------------------------------------------
/*
 * insertarTActivosBBDD() es una función que inserta el tiempo que lleva activo un sensor
 *
 * @param no tiene como parametros de entrada
 *
 * @returns devuelve un JSON con la ultima medicion registrada en la BBDD.
 */
//------------------------------------------------------------------------------------------
function insertarDistRecorridaBDD($idSensor, $DistRecorrida){
    $sql="insert into estadousuario (idSensor,DistRecorrida) values('$idSensor','$DistRecorrida')";
    return mysqli_query(Conectar(),$sql);
}//insertarTActivoBDD()