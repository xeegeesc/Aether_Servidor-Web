<?php


//include "../enviar_prueba.php";

$correo=$_GET['correo'];
$codigo=$_GET['codigo'];
$correcto=false;
if(verificarToken($correo, $codigo)) {
   /* $fila = mysqli_fetch_row($res);
    $fecha = $fila[4];
    $fecha_actual = date("Y-m-d h:m:s");
    $second = strtotime($fecha_actual) - strtotime($fecha);
    $minutos = $second / 60;

    if ($minutos > 10) {
        echo "token vencido";
    }else {
        echo "Todo correcto";*/
        $correcto = true;
    //}
}

?>

<!DOCTYPE html>
<html lang=en>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width,initial-scale-1.0">
        <title> Cambiar contraseña </title>
</head>

<body>
    <div class= "container">
        <div class="row justify-content-md-center" style="margin-top:15%">
        <?php if($correcto){ ?>
        <form class="col-3" action="../recuperarContrasenya.php" method="POST">
            <h2>Restablecer contraseña</h2>

            <div class="mb-3">
                <label for="c" class="form-label"> Codigo Recibido por Correo</label>
                <input type="text" class="form-control" id="c" name="codigo">
            </div>

            <div class="mb-3">
                <label for="c" class="form-label"> Nueva contraseña</label>
                <input type="password" class="form-control" id="c" name="contrasenya">
            </div>

            <div class="mb-3">
            <label for="c" class="form-label"> Confirmar contraseña</label>
            <input type="password" class="form-control" id="c" name="c2">

            <input type="hidden" class="form-control" id="c" name="correo">
            </div> 

         <button type="submit" class="btn btn-primary"> Cambiar </button> 
        </form>
        <?php } else{ ?>
            <div class="alert alert-danger">Codigo incorrecto o vencido</div>
     </div>
</div>
</body>
    <?php
}