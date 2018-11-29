<?php

    if (isset($_POST["enviar"])) {
        if ($sw != 1) {
            $anno = $_POST["anno"];

            if (($anno % 4 == 0 && $anno % 100 != 0 ) || $anno % 400 == 0) {
                echo "El año $anno es bisiesto.";
            } else {
                echo "El año $anno no es bisiesto.";
            }
        }
    }

?>