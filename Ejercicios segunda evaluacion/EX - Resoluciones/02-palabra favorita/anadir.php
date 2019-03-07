<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir palabra</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header>
        <div class="titulo">
            <h2>Palabra favorita - Añadir palabra</h2>
        </div>
        <div class="enlaces">
            <a href="./principal.php">Volver a principal</a>
        </div>
    </header>

    <?php

        // Es importante diferenciar dos tipos de errores para que al obtener el de clave
        // duplicada no muestre de nuevo el formulario.
        
        include "funciones.php";
        $conexion=conectar();

        if(isset($_POST['grabar'])){ // si 'grabar' esta lleno
            $error=false;
            $palabra="'".strtoupper($_POST['palabra'])."'"; //echo $palabra;

            // ERRORES PALABRA
            if($_POST['palabra']==null) {
                $error_palabra=true;
                $error_palabra="** Debe insertar una palabra.";
            }

            // PASO DE DATOS A LA BD
            if($error==false) {
                $sql="insert into tabla(palabra, votos) values($palabra, 0)";

                mysqli_query($conexion,$sql); //Pasamos la sentencia
                $error=mysqli_errno($conexion); // No tiene parametro de salida. Si devuelve 0 todo esta chachi, en caso contrario, devuelve un numero diferente.
                if($error==0) {
                    echo "Palabra subida correctamente.";
                } else if($error==1062){
                    echo "La palabra ya esta registrada.";
                } else {
                    echo "SE HA PRODUCIDO UN ERROR AL GRABAR EN LA BD.";
                }
            }
        }

        if(!isset($_POST['grabar']) or $error_palabra) {
    ?>
    
    <div class="cuerpo">
        <form action="./anadir.php" method="post">
            <h3>Escriba la palabra a agregar:</h3>
            <br>
            Palabra: <input type="text" name="palabra" id="palabra"> <?php echo $error_palabra; ?>
            <br>
            <br>
            <input type="submit" name="grabar" value="Enviar">
            <input type="reset" name="delete" value="Borrar">
        </form>
    </div>

    <?php
        }
    ?>
</body>
</html>