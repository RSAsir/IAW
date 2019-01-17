<?php
	// FUNCION DE CONEXION A LA BD
	// La funcion se podria poner en el codigo principal
	function conectar() { 
		//mysqli se utiliza para las funciones de servidor, tambien existe mysql pero esta obsoleta.

		$conexion=@mysqli_connect('localhost','root','endswithyou','emp_dep') // Si quitamos la arroba muestra warning si lo hubiera (habria que confirmar deshabilitando opciones en php.ini)
		or die ("No se puede conectar con el servidor o la base de datos"); // Si falla la conexion sale y muestra el texto

		mysqli_set_charset($conexion,'utf8'); //Para la conexion actual usa este juego de caracteres
		return $conexion;} 
?>
