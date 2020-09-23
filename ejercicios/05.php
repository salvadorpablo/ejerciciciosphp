<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio04</title>
    </head>
    <body>
        <?php
        define('size', 10);
        define('rowsize', 1);
        echo "<table border=2> ";
        $numero = 193;
        $numeroPrimos = 0;
        echo "Divisores de " . $numero . ": ";

        for($row=1; $row<=rowsize; $row++){
            if ($row % 2 == 0)
            echo "<tr bgcolor = gainsboro>";
            else
            echo "<tr>";
            for ($column = 2; $column <= ($numero-1); $column++) {
                if($numero%$column==0){
                    echo "<td>", $column, "</td>";
                    $numeroPrimos++;
                    }               
            }
            if($numeroPrimos==0){
                echo "<td>", "El número " . $numero . " es primo", "</td>";
            }
        echo "</tr>";
        }
        echo "</table>";
        ?>
</body>
</html>