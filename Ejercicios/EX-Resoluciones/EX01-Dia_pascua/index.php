<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dia de pascua</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="error">
        <?php
            include "error.php";
        ?>
    </div>

    <div class="titulo">
        <h3>Dia de pascua</h3>
    </div>

    <div class="cuerpo">
        <div class="formulario">
            <form action="index.php" method="post" >
                
                Determine un año (1583-2499):
                <input type="text" name="diap" value="<?php $_POST['diap'] ?>">
                <br>
                <input type="submit" name="enviar" value="Enviar">
                <input type="reset" name="borrar" value="Borrar">
                
            </form>
        </div>
        
        <div class="pascua">
            <?php
                include "pascua.php";
            ?>
        </div>

    </div>
    <footer>
        <div class="datos">
            <center><p>I.E.S. "Agora</p>
            <p>Implantacion de Aplicaciones Web</p>
            <p>RSAsir</p></center>
        </div>
    </footer>


</body>
</html>