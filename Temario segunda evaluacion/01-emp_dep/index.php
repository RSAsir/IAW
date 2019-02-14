<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMPLEADOS</title>
</head>
<body>
    <?php
        session_start(); // se realiza despues del login
        
        include "funciones.php";
        $conexion=conectar();

        if(comprobar_usuario($conexion)){
            header("location:lista_empleados.php"); //te manda a ese sitio directamente
        } else {
            include "login.php";
        }

    ?>
</body>
</html>