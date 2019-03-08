<?php

	function conectar() { 

		$conexion=@mysqli_connect('localhost','root','endswithyou','usuario_marzo_2019') 
		or die ("No se puede conectar con el servidor o la base de datos"); 
		mysqli_set_charset($conexion,'utf8'); 
		return $conexion;} 

?>
