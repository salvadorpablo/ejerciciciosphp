<?php
    echo '<meta charset="UTF-8">';

    if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
        echo "<hr><br>El libro <i>$_POST[titulo]</i> del autor <b>$_POST[autor]</b> ha sido añadido.<hr>";
    }else{
        echo "No se ha introducido ningún libro.";
    }
