<?php

    $x = 1;

    while($x <= 5) { # Se ejecuta mientras la condicion del parentesis sea cierta.
        echo $x;
        $x++;
    } 

    echo "<br>";

    $y = 1;

    do { # Se ejecuta una vez y luego comprueba la condicion, si se cumple vuelve a ejecutarse.
        echo $y;
    } while ($y <= 2);

?>