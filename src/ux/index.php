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
    <title>Aether Technologies</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="http://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body_landing">
    <header>
        <div class="header__contenido">

            <img src="assets/images/logo.png" class="img__logo" id="logo_main_unloged">

            <div class="header__menu" id="ensenyar__menu">
                <nav>
                    <ul>
                        <li id="header__inicio-sub" class="header__menu-selected"><a id="header__inicio_txt" class="text-menu-selected"><i class="fa-solid fa-house"></i>INICIO</a></li>
                        <li id="header__quienes-sub"><a id="header__quienes_txt"><i class="fa-solid fa-users"></i> QUIENES SOMOS</a></li>
                        <li id="header__mapa-sub"><a id="header__mapa_txt"><i class="fa-solid fa-map-location"></i>MAPA</a></li>
                    </ul>
                </nav>
            </div>
            <a id="btn__identificate"><i id="icn__identificate" class="fa-solid fa-circle-user"></i><p id="txt__identificate">Identificate</p></a>
        </div>

        <div id="icono__menu">
            <i id="icono__menu_m_o_x" class="fa-solid fa-bars"></i>
        </div>
    </header>

    <main></main>

    <div class="cuerpo-web" id="cuerpo-landing">
        <div class="secciones__unlogged">
            <div class="pestanya__Inicio">
                <h1>SE CONSCIENTE DEL AIRE QUE RESPIRAS</h1>

                <h2>¿Crees que estás respirando aire puro en tu día a día?</h2>
                <p class="txt__reclamo r1">Comprueba el estado del aire  en tu ciudad y tu entorno, es completamente GRATUITO</p>
                <p class="txt__reclamo r2">¡También puedes obtener tu dispositivo y contribuir a conocer el estado del aire disfrutando de múltiples beneficios!</p>
                <br>
                <a class="btn-solicitar">¡Solicitar Dispositivo!</a>
            </div>

            <div class="pestanya_quienes-somos">
                <h1>QUIÉNES SOMOS</h1>
                <p>Estás en quiénes somos</p>
            </div>

            <div class="pestanya_mapa">
                <a href="#solo_registrados" id="btn__unloged_zi" class="btn__Mapa-controlador_zi">+</a>
                <a href="#solo_registrados" id="btn__unloged_zo" class="btn__Mapa-controlador_zo">-</a>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3100.847706971145!2d-0.16974775620510024!3d38.9959719791882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61c2a3069621fd%3A0xdb8ad87b84df4b24!2sUPV%20Campus%20de%20Gandia%20-%20Escuela%20Politecnica%20Superior!5e0!3m2!1ses!2ses!4v1668900142120!5m2!1ses!2ses" width="100%" height="740" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>


        <div class="popup__login-register">
            <div class="contenedor__todo">

                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <a href="#" class="btn-close-identificate-L" id="identificate_L">X</a>
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Iniciar sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>

                    <div class="caja__trasera-register">
                        <a href="#" class="btn-close-identificate-R" id="identificate_R">X</a>
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
                        <a href="#contrasenya__olvidada" id="btn__contrasenya_olvidada" class="texto_link" style="margin-left: 20px;">¿Olvidaste tu contraseña?</a>
                    </form>
                    <!-- Registro -->
                    <form action="../ServidorLogica/enviarCorreoRegistroWeb.php" method="post" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre Completo" name="nombre">
                        <input type="text" placeholder="Correo Electrónico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasenya">
                        <input type="password" placeholder="Confirmar Contraseña" name="confirmar_contrasenya">


                        <input type="checkbox" id="chek__privacidad" value="politica_checkbox" class="checkbox">
                        <label for="chek__privacidad" style="font-size: small">Acepto la</label>
                        <a href="#politica" class="texto_link" id="btn__politica">política de privacidad</a>
                        <label style="font-size: small;">de la empresa</label><br>
                        <button onclick="alert('SE HA ENVIADO UN EMAIL A TU DIRECCIÓN DE CORREO ELECTRÓNICO');">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="popup__contrasenya_olvidada" id="contrasenya__olvidada">
        <div class="popup">
            <div class="img__contrasenya_olvidada"></div>
            <form action="../ServidorLogica/enviar_prueba.php" method="post" class="formulario__olvidada">
                <h2>Contraseña Olvidada</h2>
                <p>Introduce tu correo. Si el correo introducido es válido, recibirás más instrucciones en la bandeja de entrada de tu correo.</p>
                <input type="text" placeholder="Correo Electrónico" name="correo">
                <button>Enviar Correo</button>
            </form>
            <a href="#" class="btn-close-popup">X</a>
        </div>
    </div>

    <div class="popup__politica" id="politica">
        <div class="popup">
            <div class="img__politica"></div>
            <div class="formulario__politica">
                <h2>POLÍTICA DE PRIVACIDAD</h2>
                <p>El presente Política de Privacidad establece los términos en que Aether Technologies usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.</p>
                <h3>Información que es recogida</h3>
                <p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,  información de contacto como  su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación.</p>
                <h3>Uso de la información recogida</h3>
                <p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios.  Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.

                    Aether Technologies está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.</p>
                <h3>Cookies</h3>
                <p>Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico web, y también facilita las futuras visitas a una web recurrente. Otra función que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.

                    Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de usted, a menos de que usted así lo quiera y la proporcione directamente noticias. Usted puede aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.</p>
                <h3>Enlaces a Terceros</h3>
                <p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.</p>
                <h3>Control de su información personal</h3>
                <p>En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.  Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico.  En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.

                    Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.

                    Aether Technologies se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.</p>
            </div>
            <a href="#" class="btn-close-popup">X</a>
        </div>
    </div>

    <div class="popup__solo_registrados" id="solo_registrados">
        <div class="popup">
            <div class="img__solo_registrados"></div>
            <div class="formulario__solo_registrados">
                <h2>Estas funciones son solo para usuarios registrados</h2>
                <p>Regístrate de manera completamente GRATUITA o inicia sesión si ya tienes cuenta, para poder acceder a todas las herramientas de la web.</p>
                <br>
                <a href="#" id="btn__solo_registrados">Registrarse</a>
            </div>
            <a href="#" class="btn-close-popup">X</a>
        </div>
    </div>

    <footer class="landing__footer">
        <div class="contenedor__footer">
            <div class="caja__footer">
                <div class="footer_marca">
                    <div class="logo_footer">
                        <img src="assets/images/logo_v2.png" class="img__logo_v2">
                        <img src="assets/images/logo_v2.png" class="img__logo_v2">
                    </div>
                </div>

                <div class="companyia">
                    <h3>Compañía</h3>
                    <a id="footer__unlog_quienes">Quiénes somos</a>
                    <a >Solicitar dispositivo</a>
                    <a href="#solo_registrados" id="footer__unlog_contacta">Contáctanos</a>
                </div>
                <div class="redes_sociales">
                    <h3>Redes sociales</h3>
                    <a><i class="fab fa-twitter-square"></i> Twitter</a>
                    <a><i class="fab fa-instagram-square"></i> Instagram</a>
                    <a><i class="fab fa-facebook-square"></i> Facebook</a>
                </div>
            </div>
        </div>
        <div class="caja__copiright">
            <hr>
            <p id="copiright">© 2022 Aether Technologies. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>