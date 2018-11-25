<!DOCTYPE html>
	<html>
		<head>
			<title></title>
			<meta charset="utf-8">
		</head>
		
		<body>
		
			<h1>
				<?

					
					include "funcion_fecha.php";
					if (isset($_GET['saluda'])) {
						// Se pasa el formulario
						$mensaje_nombre=null;$mensaje_fecha=null;
						$sw=true;
						
						if($_GET['nombre']==null) { 
							$mensaje_nombre='ES UN CAMPO OBLIGATORIO';$sw=false;
						}
						
						if (!comprobar_fecha($_GET['fecha'])) {
							$mensaje_fecha='LA FECHA ES INCORRECTA, FORMATO INCORRECTO O ESTA EN BLANCO';
							$sw=false;
						}
						
						if($sw) 
						include "funcion_saludo.php";
					}
					
					if(isset($_GET['saluda']) or (!$sw)){
							//No he pasado por el formulario o hay errores y debo volver

							?>
							<form method="get" action="fecha.php" name="formularios"> <!-- Se le pueden pasar dos "method" (post o get). -->
							<label>Nombre:</label><input type="text" name="nombre" value="<? echo $_GET['nombre'];?>">
							<? echo $mensaje_nombre;?>
							<br>
							<label>Idioma:</label>
							<br>
							<input type="radio" name="idioma" id="Español "value="Español" checked> Español
							<br>
							<input type="radio" name="idioma" id="Ruso" value="Ruso"> Ruso
							<br>
							<label>Fecha nacimiento (dd/mm/aaaa)</label><input type="text" name="fecha" value="<? echo $_GET['fecha'];?>">
							<? echo $mensaje_fecha;?>
							<br>
							<input type="submit" name="saluda" value="Saludo">
							<input type="reset" name="borrar" value="Borrar">
							</form>
					<?} ?>
					
			</h1>
		
		</body>
	</html>