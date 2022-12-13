
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenido al perfil de usuario!</h1>
    <a href="../ServidorLogica/cerrar_sesion.php">Cerrar sesión</a>

    <form action="../ServidorLogica/enviarCorreoCambioContrasenya.php" method="post" class="formulario__login">
        <h2>Cambiar contraseña</h2>
        <input type="text" placeholder=correo name="correo">
        <input type="text" placeholder=contrasenya name="contrasenya">
        <input type="password" placeholder="nuevaContrasenya" name="nuevaContrasenya">
        <button>Cambiar Contraseña</button>
    </form>


</body>
</html>