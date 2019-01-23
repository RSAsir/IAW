<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diccionario - Nueva definicion</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header>
        <div class="titulo">
            <h2>Diccionario - Principal</h2>
        </div>
        <div class="enlaces">
            <a href="./index.html">Volver a principal</a>
        </div>
    </header>

    <?php
        include "funciones.php";
        $conexion=conectar();

        if(isset($_POST['grabar'])){ // si 'grabar' esta lleno
            $error=false;
            $palabra="'".strtoupper($_POST['palabra'])."'"; //echo $palabra;
            $significado="'".strtoupper($_POST['significado'])."'"; //echo $significado;

            // ERRORES PALABRA
            if($_POST['palabra']==null) {
                $error=true;
                $error_palabra="** Debe insertar una palabra.";
            }

            // ERRORES SIGNIFICADO
            if($_POST['significado']==null) {
                $error=true;
                $error_significado="** Debe insertar un significado.";
            } elseif(strlen($_POST['significado']) > 100) {
                $error=true;
                $error_significado="** Se ha superado el numero maximo de caracteres (100).";
            }

            // PASO DE DATOS A LA BD
            if($error==false) {
                $sql="insert into tabla(palabra,significado) values($palabra,$significado)";

                mysqli_query($conexion,$sql); //Pasamos la sentencia
                $error=mysqli_errno($conexion); // No tiene parametro de salida. Si devuelve 0 todo esta chachi, en caso contrario, devuelve un numero diferente.
                if($error==0) {
                    echo "Definicion subida correctamente.";
                } else {
                    echo "SE HA PRODUCIDO UN ERROR AL GRABAR EN LA BD.";
                }
            }
        }

        if(!isset($_POST['grabar']) or $error) {
    ?>
    
    <div class="cuerpo">
        <form action="./nueva-definicion.php" method="post">
            <h3>Escriba palabra y significado</h3>
            <br>
            Palabra: <input type="text" name="palabra" id="palabra"> <?php echo $error_palabra; ?>
            <br>
            <br>
            Significado: <input type="text" name="significado" id="significado"> <?php echo $error_significado; ?>
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