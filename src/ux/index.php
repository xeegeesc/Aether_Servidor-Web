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
                        <li id="header__inicio-sub" class="header__menu-selected"><div class="ico__home"></div><a id="header__inicio_txt" class="text-menu-selected"> INICIO</a></li>
                        <li id="header__quienes-sub"><div class="ico__quienes_somos"></div><a id="header__quienes_txt"> QUIENES SOMOS</a></li>
                        <li id="header__mapa-sub"><div class="ico__mapa"></div><a id="header__mapa_txt"> MAPA</a></li>
                    </ul>
                </nav>
            </div>
            <a id="btn__identificate"><div class="ico__perfil"></div><p id="txt__identificate">Identificate</p></a>
        </div>

        <div href="#" style="text-decoration: none;" id="icono__menu">
            <div id="icono__menu_m_o_x" class="ico__menu_bar"></div>
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
                <a id="btn__pasos_solicitar" class="btn-solicitar">¡Solicitar Dispositivo!</a>
            </div>

            <div class="pestanya_quienes-somos">
                <h1 class="titulo__quienes somos">Quiénes somos</h1>

                <div class="quienes__contenedor_respuesta">
                    <p>Somos una empresa encargada de desarroyar distintos dispositivos de control de calidad del aire, así como procesar los datos obtenidos por los sensores, y desarroyar mapas y gráficas que nos permitan conocer la calidad del aire en una extensión geográfica. Trabajamos financiados por el ministerio de medioambiente y salud del gobierno de España para desarroyar mapas precisos de calidad de aire de todo el país.</p>
                </div>

                <h1 class="titulo__quienes somos">Nuestra misión</h1>
                <div class="quienes__contenedor_respuesta">
                    <p>Hasta ahora ha habido una cantidad muy baja de dispositivos de control de calidad de aire, y los pocos que había solo se encontraban en grandes ciudades como Madrid o Barcelona, una cantidad muy insuficiente para desarroyar mapas útiles, realistas y precisos, además estos sensores eran fijos. Nuestra misión es dar un paso más allá y proporcionar sensores a los ciudadanos de apié y ofrecerles la posibilidad de participar activamente para afrontar el problema asi como premiarlos por su implicación, para que otros potenciales usuarios sigan su ejemplo. De este modo, cuantos más usuarios participen activamente en este proyecto, más precisos y fiables serán los mapas obtenidos y podremos actuar mejor ante posibles focos de contaminación para obtener un mundo más limpio. </p>
                </div>

                <h1 class="titulo__quienes somos">Qué ofrecemos</h1>
                <div class="quienes__contenedor_tarjeta">

                    <div class="quienes__tarjeta c1">
                        <div class="quienes__icono">
                            <div class="ico__salud"></div>
                        </div>
                        <div class="quienes__descripcion">
                            <p>Ofrecemos <b>mejor salud</b>, gracias a nuestro servicio puedes conocer la calidad del aire de tu entorno, permitiéndote conocer aquellos lugares perjudiciales para tu salud para poder evitarlos.</p>
                            <input type="button" value="Leer más" id="btn_quienes_a_acerca_de">
                        </div>
                    </div>

                    <div class="quienes__tarjeta c2">
                        <div class="quienes__icono">
                            <div class="ico__saco_dolar"></div>
                        </div>
                        <div class="quienes__descripcion">
                            <p>Ofrecemos una <b>bonificación económica de reducción de impuestos</b> a aquellos usuarios que soliciten nuestro dispositivo, </br>servicio completamente gratuito (a excepción de una fianza completamente reembolsable), según la cantidad de tiempo mensual que el dispositivo esté enviando datos.</p>
                        </div>
                    </div>

                    <div class="quienes__tarjeta c3">
                        <div class="quienes__icono">
                            <div class="ico__tierra"></div>
                        </div>
                        <div class="quienes__descripcion">
                            <p>Tenemos un gran <b>compromiso con el medio ambiente</b>, conociendo el estado del aire podemos encontrar focos de contaminación para eliminarlos y controlarlos, así como evitar que empresas industriales contaminen más de lo permitido dañando a la población cercana.</p>
                        </div>
                    </div>

                    <div class="quienes__tarjeta c4">
                        <div class="quienes__icono">
                            <div class="ico__escudo"></div>
                        </div>
                        <div class="quienes__descripcion">
                            <p>Ofrecemos <b>seguridad</b>, conociendo la calidad del aire, se pueden detectar fugas de gas o altas presencias de aire nocivo, y avisar a las autoridades para que actúen antes de que ocurra un accidente peligroso.</p>
                        </div>
                    </div>
                </div>

                <h1 class="titulo__quienes somos">Sobre nosotros</h1>
                <div class="quienes__contenedor_respuesta">
                    <p>Nuestra empresa actualmente cuenta con miles de españoles comprometidos con la causa que nos aportan datos paseando nuestros sensores por las calles de España, así como los trabajadores del Ministerio de medio ambiente y sanidad de España, sin embargo, fue fundada y desarroyada por las siguientes 5 personas:</p>
                </div>
                <div class="nosotros__contenedor_tarjetas">

                    <div class="nosotros__tarjeta">
                        <div class="cover">
                            <img src="assets/images/p1.png" alt="">
                            <div class="img__back"></div>
                        </div>
                        <div class="nosotros__descripcion">
                            <h2>Javier Egea</h2>
                            <p><b>Director del departamento de Backend</b></p>
                            <p>También conocido como Chivirichia o el Amigo, es el hombre que todo lo une, llueva sobre su portatil o haga sol.</p>
                            <input type="button" value="Ver en instagram">
                        </div>
                    </div>

                    <div class="nosotros__tarjeta">
                        <div class="cover">
                            <img src="assets/images/p2.png" alt="">
                            <div class="img__back"></div>
                        </div>
                        <div class="nosotros__descripcion">
                            <h2>Guillem Garcia</h2>
                            <p><b>Director de los departamentos de Web y de Diseño de dispositivo</b></p>
                            <p> Allá por donde pasa, la cosa se vuelve responsive. Se dice que respira css y javascript.</p>
                            <input type="button" value="Ver en instagram">
                        </div>
                    </div>

                    <div class="nosotros__tarjeta">
                        <div class="cover">
                            <img src="assets/images/p3.png" alt="">
                            <div class="img__back"></div>
                        </div>
                        <div class="nosotros__descripcion">
                            <h2>J. Marin & Adri Tur</h2>
                            <p><b>Codirectores del departamento de Android</b></p>
                            <p>Funcionan como una sola mente, ni los iconos se les resisten. Adoran los daily scrums y las (Mr) patatas.</p>
                            <input type="button" value="Ver en instagram">
                        </div>
                    </div>

                    <div class="nosotros__tarjeta">
                        <div class="cover">
                            <img src="assets/images/p4.png" alt="">
                            <div class="img__back"></div>
                        </div>
                        <div class="nosotros__descripcion">
                            <h2>María Lahuerta</h2>
                            <p><b>Directora del departamento de Arduino</b></p>
                            <p>Su vida son las máquinas, por su cuerpo circula más aceite de motor que sangre y siempre está arreglando problemas.</p>
                            <input type="button" value="Ver en instagram">
                        </div>
                    </div>

                </div>

            </div>

            <div class="pestanya_mapa">
                <a href="#solo_registrados" id="btn__unloged_zi" class="btn__Mapa-controlador_zi">+</a>
                <a href="#solo_registrados" id="btn__unloged_zo" class="btn__Mapa-controlador_zo">-</a>
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3100.847706971145!2d-0.16974775620510024!3d38.9959719791882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61c2a3069621fd%3A0xdb8ad87b84df4b24!2sUPV%20Campus%20de%20Gandia%20-%20Escuela%20Politecnica%20Superior!5e0!3m2!1ses!2ses!4v1668900142120!5m2!1ses!2ses" width="100%" height="740" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div id="pestanya__acerca_de_unloged" class="pestanya_acerca_de">
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

            <div class="pestanya__solicitar_dispositivo">
                    <div class="solicitar__pasos_caja">
                        <div class="solicitar__pasos_imagenA" style=" background-image: url('assets/images/sol7.png'); "> <div><h1>¿Qué solicito?</h1><p>Un dispositivo que mide el nivel de ozono presente en el aire. Junto a él viene un cargador tipo B.</p></div></div>
                        <span>¿Qué solicito?</span>
                    </div>
                    <div class="solicitar__pasos_caja">
                        <div class="solicitar__pasos_imagen" style=" background-image: url('assets/images/sol4.jpg'); "> <div><h1>¿Qué me aporta?</h1><p>Te ofrece un estudio personalizado de tu exposición al ozono así como una reducción del impuesto de salud y medio ambiente según tu tiempo emitiendo datos.</p></div></div>
                        <span>¿Qué me aporta?</span>
                    </div>
                    <div class="solicitar__pasos_caja">
                        <div class="solicitar__pasos_imagenB" style=" background-image: url('assets/images/sol3.jpg'); "> <div><h1>¿Cómo lo uso?</h1><p>Usar nuestro dispositivo es muy sencillo, tan solo tendrás que cargarlo cuando te lo indique en la aplicación móvil y llevarlo siempre contigo allá donde vayas.</p></div></div>
                        <span>¿Cómo lo uso?</span>
                    </div>
                    <div class="solicitar__pasos_caja">
                        <div class="solicitar__pasos_imagen" style=" background-image: url('assets/images/sol2.jpg'); "> <div><h1 class="texto_blanco_solo_pc">¿Cómo solicito?</h1><p class="texto_blanco_solo_pc">Para solicitarlo has de registrarte y una vez inicies sesión, seguir los pasos indicados en la sección "Mi dispositivo".</p><button id="btn__registrate" class="btn-registrate">Regístrate ahora</button> </div></div>
                        <span>¿Cómo solicito?</span>
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

                        <div id="loggin_user_form">
                            <h2>Iniciar Sesión</h2>
                            <input type="text" placeholder="Correo Electrónico" name="correo">
                            <input type="password" placeholder="Contraseña" name="contrasenya">
                            <button>Entrar</button>
                            <a href="#contrasenya__olvidada" id="btn__contrasenya_olvidada" class="texto_linkV2" >¿Olvidaste tu contraseña?</a>
                            <div style="padding-top: 10px;text-align: right;padding-right: 16px">
                                <a id="btn__entrar_como_admin" class="texto_link" >Entrar como administrador</a>
                            </div>
                        </div>

                        <div id="loggin_admin_form">
                            <h2 style="color: #ffab00">Entrar como Admin</h2>
                            <input id="admin_input_correo" type="text" placeholder="Usuario" name="admin_correo">
                            <input id="admin_input_contrasenya" type="password" placeholder="Contraseña" name="admin_contra">
                            <p id="contra_admin_erronea">Usuario o contraseña erróneos</p>
                            <div style="padding-top: 20px">
                                <a id="comprobar_admin">Entrar</a>
                                <a style="" id="btn__entrar_como_usuario" class="texto_link" >Entrar como usuario</a>
                            </div>


                        </div>
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
                        <img src="assets/images/Espanya.png" class="img__logo_v2">
                    </div>
                </div>

                <div class="companyia">
                    <h3>Compañía</h3>
                    <a href="#" id="footer__unlog_quienes">Quiénes somos</a>
                    <a >Solicitar dispositivo</a>
                    <a href="#solo_registrados" id="footer__unlog_contacta">Contáctanos</a>
                    <a href="#" id="acerca_de_unloged">Acerca de la web</a>
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

    <script src="assets/js/script.js"></script>
</body>
</html>