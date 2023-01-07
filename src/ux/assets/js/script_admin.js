document.getElementById("btn__cerrar_admin").addEventListener("click", logoutAdmin);

document.getElementById("ico__orden_value").addEventListener("click", ordenValue);
document.getElementById("ico__orden_estado").addEventListener("click", ordenEstado);
document.getElementById("ico__orden_fecha").addEventListener("click", ordenFecha);
var orden_value = document.getElementById("ico__orden_value");
var orden_estado = document.getElementById("ico__orden_estado");
var orden_fecha = document.getElementById("ico__orden_fecha");

var tab_vdown = document.getElementById("tabla_vdown");
var tab_vup = document.getElementById("tabla_vup");
var tab_fdown = document.getElementById("tabla_fdown");
var tab_fup = document.getElementById("tabla_fup");
var tab_edown = document.getElementById("tabla_edown");
var tab_eup = document.getElementById("tabla_eup");

function logoutAdmin(){
    window.location.href = 'index.php';
}

function ordenEstado(){
    if (orden_estado.className == "ico__orden_down"){

        orden_estado.className = "ico__orden_down_selected";

        tab_vdown.style.display= "none";
        tab_vup.style.display= "none";
        tab_fdown.style.display= "none";
        tab_fup.style.display= "none";
        tab_edown.style.display= "contents";
        tab_eup.style.display= "none";

        if (orden_fecha.className == "ico__orden_up_selected"){
            orden_fecha.className = "ico__orden_up";
        }else if (orden_fecha.className == "ico__orden_down_selected"){
            orden_fecha.className = "ico__orden_down";
        }else if (orden_value.className == "ico__orden_up_selected"){
            orden_value.className = "ico__orden_up";
        }else if (orden_value.className == "ico__orden_down_selected"){
            orden_value.className = "ico__orden_down";
        }

    }else if(orden_estado.className == "ico__orden_up"){

        orden_estado.className = "ico__orden_up_selected";

        tab_vdown.style.display= "none";
        tab_vup.style.display= "none";
        tab_fdown.style.display= "none";
        tab_fup.style.display= "none";
        tab_edown.style.display= "none";
        tab_eup.style.display= "contents";

        if (orden_fecha.className == "ico__orden_up_selected"){
            orden_fecha.className = "ico__orden_up";
        }else if (orden_fecha.className == "ico__orden_down_selected"){
            orden_fecha.className = "ico__orden_down";
        }else if (orden_value.className == "ico__orden_up_selected"){
            orden_value.className = "ico__orden_up";
        }else if (orden_value.className == "ico__orden_down_selected"){
            orden_value.className = "ico__orden_down";
        }

    }else if(orden_estado.className == "ico__orden_down_selected"){
        orden_estado.className = "ico__orden_up_selected";

        tab_vdown.style.display= "none";
        tab_vup.style.display= "none";
        tab_fdown.style.display= "none";
        tab_fup.style.display= "none";
        tab_edown.style.display= "none";
        tab_eup.style.display= "contents";
    }else if(orden_estado.className == "ico__orden_up_selected"){
        orden_estado.className = "ico__orden_down_selected";

        tab_vdown.style.display= "none";
        tab_vup.style.display= "none";
        tab_fdown.style.display= "none";
        tab_fup.style.display= "none";
        tab_edown.style.display= "contents";
        tab_eup.style.display= "none";
    }
}
function ordenFecha() {
    if (orden_fecha.className == "ico__orden_down") {
        orden_fecha.className = "ico__orden_down_selected";

        tab_vdown.style.display = "none";
        tab_vup.style.display = "none";
        tab_fdown.style.display = "contents";
        tab_fup.style.display = "none";
        tab_edown.style.display = "none";
        tab_eup.style.display = "none";

        if (orden_estado.className == "ico__orden_up_selected") {
            orden_estado.className = "ico__orden_up";
        } else if (orden_estado.className == "ico__orden_down_selected") {
            orden_estado.className = "ico__orden_down";
        } else if (orden_value.className == "ico__orden_up_selected") {
            orden_value.className = "ico__orden_up";
        } else if (orden_value.className == "ico__orden_down_selected") {
            orden_value.className = "ico__orden_down";
        }

    } else if (orden_fecha.className == "ico__orden_up") {
        orden_fecha.className = "ico__orden_up_selected";

        tab_vdown.style.display = "none";
        tab_vup.style.display = "none";
        tab_fdown.style.display = "none";
        tab_fup.style.display = "contents";
        tab_edown.style.display = "none";
        tab_eup.style.display = "none";

        if (orden_estado.className == "ico__orden_up_selected") {
            orden_estado.className = "ico__orden_up";
        } else if (orden_estado.className == "ico__orden_down_selected") {
            orden_estado.className = "ico__orden_down";
        } else if (orden_value.className == "ico__orden_up_selected") {
            orden_value.className = "ico__orden_up";
        } else if (orden_value.className == "ico__orden_down_selected") {
            orden_value.className = "ico__orden_down";
        }
    } else if (orden_fecha.className == "ico__orden_down_selected") {
        orden_fecha.className = "ico__orden_up_selected";

        tab_vdown.style.display = "none";
        tab_vup.style.display = "none";
        tab_fdown.style.display = "none";
        tab_fup.style.display = "contents";
        tab_edown.style.display = "none";
        tab_eup.style.display = "none";
    } else if (orden_fecha.className == "ico__orden_up_selected") {
        orden_fecha.className = "ico__orden_down_selected";

        tab_vdown.style.display = "none";
        tab_vup.style.display = "none";
        tab_fdown.style.display = "contents";
        tab_fup.style.display = "none";
        tab_edown.style.display = "none";
        tab_eup.style.display = "none";
    }
}
function ordenValue() {
    if (orden_value.className == "ico__orden_down") {
        orden_value.className = "ico__orden_down_selected";

        tab_vdown.style.display = "contents";
        tab_vup.style.display = "none";
        tab_fdown.style.display = "none";
        tab_fup.style.display = "none";
        tab_edown.style.display = "none";
        tab_eup.style.display = "none";

        if (orden_estado.className == "ico__orden_up_selected") {
            orden_estado.className = "ico__orden_up";
        } else if (orden_estado.className == "ico__orden_down_selected") {
            orden_estado.className = "ico__orden_down";
        } else if (orden_fecha.className == "ico__orden_up_selected") {
            orden_fecha.className = "ico__orden_up";
        } else if (orden_fecha.className == "ico__orden_down_selected") {
            orden_fecha.className = "ico__orden_down";
        }

    } else if (orden_value.className == "ico__orden_up") {
        orden_value.className = "ico__orden_up_selected";

        tab_vdown.style.display = "none";
        tab_vup.style.display = "contents";
        tab_fdown.style.display = "none";
        tab_fup.style.display = "none";
        tab_edown.style.display = "none";
        tab_eup.style.display = "none";

        if (orden_estado.className == "ico__orden_up_selected") {
            orden_estado.className = "ico__orden_up";
        } else if (orden_estado.className == "ico__orden_down_selected") {
            orden_estado.className = "ico__orden_down";
        } else if (orden_fecha.className == "ico__orden_up_selected") {
            orden_fecha.className = "ico__orden_up";
        } else if (orden_fecha.className == "ico__orden_down_selected") {
            orden_fecha.className = "ico__orden_down";
        }
    } else if (orden_value.className == "ico__orden_down_selected") {
        orden_value.className = "ico__orden_up_selected";

        tab_vdown.style.display = "none";
        tab_vup.style.display = "contents";
        tab_fdown.style.display = "none";
        tab_fup.style.display = "none";
        tab_edown.style.display = "none";
        tab_eup.style.display = "none";
    } else if (orden_value.className == "ico__orden_up_selected") {
        orden_value.className = "ico__orden_down_selected";

        tab_vdown.style.display = "contents";
        tab_vup.style.display = "none";
        tab_fdown.style.display = "none";
        tab_fup.style.display = "none";
        tab_edown.style.display = "none";
        tab_eup.style.display = "none";
    }
}
