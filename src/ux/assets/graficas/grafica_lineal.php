<?php
    //necesita conexion a la base de datos
    //$sql="SELECT * from medida";
    //result=mysql_query($conexion,$sql);
    //valoresY=array();//valores
    //valoresX=array();//fechas
/*
     while ($ver = mysqli_fetch_row($result)){
        $valoresY[]=$ver[0];
        $valoresX[]=$ver[1];
    }
    $datosX=json_encode($valoresX);
    $datosY=json_encode($valoresY);
*/
?>

<div id="graficaLineal"></div>
<script type="text/javascript">
    function crearCadenaGrafica(json){
        var parsed  = JSON.parse(json);
        var arr =  [];
        for (var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>
<script type="text/javascript">
    //datosX=crearCadenaGrafica('< ?php echo $datosX?>')
    //datosY=crearCadenaGrafica('< ?php echo $datosY?>')

    var trace1 = {
        x: [1, 2, 3, 4],
        y: [10, 15, 13, 17],
        type: 'scatter'
    };
    var trace2 = {
        x: [1, 2, 3, 4],
        y: [16, 5, 11, 9],
        type: 'scatter'
    };

    var data = [trace1, trace2];




    Plotly.newPlot('graficaLineal', data);


</script>
