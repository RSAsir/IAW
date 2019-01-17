<?php

	# Tipos de array:

		# 1. Indexativo
			$frutas = array("Pera", "Naranja", "Manzana");

			# Tambien puede hacerse:
				$frutas[3] = "Platano";

				echo "En la cesta hay " . $frutas[0] . " y " . $frutas[3];
				echo "<br>";

			# Funcion count:
				echo count($frutas); # Nos dice el numero de elementos en el array.
				echo "<br>";

			# Desplazamiento por todo el array:
				$elementos_frutas = count($frutas);

				for($x = 0; $elementos_frutas > $x; $x++) {
					echo $frutas[$x];
					echo "<br>";
				}

?>