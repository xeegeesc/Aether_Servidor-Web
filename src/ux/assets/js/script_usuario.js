/*========== Cambiar de sección ==========*/
document.getElementById("icono__menu").addEventListener("click", mostrar_Menu);
document.getElementById("btn__perfil").addEventListener("click", mostrar_Perfil);
document.getElementById("btn__cerrar_perfil").addEventListener("click", mostrar_Perfil);
document.getElementById("header__mi_dispositivo_txt").addEventListener("click", seccionMiDispositivo);
document.getElementById("logo__main_loged").addEventListener("click", seccionMiDispositivo);
document.getElementById("footer__sin_sensor").addEventListener("click", seccionSinDispositivo);
document.getElementById("acerca_de_loged").addEventListener("click", seccionAcercaDe);


document.getElementById("mi_dispositivo_i1").addEventListener("click", girarTarjeta_t1);
document.getElementById("mi_dispositivo_i2").addEventListener("click", girarTarjeta_t2);
document.getElementById("mi_dispositivo_i3").addEventListener("click", girarTarjeta_t3);
document.getElementById("mi_dispositivo_i4").addEventListener("click", girarTarjeta_t4);
document.getElementById("mi_dispositivo_i5").addEventListener("click", girarTarjeta_t5);

document.getElementById("mi_dispositivo_x1").addEventListener("click", desgirarTarjeta_t1);
document.getElementById("mi_dispositivo_x2").addEventListener("click", desgirarTarjeta_t2);
document.getElementById("mi_dispositivo_x3").addEventListener("click", desgirarTarjeta_t3);
document.getElementById("mi_dispositivo_x4").addEventListener("click", desgirarTarjeta_t4);
document.getElementById("mi_dispositivo_x5").addEventListener("click", desgirarTarjeta_t5);


document.getElementById("header__contactanos_txt").addEventListener("click", seccionContactanos);
document.getElementById("header__mapa_txt").addEventListener("click", seccionMapa);
document.getElementById("footer__log_contacta").addEventListener("click", seccionContactanos);
document.getElementById("footer__log_mapa").addEventListener("click", seccionMapa);

var sec_mi_dispositivo = document.querySelector(".pestanya__mi_dispositivo");
var sec_sin_dispositivo = document.querySelector(".pestanya__sin_mi_dispositivo");
var sec_contactanos = document.querySelector(".pestanya_contactanos");
var sec_mapa = document.querySelector(".pestanya_mapa");
var sec_acerca_de = document.querySelector(".pestanya_acerca_de");

/*========== Footer ==========*/
var footer_sin_sesion = document.querySelector(".landing__footer");

var color_fondo= document.querySelector("#body_landing");


/*%%%%%%%%%% FUNCIONES %%%%%%%%%%*/

function girarTarjeta_t1(){
    document.getElementById("mi_dispositivo_c1").classList.toggle("girar__carta");
    document.getElementById("mi_dispositivo_c1").classList.remove("desgirar__carta");
}
function girarTarjeta_t2(){
    document.getElementById("mi_dispositivo_c2").classList.toggle("girar__carta");
    document.getElementById("mi_dispositivo_c2").classList.remove("desgirar__carta");
}
function girarTarjeta_t3(){
    document.getElementById("mi_dispositivo_c3").classList.toggle("girar__carta");
    document.getElementById("mi_dispositivo_c3").classList.remove("desgirar__carta");
}
function girarTarjeta_t4(){
    document.getElementById("mi_dispositivo_c4").classList.toggle("girar__carta");
    document.getElementById("mi_dispositivo_c4").classList.remove("desgirar__carta");
}
function girarTarjeta_t5(){
    document.getElementById("mi_dispositivo_c5").classList.toggle("girar__carta");
    document.getElementById("mi_dispositivo_c5").classList.remove("desgirar__carta");
}


function desgirarTarjeta_t1(){
    document.getElementById("mi_dispositivo_c1").classList.toggle("desgirar__carta");
    document.getElementById("mi_dispositivo_c1").classList.remove("girar__carta");
}
function desgirarTarjeta_t2(){
    document.getElementById("mi_dispositivo_c2").classList.toggle("desgirar__carta");
    document.getElementById("mi_dispositivo_c2").classList.remove("girar__carta");
}
function desgirarTarjeta_t3(){
    document.getElementById("mi_dispositivo_c3").classList.toggle("desgirar__carta");
    document.getElementById("mi_dispositivo_c3").classList.remove("girar__carta");
}
function desgirarTarjeta_t4(){
    document.getElementById("mi_dispositivo_c4").classList.toggle("desgirar__carta");
    document.getElementById("mi_dispositivo_c4").classList.remove("girar__carta");
}
function desgirarTarjeta_t5(){
    document.getElementById("mi_dispositivo_c5").classList.toggle("desgirar__carta");
    document.getElementById("mi_dispositivo_c5").classList.remove("girar__carta");
}


//Cabecera responsive boton abrir y cerrar menú
//mostrar_Menu()
function mostrar_Menu(){
    document.getElementById("ensenyar__menu").classList.toggle("mostrar__menu_L");
    if ( document.getElementById("icono__menu_m_o_x").className == "fa-solid fa-bars"){
        document.getElementById("icono__menu_m_o_x").className = "fa-solid fa-xmark";
    }
    else {
        document.getElementById("icono__menu_m_o_x").className = "fa-solid fa-bars";
    }
}//()

