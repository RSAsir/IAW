<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diccionario - Listar</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header>
        <div class="titulo">
            <h2>Diccionario - Listado de definiciones</h2>
        </div>

        <div class="enlaces">
            <a href="./index.html">Volver a principal</a>
        </div>
    </header>

    <?php
        include "funciones.php";
        $conexion=conectar();

        $sql="select * from tabla"; //echo $sql;
        $resultado=mysqli_query($conexion,$sql);

        if(mysqli_num_rows($resultado)==0) echo "El diccionario no contiene palabras.";
        else {
            while ($fila=mysqli_fetch_assoc($resultado)) { 
                $palabra="'".strtoupper($fila['palabra'])."'";
                $sql2="select * from tabla where palabra=$palabra"; //echo $sql2;
                $resultado2=mysqli_query($conexion,$sql2);

                if(mysqli_num_rows($resultado2) == 1) {
                    echo "<h3 style=\"color:#FF0000\">" . $fila['palabra'] ."</h3> <br>";
                } elseif($boton == false) {
                    $boton=true;
                    echo "<h3 style=\"color:#FF0000\">" . $fila['palabra'] ."</h3> <br>";
                }

                echo "<i>" . $fila['significado'] . "</i> <br> <br>";
             
            }
        }

    ?>
    
</body>
</html>