/*========== Panel identificarse ==========*/
//Desplazamiento registrarse-iniciar sesión
document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", registro);
window.addEventListener("resize",anchoVentana);

//Abrir y cerrar panel
document.getElementById("btn__solo_registrados").addEventListener("click", identificarse);
document.getElementById("btn__solo_registrados").addEventListener("click", registro);
document.getElementById("btn__registrate").addEventListener("click", identificarse);
document.getElementById("btn__registrate").addEventListener("click", registro);
document.getElementById("btn__identificate").addEventListener("click", identificarse);
document.getElementById("btn__identificate").addEventListener("click", iniciarSesion);
document.getElementById("identificate_L").addEventListener("click", identificarseCerrar);
document.getElementById("identificate_R").addEventListener("click", identificarseCerrar);

document.getElementById("btn__entrar_como_usuario").addEventListener("click", entrarUsuario);
document.getElementById("btn__entrar_como_admin").addEventListener("click", entrarAdmin);
document.getElementById("comprobar_admin").addEventListener("click", loginAdmin);



var form_log_admin = document.querySelector("#loggin_admin_form");
var form_log_user = document.querySelector("#loggin_user_form");
var username = document.getElementById("admin_input_correo").value;
var password = document.getElementById("admin_input_contrasenya").value;
var wrong_password = document.querySelector("#contra_admin_erronea");




var seccines_sin_iniciarS = document.querySelector(".secciones__unlogged");
var formulario_identificarse = document.querySelector(".popup__login-register");
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var caja__trasera_login = document.querySelector(".caja__trasera-login");
var caja__trasera_register = document.querySelector(".caja__trasera-register");



/*========== Cambiar de sección ==========*/
document.getElementById("icono__menu").addEventListener("click", mostrar_Menu);
document.getElementById("logo_main_unloged").addEventListener("click", seccionInicio);
document.getElementById("header__inicio_txt").addEventListener("click", seccionInicio);
document.getElementById("header__quienes_txt").addEventListener("click", seccionQuienesSomos);
document.getElementById("header__mapa_txt").addEventListener("click", seccionMapa);
document.getElementById("footer__unlog_quienes").addEventListener("click", seccionQuienesSomos);
document.getElementById("acerca_de_unloged").addEventListener("click", seccionAcercaDe);
document.getElementById("btn_quienes_a_acerca_de").addEventListener("click", seccionAcercaDe);
document.getElementById("btn__pasos_solicitar").addEventListener("click", seccionSolicitarDispositivo);




var sec_inicio = document.querySelector(".pestanya__Inicio");
var sec_quienes_somos = document.querySelector(".pestanya_quienes-somos");
var sec_mapa = document.querySelector(".pestanya_mapa");
var sec_acerca_de = document.querySelector(".pestanya_acerca_de");
var sec_solicitar = document.querySelector(".pestanya__solicitar_dispositivo");




/*========== Scroll ==========*/
document.getElementById("footer__unlog_contacta").addEventListener("click", scrollArriba);
document.getElementById("btn__contrasenya_olvidada").addEventListener("click", scrollArriba);
document.getElementById("btn__politica").addEventListener("click", scrollArriba);
document.getElementById("footer__unlog_contacta").addEventListener("click", scrollArriba);
document.getElementById("btn__unloged_zi").addEventListener("click", scrollArriba);
document.getElementById("btn__unloged_zo").addEventListener("click", scrollArriba);


/*========== Footer ==========*/
var footer_sin_sesion = document.querySelector(".landing__footer");

var color_fondo= document.querySelector("#body_landing");


/*%%%%%%%%%% FUNCIONES %%%%%%%%%%*/

