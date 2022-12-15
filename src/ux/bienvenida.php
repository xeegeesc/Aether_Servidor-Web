<?php
/*
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
    }*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aether Technologies</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="librerias/jquery-3.6.2.min.js"></script>
    <script src="librerias/plotly-2.16.1.min.js"></script>

    <!--  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css"> -->
    <script src="http://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body_landing">
<header>
    <div class="header__contenido">

        <img src="assets/images/logo.png" id="logo__main_loged" class="img__logo">

        <div class="header__menu" id="ensenyar__menu">
            <nav>
                <ul>
                    <li id="header__mi_dispositivo-sub" class="header__menu-selected"><a id="header__mi_dispositivo_txt" class="text-menu-selected"><i class="fa-solid fa-house"></i>MI DISPOSITIVO</a></li>
                    <li id="header__contactanos-sub"><a id="header__contactanos_txt"><i class="fa-solid fa-users"></i> CONTÁCTANOS</a></li>
                    <li id="header__mapa-sub"><a id="header__mapa_txt"><i class="fa-solid fa-map-location"></i>MAPA</a></li>
                </ul>
            </nav>
        </div>
        <a id="btn__perfil"><i id="icn__usuario" class="fa-solid fa-circle-user"></i><p id="txt__usuario">Amigo</p></a>
    </div>

    <div id="icono__menu">
        <i id="icono__menu_m_o_x" class="fa-solid fa-bars"></i>
    </div>
</header>

<main></main>

<div class="cuerpo-web" id="cuerpo-landing">
    <div class="secciones__logged">

        <div class="pestanya__sin_mi_dispositivo">
            <div class="container__card">
                <h1 class="sin_dispositivo_title">¿Todavía no tienes tu dispositivo, bellaco?</h1>
                <div class="sin_dispositivo_subtitle"">
                    <h2>Sigue los siguientes pasos:</h2>
                </div>
                <div class="card__father">
                    <div class="card">
                        <div class="card__front" style="background-image: url(assets/images/fondo.jpeg);">
                            <div class="bg"></div>
                            <div class="body__card_front">
                                <h1>1.Rellena el formulario</h1>
                            </div>
                        </div>
                        <div class="card__back">
                            <div class="body__card_back">
                                <h1>1.Rellena el formulario</h1>
                                <p>Rellena el formulario "Solicitar dispositivo", es necesario para controlar quien dispone de un dispositivo y de ese modo poder bonificar a los usuarios correctamente.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card__father">
                    <div class="card">
                        <div class="card__front" style="background-image: url(assets/images/fondo.jpeg);">
                            <div class="bg"></div>
                            <div class="body__card_front">
                                <h1>2.Abonar la fianza</h1>
                            </div>
                        </div>
                        <div class="card__back">
                            <div class="body__card_back">
                                <h1>2.Abonar la fianza</h1>
                                <p>Tras comprobarse tus datos recibirás un correo donde se te indicará cómo abonar la fianza del dispositivo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card__father">
                    <div class="card">
                        <div class="card__front" style="background-image: url(assets/images/fondo.jpeg);">
                            <div class="bg"></div>
                            <div class="body__card_front">
                                <h1>3.Envío del dispositivo</h1>
                            </div>
                        </div>
                        <div class="card__back">
                            <div class="body__card_back">
                                <h1>3.Envío del dispositivo</h1>
                                <p>Tras el pago se realzará el envío del dispositivo a la dirección indicada. Este proceso puede tardar de 24 a 72h</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card__father">
                    <div class="card">
                        <div class="card__front" style="background-image: url(assets/images/fondo.jpeg);">
                            <div class="bg"></div>
                            <div class="body__card_front">
                                <h1>4.Enlazar dispositivo desde la app</h1>
                            </div>
                        </div>
                        <div class="card__back">
                            <div class="body__card_back">
                                <h1>4.Enlazar dispositivo desde la app</h1>
                                <p>Al recibir el dispositivo podrás enlazarlo a tu cuenta desde la aplicación móvil Aether Technologies.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="formulario__solicitar">
                <h1>Solicitar dispositivo</h1>
                <div class="solicitar_form_direccion">
                    <input  type="text" placeholder="DNI" name="DNI">
                    <input  type="text" placeholder="Nombre" name="nombre">
                </div>
                <div class="solicitar_form_direccion">
                    <input  type="text" placeholder="Primer Apellido" name="primer_apellido">
                    <input  type="text" placeholder="Segundo Apellido" name="segundo_apellido">
                </div>
                <div class="solicitar_form_direccion">
                    <input  type="text" placeholder="Teléfono" name="telefono">
                    <input  type="text" placeholder="Fecha Nacimiento" name="fecha_nacimiento">
                </div>
                <div class="solicitar_form_direccion">
                    <input  type="text" placeholder="Dirección" name="direccion">
                    <input  type="text" placeholder="Código Postal" name="codigo_postal">
                </div>
                <div class="solicitar_form_direccion">
                    <input  id="solicitar_form_password"   type="password" placeholder="Introduce tu contraseña" name="contrasenya">
                </div>

                <div class="solicitar_form_check">
                    <input type="checkbox" id="chek__solicitar_dispositivo" value="solicidud_checkbox" class="checkbox">
                    <label for="chek__privacidad" style="font-size: small">Acepto que se comprueben todos mis datos.</label>
                </div>
                <button>Solicitar sensor</button>

            </div>
        </div>

        <div class="pestanya__mi_dispositivo">
            <div class="pestanya__mi_dispositivo_seccionA" style="display: flex; flex-direction: row">
                <div class="card__father_V2">
                    <div class="card_V2" id="mi_dispositivo_c1">
                        <div class="card__front_V2" style="background-color: white">
                            <div class="bg_V2"></div>
                            <div class="body__card_front_V2">
                                <i id="mi_dispositivo_i1" class="fa-solid fa-circle-info"></i>

                                <h1>Tiempo desde última medición</h1>

                                <div class="mi_dispositivo_card_front_dir">
                                    <i class="fa-solid fa-clock"></i>
                                    <a>Menos de 1 min</a>
                                </div>
                            </div>
                        </div>
                        <div class="card__back_V2">
                            <div class="body__card_back_V2">
                                <i id="mi_dispositivo_x1" class="fa-regular fa-circle-xmark"></i>
                                <p>Tiempo transcurrido desde la última vez que tu sensor transmitió datos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card__father_V2">
                    <div class="card_V2" id="mi_dispositivo_c2">
                        <div class="card__front_V2" style="background-color: white">
                            <div class="bg_V2"></div>
                            <div class="body__card_front_V2">
                                <i id="mi_dispositivo_i2" class="fa-solid fa-circle-info"></i>
                                <h1>Última calidad del aire</h1>

                                <div class="mi_dispositivo_card_front_dir">
                                    <i class="fa-solid fa-wind"></i>
                                    <a>Media</a>
                                </div>
                            </div>
                        </div>
                        <div class="card__back_V2">
                            <div class="body__card_back_V2">
                                <i id="mi_dispositivo_x2" class="fa-regular fa-circle-xmark"></i>
                                <p>Calidad de la última medición de aire tomada por tu sensor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card__father_V2">
                    <div class="card_V2" id="mi_dispositivo_c3">
                        <div class="card__front_V2" style="background-color: white">
                            <div class="bg_V2"></div>
                            <div class="body__card_front_V2">
                                <i id="mi_dispositivo_i3" class="fa-solid fa-circle-info"></i>
                                <h1>Tiempo emitiendo</h1>

                                <div class="mi_dispositivo_card_front_dir">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <a>184 h  25 min</a>
                                </div>
                            </div>
                        </div>
                        <div class="card__back_V2">
                            <div class="body__card_back_V2">
                                <i id="mi_dispositivo_x3" class="fa-regular fa-circle-xmark"></i>
                                <p>Horas que lleva emitiendo tu sensor durante todo el mes, cada cierto tiempo estas horas se te retribuirán reduciendo tus impuestos de medio ambiente</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card__father_V2">
                    <div>
                        <div style="background-color: white">
                            <div class="body__card_front_V2">

                                <div class="mi_dispositivo_card_front_dir">
                                    <a>Gestionar mi dispositivo</a>
                                    <i class="fa-solid fa-gear"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pestanya__mi_dispositivo_seccionA" style="display: flex; flex-direction: row">
                <div class="card__father_V2">
                    <div class="card_V3" id="mi_dispositivo_c4">
                        <div class="card__front_V3" style="background-color: white">
                            <div class="bg_V2"></div>
                            <div class="body__card_front_V2">
                                <i id="mi_dispositivo_i4" class="fa-solid fa-circle-info"></i>
                                <h1>Últimas medidas de calidad del aire</h1>
                                <div id="contenedor_grafica">

                                </div>
                            </div>
                        </div>
                        <div class="card__back_V2">
                            <div class="body__card_back_V2">
                                <i id="mi_dispositivo_x4" class="fa-regular fa-circle-xmark"></i>
                                <p>Tiempo transcurrido desde la última vez que tu sensor transmitió datos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card__father_V2">
                    <div class="card_V4" id="mi_dispositivo_c5">
                        <div class="card__front_V2" style="background-color: white">
                            <div class="bg_V2"></div>
                            <div class="body__card_front_V2">
                                <i id="mi_dispositivo_i5" class="fa-solid fa-circle-info"></i>
                                <h1>Tu media de calidad del aire</h1>
                            </div>
                        </div>
                        <div class="card__back_V2">
                            <div class="body__card_back_V2">
                                <i id="mi_dispositivo_x5" class="fa-regular fa-circle-xmark"></i>
                                <p>Tiempo transcurrido desde la última vez que tu sensor transmitió datos.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="pestanya_contactanos">
            <h1>CONTÁCTANOS</h1>
            <p>Estás en contáctanos</p>
        </div>

    <div id="pestanya__acerca_de" class="pestanya_acerca_de">
        <h1>Acerca de los gases</h1>

        <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@     ACÍ VA LO DE MARIA @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
        Según la Red Europea de Información y Observación del Medio Ambiente, actualmente existen diversos gases contaminantes. Los cuales, en concentraciones suficientemente elevadas, consiguen dañar a los seres humanos, los animales, la vegetación o los materiales.

        En los siguientes epígrafes se describen los principales gases contaminantes desde un punto de vista de su afección sobre la salud humana y su impacto sobre los ecosistemas.

        <h2>Monóxido de carbono (CO)</h2>

        El CO es un gas incoloro, tóxico e inflamable.Tiene un periodo de vida de entre 30 y 90 días y es uno de los contaminantes atmosféricos más abundantes y con mayor distribución.

        Su origen puede ser natural.De entre sus principales fuentes, cabe citar la quema de combustibles fósiles (vehículos, industria,etc.) y biomasa (madera)

        Reduce la capacidad de la sangre para transportar oxígeno a los tejidos corporales, comportando un grave riesgo para personas con patologías previas.


        <h2>Dióxido de azufre (SO2)</h2>

        El dióxido de azufre (SO2) es un gas incoloro, no inflamable y no explosivo que tiene una vida de unos 3 días.
        Su principal fuente es la quema de combustibles fósiles ricos en azufre, si bien procesos naturales tales como las erupciones volcánicas también liberan SO2 a la atmósfera. Este, contribuye a la acidificación de los ecosistemas mediante su descomposición seca o húmeda (cuando entra en contacto con el vapor de agua presente en la atmósfera)

        Sus efectos sobre la salud humana se muestran principalmente en el sistema respiratorio y el funcionamiento de los pulmones, pudiendo causar también irritación ocular.


        <h2>Óxidos de nitrógeno</h2>


        Los óxidos de nitrógeno se presentan en la atmósfera como:

        Óxido nitroso (N2O), es un gas volátil, incoloro, de olor dulce y de ligera toxicidad que se ha empleado de forma habitual como droga por sus efectos alucinatorios y el estado de euforia. (conocido como gas de la risa)

        Dióxido de nitrógeno (NO2), gas contaminante que resulta de la combustión efectuada a alta temperatura (origen natural y antropogénico). Es tóxico e irritante y precursor de la formación de contaminantes secundarios, como el ozono o partículas PM2.5.

        Monóxido de nitrógeno (NO), que es incoloro, no inflamable y tóxico  que se oxida con rapidez , convirtiéndose en NO2. Al igual que en el caso anterior, sus principales fuentes son tanto naturales (descomposición de bacterias, incendios,etc.) como derivadas de la actividad humana.

        Los NOx (NO2 y NO) tiene un efecto corrosivo sobre la piel y el sistema respiratorio, pudiendo causar un edema pulmonar cuando el sujeto se expone a concentraciones elevadas.

        <h2>Ozono (O3)</h2>

        El ozono es un contaminante secundario , que al encontrarse entre la superficie terrestre y los 10-12 primeros kilómetros de la atmósfera, genera un grave efecto sobre la salud humana y el entorno.
        El ozono troposférico se forma por la reacción fotoquímica de los precursores, sustancias emitidas de forma directa tales como los NOx, el CO o los COVs, que se relacionan con la luz solar en condiciones atmosféricas estables (temperaturas altas y viento escaso)
        Su impacto sobre la salud es notable, ya que tiene un marcado carácter oxidativo que le capacita para destruir incluso órganos completos.

        <h2>Benceno (C6H6)</h2>

        Es un tipo de hidrocarburo líquido de olor dulce que se evapora con rapidez.

        Al igual que otros, tiene un origen natural y por intercesión humana.Siendo los incendios forestales, volcanes y el humo de los cigarrillos, algunas de sus principales fuentes.

        Altas concentraciones, pueden incrementar el riesgo de cáncer, además de producir afecciones sobre el sistema nervioso central.


        <h2>Sulfuro de hidrógeno (HF)</h2>
        El sulfuro de hidrógeno es un gas inflamable, incoloro, tóxico y con un olor muy característico que lo hace fácil de detectar incluso en concentraciones bajas.

        Sus principales fuentes son los volcanes o las zonas con aguas estancadas estando también presente en el petróleo y el gas natural. Es un gas muy peligroso si se presenta en espacios confinados tales como sistemas de alcantarillado o torres de refrigeración.
        Su principal efecto sobre la salud está asociado al bloqueo de la función enzimática.

        <h2>Fluoruro de hidrógeno (HF)</h2>

        El fluoruro de hidrógeno es un gas (también puede presentarse en estado líquido) corrosivo e incoloro que se usa como materia prima en la industria de los refrigerantes, combustibles y aluminio (4).
        Además de su efecto corrosivo, tiene efectos tóxicos e irritantes. Su inhalación ocasiona irritación ocular, nasal y epidérmica.
        Como se puede observar, la atmósfera, lejos de presentar la composición teórica que se señalaba al inicio, es una compleja mezcla de gases en diferentes concentraciones procedentes tanto de fenómenos naturales como de procesos antropogénicos.
        Su monitorización en continuo y a tiempo real resulta clave para prevenir afecciones graves sobre la salud y el entorno, una labor en la que la contrastada solvencia de ENVIRA IoT transmite seguridad y confianza.
    </div>

        <div class="pestanya_mapa">
            <a class="btn__Mapa-controlador_zi">+</a>
            <a class="btn__Mapa-controlador_zo">-</a>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3100.847706971145!2d-0.16974775620510024!3d38.9959719791882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61c2a3069621fd%3A0xdb8ad87b84df4b24!2sUPV%20Campus%20de%20Gandia%20-%20Escuela%20Politecnica%20Superior!5e0!3m2!1ses!2ses!4v1668900142120!5m2!1ses!2ses" width="100%" height="740" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Menu header-->
<div class="header__perfil" id="ensenyar__perfil">
    <div id="btn__cerrar_perfil">
        <i class="fa-solid fa-xmark"></i>
    </div>

    <div class="contenido__perfil">
        <div class="perfil_info">
            <i id="perfil__imagen" class="fa-solid fa-circle-user"></i>
            <h2>Amigo</h2>
            <p>amigo@ketepasa.es</p>
            <p>Gandia</p>
        </div>



        <nav class="perfil_gestion">
            <ul>
                <li><a><i class="fa-solid fa-user-pen"></i>Editar perfil</a></li>
                <li><a id="acerca_de_loged"><i  class="fa-solid fa-info"></i> Acerca de la web</a></li>
                <hr>
                <li><a id="btn__cerrar_sesion" href="../ServidorLogica/cerrar_sesion.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>  Cerrar sesion</a></li>
            </ul>
        </nav>
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
                <a id="footer__log_mapa">Mapa</a>
                <a id="footer__log_contacta">Contáctanos</a>
                <a id="footer__sin_sensor">Sin dispositivo</a>
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

<script type="text/javascript">
    $(document).ready(function (){
        $('#contenedor_grafica').load('assets/graficas/grafica_lineal.php');
    });
</script>

<script src="assets/js/script_usuario.js"></script>
</body>
</html>