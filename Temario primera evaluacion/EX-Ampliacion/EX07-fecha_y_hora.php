<?php

    # NECESARIO AMPLIAR

    /* Para la fecha se utilizan:
        d : dia del mes
        m : mes
        Y : año (4 cifras)
        l : dia de la semana */

    echo date("l, d-m-Y"); # Se puede usar cualquier formato siguiendo el patron de caracteres.

    /* Para la hora:
        h : hora en formato 12h
        i : minutos
        s : segundos
        a : am o pm */
        echo "<br>";
        echo date("h:i:sa");

?>