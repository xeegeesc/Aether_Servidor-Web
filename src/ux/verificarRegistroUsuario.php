<?php


include "../ServidorLogica/enviarCorreoRegistro.php";

$nombre=$_GET['nombre'];
$correo=$_GET['correo'];
$contrasenya=$_GET['contrasenya'];

$url=$_SERVER['REQUEST_URI'];
echo $url;
$partes = parse_url($url);
parse_str($partes['query'], $vars);

echo $vars['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verificacion</title>
</head>
<body>
<div class="contenedor__login-register">

  <!-- Login -->
    <form action="../ServidorLogica/registroUsuariosAPP.php" method="post" class="formulario__login">
      <h2>Verificar</h2>
        <input type="hidden" class="form-control" name="nombre" value="<?php echo $vars['nombre'] ?> ">
        <input type="hidden" class="form-control" name="correo" value="<?php echo $vars['correo'] ?> ">
        <input type="hidden" class="form-control" name="contrasenya" value="<?php echo $vars['contrasenya'] ?> ">
        <input type="hidden" class="form-control" name="confirmar_contrasenya" value="<?php echo $vars['contrasenya'] ?> ">


        <button>Verificar</button>
    </form>

</div>
</body>
</html>