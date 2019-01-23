<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diccionario - Buscar</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header>
        <div class="titulo">
            <h2>Diccionario - Buscar</h2>
        </div>

        <div class="enlaces">
            <a href="./index.html">Volver a principal</a>
        </div>
    </header>

    <?php
        include "funciones.php";
        $conexion=conectar();

        if(isset($_POST['grabar'])) {
     
	
        } else {
    ?>

    <div class="cuerpo">
        <form action="./buscar.php" method="Post">
            Palabra a buscar: <input type="text" name="palabra" id="palabra">
            <br>
            <input type="submit" name="grabar" value="Enviar">
        </form>
    </div>

    <?php
        }
    ?>
</body>
</html>