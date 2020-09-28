<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <?php
        /* Repitite el ejercicio 6. En esta ocasión debes usar un array asociativo. 
        Cada posición se llamará correctamente: base, escolta, alero, 
        alapivot, pivot. Muestra el resultado con un "foreach (clave => valor)" */
        $equipo = ["Base"=>"Carlos", "Escolta"=>"Alberto", "Alero"=>"Fran", "Ala-pívot"=>"Jorge", "Pívot"=>"Anton"];

        echo 'Equipo de baloncesto con posiciones: <hr>';
        echo "<ul>";
        foreach($equipo as $posicion=>$element){
            echo "<li>" . $posicion . ": " . $element . "</li>" ;
        }
        echo "</ul>"
        ?>
    </body>
</html>