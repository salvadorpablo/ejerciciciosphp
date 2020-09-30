<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio 12</title>
</head><body>
    <h2>Formulario</h2>
    <form method="post" action="">
        <label>Nombre</label><input type="text" value="" name="nombre"> <br>
        <label>Contraseña</label><input type="password" value="" name="password"> <br>
        <input type="submit" value="enviar">
    </form>
    
    <h2>Datos enviados</h2>

    <?php
    echo '<meta charset="UTF-8">';
    if (isset($_POST['nombre']) && empty($_POST['nombre'])) {
    echo "El campo nombre es obligatorio<br><br>";
    } elseif(isset($_POST['nombre'])) {
    echo "<br><h1>¡Hola $_POST[nombre]!</h1>";
    //var_dump nos puede ayudar a entender lo que hemos recibido
    echo "<hr><pre>";
    var_dump($_POST);

    }
    ?>
</body></html>