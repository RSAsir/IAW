<?php
    //echo "vamos a insertar";

    $sql="insert into emp (emp_no,nombre,fecha_alta,oficio,salario,comision,dep_no) values(".$_POST['emp_no'].",'".$_POST['nombre']."','".$fecha."','".$_POST['oficio']."',".$_POST['salario'].",".$comision.",".$_POST['departamento'].")";
    //echo $sql;

    mysqli_query($conexion,$sql);
    if (mysqli_errno($conexion)==0) echo "El empleado se ha dado de alta con exito.";
        else echo "Error al insertar en la BD";

?>

<a href="./alta_empleados.php">Dar de alta otro empleado</a>