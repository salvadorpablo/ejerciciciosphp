<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio Colores Con Sesiones</title>
    <style>
      body{background-color: <?=$_SESSION['color']?>;}
    </style>
</head>
<body>
    <h1>Bienvenido</h1>

    <?php
    require('views/colores.php');

    
    ?>
    
   

    
</body>
</html>