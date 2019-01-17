<?php

    // Uso de variables globales en una funcion.

        $x = 10;

        function suma() {
            $y = 3;
            global $x; # Podemos usar variables globales dentro de una funcion con esta sintaxis.

            echo $x + $y;
            echo "<br>";
        }

        suma();

    // Uso de "static.

        function incremento() {
            static $x = 0;
            echo $x;
            echo "<br>";
            $x++;
        }

        incremento();
        incremento();
        incremento();

        /* Las variables locales pierden su valor cuando la funcion concluye,
        utilizando "static" hacemos que el valor se quede guardado para usos
        posteriores */
?>