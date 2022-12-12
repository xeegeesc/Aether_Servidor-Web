
<?php
/*
if(isset($_GET['email']) && isset($_GET['token'])){
$email=$_GET['email'];
$token=$_GET['token'];
}
else{
    header('Location: ' ./login.php);
}*/
?>

<!DOCTYPE html>
<html lang=en>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width,initial-scale-1.0">
        <title> Restablecer </title>
</head>

<body>
    <div class= "container">
        <div class="row justify-content-md-center" style="margin-top:15%">
        <form class="col-3" action="../enviar_prueba.php" method="POST">
            <h2>Restablecer contraseña</h2>
            <div class="ab-3">
                <label for="c" class="form-label"> Correo</label>
                <!--  <input type="number" class="form-control" id="c" name="codigo">
                                <input type="hidden" class="form-control" id="c" name="token" value="">
-->
                <input type="text" class="form-control" placeholder="Correo Electrónico"  id="c" name="correo" >
            </div>

         <button type="submit" class="btn btn-primary">  Restablecer </button> 
        </form>
     </div>
</div>
</body>
</html>
