<head>
	<meta charset="utf-8">
</head>

<body>
	<?php

		// Los tipos de datos existentes son los siguientes:

			# 1. Interger (Numeros)
			$numero = 1; echo "El tipo de número es " .gettype($numero). "."; 	// El "." es para concatenar.
			
			echo "<br>";
			
			# 2. String (Secuencia de caracteres)
			$numero =(string) $numero; echo "El tipo de número es " .gettype($numero). ".";
			
			echo "<br>";

			# 3. Float (Punto flotante)
			$numero =(float) $numero; echo "El tipo de número es " .gettype($numero). ".";
			
			echo "<br>";
			
			# 4. Booleanos (true o false)
			$booleano = true; # True toma el valor 1, false el 0.
			echo "La variable booleano vale " .$booleano. " su tipo es " .gettype($booleano). ".";
			
			echo "<br>";
			
			$booleano2 = false; // Al ser false no muestra ningun valor numerico.
			echo "La variable booleano vale " .$booleano2. " su tipo es " .gettype($booleano2). ".";

			echo "<br>";

			# 5. Arrays (se veran posteriormente)
			# 6. Objetos (se veran posteriormente)

			# 7. Null (variables sin valor)

			$nulo = null;
			echo "La variable nulo vale " .$nulo. " su tipo es " .gettype($nulo). ".";

		# La funcion gettype() nos devuelve el tipo de datos de una variable.
		# Si ponemos "(tipo_de_variable)$variable" podemos cambiar el tipo de datos de una variable.
	?>
</body>