<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="./style.css" type="text/css">
		<title>ALTA DEPARTAMENTOS</title>
	</head>

	<body>
		<?php
			session_start(); // se realiza despues del login
			if(!isset($_POST['grabar'])){
		?>

		<form action="alta_departamentos.php" method="post"> <!-- COMPROBAR SI FUNCIONA MAYUS/MINUS -->
			<h1>DATOS DEPARTAMENTO</h1>
			Departamento: <input type="number" name="dept_no" id="dept_no" required>
			<br>
			<br>
			Nombre de departamento: <input type="text" name="dnombre" id="dnombre" required>
			<br>
			<br>
			Localidad: <input type:="text" name="localidad" id="localidad">
			<br>
			<br>
			<input type="submit" name="grabar" value="Enviar">
		</form>

		<?php
			}

			else {
				include "funciones.php";
				$conexion=conectar();
				$dept_no="".$_POST['dept_no']."";
				$dnombre="'".strtoupper($_POST['dnombre'])."'"; //echo $dnombre;
				$loc="'".strtoupper($_POST['localidad'])."'"; //echo $loc; SI SE PONE ANTES, DA PROBLEMAS POR QUE LAS COMILLAS YA LE DAN UN VALOR VACIO
				
				if ($loc!="''") {
					$sql="insert into dep values ($dept_no,$dnombre,$loc)"; // OPCION 1 PARA SIMPLIFICAR LAS COMILLAS
				} else {
					$sql="insert into dep(dept_no,dnombre)
					values($dept_no,$dnombre)";
				}

				
				// $sql="insert into dep values (".$_POST['dept_no'].",'".$_POST['dnombre']."','".$_POST['localidad']."')"; OPCION 2
				//echo "Damos de alta el departamento";
				//echo $sql;
				
				mysqli_query($conexion,$sql); //Pasamos la sentencia
				$error=mysqli_errno($conexion); // No tiene parametro de salida. Si devuelve 0 todo esta chachi, en caso contrario, devuelve un numero diferente.
				if($error==0) {
					echo "Departamento dado de alta correctamente";
				} else if ($error==1062) {
					 echo "EL CODIGO ". $_POST['dept_no'] . " YA EXISTE.";
				} else {
					echo "SE HA PRODUCIDO UN ERROR AL GRABAR EN LA BD.";
				}
				echo "<a href=\"alta_departamentos.php\"> Dar de alta otro departamento </a>";
			}

		?>
	</body>

</html>

