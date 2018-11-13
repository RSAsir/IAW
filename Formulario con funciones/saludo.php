<?
							if($_GET['idioma']=='Español') echo "Hola " . $_GET['nombre'];
								else echo "Hello " . $_GET['nombre'];
							echo "<br> La fecha es " . $_GET['fecha'] . "<br>";
							echo "<a href=\"fecha.php\"> Otro saludo? </a>";
?>