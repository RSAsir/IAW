<?php

    if (isset($_POST["enviar"])) { # isset comprueba y devuelve true si hay un valor (se vincula al boton para que no aparezca el error directamente).
        if (!is_numeric($_POST["anno"])){
            if (empty($_POST["anno"])) {
                echo "El campo no puede estar vacio.";
            } elseif (is_float($_POST["anno"])) {
                echo "El año debe ser numerico entero.";
            } elseif (is_string($_POST["anno"])) {
                echo "El año debe ser numerico entero.";
            } 

            $sw = 1;
        }

        if ( $sw != 1) {
            if ($_POST["anno"] < 1583) {
                echo "El año no puede ser menor de 1583";
                $sw = 1;
            } elseif ($_POST["anno"] >= 3000) {
                echo "El año no puede ser mayor de 3000";
                $sw = 1;
            }
        }

    }

?>