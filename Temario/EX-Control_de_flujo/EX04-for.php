<?php

    # 1. Bucle "for"
		$frutas = array("Pera", "Naranja", "Manzana");
        $elementos_frutas = count($frutas);

			for($x = 0; $elementos_frutas > $x; $x++) { # for(var_ini; condicion; incremento)
				echo $frutas[$x];
				echo "<br>";
            }
    
    # 2. Bucle "foreach"
        foreach($frutas as $valor) {
            echo "$valor <br>";
        }

?>