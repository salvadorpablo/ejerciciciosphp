<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio02</title>
    </head>
</head>
<body>
    <?php
    define('SIZE', 10);
    define('rowSIZE', 1);
    echo "<table border=1>";
    
    $number = 8;
    echo "Tabla del ", $number, ": ";
 
    for ($row = 1; $row <= rowSIZE; $row++) {
        if ($row % 2 == 0)
            echo "<tr bgcolor = gainsboro>";
        else
            echo "<tr>";
        for ($column = 0; $column <= SIZE; $column++) {
            echo "<td>", $number*$column, "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

    
</body>
</html>