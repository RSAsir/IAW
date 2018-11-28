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
                <input type="text" name="x" value="<?php $_GET['x'] ?>">x<sup>2</sup> +
                <input type="text" name="y" value="<?php $_GET['y'] ?>">x +
                <input type="text" name="z" value="<?php $_GET['z'] ?>"> = 0
                <br>
                <input type="submit" name="enviar" value="Calcular">
                <input type="reset" name="borrar "value="Borrar">
            </form>
        </div>

        <div class= solucion>
        <?php
            if (isset($_GET["enviar"])) { # isset comprueba y devuelve true si hay un valor (se vincula al boton para que no aparezca el error directamente).
                $x = $_GET['x'];
                $y = $_GET['y'];
                $z = $_GET['z'];
 
               if (!is_numeric($x)){
                    # Se puede optimizar con un "for".
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