<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de deseos</title>
</head>
<body>
<h1>Bienvenido <?= $_COOKIE['name'] ?></h1>
<h2>Lista de deseos</h2><hr>

<ul>
<?php 
if(count($deseos)){
    foreach($deseos as $id => $elemento){
        echo "<li>Deseo nº" . $id . ": " . $elemento . "</li>";
    }
}else{
    echo "No hay deseos todavía";
}
?>
</ul>

<hr>
<form action="/ejercicios/19/?method=new" method="post">
    <label for="">Añade tu deseo: <input type="text" value="" name="new">
    <input type="submit" value="Añadir">
</form>

</body>
</html>