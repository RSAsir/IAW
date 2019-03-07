<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de palabras</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header>
        <div class="titulo">
            <h2>Palabra favorita - Listado de palabras</h2>
        </div>
        <div class="enlaces">
            <a href="./principal.php">Volver a principal</a>
        </div>
    </header>

    <?php

       
        include "funciones.php";
        $conexion=conectar();
        $sql="select * from tabla";
        $resultado=mysqli_query($conexion,$sql);

        if(mysqli_num_rows($resultado)==0) echo "No se han agregado palabras.";
        else {

            ?> 

                <table border="1">
                    <tr>
                        <th>Palabra</th>
                        <th>Votos</th>
                    </tr>
            
            <?php

            while ($fila=mysqli_fetch_assoc($resultado)) {
                echo "<tr><td>" . $fila['palabra'] . "</td><td>" . $fila['votos'] . "</td></tr>";
            }

            ?> </table> <?php
        }

    ?>

</body>
</html>