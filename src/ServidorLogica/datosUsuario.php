<?php

include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea POST
//La petición GET ha de realizarse con el correo del usuario como parámetro.
// Éste se comprobará con el correo identificativo del usuario con sesion activa.
if($metodo=='POST') {
    if($_POST['correo']==$_SESSION['usuario']){

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
        $datosUsuario = obtenerDatosUsuario($_POST['correo']);

        echo $datosUsuario;
    }else{
        echo "No se ha iniciado sesión. El correo de la petición y de la sesión activa no coinciden";
    }
}