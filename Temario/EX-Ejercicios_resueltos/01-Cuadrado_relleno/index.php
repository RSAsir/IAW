<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuadrado relleno</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="error">
        <?php
            include "comprobacionerror.php";
        ?>
    </div>

    <div class="titulo">
        <h3>CUADRADO RELLENO (FORMULARIO)</h3>
    </div>

    <div class="cuerpo">
        <div class="formulario">
            <form action="index.php" method="post" >
                <h4>DATOS NECESARIOS. SON OBLIGATORIOS</h4>
                Introduce el lado (1-10)
                <input type="text" name="lado" value="<?php $_POST['lado']?>">
                <br>
                <input type="radio" name="forma" value="estrella" checked> Estrella
                <input type="radio" name="forma" value="suma"> Suma
                <input type="radio" name="forma" value="dolar"> Dolar
                <br>
                <input type="submit" name="enviar" value="Submit">
                <input type="reset" name="borrar" value="Reset">
            </form>
        </div>
        
        <div class="cuadrado">
            <?php
                if ($sw != 1) {
                    include "cuadrado.php";
                }
            ?>
        </div>

        <div class="logo">
            <img src="./logo.jpeg" alt="Logo IES Agora">
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