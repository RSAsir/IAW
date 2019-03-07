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
        $password = $_POST['login'];
        // CONTROL DE ERRORES DE FORMULARIO
            // Aqui pueden añadirse restricciones o comprobacion doble de contraseña.

        // CREACION DEL USUARIO
            $sql = "INSERT INTO usuario(login, password) VALUES ('$login', MD5('$password'))";

            mysqli_query($conexion,$sql);
            //echo $sql;

            // COMPROBACION ERRORES SUBIDA
                if(mysqli_errno($conexion) == 1062) {
                    $error = 1;
                    echo "El nombre de usuario introducido ya existe en la base de datos";
                } else if(mysqli_errno($conexion) != 0) {
                    $error = 1;
                    echo "Se ha producido un error al subir los datos.";
                }
        if(!isset($_POST['grabar']) or $error == 1) {
    ?>
    <form action="registro.php" method="post">
        <table>
            <tr>
                <td>
                    Nombre de usuario:
                </td>
                <td>
                    <input type="text" name="login">
                </td>
            </tr>

            <tr>
                <td>
                    Contraseña:
                </td>
                <td>
                    <input type="text" name="password">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Registrar" name="grabar">
                </td>
            </tr>

            <tr>
                <td>
                    <a href="index.php">Volver a inicio</a>
                </td>
            </tr>
        </table>
    </form>

        <?php } else {
            header("location:index.php"); 
        }
        ?>
</body>
</html>