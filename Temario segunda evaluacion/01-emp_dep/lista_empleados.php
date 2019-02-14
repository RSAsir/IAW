<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // SI FALLA EL CODIGO REVISAR EL NOMBRE DE TABLAS EN OTROS ARCHIVOS
        session_start();
        include "funciones.php";
        $conexion=conectar(); 

        //bienvenida al usuario
        $sql="SELECT login FROM usuario WHERE id=".$_SESSION['id'];
        $usuario=mysqli_query($conexion,$sql);

        if(mysqli_errno($conexion)!=0) {
            header("location:index.php");
        } else {
            $fila=mysqli_fetch_assoc($usuario);
            echo "Bienvenido " . $fila['login'];
            ?> <a href="./index.php?salir=1">Cerrar sesion</a> <?php // operador ternario pasa un valor mediante $_GET
        }

        $sql="  select 
                    emp_no,nombre,date_format(fecha_alta,'%d/%m/%Y') fecha_alta,oficio,salario,comision,dnombre
                from
                    emp e inner join dep d on (e.dep_no=d.dept_no)";

        $empleados=mysqli_query($conexion,$sql);

        if(mysqli_errno($conexion)!=0) {
            echo "Imposible acceder a la BD.";
        } else {
            ?>

                <center> <h3>LISTADO EMPLEADOS</h3><table border="1">
                    <th>Codigo Empleado</th>
                    <th>Nombre</th>
                    <th>Fecha alta</th>
                    <th>Oficio</th>
                    <th>Salario</th>
                    <th>Comision</th>
                    <th>Nombre departamento</th>

            <?php
                while($fila=mysqli_fetch_assoc($empleados))
                echo "<tr><td>".$fila['emp_no']."</td>
                <td>".$fila['nombre']."</td>
                <td>".$fila['fecha_alta']."</td>
                <td>".$fila['oficio']."</td>
                <td>".$fila['salario']."</td>
                <td>".$fila['comision']."</td>
                <td>".$fila['dnombre']."</td></tr>";
        }
    ?>
                </table></center>
                <a href="index.php">Volver</a>
</body>
</html>