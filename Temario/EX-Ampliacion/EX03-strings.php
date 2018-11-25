<?php
    # Funciones para cadenas.

        $var = "Kuuko Bernkastel";

        # Caracteres de una string (incluye blancos)
            echo strlen($var) . "<br>"; # 16

        # Numero de palabras
            echo str_word_count("Hola padre"). "<br>"; # 2
        
        # Invertir una cadena
            echo strrev($var) . "<br>";
        
        # Buscar en una cadena (Devuelve la posicion del primer caracter, se empieza a contar desde 0)
            echo strpos($var, "Bernkastel") . "<br>"; # 6 o false si no se encontrara nada.

        # Reemplazar texto
            echo str_replace("world", "Bernkastel", "Hello world") . "<br>"; # Hello Bernkastel
            echo str_replace("Bernkastel", "padre", $var) . "<br>"; # Kuuko padre
            echo str_replace("Bernkas", "padre", $var) . "<br>"; # Kuuko padretel (cambia exactamente la parte que le digamos)
?>

