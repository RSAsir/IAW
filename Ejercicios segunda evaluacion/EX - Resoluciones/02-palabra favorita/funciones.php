<?php
	// FUNCION DE CONEXION A LA BD
	// La funcion se podria poner en el codigo principal
	function conectar() { 
		//mysqli se utiliza para las funciones de servidor, tambien existe mysql pero esta obsoleta.

		$conexion=@mysqli_connect('localhost','root','endswithyou','palabra_favorita') // Si quitamos la arroba muestra warning si lo hubiera (habria que confirmar deshabilitando opciones en php.ini)
		or die ("No se puede conectar con el servidor o la base de datos"); // Si falla la conexion sale y muestra el texto

		mysqli_set_charset($conexion,'utf8'); //Para la conexion actual usa este juego de caracteres
		return $conexion;} 

	function comprobar_usuario($conexion) {
		if($_GET['salir']) {
			session_destroy();
			return false;
		}

		if($_SESSION['id']) return true;

		if(isset($_POST['entrar'])) {

			$sql="SELECT * from usuario where login='".$_POST['login']."'and password='".md5($_POST['pass'])."'"; // Se pasa la pass encriptada
			$usuario=mysqli_query($conexion,$sql);

			if(mysqli_errno($conexion)!=0) {
				echo "Imposible conexion BD.";
				return false;
			} else {
				if(mysqli_num_rows($usuario)==1) {
					$fila=mysqli_fetch_assoc($usuario);
					$_SESSION['id_usuario']=$fila['id_usuario']; // echo "la sesion iniciada " . $_SESSION['id'];
					return true;
				} else {
					echo "Usuario o contraseña incorrectos";
					return false;
				}
			}
		}
			
	}	
?>
