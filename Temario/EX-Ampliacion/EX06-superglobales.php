<?php

    # Son variables predefinidas del leguanje a las que siempre se puede acceder.
    # (Posteriormente se añadiran mas)

    # 1. $GLOBALS
        # Es una variable que se utiliza para acceder a todas las otras variables globales definidas por el usuario.
            $x = 67;
            $y = 34;

            function testGLOBALS() {
                echo "<h3>Superglobal \$GLOBALS:</h3>";
                echo $GLOBALS['x'] + $GLOBALS['y'];
            }

            testGLOBALS();
    
    # 2. $_REQUEST
        # Toma datos despues de que se han subido mediante un formulario html.

    # 3. $_POST
        # Toma datos despues de que se han subido mediante un formulario que usa "method = post".
        # Tambien se usa para pasar variables.
        # Usado para datos mas sensibles ya que la informacion enviada es invisible a otros.
    
    # 3. $_GET
        # Toma datos despues de que se han subido mediante un formulario que usa "method = get".
        # Tambien puede tomar informacion enviada en la url.
        # Muestra la info en la url donde es visible para todos (util para marcar paginas).
?>