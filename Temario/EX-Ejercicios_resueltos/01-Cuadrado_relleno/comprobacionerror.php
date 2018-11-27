<?php

    if (isset($_POST["enviar"])) { # isset comprueba y devuelve true si hay un valor (se vincula al boton para que no aparezca el error directamente).
        if (!is_numeric($_POST["lado"])){
            if (empty($_POST["lado"])) {
                echo "El campo no puede estar vacio.";
            } elseif (is_float($_POST["lado"])) {
                echo "El lado debe ser numerico entero.";
            } elseif (is_string($_POST["lado"])) {
                echo "El lado debe ser numerico entero.";
            } 

            $sw = 1;
        }

        if ( $sw != 1) {
            if ($_POST["lado"] < 1) {
                echo "El lado no puede ser menor de 1";
                $sw = 1;
            } elseif ($_POST["lado"] > 10) {
                echo "El lado no puede ser mayor de 10";
                $sw = 1;
            }
        }

    }

?>