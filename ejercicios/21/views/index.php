<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesión</title>
</head>
<body>
  <h1>Lista de deseos de <?= $_SESSION['name']?></h1>
  <h4><a href="?method=empty">Vaciar lista de deseos</a></h4>
  <h4><a href="?method=close">Cerrar sesión</a></h4>
  <ul>
  <pre>
      <?php
        if(count($deseos)){
            foreach($deseos as $id => $elemento){
                echo "<li>Deseo nº" . ($id+1) . ": " . $elemento . '<a href="/ejercicios/21/?method=delete&id=' . $id . '"> Borrar deseo</a></li>';
            }
        }else{
            echo "No hay deseos todavía, añade alguno más abajo";
        }
      ?>
  </ul>

  <hr><h2>Formulario de deseos: </h2>
    
    <form action="/ejercicios/21/?method=new" method="post">
    <label for="">Nuevo deseo<input type="text" value="" name="new"><br>
    <input type="submit" value="Añadir deseo">
    </form>

   
</body>
</html>