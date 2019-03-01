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

        $sql="SELECT column_name columna, SUBSTRING( COLUMN_NAME, 6, LENGTH( column_name ) ) ano
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE table_name =  'tabla'
        AND table_schema =  'precipitaciones_mes_ano'
        AND column_name LIKE  'c%'
        LIMIT 0 , 30";

        $resultado=mysqli_query($conexion, $sql);

        if(!isset($_POST['grabar'])) {
    ?>

    <header>
        <h1>Seleccione un año</h1>
    </header>

    <div class="cuerpo">
            <form action="./pluviometro.php" method="post">
                Seleccione un año: <select name="ano_plu">
                    <?php
                        while ($fila=mysqli_fetch_assoc($resultado)) { 
                            echo "<option value=".$fila['columna'].">".$fila['ano']."</option>"; 
                        }
                    ?>
                </select>

                <input type="submit" value="Seleccionar año" name="grabar">
            </form>
    </div>

    <footer>
        <h2>Implantacion de aplicaciones web 2019</h2>
        <h3>Ruben C. Sanchez</h3>
    </footer>

    <?php
        }
    ?>
</body>
</html>