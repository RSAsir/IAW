<?php

	// Declaracion
		$vector = ["ana","luis",true,1,1.3];
	
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
	
	for ($i = 0; $i < 5; ++$i)
	{
		echo "el indice es " . $i. " su valor es " . $vector[$i] . "<br>";
	}
?>