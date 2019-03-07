<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Borrar todo</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header>
        <div class="titulo">
            <h2>Palabra favorita - Borrar todo</h2>
        </div>
        <div class="enlaces">
            <a href="./principal.php">Volver a principal</a>
        </div>
    </header>

    <?php

session_start();
        include "funciones.php";
        $conexion=conectar();

        if(isset($_POST['grabar'])) {
            if($_POST['borrado']=="si"){
                $sql="delete from tabla";
                $sql2="alter table tabla auto_increment=1";

                mysqli_query($conexion,$sql); //Pasamos la sentencia
                mysqli_query($conexion,$sql2);
                $error=mysqli_errno($conexion); // No tiene parametro de salida. Si devuelve 0 todo esta chachi, en caso contrario, devuelve un numero diferente.
                if($error==0) {
                    echo "Borrado realizado correctamente.";
                } else {
                    echo "SE HA PRODUCIDO UN ERROR AL GRABAR EN LA BD.";
                }
            
            } else {
                echo "Operacion cancelada";
            }
        } else {

    ?>

    <div class="cuerpo">
        <form action="./borrar-todo.php" method="post">
            <h3>¿Desea borrar todas las palabras?</h3>
            <br>
            <input type="radio" name="borrado" id="si" value="si"> Si
            <input type="radio" name="borrado" id="no" value="no"> No
            <br>
            <br>
            <input type="submit" name="grabar" value="Enviar">
        </form>
    </div>

    <?php

        }

    ?>
</body>
</html>