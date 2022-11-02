<?php
    session_start();
    if (isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera">

                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Iniciar sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>

                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para poder iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>

            </div>

            <!-- Formulario de login y registro -->
            <div class="contenedor__login-register">

                <!-- Login -->
                <form action="../ServidorLogica/comprobarCredenciales.php" method="post" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasenya">
                    <button>Entrar</button>
                </form>
                <!-- Registro -->
                <form action="../ServidorLogica/registroUsuarios.php" method="post" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre">
                    <input type="text" placeholder="Correo Electrónico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasenya">
                    <input type="password" placeholder="Confirmar Contraseña" name="confirmar_contrasenya">
                    <button>Registrarse</button>
                </form>

            </div>

        </div>
    </main>

    <script src="assets/js/script.js"></script>
</body>
</html>