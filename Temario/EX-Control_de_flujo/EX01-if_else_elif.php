<?php

    if (20 > 30) {
        echo "20 > 30"; # Se ejecuta si la sentencia del if es true.
    } elseif (20 > 10) {
        echo "20 > 10"; # Se ejecuta si ninguna de las sentencias anteriores es cierta pero esta si lo es.
    } else {
        echo "Ninguna de las anteriores es cierta."; # Se ejecuta si ninguna sentencia es true.
    }

?>