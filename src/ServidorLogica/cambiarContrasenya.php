<?php

include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea POST
if($metodo=='POST') {
$correo=$_POST['correo'];
$contrasenya=$_POST['contrasenya'];
$nuevaContrasenya=$_POST['nuevaContrasenya'];

//------------------------------------------------------------------------------------------
    /*
     * cambiarContrasenya() es una función que cambia la contraseña de un usuario comprobando el correo y la contraseña antigua.
     *
     * @param correo email que debe pertenecer a algun usario de la BBDD.
     * @param contrasenya la contraseña que esta asociada actualmente a la cuenta del usuario.
     * @param nuevaContrasenya la nueva contraseña que estará asociada a la cuenta del usuario.
     *
     * @returns Devuelve true si se ha cambiado la contraseña del usuario en la BBDD, si no se ha podido encontrar o ha habido algun error
     * la funcion devolverá false.
     */
//------------------------------------------------------------------------------------------
    if(cambiarContrasenya($correo, $contrasenya, $nuevaContrasenya)){
        echo ("contraseña cambiada");
    }
}

