<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
	<title>SISTEMA DE DOS ECUACIONES</title>
	<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body>

<center><h1><b><u>SISTEMA DE DOS ECUACIONES (RESULTADOS)</center></u></b></h1>
<div id="soluciones">
<?php
	// CONTROL DE ERRORES, SE UBICAN SALTEADOS PARA QUE CADA UNO OCUPE BIEN SU LUGAR
		if (empty($_POST['a1'])) {
			echo "El valor a1 no puede estar vacio. <br>";
			$error = 1;
		}

		if (!is_numeric($_POST['a1']) && !empty($_POST['a1'])) {
			echo "El valor a1 no puede ser un caracter.<br>";
			$error = 1;
		}

		if (empty($_POST['b1'])) {
			echo "El valor b1 no puede estar vacio.<br>";
			$error = 1;
		}

		if (!is_numeric($_POST['b1']) && !empty($_POST['b1'])) {
			echo "El valor b1 no puede ser un caracter.<br>";
			$error = 1;
		}

		if (empty($_POST['c1'])) {
			echo "El valor c1 no puede estar vacio.<br>";
			$error = 1;
		}

		if (!is_numeric($_POST['c1']) && !empty($_POST['c1'])) {
			echo "El valor c1 no puede ser un caracter.<br>";
			$error = 1;
		}

		if (empty($_POST['a2'])) {
			echo "El valor a2 no puede estar vacio.<br>";
			$error = 1;
		}

		if (!is_numeric($_POST['a2']) && !empty($_POST['a2'])) {
			echo "El valor a2 no puede ser un caracter.<br>";
			$error = 1;
		}

		if (empty($_POST['b2'])) {
			echo "El valor b2 no puede estar vacio.<br>";
			$error = 1;
		}

		if (!is_numeric($_POST['b2']) && !empty($_POST['b2'])) {
			echo "El valor b2 no puede ser un caracter.<br>";
			$error = 1;
		}

		if (empty($_POST['c2'])) {
			echo "El valor c2 no puede estar vacio.<br>";
			$error = 1;
		}

		if (!is_numeric($_POST['c2']) && !empty($_POST['c2'])) {
			echo "El valor c2 no puede ser un caracter.";
			$error = 1;
		}

	if ($error == 0) {
		// DELCARACION DE VARIABLES (NO SE DEBE HACER PERO FACILITA LA VIDA)
			$a1= $_POST['a1'];
			$b1= $_POST['b1'];
			$c1= $_POST['c1'];
			$a2= $_POST['a2'];
			$b2= $_POST['b2'];
			$c2= $_POST['c2'];

		// Primer caso 
			if ($a1 * $b2 - $a2 * $b1 == 0 && $b1 * $c2 - $b2 * $c1 == 0) {
				echo "Primer caso";
			} else

		// Segundo caso
			if ($a1 * $b2 - $a2 * $b1 != 0) {
				echo "x = ". ($c1*$b2-$c2*$b1)/($a1*$b2-$a2*$b1);
				echo "y = ". ($a1*$c2-$a2*$c1)/($a1*$b2-$a2*$b1);
			} else

		// Segundo caso

		// Tercer caso
			if ($a1 * $b2 - $a2 * $b1 == 0) {
				echo "El sistema no tiene solucion"; // PARA EVITAR WARNING DIVISION POR 0
			} else if ($a1 * $b2 - $a2 * $b1 == 0 && ($a1 * $c2 - $a2 * $c1)/($a1 * $b2 - $a2 * $b1)!= 0 ) {
				echo "El sistema no tiene solucion";
			}
		}
	
?>
<hr>
<br><br>
<br><a href="index.php"><input type="submit" value="VOLVER AL FORMULARIO"></a></div>
<div id="pie">
nombre del alumno <br> Implantación de Aplicaciones Web (1ª Evaluación)
</div>
</body><html>
