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
        echo "<table border=2>";
        $numeroMax = 10;
        $numAnterior1 = 0;
        $numAnterior2 = 1;
        
        echo "Primeros " . $numeroMax .  " números de la sucesión de Fibonacci: ";

        for($row=1; $row<=rowsize; $row++){
            if ($row % 2 == 0)
            echo "<tr bgcolor = gainsboro>";
            else
            echo "<tr>";
            for ($column = 1; $column <= size; $column++) {
                if($column==1){
                    echo "<td> 0 </td>";
                }elseif($column==2){
                    echo "<td> 1 </td>";
                }
                else{
                    $numFib = $numAnterior1 + $numAnterior2;
                    echo "<td>" . $numFib . "</td>";
                    $numAnterior1 = $numAnterior2;
                    $numAnterior2 = $numFib;
                }
                
                
            }
        echo "</tr>";
        }
        echo "</table>";
        ?>
</body>
</html>