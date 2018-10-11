<?php
	// Declaracion del vector.
		$vector = array();

	// Extraccion de los 5 valores normales.
		for($i = 1;$i < 7;++$i) { 
		
			$valor = rand(0, 50);
			
			// Evitar valores repetidos.
			while (in_array($valor,$vector)) {
				$valor = rand(0, 50);
			}
		
			// Registro del valor obtenido en el vector.
				$vector[$i] = $valor;
		
		}
	
	// Ordenacion del vector
		sort($vector);
		
	// Mostrar los 5 valores normales.
		for($b = 1; $b < 6; ++$b){
			echo "El valor " . $b . " de la loteria es " . $vector[$b] . "<br>";
		}
   
	// Valor especial.
		$especial = rand(0, 50);
		
		while (in_array($especial,$vector)) {
			$especial = rand(0, 50);
		}
		
		echo "<br> El numero especial es  " . $especial; 
?>