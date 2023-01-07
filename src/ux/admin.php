<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aether Technologies</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/estilos_admin.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <?php include("Servidor/solicitarDatos.php"); ?>

    <header>
        <div class="header__contenido">

            <img src="assets/images/logo.png" class="img__logo">
            <a id="btn__cerrar_admin"><div class="ico__cerrar_sesion_admin"></div><p id="txt__cerrar_sesion">Cerrar sesión</p></a>
        </div>
    </header>

    <main >

        <table class="content-table">
            <thead>
                <tr>
                    <th>ID sensor</th>
                    <th> <div style="display: flex"> Valor medida <div id="ico__orden_value" class="ico__orden_down" style="height: 20px"></div></div></th>
                    <th> <div style="display: flex"> Fecha última medición <div id="ico__orden_fecha" class="ico__orden_down_selected" style="height: 20px"></div> </div> </th>
                    <th> <div style="display: flex"> Estado sensor <div id="ico__orden_estado" class="ico__orden_down" style="height: 20px"></div></div></th>
                </tr>
            </thead>

            <tbody id="tabla_vdown">
            <?php foreach ($ordenValueDown as $vdown){ ?>
                <tr>
                    <td><?php echo$vdown['idSensor'] ?></td>
                    <td><?php echo$vdown['valorMedicion'] ?></td>
                    <td><?php echo$vdown['momentoMedicion'] ?></td>
                    <td>
                        <?php
                        if ($vdown['estado']==1){
                            echo "Activo";
                        }else{
                            echo "Inactivo";
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>

            <tbody id="tabla_vup">
            <?php foreach ($ordenValueUp as $vup){ ?>
                <tr>
                    <td><?php echo$vup['idSensor'] ?></td>
                    <td><?php echo$vup['valorMedicion'] ?></td>
                    <td><?php echo$vup['momentoMedicion'] ?></td>
                    <td>
                        <?php
                        if ($vup['estado']==1){
                            echo "Activo";
                        }else{
                            echo "Inactivo";
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>

            <tbody id="tabla_fdown">
            <?php foreach ($ordenFechaDown as $fdown){ ?>
                <tr>
                    <td><?php echo$fdown['idSensor'] ?></td>
                    <td><?php echo$fdown['valorMedicion'] ?></td>
                    <td><?php echo$fdown['momentoMedicion'] ?></td>
                    <td>
                        <?php
                            if ($fdown['estado']==1){
                                echo "Activo";
                            }else{
                                echo "Inactivo";
                            }
                        ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>

            <tbody id="tabla_fup">
            <?php foreach ($ordenFechaUp as $fup){ ?>
                <tr>
                    <td><?php echo$fup['idSensor'] ?></td>
                    <td><?php echo$fup['valorMedicion'] ?></td>
                    <td><?php echo$fup['momentoMedicion'] ?></td>
                    <td>
                        <?php
                        if ($fup['estado']==1){
                            echo "Activo";
                        }else{
                            echo "Inactivo";
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>

            <tbody id="tabla_edown">
            <?php foreach ($ordenEstadoDown as $edown){ ?>
                <tr>
                    <td><?php echo$edown['idSensor'] ?></td>
                    <td><?php echo$edown['valorMedicion'] ?></td>
                    <td><?php echo$edown['momentoMedicion'] ?></td>
                    <td>
                        <?php
                        if ($edown['estado']==1){
                            echo "Activo";
                        }else{
                            echo "Inactivo";
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>

            <tbody id="tabla_eup">
            <?php foreach ($ordenEstadoUp as $eup){ ?>
                <tr>
                    <td><?php echo$eup['idSensor'] ?></td>
                    <td><?php echo$eup['valorMedicion'] ?></td>
                    <td><?php echo$eup['momentoMedicion'] ?></td>
                    <td>
                        <?php
                        if ($eup['estado']==1){
                            echo "Activo";
                        }else{
                            echo "Inactivo";
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    </main>

<script src="assets/js/script_admin.js"></script>
</body>
</html>