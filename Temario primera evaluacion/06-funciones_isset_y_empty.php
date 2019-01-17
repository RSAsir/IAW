<?php

	// Funcion isset devuelve 1 si existe la variable, si es falso no muestra nada.
		$numero = 1;
	
		echo "La funcion isset de la variable ";
		echo isset($numero);

	echo "<br>";
	
	// Funcion empty devuelve 1 si la vaiable esta vacia, si esta llena no muestra nada.
	
		echo "La funcion empty de la variable ";
		echo empty($numero2);
		
	echo "<br>";
	
	// Funcion unset limpia el valor de una variable.
	
		unset($numero);
		echo "La funcion empty de la variable que hemos vaciado ";
		echo empty($numero);
		
		
		// VERSION CON IF
		/* if (empty($numero)) echo "La variable esta vacia.";
			else echo "La variable tiene valor.";
			
		if ($numero==null) echo "<br> La variable esta vacia.";
			else echo "<br> La variable tiene valor."; */
?>