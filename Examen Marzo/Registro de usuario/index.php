<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de usuario</title>
</head>
<body>
    <?php
        include "funciones.php";
        $conexion = conectar();
        $login = $_POST['login'];
        $password = $_POST['password'];

        // CREACION DEL USUARIO

            if(isset($_POST['grabar'])) {

                // CONTROL DE ERRORES DE FORMULARIO
                    if($_POST['repassword'] != $_POST['password']) {
                        echo "Las contraseñas no coinciden.";
                        $boton==true;
                        $error = 1;
                    }

                if(isset($_POST['grabar']) and $error != 1) {
                    $sql = "INSERT INTO usuario(nombre, pass) VALUES ('$login', '$password')";
                    mysqli_query($conexion,$sql);
                    //echo $sql;
                }

                // COMPROBACION ERRORES SUBIDA
                    if(mysqli_errno($conexion) == 1062) {
                        $error = 1;
                        echo "El nombre de usuario introducido ya existe en la base de datos";
                    } else if(mysqli_errno($conexion) != 0 and $boton == true) {
                        $error = 1;
                        echo "Se ha producido un error al subir los datos.";
                    }
            }    

            


        if(!isset($_POST['grabar']) or $error == 1) {
    ?>
    <form action="index.php" method="post">
        <table>
            <tr>
                <td>
                    Nombre de usuario:
                </td>
                <td>
                    <input type="text" name="login" value="<?php echo $_POST['login']?>" required>
                </td>
            </tr>

            <tr>
                <td>
                    Contraseña:
                </td>
                <td>
                    <input type="password" name="password" required>
                </td>
            </tr>

            <tr>
                <td>
                    Repita la contraseña:
                </td>
                <td>
                    <input type="password" name="repassword" required>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Registrar" name="grabar">
                </td>
            </tr>

        </table>
    </form>

        <?php } else { ?>
            <a href="./index.php">¿Grabar otro usuario?</a>
        <?php } ?>
</body>
</html>