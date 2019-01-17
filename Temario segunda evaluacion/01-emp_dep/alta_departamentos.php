<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="./style.css" type="text/css">
		<title>ALTA DEPARTAMENTOS</title>
	</head>

	<body>
		<?php
			if(!isset($_POST['grabar'])){
		?>

		<form action="alta_departamentos.php" method="post"> <!-- COMPROBAR SI FUNCIONA MAYUS/MINUS -->
			<h1>DATOS DEPARTAMENTO</h1>
			Departamento: <input type="number" name="dep_no" id="dep_no" required>
			<br>
			<br>
			Nombre de departamento: <input type="text" name="nombre" id="nombre" required>
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
				$dep_no="".$_POST['dep_no']."";
				$nombre="'".strtoupper($_POST['nombre'])."'"; //echo $nombre;
				$loc="'".strtoupper($_POST['localidad'])."'"; //echo $loc; SI SE PONE ANTES, DA PROBLEMAS POR QUE LAS COMILLAS YA LE DAN UN VALOR VACIO
				
				if ($loc!="''") {
					$sql="insert into dep values ($dep_no,$nombre,$loc)"; // OPCION 1 PARA SIMPLIFICAR LAS COMILLAS
				} else {
					$sql="insert into dep(dep_no,nombre)
					values($dep_no,$nombre)";
				}

				
				// $sql="insert into dep values (".$_POST['dep_no'].",'".$_POST['nombre']."','".$_POST['localidad']."')"; OPCION 2
				//echo "Damos de alta el departamento";
				//echo $sql;
				
				mysqli_query($conexion,$sql); //Pasamos la sentencia
				$error=mysqli_errno($conexion); // No tiene parametro de salida. Si devuelve 0 todo esta chachi, en caso contrario, devuelve un numero diferente.
				if($error==0) {
					echo "Departamento dado de alta correctamente";
				} else if ($error==1062) {
					 echo "EL CODIGO ". $_POST['dep_no'] . " YA EXISTE.";
				} else {
					echo "SE HA PRODUCIDO UN ERROR AL GRABAR EN LA BD.";
				}
				echo "<a href=\"alta_departamentos.php\"> Dar de alta otro departamento </a>";
			}

		?>
	</body>

</html>

