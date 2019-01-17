<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="./style.css" type="text/css">
		<title>ALTA EMPLEADOS</title>
	</head>

	<body>
		<?php
			include "funciones.php";
			$conexion=conectar();

			$sql="select dept_no, dnombre from dep";
			$departamentos=mysqli_query($conexion, $sql); // or die("Imposible acceso a la BD.";
			echo mysqli_errno($conexion);
		?>
	</body>

</html>

