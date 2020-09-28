<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 09</title>
    </head>
    <body>
        <?php

            /*Construye un array con el nombre de 4 paises y muestralo por pantalla*/
            $arrayPaises[] = "Inglaterra";
            $arrayPaises[3] = "España";
            $arrayPaises[] = "Holanda";
            $arrayPaises[14] = "República Checa";

            echo "<hr>Países: <br>";
            foreach ($arrayPaises as $element){
                echo "<ul><li>" . $element . "</li></ul>";
            }

            echo "<br><hr>Países junto a su posición en el array: <br>";
            foreach($arrayPaises as $position=>$element){
                echo "<ul>" . $position . " " . $element . "</ul>";
            }

        ?>
    </body>
</html>