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

        //comprobar que las 2 contraseñas coinciden
        /*if ($contrasenya!=$confirmar_contrasenya){
            echo'
            <script>
                alert("Las contraseñas no coinciden");
                window.location = "../ux/index.php";
                
            </script>
        ';
            exit();
        }*/
        //Comprobar que el correo no se repita en la base de datos
         if (comprobarCorreo($correo)){
            /*echo '
            <script>
                alert("Este correo ya está registrado, intentelo con otro diferente");
                window.location = "../ux/index.php";
            </script>
        ';
            exit();*/
             echo false;
        }
        else{

                registrarUsuario($nombre, $correo, $contrasenya);

        }


    }else{
        echo "Error en la peticion POST. Parámetros incorrectos.";
    }

}
