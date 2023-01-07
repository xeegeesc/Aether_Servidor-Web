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
        <a href="#">
            <img src="assets/images/logo.png" id="logo__main_loged" class="img__logo" >
        </a>

        <div class="header__menu" id="ensenyar__menu">
            <nav>
                <ul>
                    <li id="header__mi_dispositivo-sub" class="header__menu-selected"><div class="ico__home"></div><a href="#" id="header__mi_dispositivo_txt" class="text-menu-selected"> MI DISPOSITIVO</a></li>
                    <li id="header__contactanos-sub"><div class="ico__quienes_somos"></div><a href="#" id="header__contactanos_txt"> CONTÁCTANOS</a></li>
                    <li id="header__mapa-sub"><div class="ico__mapa"></div><a href="#" id="header__mapa_txt"> MAPA</a></li>
                </ul>
            </nav>
        </div>
        <a href="#" id="btn__perfil"><div id="icn__usuario_header" class="ico__perfil"></div><p id="txt__usuario">Amigo</p></a>
    </div>

    <a href="#" style="text-decoration: none;" id="icono__menu" >
        <div id="icono__menu_m_o_x" class="ico__menu_bar"></div>
    </a>
</header>

<main>
</main>

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
            <div class="pestanya__mi_dispositivo_seccionA">
                <div class="card__father_V2">
                    <div class="card_V2" id="mi_dispositivo_c1">
                        <div class="card__front_V2" style="background-color: white">
                            <div class="bg_V2"></div>
                            <div class="body__card_front_V2">
                                <div id="mi_dispositivo_i1" class="ico__cinfo"></div>

                                <h1>Tiempo desde última medición</h1>

                                <div class="mi_dispositivo_card_front_dir" >
                                    <div class="ico__clock"></div>
                                    <a style="padding-top: 10px">Menos de 1 min</a>
                                </div>
                            </div>
                        </div>
                        <div class="card__back_V2">
                            <div class="body__card_back_V2">
                                <div id="mi_dispositivo_x1" class="ico__cx"></div>
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
                                <div id="mi_dispositivo_i2" class="ico__cinfo"></div>
                                <h1>Última calidad del aire</h1>

                                <div class="mi_dispositivo_card_front_dir">
                                    <div class="ico__wind"></div>
                                    <a style="padding-top: 10px">Media</a>
                                </div>
                            </div>
                        </div>
                        <div class="card__back_V2">
                            <div class="body__card_back_V2">
                                <div id="mi_dispositivo_x2" class="ico__cx"></div>
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
                                <div id="mi_dispositivo_i3" class="ico__cinfo"></div>
                                <h1>Tiempo emitiendo</h1>

                                <div class="mi_dispositivo_card_front_dir">
                                    <div class="ico__cloud"></div>
                                    <a style="padding-top: 10px">184 h  25 min</a>
                                </div>
                            </div>
                        </div>
                        <div class="card__back_V2">
                            <div class="body__card_back_V2" >
                                <div id="mi_dispositivo_x3" class="ico__cx"></div>
                                <p style="margin-top: 0">Horas que lleva emitiendo tu sensor durante todo el mes, cada cierto tiempo estas horas se te retribuirán reduciendo tus impuestos de medio ambiente</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card__father_gestionar">
                    <a href="#popup_desvincular_sensor">
                    <div class="body__card_gestionar">
                        <div class="mi_dispositivo_gestionar">
                            <p style="margin-top: 10px;color: white;">Gestionar mi dispositivo</p>
                            <div class="ico__engranaje"></div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            <div class="pestanya__mi_dispositivo_seccionA">
                <div class="card__father_V2">
                    <div class="card_V3" id="mi_dispositivo_c4">
                        <div class="card__front_V3" >
                            <div class="bg_V2"></div>
                            <div class="body__card_front_V2" >
                                <div id="mi_dispositivo_i4" class="ico__cinfoV2"></div>
                                <h1>Últimas medidas de calidad del aire</h1>
                                <div id="contenedor_grafica">

                                </div>
                            </div>
                        </div>
                        <div class="card__back_V2">
                            <div class="body__card_back_V2">
                                <div id="mi_dispositivo_x4" class="ico__cxV2"></div>
                                <p>La gráfica muestra el valor de la media de la calidad del aire de los últimos 4 días.<br><br>El valor en cero sobre el eje Y equivale a una calidad del aire muy mala y en la parte superior del mismo eje una calidad muy buena. <br><br>El eje X indica el dia de la media, sobre el eje el 0 equivale a hace 3 dias, y la última medida a la derecha es la media del dia actual.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card__father_V2">
                    <div class="card_V4" id="mi_dispositivo_c5">
                        <div class="card__front_V2" style="background-color: white">
                            <div class="bg_V2"></div>
                            <div class="body__card_front_V2">
                                <div id="mi_dispositivo_i5" class="ico__cinfoV3"></div>
                                <h1>Tu media de calidad del aire</h1>
                                <div class="gauge">
                                    <div class="gauge__body">
                                        <div class="gauge__fill"></div>
                                        <div class="gauge__cover"></div>
                                    </div>
                                </div>
                                <div class="sub_gauge">
                                    <p>Muy mala</p>
                                    <p style="margin-left: auto">Muy buena</p>
                                </div>

                            </div>
                        </div>
                        <div class="card__back_V2">
                            <div class="body__card_back_V2">
                                <div id="mi_dispositivo_x5" class="ico__cxV3"></div>
                                <p>Media de las medidas de las últimas 24 horas.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="pestanya_contactanos">
            <div class="contenedor__contacatos">
                <div class="contacta__correo">
                    <form class="form_contacto">
                        <h2>Contáctanos con un correo</h2>
                        <p>Asunto del correo</p>
                        <input id="inp__asunto" type="text" name="asunto" maxlength="20">
                        <p>Mensaje</p>
                        <textarea id="inp__contacta_msg" name="Text1" cols="40" rows="8"></textarea>
                        <a id="btn_enviar_correo" href="#">Enviar correo</a>
                    </form>
                </div>
                <div class="contacta__s2">
                    <div class="contacta__redes">
                        <h2>Contáctanos en nuestras redes sociales</h2>
                        <div class="contacta__redes_ico">
                            <div class="ico__twitter_c"></div>
                            <div class="ico__insta_c"></div>
                            <div class="ico__facebook_c"></div>
                        </div>
                    </div>
                    <div class="contacta__directo">
                        <h2>Contáctanos de manera directa</h2>
                        <b>Teléfono </b>
                        <p>999 888 777</p>
                        <b>Dirección </b>
                        <p>C/Plaza Epa ña, Nº1   C.P. 46007, España</p>

                        <p style="margin-top: 30px;color: #0a53be">Horario de atención al cliente de 9:00 <br>a 14:00 y de 16:00 a 22:00 de lunes a viernes</p>
                    </div>
                </div>
            </div>
        </div>

    <div id="pestanya__acerca_de" class="pestanya_acerca_de">
        <div>
            <h1>Acerca de los gases</h1>

            <p style="margin-left:15px; margin-right: 15px ">Según la Red Europea de Información y Observación del Medio Ambiente, actualmente existen diversos gases contaminantes. Los cuales, en concentraciones suficientemente elevadas, consiguen dañar a los seres humanos, los animales, la vegetación o los materiales.</p>

            <p style="margin-left:15px; margin-right: 15px ">En los siguientes epígrafes se describen los principales gases contaminantes desde un punto de vista de su afección sobre la salud humana y su impacto sobre los ecosistemas.</p>
        </div>

        <div class="info_gases">
            <div>
                <h2>Monóxido de carbono (CO)</h2>

                <p>El CO es un gas incoloro, tóxico e inflamable.Tiene un periodo de vida de entre 30 y 90 días y es uno de los contaminantes atmosféricos más abundantes y con mayor distribución.</p>

                <p>Su origen puede ser natural.De entre sus principales fuentes, cabe citar la quema de combustibles fósiles (vehículos, industria,etc.) y biomasa (madera)</p>

                <p>Reduce la capacidad de la sangre para transportar oxígeno a los tejidos corporales, comportando un grave riesgo para personas con patologías previas.</p>
            </div>

            <div>
                <h2>Dióxido de azufre (SO2)</h2>

                <p>El dióxido de azufre (SO2) es un gas incoloro, no inflamable y no explosivo que tiene una vida de unos 3 días.</p>
                <p>Su principal fuente es la quema de combustibles fósiles ricos en azufre, si bien procesos naturales tales como las erupciones volcánicas también liberan SO2 a la atmósfera. Este, contribuye a la acidificación de los ecosistemas mediante su descomposición seca o húmeda (cuando entra en contacto con el vapor de agua presente en la atmósfera)</p>

                <p>Sus efectos sobre la salud humana se muestran principalmente en el sistema respiratorio y el funcionamiento de los pulmones, pudiendo causar también irritación ocular.</p>
            </div>

            <div>
                <h2>Óxidos de nitrógeno</h2>

                <p>Los óxidos de nitrógeno se presentan en la atmósfera como:</p>

                <p>Óxido nitroso (N2O), es un gas volátil, incoloro, de olor dulce y de ligera toxicidad que se ha empleado de forma habitual como droga por sus efectos alucinatorios y el estado de euforia. (conocido como gas de la risa)</p>

                <p>Dióxido de nitrógeno (NO2), gas contaminante que resulta de la combustión efectuada a alta temperatura (origen natural y antropogénico). Es tóxico e irritante y precursor de la formación de contaminantes secundarios, como el ozono o partículas PM2.5.</p>

                <p>Monóxido de nitrógeno (NO), que es incoloro, no inflamable y tóxico  que se oxida con rapidez , convirtiéndose en NO2. Al igual que en el caso anterior, sus principales fuentes son tanto naturales (descomposición de bacterias, incendios,etc.) como derivadas de la actividad humana.</p>

                <p>Los NOx (NO2 y NO) tiene un efecto corrosivo sobre la piel y el sistema respiratorio, pudiendo causar un edema pulmonar cuando el sujeto se expone a concentraciones elevadas.</p>
            </div>

            <div>
                <h2>Ozono (O3)</h2>

                <p>El ozono es un contaminante secundario , que al encontrarse entre la superficie terrestre y los 10-12 primeros kilómetros de la atmósfera, genera un grave efecto sobre la salud humana y el entorno.</p>
                <p>El ozono troposférico se forma por la reacción fotoquímica de los precursores, sustancias emitidas de forma directa tales como los NOx, el CO o los COVs, que se relacionan con la luz solar en condiciones atmosféricas estables (temperaturas altas y viento escaso)</p>
                <p>Su impacto sobre la salud es notable, ya que tiene un marcado carácter oxidativo que le capacita para destruir incluso órganos completos.</p>
            </div>
            <div>
                <h2>Benceno (C6H6)</h2>

                <p>Es un tipo de hidrocarburo líquido de olor dulce que se evapora con rapidez.</p>

                <p>Al igual que otros, tiene un origen natural y por intercesión humana.Siendo los incendios forestales, volcanes y el humo de los cigarrillos, algunas de sus principales fuentes.</p>

                <p>Altas concentraciones, pueden incrementar el riesgo de cáncer, además de producir afecciones sobre el sistema nervioso central.</p>
            </div>

            <div>
                <h2>Sulfuro de hidrógeno (HF)</h2>
                <p>El sulfuro de hidrógeno es un gas inflamable, incoloro, tóxico y con un olor muy característico que lo hace fácil de detectar incluso en concentraciones bajas.</p>

                <p>Sus principales fuentes son los volcanes o las zonas con aguas estancadas estando también presente en el petróleo y el gas natural. Es un gas muy peligroso si se presenta en espacios confinados tales como sistemas de alcantarillado o torres de refrigeración.</p>
                <p>Su principal efecto sobre la salud está asociado al bloqueo de la función enzimática.</p>
            </div>

            <div>
                <h2>Fluoruro de hidrógeno (HF)</h2>

                <p>El fluoruro de hidrógeno es un gas (también puede presentarse en estado líquido) corrosivo e incoloro que se usa como materia prima en la industria de los refrigerantes, combustibles y aluminio (4).</p>
                <p>Además de su efecto corrosivo, tiene efectos tóxicos e irritantes. Su inhalación ocasiona irritación ocular, nasal y epidérmica.</p>
                <p>Como se puede observar, la atmósfera, lejos de presentar la composición teórica que se señalaba al inicio, es una compleja mezcla de gases en diferentes concentraciones procedentes tanto de fenómenos naturales como de procesos antropogénicos.</p>
                <p>Su monitorización en continuo y a tiempo real resulta clave para prevenir afecciones graves sobre la salud y el entorno, una labor en la que la contrastada solvencia de ENVIRA IoT transmite seguridad y confianza.</p>
            </div>

        </div>
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
        <div class="ico__perfil_x"></div>
    </div>

    <div class="contenido__perfil">
        <div class="perfil_info">
            <div id="perfil__imagen" class="ico__perfil_img"></div>
            <h2 id="nombre__usuario">Amigo</h2>
            <p>amigo@ketepasa.es</p>
            <p>Gandia</p>
        </div>

        <nav class="perfil_gestion">
            <ul>
                <li><a href="#cambiar_perfil" id="link_editar_perfil" class="texto_link_editar_perfil"> <div class="ico__editar"></div> Editar perfil </a></li>


                <li><a id="acerca_de_loged"> <div class="ico__info_p"></div> Acerca de la web</a></li>

                <hr>
                <li><a id="btn__cerrar_sesion" href="../ServidorLogica/cerrar_sesion.php"><div class="ico__cerrar_sesion"></div>  Cerrar sesion</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="popup__contrasenya_olvidada" id="cambiar_perfil">
    <div class="popup">
        <div class="img__contrasenya_olvidada"></div>
        <form id="popup__editar" class="formulario__cambiar_perfil">
            <h2>Editar Perfil</h2>
            <div class="imagen_editor_perfil_container">
                <img id="imagen_editor_perfil" src="assets/images/pi5.png">
                <a id="abrir_galeria" class="texto_link_editar_perfil2">Cambiar imagen</a>
            </div>
            <div id="selector_foto_perfil">
                <div class="selector_foto_perfil_pc">
                    <div class="profiles" style="margin-top: 20px">
                        <div class="profiles__group">
                            <img id="ico1" src="assets/images/pi5.png" alt="">
                        </div>
                        <div class="profiles__group">
                            <img id="ico2" src="assets/images/pi6.png" alt="">
                        </div>
                        <div class="profiles__group">
                            <img id="ico3" src="assets/images/pi3.png" alt="">
                        </div>
                        <div class="profiles__group">
                            <img id="ico4" src="assets/images/pi2.png" alt="">
                        </div>
                    </div>
                    <div class="profiles">
                        <div class="profiles__group">
                            <img id="ico5" src="assets/images/pi7.png" alt="">
                        </div>
                        <div class="profiles__group">
                            <img id="ico6" src="assets/images/pi4.png" alt="">
                        </div>
                        <div class="profiles__group">
                            <img id="ico7" src="assets/images/pi8.png" alt="">
                        </div>
                        <div class="profiles__group">
                            <img id="ico8" src="assets/images/pi1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="selector_foto_perfil_movil">
                    <div class="profiles" style="margin-top: 20px">
                        <div class="profiles__group">
                            <img id="icoB1" src="assets/images/pi5.png" alt="">
                        </div>
                        <div class="profiles__group">
                            <img id="icoB2" src="assets/images/pi6.png" alt="">
                        </div>
                        <div class="profiles__group">
                            <img id="icoB3" src="assets/images/pi3.png" alt="">
                        </div>
                    </div>
                    <div class="profiles">
                        <div class="profiles__group">
                            <img id="icoB4" src="assets/images/pi2.png" alt="">
                        </div>
                        <div class="profiles__group">
                            <img id="icoB5" src="assets/images/pi7.png" alt="">
                        </div>
                        <div class="profiles__group">
                            <img id="icoB6" src="assets/images/pi4.png" alt="">
                        </div>
                    </div>
                    <div class="profiles">
                        <div class="profiles__group">
                            <img id="icoB7" src="assets/images/pi8.png" alt="">

                        </div>
                        <div class="profiles__group">
                            <img id="icoB8" src="assets/images/pi1.png" alt="">

                        </div>
                    </div>
                </div>
            </div>


            <p>Cambiar nombre</p>
            <input id="inp_edit_nombre" type="text" placeholder="Nuevo nombre" name="nombre" value="Amigo" maxlength="12">

            <p>Cambiar contraseña</p>
            <input type="text" placeholder="Antigua contraseña" name="nombre">
            <input type="text" placeholder="Nueva contraseña" name="nombre">
            <input type="text" placeholder="Confirmar contraseña" name="nombre" style="margin-bottom: 30px">

            <a id="btn_guardar_cambios_perfil" href="#">Guardar cambios</a>
        </form>
        <a href="#" class="btn-close-popup">X</a>
    </div>
