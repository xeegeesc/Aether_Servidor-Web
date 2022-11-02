<?php
include 'ConexionABBDD.php';

//------------------------------------------------------------------------------------------
/*
 * guardarMediciónBBDD() es una función que guarda los valores de una medición realizada en la BBDD.
 *
 * @param instante instante en el que se ha tomado la medición.
 * @param idSensor ID del sensor que ha realizado la medición.
 * @param valor valor de O3 captado en la medición.
 *
 * @returns Devuelve true si se ha podido llevar a cabo la query, sino devolverá false.
 */
//------------------------------------------------------------------------------------------
function GuardarMedicionBBDD($idSensor,$valorMedicion,$momentoMedicion, $latitud, $longitud)
{
    //Insertamos en la bbdd y comrpbamos si se guarda
    $sql = "INSERT INTO `medida` (`idSensor`, `valorMedicion`, `momentoMedicion`, `latitud`, `longitud`) VALUES ('$idSensor', '$valorMedicion', '$momentoMedicion', '$latitud', '$longitud')";
    if (mysqli_query(Conectar(), $sql)) {

        return true;

    } else {
        return false;
    }
}//GuardarMedicionBBDD()

//------------------------------------------------------------------------------------------
/*
 * obtenerMedicionesBBDD() es una función que obtiene todas las mediciones guardadas en BBDD.
 *
 * @param No dispone de parametros de entrada.
 *
 * @returns devuelve un mysqli_query del resultado de la busqueda (en este caso todas las mediciones de la BBDD).
 */
//------------------------------------------------------------------------------------------

function obtenerMedicionesBBDD(){
    //obtenemos lo que necesitamos de la tabla medida
    $sql = "SELECT * FROM `medida`";
    return mysqli_query(Conectar(),$sql);

}//obtenerMedicionesBBDD


//------------------------------------------------------------------------------------------
/*
 * obtenerUltimaMedicionBBDD() es una función obtiene la ultima medicion guardada en la BBDD.
 *
 * @param no tiene parametros de entrada.
 *
 * @returns devuelve un JSON con la ultima medicion registrada en la BBDD.
 */
//------------------------------------------------------------------------------------------
function obtenerUltimaMedicionBBDD(){
    //obtenemos solo el ultimo valor de la tabla para ver el ultimo
    $sql = "SELECT * FROM `medida` WHERE `momentoMedicion` = (SELECT MAX(`instante`) FROM `medida`)";
    return mysqli_query(Conectar(),$sql);
}//obtenerUltimaMedicionBBDD()

//------------------------------------------------------------------------------------------
/*
 * registrarUsuarioBBDD() es una función que crea un usuario en la BBDD guardando el nombre, el correo y su contraseña.
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
function registrarUsuarioBBDD($nombre,$correo,$contrasenya){
    $sql = "INSERT INTO `usuario` (`nombre`, `correo`, `contrasenya`) VALUES ('$nombre', '$correo', '$contrasenya')";
    if (mysqli_query(Conectar(), $sql)) {

        return true;

    } else {
        return false;
    }
}//registrarUsuarioBBDD

//------------------------------------------------------------------------------------------
/*
 * comprobarCorreoBBDD() es una función que comprueba si existe en la BBDD el correo que llega como parámetro.
 *
 * @param correo Correo que se quiere verificar si esta en la BBDD o no.

 *
 * @returns Devuelve true si el la comprobacion se ha podido realizar, si no se ha podido realizar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function comprobarCorreoBBDD($correo){

    $sql = "SELECT * FROM usuario WHERE correo = '$correo'";
    if (mysqli_query(Conectar(), $sql)) {

        return mysqli_query(Conectar(),$sql);

    } else {
        return false;
    }

}//comprobarCorreoBBDD()


//------------------------------------------------------------------------------------------
/*
 * comprobarCredencialesBBDD() es una función que comprueba que existan esa combinacion de correo y contraseña en la BBDD.
 *
 * @param correo email que debe pertenecer a algun usario de la BBDD.
 * @param contrasenya la contraseña que esta asociada a la cuenta del usuario.
 *
 * @returns Devuelve true si el usuario se ha podido encontrar en la BBDD, si no se ha podido encontrar o ha habido algun error
 * la funcion devolverá false.
 */
//------------------------------------------------------------------------------------------
function comprobarCredencialesBBDD($correo,$contrasenya){

    $sql = "SELECT * FROM `usuario` WHERE `correo`='".$correo."' AND `contrasenya`='".$contrasenya."'";
    //return mysqli_query(Conectar(),$sql);

    if (mysqli_query(Conectar(), $sql)) {
        return mysqli_query(Conectar(),$sql);

    } else {
        return false;
    }
}
