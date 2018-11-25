<?php
	# 2. Arrays asociativos
		# Son aquellos que usan una clave definida por el usuario.
			$persona = array("nombre" => "Grys", "apellido" => "Bernkastel");
			echo $persona ['nombre'];
			echo "<br>" . $persona['apellido'];
			echo "<br>";
			

			# Desplazamiento por el vector:
				$vector = array('dos',50=>'tres');

				foreach($vector as $x => $valor) 
				echo $x . " : " . $valor . "<br>";
?>