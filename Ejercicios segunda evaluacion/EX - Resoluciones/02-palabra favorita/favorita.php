<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votar palabra</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header>
        <div class="titulo">
            <h2>Palabra favorita - Votar</h2>
        </div>
        <div class="enlaces">
            <a href="./principal.php">Volver a principal</a>
        </div>
    </header>
    
    <?php
        session_start();

        include "funciones.php";
        $conexion=conectar();
        $sql="select * from tabla";
        $sql2="select votado from usuario where id_usuario='".$_SESSION['id_usuario']."'";
        //echo $sql2;
        $resultado=mysqli_query($conexion,$sql);
        $resultado2=mysqli_query($conexion,$sql2);

        if(isset($_POST['grabar'])) {
            $sql3="UPDATE tabla SET votos = votos +1 WHERE palabra ='".$_POST['voto']."'"; //echo $sql;
            $sql4="UPDATE usuario SET votado = 's' WHERE id_usuario='".$_SESSION['id_usuario']."'";
            mysqli_query($conexion,$sql3);
            mysqli_query($conexion,$sql4);

            if(mysqli_errno($conexion)==0) {
                echo "Voto emitido con exito.";
                // NECESARIO PARA ACTUALIZAR EL VALOR DE LA CONSULTA (EN CASO DE NO HACERLO MOSTRARA LA TABLA DE NUEVO)
                    $resultado2=mysqli_query($conexion,$sql2);
                    $boton = true; // Esta variable servira para controlar cuando aparece el mensaje de que el usuario ha votado.
            } else {
                echo "Se ha producido un error al grabar en la BD. <br>";
                echo $sql3 . "<br>";
                echo $sql4. "<br>";
            }
        }

        // IMPORTANTE - EXTRACION DE VALORES DE UNA CONSULTA A VARIABLES
        if($row=mysqli_fetch_array($resultado2)){
            //Guardo los datos de la BD en las variables de php
            $votado = $row["votado"];
            //echo $votado;
        }

        if(mysqli_num_rows($resultado)==0) {
            echo "No se han agregado palabras.";
        } else {

            if($votado=='s' && $boton == false) { // Al salir del formulario la variable pasa a ser false y al acceder la proxima vez se muestra este mensaje.
                echo "Este usuario ya ha votado.";
            } else if ($votado=='n') {

                ?> 

                    <form action="./favorita.php" method="post">
                        <table border="1">
                            <tr>
                                <th>Palabra</th>
                                <th>Votos</th>
                            </tr>
                
                <?php
                while ($fila=mysqli_fetch_assoc($resultado)) {
                ?>          <tr>
                                <td> <?php echo $fila['palabra'] ?> </td>
                                <td><input type="radio" name="voto" value="<? echo $fila['palabra']; ?>"></td>
                            </tr> 
                <?php
                }
                ?> 
                        </table> 

                        <input type="submit" name="grabar" value="Enviar">
                        
                    </form>
                <?php
            }
        }    
    ?>
</body>
</html>