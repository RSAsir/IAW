<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pluviometro</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>

    <?php

        include "funciones.php";
        $conexion=conectar();

        // Conversion para el titulo de la pagina
            if ($_POST['ano_plu'] == 'cant_2017') {
                $ano = 2017;
            } else {
                $ano = 2018;
            }

        $sql = "SELECT * FROM tabla ORDER BY id";
        $resultado=mysqli_query($conexion, $sql);
    ?>

    <header>
        <h1>Pluviosidades del año <?php echo $ano; ?></h1>
    </header>

    <div class="cuerpo">
            <table>
                <th>Mes</th>
                <th>Cantidad</th>

                <?php
                    while ($fila=mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <td> <?php echo $fila['mes'];?> </td>
                                <td> <?php for ($i = 0; $i < $fila[$_POST['ano_plu']]; $i++) {echo "*";}; echo $fila[$_POST['ano_plu']]; ?></td>
                            </tr>
                   <?php } ?>
                
            </table>
    </div>

    <footer>
        <h2>Implantacion de aplicaciones web 2019</h2>
        <h3>Ruben C. Sanchez</h3>
    </footer>
    
</body>
</html>
