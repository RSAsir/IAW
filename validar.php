<!DOCTYPE html>
	<html>
		<head>
			<title></title>
			<meta charset="utf-8">
		</head>
		
		<body>
			<h1>
				<?php
					if(isset($_POST['saluda'])) {
						
						if($_POST['nombre']==null) echo "Debe introducir un nombre.";
						
							else {
								
								if($_REQUEST['idioma']=='Español') {
									echo "Hola " . $_POST['nombre'];
								} else echo "привет " . $_POST['nombre'];
								
							} //Se saluda
							
 					} else echo "No as pasado por el formulario.";
				?>
			</h1>
		</body>
	</html>