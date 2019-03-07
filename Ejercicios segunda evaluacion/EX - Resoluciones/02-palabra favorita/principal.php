<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palabra favorita</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
<?php
        // SI FALLA EL CODIGO REVISAR EL NOMBRE DE LAS COLUMNAS EN OTROS ARCHIVOS (A VECES SE PARECEN MUCHO)
        session_start();
        include "funciones.php";
        $conexion=conectar(); 

        //bienvenida al usuario
        $sql="SELECT login FROM usuario WHERE id_usuario=".$_SESSION['id_usuario'];
        $usuario=mysqli_query($conexion,$sql);

        if(mysqli_errno($conexion)!=0) {
            header("location:index.php");
        }

        if($_SESSION['id_usuario']!=1) {
    ?>

    <header>
        <div class="titulo">
            <h2>Mi palabra favorita - Principal</h2>
        </div>
        <div class="enlaces">
            <a href="./anadir.php">Añadir palabra</a>
            <a href="./listar.php">Listar</a>
            <a href="./favorita.php">Votar favorita</a>
        </div>
    </header>

    <?php } else { ?>

    <header>
        <div class="titulo">
            <h2>Mi palabra favorita - Principal</h2>
        </div>
        <div class="enlaces">
            <a href="./anadir.php">Añadir palabra</a>
            <a href="./listar.php">Listar</a>
            <a href="./borrar-todo.php">Borrar todo</a>
            <a href="./favorita.php">Votar favorita</a>
        </div>
    </header>   

    <?php }  ?>

    <div class="cuerpo">
        <?php

            $fila=mysqli_fetch_assoc($usuario);
            echo "Bienvenido " . $fila['login'];
            ?> <a href="./index.php?salir=1">Cerrar sesion</a> <?php // operador ternario pasa un valor mediante $_GET

        ?>
    </div>

    <footer>
        <p>Este programa corresponde a la asignaruta de IAW</p>
        <p>Curso 2018/2019</p>
    </footer>
</body>
</html>