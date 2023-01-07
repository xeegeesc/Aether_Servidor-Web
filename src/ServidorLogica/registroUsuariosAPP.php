<?php
include './LogicaDelNegocio.php';


$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea POST
if($metodo=='POST'){

    //comprobamos que se han enviado los campos correctos como parámetros
    if (isset($_POST["nombre"])&&isset($_POST["correo"])&&isset($_POST["contrasenya"])){

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasenya = $_POST['contrasenya'];
        //$confirmar_contrasenya = $_POST['confirmar_contrasenya'];

        echo $nombre. " " .$correo;
        //encriptar contraseña


        //Comprobar que el correo no se repita en la base de datos
         if (comprobarCorreo($correo)){

             echo false;
        }
        else{

                registrarUsuario($nombre, $correo, $contrasenya);

        }


    }else{
        echo "Error en la peticion POST. Parámetros incorrectos.";
    }

}else{
    echo "Petición errónea, se esperaba un POST" .http_response_code(400);
}
