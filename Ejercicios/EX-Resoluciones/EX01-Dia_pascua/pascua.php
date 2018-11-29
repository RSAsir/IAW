<?php

    if (isset($_POST["enviar"])) {
        if ($sw != 1) {
            $anno = $_POST["diap"];

            # Constantes mágicas
                $M = 24;
                $N = 5;
            #Cálculo de residuos
                $a = $anno % 19;
                $b = $anno % 4;
                $c = $anno % 7;
                $d = (19*$a + $M) % 30;
                $e = (2*$b+4*$c+6*$d + $N) % 7;
            # Decidir entre los 2 casos:
                if ( $d + $e < 10 ) {
                    $dia = $d + $e + 22;
                    $mes = "marzo"; 
                    }
                else {
                    $dia = $d + $e - 9;
                    $mes = "abril"; 
                    }
            # Excepciones especiales (según artículo)
                if ( $dia == 26  and $mes == "abril" ) { 
                    $dia = 19;
                    }
                if ( $dia == 25 and $mes == "abril" and $d==28 and $e == 6 and $a >10 ) { 
                    $dia = 18;
                    }
                
                echo "El dia de pascua es el $dia de $mes.";
        }
    }

?>