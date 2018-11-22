<?php

	// Declaracion
		$vector = array(1=>"ana",0=>"luis",50=>true,1,1.3);	// El "=> nos cambia la posicion del array"
		//$vector = ["ana","luis",true,1,1.3];
		
		echo "El numero de valores en el vector es (sin GB): " . count($vector) . ".";
		
	// Invocacion
	/*
		echo $vector[0];
		echo "<br>";
		echo $vector[1];
		echo "<br>";	
		echo $vector[2];
		echo "<br>";	
		echo $vector[3];
		echo "<br>";	
		echo $vector[4];
	*/
	echo "<br>";
	$vector[] = "asssasd"; // Asigna un nuevo valor de vector a continuacion del ultimo.
	sort($vector); // Ordena en sentido ascendente.
	echo "El numero de valores en el vector es (con GB): " . count($vector) . ".";
	echo "<br>";
	echo "<br>";
	
	// Ningun bucle sirve para recorer vectores por que se activan los indices.
	for ($i = 0; $i <= 5; ++$i)
	{
		echo "el indice es " . $i. " su valor es " . $vector[$i] . "<br>";
	}
?>