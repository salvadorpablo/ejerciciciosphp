<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio 13</title>
</head><body>
    <h2>Formulario</h2>
    <form method="post" action="">
        <label>Nombre</label><input type="text" value="<?php echo $_POST['nombre']?>" name="nombre"> <br>
        <input type="submit" value="enviar">
    </form>

    <?php
            if(isset($_POST['nombre']) && strlen($_POST['nombre'])>=3){
                echo "<h1>Hola $_POST[nombre]!</h1>";
            }elseif(isset($_POST['nombre'])){
                echo "El campo nombre es obligatorio y debe tener al menos 3 caracteres";
            }


    ?>
</body></html>