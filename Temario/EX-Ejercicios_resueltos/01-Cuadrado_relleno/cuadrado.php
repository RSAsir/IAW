<?php

    # Determinamos el tipo de caracter.
    $caracter = $_POST["forma"];

    switch($caracter) {
        case "estrella":
            $caracter = "*";
            break;
        case "suma":
            $caracter = "+";
            break;
        case "dolar":
            $caracter = "$";
            break;
    }

    if ($sw != 1) {
        for ($y = 0; $_POST['lado'] > $y; $y++) {
            for($x = 0; $_POST['lado'] > $x; $x++) {
                echo "$caracter ";
            }
            echo "<br>";
        }
    }
?>