<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesión</title>
</head>
<body>
  <h1>Lista de deseos de <?= $_SESSION['name']?></h1><hr>
  
  <ul>
      <?php
        if(count($deseos)){
            foreach($deseos as $id => $elemento){
                echo "Deseo nº" . $id . ": " . $elemento . "<br>";
            }
        }else{
            echo "No hay deseos todavía, añade alguno más abajo";
        }
      ?>
  </ul>

  <hr><h2>Formulario de deseos: </h2>
    
    <form action="/ejercicios/20/?method=new" method="post">
    <label for="">Nuevo deseo<input type="text" value="" name="new"><br>
    <input type="submit" value="Añadir deseo">
    </form>

   
</body>
</html>