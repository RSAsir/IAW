<?php
	
	// Las variables son case-sensitive
	// Las variables empiezan con A-z o _, nunca numeros, aunque si pueden contenerlos.
	$primera = 2;
	$Primera = 3;
	$PRIMERA = "Hola mundo"; # Cuando una variable lleva cadena de texto se emplean comillas.
	
	// Comillas dobles muestran el valor de las variables.
	echo "El valor de pimera es $primera <br> el valor de segunda es $Primera <br> el valor de tercera es $PRIMERA. <br>";
	
	// Comillas simples NO muestran el valor de las variables.
	echo 'El valor de pimera es $primera y el valor de segunda es $Primera.';


	/*
		Las variables pueden ser de tres tipos:
			- Locales: Aquellas declaradas dentro de una funcion y que no existen fuera de ella.
			- Globales: Aquellas declaradas fuera de una funcion y que no existen dentro de estas.
			- Estaticas: Variables locales que no pierden su valor despues de que la funcion se ejecuta.
	*/

	
?>