//Cabecera responsive boton abrir y cerrar menú
//mostrar_Menu()
function mostrar_Menu(){
    document.getElementById("ensenyar__menu").classList.toggle("mostrar__menu_L");
    if ( document.getElementById("icono__menu_m_o_x").className == "ico__menu_bar"){
        document.getElementById("icono__menu_m_o_x").className = "ico__menu_x";
    }
    else {
        document.getElementById("icono__menu_m_o_x").className = "ico__menu_bar";
    }
    identificarseCerrar();
}//()

//Panel login-registro responsive
//anchoVentana()
function anchoVentana(){
    if (window.innerWidth>850){
        caja__trasera_login.style.display = "block";
        caja__trasera_register.style.display = "block";
    }else {
        caja__trasera_register.style.display = "block";
        caja__trasera_register.style.opacity = "1";
        caja__trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left ="0px";
    }
}//()
anchoVentana();

//Hacer visible la opcion seleccionada login de login-register y que sea responsive
//login()
function iniciarSesion(){
    if (window.innerWidth > 850){
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "10px";
        formulario_login.style.display = "block";
        caja__trasera_register.style.opacity = "1";
        caja__trasera_login.style.opacity = "0";
    }else{
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "block";
        caja__trasera_register.style.display = "block";
        caja__trasera_login.style.display = "none";
    }
}

//Hacer visible la opcion seleccionada register de login-register y que sea responsive
//registro()
function registro(){
    if (window.innerWidth > 850){
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja__trasera_register.style.opacity = "0";
        caja__trasera_login.style.opacity = "1";
    }else{
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "none";
        caja__trasera_register.style.display = "none";
        caja__trasera_login.style.display = "block";
        caja__trasera_login.style.opacity = "1";
    }
}//()

//Hace visible el formulario identificarse
//identificarse()
function identificarse(){
    formulario_identificarse.style.opacity= "1";
    formulario_identificarse.style.visibility= "visible";
    seccines_sin_iniciarS.style.opacity= "0";
    footer_sin_sesion.style.marginTop="300px";

    scrollArriba();
    cerrarMenu();
}//()

//Hace invisible el formulario identificarse
//identificarseCerrar()
function identificarseCerrar(){
    formulario_identificarse.style.opacity= "0";
    formulario_identificarse.style.visibility="hidden";
    seccines_sin_iniciarS.style.opacity= "1";
    footer_sin_sesion.style.marginTop="100px";
}//()


function entrarUsuario(){
    form_log_user.style.display="block";
    form_log_admin.style.display="none";
}
function entrarAdmin(){
    form_log_user.style.display="none";
    form_log_admin.style.display="block";
}


//En el cuerpo de la web hace que se muestre la sección inicio
//seccionInicio()
function seccionInicio(){
    document.getElementById("header__inicio_txt").className = "text-menu-selected";
    document.getElementById("header__quienes_txt").className = null;
    document.getElementById("header__mapa_txt").className = null;

    document.getElementById("header__inicio-sub").className = "header__menu-selected";
    document.getElementById("header__quienes-sub").className = null;
    document.getElementById("header__mapa-sub").className = null;

    sec_inicio.style.display="block";
    sec_quienes_somos.style.display="none";
    sec_mapa.style.display="none";
    sec_acerca_de.style.display="none";
    sec_solicitar.style.display="none";

    footer_sin_sesion.style.marginTop="100px";


    color_fondo.style.backgroundImage = "url('assets/images/fondo.jpeg')";
    color_fondo.style.backgroundColor = "none";

    scrollArriba();
    cerrarMenu();
    identificarseCerrar();
}//()

//En el cuerpo de la web hace que se muestre la sección Quiénes Somos
//seccionQuienesSomos()
function seccionQuienesSomos(){
    document.getElementById("header__inicio_txt").className = null;
    document.getElementById("header__quienes_txt").className = "text-menu-selected";
    document.getElementById("header__mapa_txt").className = null;

    document.getElementById("header__inicio-sub").className = null;
    document.getElementById("header__quienes-sub").className = "header__menu-selected";
    document.getElementById("header__mapa-sub").className = null;

    sec_inicio.style.display="none";
    sec_quienes_somos.style.display="block";
    sec_mapa.style.display="none";
    sec_acerca_de.style.display="none";
    sec_solicitar.style.display="none";


    footer_sin_sesion.style.marginTop="100px";

    color_fondo.style.backgroundImage = "none";
    color_fondo.style.backgroundColor = "#e0e5ea";

    scrollArriba();
    cerrarMenu();
    identificarseCerrar();
}//()

