/*========== Cambiar de sección ==========*/
document.getElementById("icono__menu").addEventListener("click", mostrar_Menu);
document.getElementById("btn__perfil").addEventListener("click", mostrar_Perfil);

document.getElementById("btn__cerrar_perfil").addEventListener("click", mostrar_Perfil);
document.getElementById("link_editar_perfil").addEventListener("click", mostrar_Perfil);
document.getElementById("link_editar_perfil").addEventListener("click", edit_scrollArriba);


document.getElementById("abrir_galeria").addEventListener("click", mostrar_galeria);


document.getElementById("header__mi_dispositivo_txt").addEventListener("click", seccionMiDispositivo);
document.getElementById("logo__main_loged").addEventListener("click", seccionMiDispositivo);
document.getElementById("btn_confirmar_desvincular").addEventListener("click", seccionSinDispositivo);

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


/*Iconos perfil*/
document.getElementById("ico1").addEventListener("click",ocultar_galeria1);
document.getElementById("ico2").addEventListener("click",ocultar_galeria2);
document.getElementById("ico3").addEventListener("click",ocultar_galeria3);
document.getElementById("ico4").addEventListener("click",ocultar_galeria4);
document.getElementById("ico5").addEventListener("click",ocultar_galeria5);
document.getElementById("ico6").addEventListener("click",ocultar_galeria6);
document.getElementById("ico7").addEventListener("click",ocultar_galeria7);
document.getElementById("ico8").addEventListener("click",ocultar_galeria8);
document.getElementById("icoB1").addEventListener("click",ocultar_galeria1);
document.getElementById("icoB2").addEventListener("click",ocultar_galeria2);
document.getElementById("icoB3").addEventListener("click",ocultar_galeria3);
document.getElementById("icoB4").addEventListener("click",ocultar_galeria4);
document.getElementById("icoB5").addEventListener("click",ocultar_galeria5);
document.getElementById("icoB6").addEventListener("click",ocultar_galeria6);
document.getElementById("icoB7").addEventListener("click",ocultar_galeria7);
document.getElementById("icoB8").addEventListener("click",ocultar_galeria8);

document.getElementById("btn_guardar_cambios_perfil").addEventListener("click",actualizar_perfil);
var popup_editar = document.querySelector("#popup__editar");

var username = document.getElementById("inp_edit_nombre").value;



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

var color_fondo = document.querySelector("#body_landing");

var editor_imagen_perfil = document.querySelector("#selector_foto_perfil");
var icono_editor_imagen_perfil = document.querySelector(".imagen_editor_perfil_container");
var id_icono_perfil = 1;

var open_close = 1;

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
    if ( document.getElementById("icono__menu_m_o_x").className == "ico__menu_bar"){
        document.getElementById("icono__menu_m_o_x").className = "ico__menu_x";
    }
    else {
        document.getElementById("icono__menu_m_o_x").className = "ico__menu_bar";
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
    update_open_close();
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
    comprobar_open_close()
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
    comprobar_open_close();
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

    color_fondo.style.backgroundImage = "url('assets/images/fondo.jpeg')";
    color_fondo.style.backgroundColor = "none";

    scrollArriba();
    cerrarMenu();
    comprobar_open_close();
}//()

function seccionAcercaDe(){

    document.getElementById("header__mi_dispositivo_txt").className = null;
    document.getElementById("header__contactanos_txt").className = null;
    document.getElementById("header__mapa_txt").className = null;

    document.getElementById("header__mi_dispositivo-sub").className = null;
    document.getElementById("header__contactanos-sub").className = null;
    document.getElementById("header__mapa-sub").className = null;

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
    comprobar_open_close();
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
    comprobar_open_close();
}//()

//Cierra el menu lateral de las secciones
//cerrarMenu()
function cerrarMenu(){
    if (
        document.getElementById("icono__menu_m_o_x").className == "ico__menu_x"){
        document.getElementById("ensenyar__menu").classList.toggle("mostrar__menu_L");
        document.getElementById("icono__menu_m_o_x").className = "ico__menu_bar";
    }
}//()

//Hace scroll hasta la parte superior de la web
//scrollArriba()
function scrollArriba(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
}//()

function edit_scrollArriba(){
    popup_editar.scrollTo({ top: 0, behavior: 'smooth' });
}


//Grafica circular
const gaugeElement = document.querySelector(".gauge");

