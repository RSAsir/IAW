<head>
	<meta charset="utf-8">
</head>

<body>
	<?php

		// Variables
		
			$numero = 1; echo "El tipo de número es " .gettype($numero). "."; 	// El "." es para concatenar.
			
			echo "<br>";
			
			$numero =(string) $numero; echo "El tipo de número es " .gettype($numero). ".";
			
			echo "<br>";
			
			$booleano = true;
			echo "La variable booleano vale " .$booleano. " su tipo es " .gettype($booleano). ".";
			
			echo "<br>";
			
			$booleano2 = false; // Al ser false no muestra ningun valor numerico.
			echo "La variable booleano vale " .$booleano2. " su tipo es " .gettype($booleano2). ".";

	?>
</body>