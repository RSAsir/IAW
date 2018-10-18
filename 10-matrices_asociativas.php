<?php
	// Matrices asociativas
		$vector = array("nombre" => "Grys", "apellido" => "Bernkastel");
		echo $vector ['nombre'];
		echo "<br>" . $vector['apellido'];
		
		echo "<br>";
		$vector=array('dos',50=>'tres');
		foreach($vector as $indice => $valor) // Se usa para recorrer el vector
		echo $indice . " : " . $valor . "<br>";
?>