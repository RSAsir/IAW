<?php
	$vector = array(); $vector[0]=rand(0, 50);

    for($i = 1;$i < 6;++$i) { 
		
        $valor = rand(0, 50);
	
        while (in_array($valor,$vector)) {
            $valor = rand(0, 50); echo $valor;
        }
		
		$vector[$i] = $valor;
		
        sort($vector);

    }
	
   for($b = 1; $b < 6; ++$b){
	   echo "El valor " . $b . " de la loteria es " . $vector[$b] . "<br>";
   }
   
   echo "<br> El numero especial es  " . $vector[0]; 
?>