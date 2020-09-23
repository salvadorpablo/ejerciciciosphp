<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio03</title>
    </head>
    <body>
        <?php
        define('size', 10);
        define('rowsize', 1);
        echo "<table border=2>";
        $divisor = 3;
        for($row=1; $row<=rowsize; $row++){
            if ($row % 2 == 0)
            echo "<tr bgcolor = gainsboro>";
            else
            echo "<tr>";
            for ($column = 1; $column <= size; $column++) {
                if($column%$divisor==0){
                    echo "<td>", $column, "</td>";
                }
                
            }
        echo "</tr>";
        }
        echo "</table>";
        ?>
</body>
</html>