//En el cuerpo de la web hace que se muestre la sección Mapa
//seccionMapa()
function seccionMapa(){
    document.getElementById("header__inicio_txt").className = null;
    document.getElementById("header__quienes_txt").className = null;
    document.getElementById("header__mapa_txt").className = "text-menu-selected";

    document.getElementById("header__inicio-sub").className = null;
    document.getElementById("header__quienes-sub").className = null;
    document.getElementById("header__mapa-sub").className = "header__menu-selected";

    sec_inicio.style.display="none";
    sec_quienes_somos.style.display="none";
    sec_mapa.style.display="block";
    sec_acerca_de.style.display="none";
    sec_solicitar.style.display="none";


    footer_sin_sesion.style.marginTop="-100px";

    color_fondo.style.backgroundImage = "url('assets/images/fondo2.png')";
    color_fondo.style.backgroundColor = "none";

    scrollArriba();
    cerrarMenu();
    identificarseCerrar();
}//()

function seccionAcercaDe(){

    document.getElementById("header__inicio_txt").className = null;
    document.getElementById("header__quienes_txt").className = null;
    document.getElementById("header__mapa_txt").className = null;

    document.getElementById("header__inicio-sub").className = null;
    document.getElementById("header__quienes-sub").className = null;
    document.getElementById("header__mapa-sub").className = null;

    sec_inicio.style.display="none";
    sec_quienes_somos.style.display="none";
    sec_mapa.style.display="none";
    sec_acerca_de.style.display="flex";
    sec_solicitar.style.display="none";


    footer_sin_sesion.style.marginTop="100px";

    color_fondo.style.backgroundImage = "none";
    color_fondo.style.backgroundColor = "#e0e5ea";

    scrollArriba();
    cerrarMenu();
    identificarseCerrar();
}

function seccionSolicitarDispositivo(){

    document.getElementById("header__inicio_txt").className = null;
    document.getElementById("header__quienes_txt").className = null;
    document.getElementById("header__mapa_txt").className = null;

    document.getElementById("header__inicio-sub").className = null;
    document.getElementById("header__quienes-sub").className = null;
    document.getElementById("header__mapa-sub").className = null;

    sec_inicio.style.display="none";
    sec_quienes_somos.style.display="none";
    sec_mapa.style.display="none";
    sec_acerca_de.style.display="none";
    sec_solicitar.style.display="flex";


    footer_sin_sesion.style.marginTop="100px";

    color_fondo.style.backgroundImage = "url('assets/images/fondo2.jpeg')";
    color_fondo.style.backgroundColor = "none";

    scrollArriba();
    cerrarMenu();
    identificarseCerrar();
}

//Cierra el menu lateral de las secciones
//cerrarMenu()
function cerrarMenu(){
    if ( document.getElementById("icono__menu_m_o_x").className == "ico__menu_x"){
        document.getElementById("ensenyar__menu").classList.toggle("mostrar__menu_L");
        document.getElementById("icono__menu_m_o_x").className = "ico__menu_bar";
    }
}//()

//Hace scroll hasta la parte superior de la web
//scrollArriba()
function scrollArriba(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
}//()

function loginAdmin(){
    username = document.getElementById("admin_input_correo").value;
    password = document.getElementById("admin_input_contrasenya").value;

    if (username == "Amigo" && password == "1234"){
        window.location.href = 'admin.php';
    }
    else {
        wrong_password.style.display = "block";
    }
}