function setGaugeValue(gauge, value) {
    if (value < 0 || value > 1) {
        return;
    }

    gauge.querySelector(".gauge__fill").style.transform = `rotate(${
        value / 2
    }turn)`;
    gauge.querySelector(".gauge__cover").textContent = `${Math.round(
        value * 100
    )}%`;
}

setGaugeValue(gaugeElement, 0.42);

function update_open_close(){
    if (open_close>0){
        open_close=0;
    }
    else{
        open_close=1;
    }
}
function comprobar_open_close(){
    if (open_close<1){
        mostrar_Perfil();
    }
}

function mostrar_galeria(){
    editor_imagen_perfil.style.display = "block";
    icono_editor_imagen_perfil.style.display="none";
}


function ocultar_galeria1(){
    id_icono_perfil=1;
    document.getElementById("imagen_editor_perfil").src="assets/images/pi5.png";
    editor_imagen_perfil.style.display = "none";
    icono_editor_imagen_perfil.style.display="block";
}
function ocultar_galeria2(){
    id_icono_perfil=2;
    document.getElementById("imagen_editor_perfil").src="assets/images/pi6.png";
    editor_imagen_perfil.style.display = "none";
    icono_editor_imagen_perfil.style.display="block";
}
function ocultar_galeria3(){
    id_icono_perfil=3;
    document.getElementById("imagen_editor_perfil").src="assets/images/pi3.png";
    editor_imagen_perfil.style.display = "none";
    icono_editor_imagen_perfil.style.display="block";
}
function ocultar_galeria4(){
    id_icono_perfil=4;
    document.getElementById("imagen_editor_perfil").src="assets/images/pi2.png";
    editor_imagen_perfil.style.display = "none";
    icono_editor_imagen_perfil.style.display="block";
}
function ocultar_galeria5(){
    id_icono_perfil=5;
    document.getElementById("imagen_editor_perfil").src="assets/images/pi7.png";
    editor_imagen_perfil.style.display = "none";
    icono_editor_imagen_perfil.style.display="block";
}
function ocultar_galeria6(){
    id_icono_perfil=6;
    document.getElementById("imagen_editor_perfil").src="assets/images/pi4.png";
    editor_imagen_perfil.style.display = "none";
    icono_editor_imagen_perfil.style.display="block";
}
function ocultar_galeria7(){
    id_icono_perfil=7;
    document.getElementById("imagen_editor_perfil").src="assets/images/pi8.png";
    editor_imagen_perfil.style.display = "none";
    icono_editor_imagen_perfil.style.display="block";
}
function ocultar_galeria8(){
    id_icono_perfil=8;
    document.getElementById("imagen_editor_perfil").src="assets/images/pi1.png";
    editor_imagen_perfil.style.display = "none";
    icono_editor_imagen_perfil.style.display="block";
}

function actualizar_perfil(){
    if(id_icono_perfil==1){
        document.getElementById("perfil__imagen").className = "ico__perfil_img1";
        document.getElementById("icn__usuario_header").className = "ico__per1";
    }
    else if(id_icono_perfil==2){
        document.getElementById("perfil__imagen").className = "ico__perfil_img2";
        document.getElementById("icn__usuario_header").className = "ico__per2";

    }
    else if(id_icono_perfil==3){
        document.getElementById("perfil__imagen").className = "ico__perfil_img3";
        document.getElementById("icn__usuario_header").className = "ico__per3";

    }
    else if(id_icono_perfil==4){
        document.getElementById("perfil__imagen").className = "ico__perfil_img4";
        document.getElementById("icn__usuario_header").className = "ico__per4";
    }
    else if(id_icono_perfil==5){
        document.getElementById("perfil__imagen").className = "ico__perfil_img5";
        document.getElementById("icn__usuario_header").className = "ico__per5";
    }
    else if(id_icono_perfil==6){
        document.getElementById("perfil__imagen").className = "ico__perfil_img6";
        document.getElementById("icn__usuario_header").className = "ico__per6";
    }
    else if(id_icono_perfil==7){
        document.getElementById("perfil__imagen").className = "ico__perfil_img7";
        document.getElementById("icn__usuario_header").className = "ico__per7";
    } else if(id_icono_perfil==8){
        document.getElementById("perfil__imagen").className = "ico__perfil_img8";
        document.getElementById("icn__usuario_header").className = "ico__per8";
    }

    username = document.getElementById("inp_edit_nombre").value;
    document.getElementById("txt__usuario").innerHTML = username;
    document.getElementById("nombre__usuario").innerHTML = username;

}
