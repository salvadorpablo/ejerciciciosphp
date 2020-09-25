<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 08></title>
    </head>
    <body>
        <?php
        /*repite el ej 6 añadiendo los elementos al array de uno en uno*/
        $arrayEquipo[0] = "Carlos";
        $arrayEquipo[2] = "Juan";
        $arrayEquipo[4] = "Alberto";
        $arrayEquipo[5] = "Fran";
        $arrayEquipo[] = "Antonio";

        echo "Array con el quinteto inicial del equipo de baloncesto " . $nombreEquipo . ": <br><br>";

        //imprimir indicando sólo los nombres:
        echo "Array: <br>";
        foreach ($arrayEquipo as $element){
            echo "<ul><li>" . $element . "</li></ul> ";
        }
        echo '<br><br>';

        echo "Array con el quinteto y la posición: <br>";
        //imprimir indicando nombres y posicion del nombre en el array
        foreach($arrayEquipo as $position=>$element){
            echo "<ul>" . $position . " " . $element . "</ul>";
        }

        ?>
    </body>
</html>