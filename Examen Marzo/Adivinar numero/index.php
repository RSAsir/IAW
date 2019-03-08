<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adivinar el numero</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header>
        <div class="titulo">
            <h2>Adivina el numero</h3>
        </div>

    </header>

    <div class="cuerpo">
        
        <?php
            
            session_start();

            if($_GET['cajon']== 1) {
                session_destroy();
                header("index.php");
            }

            if($_SESSION['contador']== false and $_SESSION['oculto']== false) {
               
                $_SESSION['contador']= 0;
                $_SESSION['oculto']= rand(1,20);
            }
        


                if(isset($_GET['grabar']) and $_GET['cajon']!= 1) {
                    $control = true;
                    //echo $_SESSION['oculto'];

                // Control de errores

                    if($_GET['numero'] > 20) {
                        echo "El numero debe ser menor de 20.";
                        $error = true;
                    }

                    if($_GET['numero'] < 1) {
                        echo "El numero debe ser mayor de 1.";
                        $error = true;
                    }

                    if($_SESSION['oculto'] > $_GET['numero'] and $error != true) {
                        echo "El numero es mayor.";
                        $_SESSION['contador'] = $_SESSION['contador'] + 1;
                    }

                    if($_SESSION['oculto'] < $_GET['numero'] and $error != true) {
                        echo "El numero es menor.";
                        $_SESSION['contador'] = $_SESSION['contador'] + 1;
                    }
                }


        if($_SESSION['contador'] > 10) {
            echo "Has agotado el numero de intentos. <br>";
            echo "El numero era " . $_SESSION['oculto'];
            session_destroy();
        }        
        else if(!isset($_GET['grabar']) or $_SESSION['oculto'] != $_GET['numero'] or $error==true) {
            
        ?>

            <form action="index.php" method="get">
            
                Introduce un numero entre 1 y 20: <input type="number" name="numero" value="<?php echo $_GET['numero'];?>">
                <br>
                <input type="submit" value="Comprobar" name="grabar">
                <input type="reset" value="Borrar" name="borrado">
                ¿Terminar el juego? <input type="checkbox" name="cajon" value="1">
            </form>


        <?php
                if($_SESSION['contador'] != 0 and $_GET['cajon']!= 1) {
                    echo "Llevas " . $_SESSION['contador'] . " intentos.";
                }

            } else {
                echo "Has acertado. <br>";
                echo "El numero era " . $_SESSION['oculto'];
                session_destroy();
            }

        ?>
    </div>

    <footer>
        <h2>Examen IAW</h2>
        <h4>Ruben C. Sanchez</h4>
    </footer>

</body>
</html>