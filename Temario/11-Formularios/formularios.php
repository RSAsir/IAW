<!DOCTYPE html>
	<html>
		<head>
			<title></title>
			<meta charset="utf-8">
		</head>
		
		<body>
			<h1><center>Te saludo</center></h1>
			
			<form method="post" action="validar.php" name="formularios"> <!-- Se le pueden pasar dos "method" (post o get). -->
				<label>Nombre:</label><input type="text" name="nombre">
				<br>
				<label>Idioma:</label>
					<br>
					<input type="radio" name="idioma" id="Español "value="Español" checked> Español
					<br>
					<input type="radio" name="idioma" id="Ruso" value="Ruso"> Ruso
					<br>
					<input type="submit" name="saluda" value="Saludo">
					<input type="reset" name="borrar" value="Borrar">
			</form>
		</body>
	</html>