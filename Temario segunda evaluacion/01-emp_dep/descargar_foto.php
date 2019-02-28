<?php

        session_start(); // SE USA PARA QUE NO ROMPA LA SESION

        // echo "Bajamos foto";

        if(empty($_GET['foto'])) {
            header("location:lista_empleados");
        } else {
            $archivo = basename($_GET['foto']); // ELIMINA LA RUTA DEL NOMBRE DEL ARCHIVO
            // echo "<br>" . $archivo;

            $ruta = $_GET['foto'];

            if(is_file($ruta)) {
                header('Content-Type: application/force-download');
                header('Content-Disposition: attachment; filename=' . $archivo);
                header('Content-Transfer-Enconding: binary');
                header('Content-Length: ' . filesize($ruta));
                
                readfile($ruta);
            } else {
                header ("location:lista_empleados.php");
            }


        }
    ?>

