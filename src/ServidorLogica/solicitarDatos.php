<?php


////////////////////////////////////////// ESTO ES LO QUE TIENES QUE ADAPTAR A TU GUSTO AMIGO///////////////////////////////////////////////
include("LogicaDelNegocio.php");

$result = solicitarDatos();
$medidasOriginal = mysqli_fetch_all($result,MYSQLI_ASSOC);

////////////////////////////////////////// HASTA AQUÍ ///////////////////////////////////////////////
/// Solo necesito que todas las medidas esten recogidas en un array llamado literalmente así:  $medidasOriginal



//Filtrado para crear una lista únicamente con la última medida de cada sensor
//[medidasOriginal]->filtradoUnicaMedidaPorSensor()->[medidas]
for ($i = 1; $i < count($medidasOriginal); $i++) {
    for ($j = 0; $j < count($medidasOriginal) - 1; $j++) {
        $z = $j + 1;

        $medidaFecha = $medidasOriginal[$j];
        $nextMedidaFecha = $medidasOriginal[$z];
        $auxiliar = $medidaFecha;

        $fechaActual = $medidaFecha['momentoMedicion'];
        $fechaSiguiente = $nextMedidaFecha['momentoMedicion'];

        $tiempoActual = 0;
        $tiempoSiguiente = 0;
        $tiempoActual = $tiempoActual + ($fechaActual[0] * 10000000000000) + ($fechaActual[1] * 1000000000000) + ($fechaActual[2] * 100000000000) + ($fechaActual[3] * 10000000000) + ($fechaActual[5] * 1000000000) + ($fechaActual[6] * 100000000) + ($fechaActual[8] * 10000000) + ($fechaActual[9] * 1000000) + ($fechaActual[11] * 100000) + ($fechaActual[12] * 10000) + ($fechaActual[14] * 1000) + ($fechaActual[15] * 100) + ($fechaActual[17] * 10) + ($fechaActual[18]);
        $tiempoSiguiente = $tiempoSiguiente + ($fechaSiguiente[0] * 10000000000000) + ($fechaSiguiente[1] * 1000000000000) + ($fechaSiguiente[2] * 100000000000) + ($fechaSiguiente[3] * 10000000000) + ($fechaSiguiente[5] * 1000000000) + ($fechaSiguiente[6] * 100000000) + ($fechaSiguiente[8] * 10000000) + ($fechaSiguiente[9] * 1000000) + ($fechaSiguiente[11] * 100000) + ($fechaSiguiente[12] * 10000) + ($fechaSiguiente[14] * 1000) + ($fechaSiguiente[15] * 100) + ($fechaSiguiente[17] * 10) + ($fechaSiguiente[18]);;

        if ($tiempoActual < $tiempoSiguiente) {
            $medidasOriginal[$j] = $nextMedidaFecha;
            $medidasOriginal[$z] = $auxiliar;
        }
    }
}
$medidas=array();
$medidas[0]=$medidasOriginal[0];

foreach ($medidasOriginal as $med_original){
    $editable=1;
    for ($i=0;$i<count($medidas);$i++){
        $med_new=$medidas[$i];
        if ($med_original['idSensor']==$med_new['idSensor']){
            $editable=0;
        }
    }
    if ($editable==1){
        array_push($medidas, $med_original);
    }
}



//listas declaradas
$ordenFechaUp = array();
$ordenEstadoUp = array();
$ordenFechaDown = array();
$ordenEstadoDown = array();

$ordenValueUp = array();
$ordenValueDown = array();


//Ordena las medidas por estado tanto de activo a inactivo como de inactivo a activo, rellena los array descendientes de fecha y valor con los valores de el array medidas para usarlos más adelante.
//[$medidas]-> ordenarEstados()->  [ordenEstadoUp],[ordenEstadoDown],[ordenFechaDown],[ordenValueDown]
$contador =0;
foreach ($medidas as $med){
    if ($med['estado']==1){
        if ($contador >0){
            array_unshift($ordenEstadoDown, $med);
        }else{
            array_push($ordenEstadoDown, $med);
        }
        array_push($ordenEstadoUp, $med);
    }else{
        if ($contador >0){
            array_unshift($ordenEstadoUp, $med);
        }else{
            array_push($ordenEstadoUp, $med);
        }
        array_push($ordenEstadoDown, $med);
    }

    $ordenFechaDown[$contador]=$medidas[$contador];
    $ordenValueDown[$contador]=$medidas[$contador];
    $contador = $contador+1;
}

