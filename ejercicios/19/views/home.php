<!DOCTYPE html>
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

</body>
</html>