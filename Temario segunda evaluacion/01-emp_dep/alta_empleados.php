<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="./style.css" type="text/css">
		<title>ALTA EMPLEADOS</title>
	</head>

	<body>
		<?php
			session_start(); // se realiza despues del login
			include "funciones.php";
			$conexion=conectar();
			
			if (isset($_POST['grabar'])) {
				$error=false;

				// ERRORES DE dep_no (Codigo del empleado)

				// Que el valor no este vacio
				if($_POST['emp_no']==null){
					$error=true;
					$error_codigo="**Valor requerido";
				}

				// Que el valor sea  numerico, entero, positivo
					elseif(!is_numeric($_POST['emp_no']) or !ctype_digit($_POST['emp_no']) or $_POST['emp_no']<=0) {
						$error=true;
						$error_codigo="**El valor del codigo debe ser numerico, entero y positivo";
					}	

				// Que el valor no se encuentre en la bd
					else {
						$sql="select * from emp where emp_no=" . $_POST['emp_no'];
						$empleado=mysqli_query($conexion, $sql) or die ("IMPOSIBLE ACCESO A LA BD");
						if(mysqli_num_rows($empleado)!=0) { // si es distinto de 0 ese empleado ya esta registrado
							$error=true;
							$error_codigo="**Codigo ya utilizado.";
						}
					}
				
				// Validacion nombre

				if ($_POST['nombre']==null) {
					$error=true;
					$error_nombre="** El campo es obligatorio.";
				}

				if ($_POST['fecha_alta']==null) {
					$error=true;
					$error_fecha="** El campo es obligatorio.";
				} elseif(validar_fecha($_POST['fecha_alta'])==false) {
					$error=true;
					$error_fecha="** Formato fecha incorrecto";
				} else {
					$fecha=date_create($_POST['fecha_alta']);
					$fecha=date_format($fecha, 'Y-m-d'); 
					//echo $fecha;
				}

				// VALIDACION SALARIO (MUY IMPORTANTE: METODO PARA PASAR NULL A LA BD)
				
				if($_POST['salario']==null) {
					$error_salario="** El campo es obligatorio";
				} elseif(!is_numeric($_POST['salario']) or $_POST['salario'] <= 0) {
					$error=true;
					$error_salario="** El valor debe ser numerico y positivo";
				}

				// VALIDACION COMISION

				if($_POST['comision']==null) {
					$comision="NULL";
				} elseif(!is_numeric($_POST['comision']) or $_POST['comision'] < 0) {
					$error=true;
					$error_comision="** El valor debe ser numerico y positivo";
				} else {
					$comision=$_POST['comision'];
				}

				// CONTROL FINAL

				if(!$error) {
					include "insertar.php";
				}

			} 
			
			if(!isset($_POST['grabar']) or $error) { // si el formulario no tiene valores o hay errores, se va al formulario
				$sql="select dept_no, dnombre from dep"; // Se extraen los departamentos de la BD
				$departamentos=mysqli_query($conexion, $sql); // or die("Imposible acceso a la BD.";
				//echo mysqli_errno($conexion);
			// se cierra abajo
		?>

		<form action="alta_empleados.php" method="post">
			Codigo empleado: <input type="text" name="emp_no" id="emp_no" value="<?php echo $_POST['emp_no']; ?>"> <?php echo $error_codigo; ?>
			<br>
			<br>
			Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo $_POST['nombre']; ?>"> <?php echo $error_nombre; ?>
			<br>
			<br>
			Fecha de alta (dd/mm/aaaa): <input type="text" name="fecha_alta" id="fecha_alta" value="<?php echo $_POST['fecha_alta']; ?>"> <?php echo $error_fecha; ?>
			<br>
			<br>
			Oficio: <select name="oficio" id="oficio">
				<option value="administrativo">Administrativo</option>
				<option value="analista">Analista</option>
			</select>
			<br>
			<br>
			Salario: <input type="text" name="salario" id="salario" value="<?php echo $_POST['salario']; ?>"> <?php echo $error_salario; ?>
			<br>
			<br>
			Comision: <input type="text" name="comision" id="comision" value="<?php echo $_POST['comision']; ?>"> <?php echo $error_comision; ?>
			<br>
			<br>
			Departamento: <select name="departamento" id="departamento">
				<?php 
					while ($fila=mysqli_fetch_assoc($departamentos)) { // cada $departamento se convierte en un $fila[i]
						echo "<option value=".$fila['dept_no'].">".$fila['dnombre']."</option>"; // se muestra cada $fila[i], se asigna el numero por el formato de la bd.
					}
				?>			
			</select>
			<br>
			<br>
			<input type="submit" name="grabar" value="Enviar" >
			<input type="reset" name="borrar" value="Reiniciar">

		</form>
		<?php } ?>
	</body>

</html>