//Ordena las medidas de mayor valor de medida a menor valor
//[ordenValueDown]-> ordenarValorDescendente()->[ordenValueDown]
for ($i = 1; $i < count($ordenValueDown); $i++){
    for ($j = 0; $j < count($ordenValueDown)-1; $j++){

        $z=$j+1;

        $auxiliar = $ordenValueDown[$j];
        $auxiliar2 = $ordenValueDown[$z];
        $auxiliarS = $auxiliar;

        if ($auxiliar['valorMedicion'] < $auxiliar2['valorMedicion'] ){

            $ordenValueDown[$j] = $auxiliar2;
            $ordenValueDown[$z] = $auxiliarS;
        }
    }
}

//Ordena las medidas de menor valor de medida a mayor valor
//[ordenValueDown]-> ordenarValorAscendente()->[ordenValueUp]
$contador =0;
for ($i =count($ordenValueDown)-1; $i>=0;$i--){
    array_push($ordenValueUp, $ordenValueDown[$i]);
    $contador++;
}

//Ordena las medidas segun lo recientes que son, va de más reciente a menos
//[ordenFechaDown]-> ordenarFechaDescendente()->[ordenFechaDown]
for ($i = 1; $i < count($ordenFechaDown); $i++) {
    for ($j = 0; $j < count($ordenFechaDown) - 1; $j++) {
        $z = $j + 1;

        $medidaFecha = $ordenFechaDown[$j];
        $nextMedidaFecha = $ordenFechaDown[$z];
        $auxiliar = $medidaFecha;

        $fechaActual = $medidaFecha['momentoMedicion'];
        $fechaSiguiente = $nextMedidaFecha['momentoMedicion'];

        $tiempoActual = 0;
        $tiempoSiguiente = 0;
        $tiempoActual = $tiempoActual + ($fechaActual[0] * 10000000000000) + ($fechaActual[1] * 1000000000000) + ($fechaActual[2] * 100000000000) + ($fechaActual[3] * 10000000000) + ($fechaActual[5] * 1000000000) + ($fechaActual[6] * 100000000) + ($fechaActual[8] * 10000000) + ($fechaActual[9] * 1000000) + ($fechaActual[11] * 100000) + ($fechaActual[12] * 10000) + ($fechaActual[14] * 1000) + ($fechaActual[15] * 100) + ($fechaActual[17] * 10) + ($fechaActual[18]);
        $tiempoSiguiente = $tiempoSiguiente + ($fechaSiguiente[0] * 10000000000000) + ($fechaSiguiente[1] * 1000000000000) + ($fechaSiguiente[2] * 100000000000) + ($fechaSiguiente[3] * 10000000000) + ($fechaSiguiente[5] * 1000000000) + ($fechaSiguiente[6] * 100000000) + ($fechaSiguiente[8] * 10000000) + ($fechaSiguiente[9] * 1000000) + ($fechaSiguiente[11] * 100000) + ($fechaSiguiente[12] * 10000) + ($fechaSiguiente[14] * 1000) + ($fechaSiguiente[15] * 100) + ($fechaSiguiente[17] * 10) + ($fechaSiguiente[18]);;

        if ($tiempoActual < $tiempoSiguiente) {
            $ordenFechaDown[$j] = $nextMedidaFecha;
            $ordenFechaDown[$z] = $auxiliar;
        }
    }
}

//Ordena las medidas segun lo recientes que son, va de menos reciente a más
//[ordenFechaDown]-> ordenarFechaAscendente()->[ordenFechaUp]
$contador =0;
for ($i =count($ordenFechaDown)-1; $i>=0;$i--){
    array_push($ordenFechaUp, $ordenFechaDown[$i]);
    $contador++;
}

?>
