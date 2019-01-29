<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diccionario - Borrar</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header>
        <div class="titulo">
            <h2>Diccionario - Borrar</h2>
        </div>

        <div class="enlaces">
            <a href="./index.html">Volver a principal</a>
        </div>
    </header>

    <?php
        if(isset($_POST['grabar'])){
            include "funciones.php";
            $conexion=conectar();

            $palabra="'".strtoupper($_POST['palabra'])."'";
            $sql="select * from tabla where palabra=$palabra"; //echo $sql;
            $resultado=mysqli_query($conexion,$sql);

            if(mysqli_num_rows($resultado)==0){ 
                echo "La palabra no esta en la BD.";
            } else {
                $significados=mysqli_query($conexion, $sql);

                echo "Los significados de la palabra $palabra son: <br> <br>";
                echo "<table border=1 ><tr><td><b>Definicion</b></td> <td><b>Borrar</b></td></tr>";

                while ($fila=mysqli_fetch_assoc($significados)) {
                    echo "<tr><td>".$fila['significado']."</td><td> <input type=\"checkbox\" name=\"PLACEHOLDER\"></td></tr>";
                }
                
                echo "</table>";
                ?> <br><input type="submit" name="borrado" value="Borrar"> <?php
            }
        }
        echo $_POST['borrar'];
        if(!isset($_POST['grabar'])) {
    ?>

    <div class="cuerpo">
        <form action="./borrar.php" method="post">
            Significados de la palabra: <input type="text" name="palabra" id="palabra">
            <br>
            <input type="submit" name="grabar" value="Enviar">
        </form>
    </div>

    <?php
        }
    ?>
</body>
</html>