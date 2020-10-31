<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <style></style>
  <title>Formulario</title>
</head>
<body>

  <pre>
  <h1>Hola <?= $_COOKIE['usuario']?></h1>
  <hr><a href=?method=logout>Cerrar sesión</a>

  <?php var_dump($_COOKIE)
  //var_dump($_COOKIE['nombre']);
  ?>
  
  
</body>
</html>