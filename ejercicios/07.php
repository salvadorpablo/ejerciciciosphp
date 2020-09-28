<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 07</title>
    </head>
    <body>
        <?php

            /*Construye un array con el nombre de 4 paises y muestralo por pantalla*/
            $arrayPaises = ["Inglaterra", "Holanda", "República Checa", "España"];

            echo "<hr>Países: <br>";
            foreach ($arrayPaises as $element){
                echo "<ul>" . $element . "</ul>";
            }
        ?>
    </body>
</html>