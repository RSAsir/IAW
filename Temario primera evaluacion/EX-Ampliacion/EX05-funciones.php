<?php

    function saludo(){
        echo "<h3>Funcion definida por el usuario</h3>";
        echo "Hola mundo";
    }

    saludo();

    function suma($x, $y){
        echo "<h3>Funcion con argumentos</h3>";
        echo $x + $y;
    }

    suma(3, 5);

    function resta($x, $y){
        echo "<h3>Funcion con valor de retorno</h3>";
        $z = $x - $y;
        return $z;
    }

    echo resta(6, 4);  
    
    function nombre($nombre = "Kuuko"){
        echo "<h3>Funcion con valor por defecto</h3>"; # Si no se indica valor, devuelve el predeterminado.
        return $nombre;
    }

    echo nombre();
    echo nombre("Bernkastel");
?>