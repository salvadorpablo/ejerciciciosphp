<!DOCTYPE html>
<<<<<<< HEAD
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de login</title>
</head>

<body>
<h1>Lista de deseos:</h1>
<ul>
<?php
    if(count($deseos)){
        foreach($deseos as $id => $value){
            echo "<li>Deseo nº" . $id . ": " . $value . "</li>";
        }
    }else{
        echo "No hay deseos todavía. Añade alguno más abajo.";
    }
?>
</ul>




<hr>
<form action="/ejercicios/19/?method=new" method="post">
<label for="">Deseo<input type="text" value="" name="deseo">
<input type="submit" value="Añadir">
</form>

=======
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Bienvenido <?= $_COOKIE['name'] ?></h1>

  <h2>Lista de deseos</h2>
  <h4><a href="?method=empty">Vaciar lista de deseos</a></h4>
  <h4><a href="?method=close">Cerrar sesión</a></h4>
  <ul>
    <pre>
  <?php 
  // var_dump($deseos);
  // exit();
  if (count($deseos)) {
    foreach ($deseos as $id => $deseo) {
      echo "<li> Deseo nº $id: " . $deseo . ' <a href="?method=delete&id=' . $id . '"> borrar</a> </li>';
    }
  } else {
    echo "No hay deseos todavía";
  }
  ?>
  </ul>
  
  <hr>
  <h2>Alta de nuevos deseos</h2>
  <form action="?method=new" method="post">
    <label for="new">Nuevo deseo</label>
    <input type="text" name="new">
    
    <input type="submit" value="nuevo">
  </form>
  
>>>>>>> 09ecced14ebdc71800f992d5c032aa74476d166b
</body>
</html>