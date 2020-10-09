<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <style></style>
  <title>Formulario</title>
</head>
<body>

  <h1>Login de  <?= $this->name ?></h1>

  <form method="post" action="">
    <label for="">nombre</label>
    <input type="text" name="name"> <br>
    <label for="">contraseña</label>
    <input type="password" name="password"> <br>
    <input type="submit">
  </form>
</body>
</html>
<?php header('Location: ejercicios/18?method=auth');