</div>

<div class="popup__contrasenya_olvidada" id="popup_desvincular_sensor">
    <div class="popup">
        <div class="img__contrasenya_olvidada"></div>
        <form class="formulario__cambiar_perfil">
            <h2>Desvincular Dispositivo</h2>
            <p>¿Estás seguro de que quieres <b>desvincular este dispositivo de tu cuenta?</b> Para volver a enlazar este u otro dispositivo a tu cuenta deberas instalar la aplicación móvil y disponer del código del dispositivo.</p>

            <p>Si quieres continuar, introduce tu contraseña.</p>
            <input type="text" placeholder="Contraseña" name="nombre" style="margin-bottom: 30px;">

            <a id="btn_confirmar_desvincular" href="#">Desvincular dispositivo</a>
        </form>
        <a href="#" class="btn-close-popup">X</a>
    </div>
</div>

<footer class="landing__footer">
    <div class="contenedor__footer">
        <div class="caja__footer">
            <div class="footer_marca">
                <div class="logo_footer">
                    <img src="assets/images/logo_v2.png" class="img__logo_v2">
                    <img src="assets/images/Espanya.png" class="img__logo_v2">
                </div>
            </div>

            <div class="companyia">
                <h3>Compañía</h3>
                <a href="#" id="footer__log_mapa">Mapa</a>
                <a href="#" id="footer__log_contacta">Contáctanos</a>
                <a href="#" id="footer__sin_sensor">Sin dispositivo</a>
            </div>
            <div class="redes_sociales">
                <h3>Redes sociales</h3>
                <div style="display: flex"><div class="ico__twitter_f"></div> <p> Twitter</p></div>
                <div style="display: flex"><div class="ico__insta_f"></div> <p> Instagram</p></div>
                <div style="display: flex"><div class="ico__facebook_f"></div> <p> Facebook</p></div>
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