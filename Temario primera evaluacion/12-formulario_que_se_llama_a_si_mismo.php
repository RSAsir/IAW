<!DOCTYPE html>
	<html>
		<head>
			<title></title>
			<meta charset="utf-8">
		</head>
		
		<body>
			
			<? 
				if(isset($_POST['saluda'])){
					if($_POST['nombre']==null) {
						$mensaje='No puede estar vacio.';}
					elseif($_POST['idioma']=='Español') 
						echo "Hola " . $_POST['nombre'];
					else echo "Hello " . $_POST['nombre']; }
					echo "<br><a href=\"12-formulario_que_se_llama_a_si_mismo.php\">Volver al formulario</a>";
					if(!isset($_POST['saluda']) or $mensaje!=null)
				{
				?>
				
			<h1><center>Te saludo</center></h1>
			
			<form method="post" action="12-formulario_que_se_llama_a_si_mismo.php" name="formularios"> <!-- Se le pueden pasar dos "method" (post o get). -->
				<label>Nombre:</label><input type="text" name="nombre">
				<? echo $mensaje ?>
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
			
				<?}?>

		</body>
	</html>