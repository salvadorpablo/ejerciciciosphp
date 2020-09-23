<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio03</title>
    </head>
    <body>
        <?php
        define('size', 10);
        echo "<table border=2>";

        for($row=1; $row<=size; $row++){
            if ($row % 2 == 0)
            echo "<tr bgcolor = gainsboro>";
            else
            echo "<tr>";
            for ($column = 1; $column <= size; $column++) {
                if($column%3==0){
                    echo "<td>", $column, "</td>";
                }
                
            }
        echo "</tr>";
        }
        echo "</table>";
        ?>
</body>
</html>