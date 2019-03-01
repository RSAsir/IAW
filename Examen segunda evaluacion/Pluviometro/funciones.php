<?php
	// FUNCION DE CONEXION A LA BD
	function conectar() { 

		$conexion=@mysqli_connect('localhost','root','endswithyou','precipitaciones_mes_ano') 
		or die ("No se puede conectar con el servidor o la base de datos"); 

		mysqli_set_charset($conexion,'utf8');
        return $conexion;
    } 
?>