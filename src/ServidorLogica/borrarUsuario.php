<?php

include './LogicaDelNegocio.php';

//------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------
//FALTA EXPLICACION DE QUÉ SE ESPERA RECIBIR, QUE TIPO DE PETICION ES, ETC.
//------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea POST
if($metodo=='POST') {

    if (isset($_POST['contrasenya']) && isset($_POST['correo'])) {
        $correo = $_POST['correo'];
        $contrasenya = $_POST['contrasenya'];
        $contrasenya_encriptada = hash('sha512', $contrasenya);

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
        if (borrarUsuario($correo, $contrasenya)) {
            echo("usuario borrado ");
        }else{
            echo "Ha habido un error al borrar el usuario";
        }
    }else {
        echo "Error en la peticion POST. Parámetros incorrectos.";
    }
}else{
    echo "Petición errónea, se esperaba un POST" .http_response_code(400);
}
