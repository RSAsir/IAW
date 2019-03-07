<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <table>
            <td>
                Login:
            </td>
            <td>
                <input type="text" name="login" required>
            </td>
            <tr>
                <td>
                    Contraseña:
                </td>
                <td>
                    <input type="password" name="pass" required>
                </td>
            </tr>
        </table>
        <p>
            <input type="submit" name="entrar" value="Login" >
        </p>
    </form>

    <a href="index.php">Volver a inicio</a>
    <a href="registro.php">Registrame</a>

</body>
</html>