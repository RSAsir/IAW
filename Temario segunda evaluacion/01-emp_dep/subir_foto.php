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
        //include "funciones.php";
        //$conexion=conectar(); 

        $_SESSION['id_empleado']= $_GET['id']; // NECESARIO PASAR LA ID PORQUE ESTA SE PIERDE
    
    ?>
    <h3>Subir foto de perfil</h3>

    <form action="grabar_foto.php" enctype="multipart/form-data" method="post">
        <input type="file" name="foto">
        <input type="submit" value="Enviar">
    </form>

    <br>
    <a href="index.php">Cancelar</a>
</body>
</html>