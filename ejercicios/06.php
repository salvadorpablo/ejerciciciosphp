<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio06</title>
    </head>
    <body>
        <?php

        /*Construír un array con el quinteto inicial de un equipo de basket. Construyelo usando 
        "array()" y usando "[]". Imprimir dicho quinteto usando etiquetas "ul" y "li". 
        Imprimelo de dos modos distintos:
        a) Indicando sólo los nombres. b) Indicando la posición del nombre en el array (0, 1, 2, ...).
        */
        $nombreEquipo = "CAI Zaragoza";
        
        $arrayEquipo = ["Carlos", "Juan", "Alberto", "Fran", "Antonio"];
        $arrayEquipo = array("Carlos", "Juan", "Alberto", "Fran", "Antonio");

        echo "Array con el quinteto inicial del equipo de baloncesto " . $nombreEquipo . ": <br><br>";

        //imprimir indicando sólo los nombres:
        echo "Array: <br>";
        foreach ($arrayEquipo as $element){
            echo "<ul><li>" . $element . "</li></ul> ";
        }
        echo '<br><br>';

        echo "Array con el quinteto y la posición: <br>";
        //imprimir indicando nombres y posicion del nombre en el array
        


        ?>
        <ol>
            <?php
                    foreach($arrayEquipo as $position=>$element){
                        echo "<li>" . $position . " " . $element . "</ul>";
                    }
            ?>
        </ol>
    </body>
</html>