<?php


include "../enviarCorreoRecuperarAPP.php";


$correcto=true;

$url=$_SERVER['REQUEST_URI'];
//echo $url;
$partes = parse_url($url);

parse_str($partes['query'], $vars);
$correo= $vars['correo'] ;
$codigo=$vars['codigo'] ;

/*function verificarElCodigo($correo, $codigo){
    if(verificarToken($correo, $codigo)) {

        $correcto = true;

    }
}*/


?>

<!DOCTYPE html>
<html lang=en>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width,initial-scale-1.0">
    <!--     <link rel="stylesheet" href="../../ux/assets/css/estilos.css"> -->
    <title> Cambiar contraseña </title>
</head>

<body>
    <header>
        <div class="header__contenido">

            <img src="../../ux/assets/images/logo.png" id="logo__main_loged" class="img__logo">

        </div>
    </header>
    <div class= "container">
        <div class="row justify-content-md-center" style="margin-top:200px">
        <?php if($correcto){ ?>
        <form class="col-3" action="../recuperarContrasenya.php" method="POST">
            <h2>Restablecer contraseña</h2>

            <div class="mb-3">

                <input type="hidden" class="form-control" id="c" name="codigo" value="<?php echo $vars['codigo'] ?>">
            </div>

            <div class="mb-3">
                <label for="c" class="form-label"> Nueva contraseña</label>
                <input type="password" class="form-control" id="c" name="contrasenya">
            </div>

            <div class="mb-3">
            <label for="c" class="form-label"> Confirmar contraseña</label>
            <input type="password" class="form-control" id="c" name="c2">

            <input type="hidden" class="form-control" id="c" name="correo" value="<?php echo $vars['correo'] ?>">
            </div> 

         <button type="submit" class="btn btn-primary" > Cambiar </button>
        </form>
        <?php } else{ ?>
            <div class="alert alert-danger">Codigo incorrecto o vencido</div>
     </div>
</div>
</body>
    <?php
}