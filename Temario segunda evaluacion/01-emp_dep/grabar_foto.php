<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        session_start();
        include "funciones.php";
        //echo "El id es " . $_SESSION['id_empleado'];

        $conexion=conectar();

        if($_FILES['foto']['error']==0){
            $f="./img/".$_FILES['foto']['name']; // lugar donde se guarda la foto
            //echo $f;
            $resultado=@move_uploaded_file($_FILES['foto']['tmp_name'],$f);
        }

        $sql="update emp set fotografia='". $f ."' where emp_no=". $_SESSION['id_empleado'];
        //echo $sql;
        $resultado2=mysqli_query($conexion,$sql);

        header("location:lista_empleados.php");
    ?>
  
</body>
</html>