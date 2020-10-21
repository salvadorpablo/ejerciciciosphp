<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio01</title>
    </head>
</head>
<body>
    <?php
    $nombre = "Salvador";
    $apellidos = "Pablo Latas";
    $email = "salvadorpablol092@gmail.com";
    $telf = 652553245;
    $nacionalidad = "española";
    ?>
    
    <table style= width:100%; border=1px solid black">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Teléfono</th>
        </tr>
        <tr>
            <td><?php echo  $nombre  ?></td>
            <td><?php echo  "$apellidos" ?></td>
            <td><?php print "<em> $email</em>"  ?></td>
            <td><?php echo  '<strong>' . $telf ?></td>
        </tr>
        <tr>
            <th>Nacionalidad</th>
            <td><?php echo '<strong' . $nacionalidad?></td>
            <td><?= $nacionalidad ?></td>
        </tr>
    </table>
    
</body>
</html>
<<<<<<< HEAD
hola mundo
=======
>>>>>>> 096a7a02ce230254026e2cf1c7978bb8fb01389b
