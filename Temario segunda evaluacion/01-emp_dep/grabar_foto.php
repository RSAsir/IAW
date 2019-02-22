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

        $tipos_permitidos= array('image/jpeg','image/gif','image/png'); // FORMATOS DE IMAGEN PERMITIDOS
        // echo $_FILES['foto']['type'] ."<br>"; SOLO PARA VER EL TIPO DE FICHERO, SE PUEDE QUITAR


        if($_FILES['foto']['error'] > 0){ // FOTO ES EL NOMBRE DEL CAMPO DEL FORMULARIO, LO SEGUNDO SON NOMBRES DEL SISTEMA
            echo "Error al subir la imagen";
            echo "<a href=\"lista_empleados.php\">Volver al listado</a>";
        } elseif (!in_array($_FILES['foto']['type'], $tipos_permitidos)){ // COMPROBACION DEL TAMAÑO
            echo "El archivo no es una imagen.";
            echo "<a href=\"lista_empleados.php\">Volver al listado</a>";
        } elseif ($_FILES['foto']['size'] > 1000000) { //COMPROBACION TAMAÑO
            echo "El tamaño maximo para la imagen es 1Mb.";
            echo "<a href=\"lista_empleados.php\">Volver al listado</a>";
        } else {
            $f="./img/".$_FILES['foto']['name']; // lugar donde se guarda la foto
            //echo $f;
            $resultado=@move_uploaded_file($_FILES['foto']['tmp_name'],$f); // SE GRABA LA IMAGEN EN EL DIRECTORIO

            $sql="update emp set fotografia='". $f ."' where emp_no=". $_SESSION['id_empleado'];
            //echo $sql;
            $resultado2=mysqli_query($conexion,$sql);

            header("location:lista_empleados.php");
        }



    
    ?>
  
</body>
</html>