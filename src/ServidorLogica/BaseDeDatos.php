<?php
include './ConexionABBDD.php';


    function GuardarMedicionBBDD($instante, $idSensor, $valor)
    {
        //Insertamos en la bbdd y comrpbamos si se guarda
        $sql = "INSERT INTO `medida` (`instante`, `idSensor`, `valor`) VALUES ('$instante', '$idSensor', '$valor')";
        if (mysqli_query(Conectar(), $sql)) {

           return true;

        } else {
            return false;
        }
    }

    //----------------------------------------------------------------
    //----------------------------------------------------------------
    function obtenerMedicionesBBDD(){
        //obtenemos lo que necesitamos de la tabla medida
        $sql = "SELECT * FROM `medida`";
        return mysqli_query(Conectar(),$sql);

    }

    //-----------------------------------------
    //-----------------------------------------
    function obtenerUltimaMedicionBBDD($tipo){
        //obtenemos solo el ultimo valor de la tabla para ver el ultimo
        $sql = "SELECT * FROM `medida` WHERE `instante` = (SELECT MAX(`instante`) FROM `medida`)";
        return mysqli_query(Conectar(),$sql);
    }