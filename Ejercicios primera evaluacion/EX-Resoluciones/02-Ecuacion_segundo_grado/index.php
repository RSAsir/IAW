<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecuacion segundo grado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>Calculadora ecuaciones segundo grado</h3>
    </header>

    <div class="cuerpo">
        <div class="formulario">
            <form action="index.php" method="GET">
                <!-- width nos va a determinar el tamaño del campo -->
                <input type="text" name="x" style="width: 30px" value="<?php $_GET['x'] ?>">x<sup>2</sup> +
                <input type="text" name="y" style="width: 30px" value="<?php $_GET['y'] ?>">x +
                <input type="text" name="z" style="width: 30px" value="<?php $_GET['z'] ?>"> = 0
                <br>
                <br>
                <input type="submit" name="enviar" value="Calcular">
                <input type="reset" name="borrar "value="Borrar">
            </form>
        </div>

        <div class= solucion>
        <?php

            # OUTPUT DEL FORMULARIO
            if (isset($_GET["enviar"])) { 
                $x = $_GET['x'];
                $y = $_GET['y'];
                $z = $_GET['z'];
                
               # CONTROL DE ENTRADA
               if (!is_numeric($x)){
                    # Se puede optimizar guardando las variables en un array y recorriendolo.
                    if (empty($x)) {
                        echo "El campo no puede estar vacio.";
                    } elseif (is_float($x)) {
                        echo "El $x debe ser numerico entero.";
                    } elseif (is_string($x)) {
                        echo "El $x debe ser numerico entero.";
                    } 
                    $sw = 1;
                }

                    echo "<br>";

                if (!is_numeric($y)){
                    if (empty($y)) {
                        echo "El campo no puede estar vacio.";
                    } elseif (is_float($y)) {
                        echo "El valor $y debe ser numerico entero.";
                    } elseif (is_string($y)) {
                        echo "El valor $y debe ser numerico entero.";
                    } 
                    $sw = 1;
                }

                    echo "<br>";

                if (!is_numeric($z)){
                    if (empty($z)) {
                        echo "El campo no puede estar vacio.";
                    } elseif (is_float($z)) {
                        echo "El valor $z debe ser numerico entero.";
                    } elseif (is_string($z)) {
                        echo "El valor $z debe ser numerico entero.";
                    } 
                    $sw = 1;
                }
                

                if ( $sw != 1) {
                    if ($x == 0) {
                        echo "No se trata de una ecuacion de segundo grado.";
                        $sw = 1;
                    } 
                }

                # RESOLUCION DE LA ECUACION  
                if ($sw != 1) {
                    
                    $d = $y**2 -4 * $x * $z;

                    if ($d < 0) {
                        echo "No hay soluciones reales";
                    } else {
                        echo "X1= " . (-$y+sqrt($d))/(2*$x);
                        echo "<br>";
                        echo "X2= " . (-$y-sqrt($d))/(2*$x);
                    }
                }
            }
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