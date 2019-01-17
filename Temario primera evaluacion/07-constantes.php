<?php
   /* Son identificadores para valores y no pueden variar en ningun momento,
    su sintaxis es:
        define(nombre_constante, valor, case-insensitive(true o false))

    case-insensitive hace referencia a lo que dice el propio nombre, su valor
    por defecto es false, seria necesario ponerlo a true para que no importaran
	mayusculas o minusculas.
	Se utilizan mucho con valores hexadecimales */

    define("test", "Hola padre", true);

    echo test;
    echo "<br>";
    echo TEST;
    echo "<br>";

    # Las constantes son globales y pueden ser llamadas incluso dentro de las funciones.

    define("test2", "Hola Bernkastel", true);

    function hola() {
        echo test2;
    }

    hola()

?>