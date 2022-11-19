<?php
    session_start();
    if (!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Inicia sesión y no me seas perro");
                window.location = "../ux/index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

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
    <h1>Bienvenido a mi mundo!</h1>
    <a href="../ServidorLogica/cerrar_sesion.php">Cerrar sesión</a>

    <a href="perfilUsuario.php"></a>
</body>
</html>