//Cabecera abrir y cerrar perfil
//mostrar_Perfil()
function mostrar_Perfil(){

    document.getElementById("ensenyar__perfil").classList.toggle("mostrar__menu_R");
    if ( document.getElementById("icono__menu_m_o_x").className == "fa-solid fa-xmark"){
        mostrar_Menu();
    }
    scrollArriba();
}//()

//En el cuerpo de la web hace que se muestre la sección inicio
//seccionMiDispositivo()
function seccionMiDispositivo(){
    document.getElementById("header__mi_dispositivo_txt").className = "text-menu-selected";
    document.getElementById("header__contactanos_txt").className = null;
    document.getElementById("header__mapa_txt").className = null;

    document.getElementById("header__mi_dispositivo-sub").className = "header__menu-selected";
    document.getElementById("header__contactanos-sub").className = null;
    document.getElementById("header__mapa-sub").className = null;

    sec_mi_dispositivo.style.display="flex";
    sec_sin_dispositivo.style.display="none";
    sec_contactanos.style.display="none";
    sec_mapa.style.display="none";
    footer_sin_sesion.style.marginTop="100px";
    sec_acerca_de.style.display="none";

    color_fondo.style.backgroundImage = "url('assets/images/fondo.jpeg')";
    color_fondo.style.backgroundColor = "none";

    scrollArriba();
    cerrarMenu();
}//()

//En el cuerpo de la web hace que se muestre la sección inicio
//function seccionSinDispositivo()
function seccionSinDispositivo(){
    document.getElementById("header__mi_dispositivo_txt").className = "text-menu-selected";
    document.getElementById("header__contactanos_txt").className = null;
    document.getElementById("header__mapa_txt").className = null;

    document.getElementById("header__mi_dispositivo-sub").className = "header__menu-selected";
    document.getElementById("header__contactanos-sub").className = null;
    document.getElementById("header__mapa-sub").className = null;

    sec_mi_dispositivo.style.display="none";
    sec_sin_dispositivo.style.display="flex";
    sec_contactanos.style.display="none";
    sec_mapa.style.display="none";
    sec_acerca_de.style.display="none";
    footer_sin_sesion.style.marginTop="100px";


    color_fondo.style.backgroundImage = "url('assets/images/fondo.jpeg')";
    color_fondo.style.backgroundColor = "none";

    scrollArriba();
    cerrarMenu();
}//()

//En el cuerpo de la web hace que se muestre la sección Contactanos
//seccionContactanos()
function seccionContactanos(){
    document.getElementById("header__mi_dispositivo_txt").className = null;
    document.getElementById("header__contactanos_txt").className = "text-menu-selected";
    document.getElementById("header__mapa_txt").className = null;

    document.getElementById("header__mi_dispositivo-sub").className = null;
    document.getElementById("header__contactanos-sub").className = "header__menu-selected";
    document.getElementById("header__mapa-sub").className = null;

    sec_mi_dispositivo.style.display="none";
    sec_sin_dispositivo.style.display="none";
    sec_contactanos.style.display="block";
    sec_mapa.style.display="none";
    sec_acerca_de.style.display="none";
    footer_sin_sesion.style.marginTop="100px";

    color_fondo.style.backgroundImage = "none";
    color_fondo.style.backgroundColor = "#e0e5ea";

    scrollArriba();
    cerrarMenu();
}//()

function seccionAcercaDe(){

    sec_mi_dispositivo.style.display="none";
    sec_sin_dispositivo.style.display="none";
    sec_contactanos.style.display="none";
    sec_mapa.style.display="none";
    sec_acerca_de.style.display="flex";

    footer_sin_sesion.style.marginTop="100px";

    color_fondo.style.backgroundImage = "none";
    color_fondo.style.backgroundColor = "#e0e5ea";

    scrollArriba();
    cerrarMenu();
}

//En el cuerpo de la web hace que se muestre la sección Mapa
//seccionMapa()
function seccionMapa(){
    document.getElementById("header__mi_dispositivo_txt").className = null;
    document.getElementById("header__contactanos_txt").className = null;
    document.getElementById("header__mapa_txt").className = "text-menu-selected";

    document.getElementById("header__mi_dispositivo-sub").className = null;
    document.getElementById("header__contactanos-sub").className = null;
    document.getElementById("header__mapa-sub").className = "header__menu-selected";

    sec_mi_dispositivo.style.display="none";
    sec_sin_dispositivo.style.display="none";
    sec_contactanos.style.display="none";
    sec_mapa.style.display="block";
    sec_acerca_de.style.display="none";
    footer_sin_sesion.style.marginTop="-100px";

    color_fondo.style.backgroundImage = "none";
    color_fondo.style.backgroundColor = "#d6d6d7";

    scrollArriba();
    cerrarMenu();
}//()

//Cierra el menu lateral de las secciones
//cerrarMenu()
function cerrarMenu(){
    if (
        document.getElementById("icono__menu_m_o_x").className == "fa-solid fa-xmark"){
        document.getElementById("ensenyar__menu").classList.toggle("mostrar__menu_L");
        document.getElementById("icono__menu_m_o_x").className = "fa-solid fa-bars";
    }
}//()

//Hace scroll hasta la parte superior de la web
//scrollArriba()
function scrollArriba(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
}//()