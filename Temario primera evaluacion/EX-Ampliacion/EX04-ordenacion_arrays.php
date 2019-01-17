<?php

    # 1. Ordenacion arrays indexativos
        $resonadores = array("Charlotte", "Alice", "Millium", "Grimm", "Lumia");

        # Ascendente
            echo "<h3>Ordenacion ascendente idx: </h3>";
            sort($resonadores);
            $elementosresonadores = count($resonadores);
            
            for($x = 0; $elementosresonadores > $x; $x++) {
                echo $resonadores[$x];
                echo "<br>";
            }
        
        # Descendente
        echo "<h3>Ordenacion descendente idx: </h3>";
        rsort($resonadores);
        
        for($x = 0; $elementosresonadores > $x; $x++) {
            echo $resonadores[$x];
            echo "<br>";
        }

    # 2. Ordenacion arrays asociativos
        $cartones = array("canto" => "Summon from memoria", "resonador" => "Kuuko", "ruler" => "Ayu",);

        # Ascendente segun el valor
            echo "<h3>Ordenacion ascendente segun el valor aso: </h3>";
            asort($cartones);

            foreach($cartones as $x => $valor) {
                echo $x . ": " . $valor;
                echo "<br>";
            }

        # Descendente segun el valor
        echo "<h3>Ordenacion descendente segun el valor aso: </h3>";
        arsort($cartones);

        foreach($cartones as $x => $valor) {
            echo $x . ": " . $valor;
            echo "<br>";
        }

        # Ascendente segun la clave
        echo "<h3>Ordenacion ascendente segun la clave aso: </h3>";
        ksort($cartones);

        foreach($cartones as $x => $valor) {
            echo $x . ": " . $valor;
            echo "<br>";
        }

        # Descendente segun la clave
        echo "<h3>Ordenacion descendente segun la clave aso: </h3>";
        krsort($cartones);

        foreach($cartones as $x => $valor) {
            echo $x . ": " . $valor;
            echo "<br>";
        }
        
?>