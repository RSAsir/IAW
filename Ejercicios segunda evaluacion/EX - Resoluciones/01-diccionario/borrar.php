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
        if(isset($_POST['borrado'])) {
            $_POST['grabar']=true; 
            include "funciones.php";
            $conexion=conectar();
            $deleteId=implode(",", $_POST['checkbox']); 
            $sql="DELETE FROM tabla WHERE id IN ($deleteId)"; //echo $sql;

            mysqli_query($conexion,$sql);

            if(mysqli_errno($conexion)==0) {
                echo "Definiciones borradas con exito.";
            } else {
                echo "Se ha producido un error al grabar en la BD.";
            }
        }

        if(isset($_POST['grabar']) && !isset($_POST['borrado'])){
            include "funciones.php";
            $conexion=conectar();

            $palabra="'".strtoupper($_POST['palabra'])."'";
            $sql="select * from tabla where palabra=$palabra"; //echo $sql;
            $resultado=mysqli_query($conexion,$sql);

            if(mysqli_num_rows($resultado)==0){ 
                echo "La palabra no esta en la BD.";
            } else {
                if(!isset($_POST['borrado'])) {
                    $significados=mysqli_query($conexion, $sql);

                    echo "Los significados de la palabra $palabra son: <br> <br>";
                    ?>

                    <form action="./borrar.php" method="post">
                        <table border=1 >
                            <tr>
                                <td>
                                    <b>Definicion</b>
                                </td> 
                                
                                <td>
                                    <b>Borrar</b>
                                </td>
                            </tr> 
                            

                        <?php while ($fila=mysqli_fetch_assoc($significados)) { ?>

                            <tr>
                                <td>
                                    <?php echo $fila['significado']; ?>
                                </td>

                                <td> 
                                        <input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $fila['id'];?>">
                                    
                                </td>
                            </tr>
                        <?php } ?> 
                                
                        </table>
                            <br><input type="submit" name="borrado" value="Borrar"> 
                    </form>
                        <?php
                } else {
                    $deleteId=implode(",", $_POST['checkbox']); 
                    $sql="DELETE FROM tabla WHERE id IN ($deleteId)";
                    mysqli_query($conexion,$sql);
                    echo "Definiciones borradas con exito.";
                }
            } 
        }
        
        
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