<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio 15</title>
</head><body>


    <h2>Array de nombres</h2>
    <form method="post" action="">
        <input type="text" name="nombres[]">
        <input type="submit" value="enviar">
        
    <?php  

            $arrayDeNombres = $_POST['nombres'];

            if(isset($_POST['nombres']) && count($arrayDeNombres)<3){
                foreach($_POST['nombres'] as $elemento){
                    echo '<br><input type="text" name="nombres[]" value="' . $elemento . '"><br>';
                    $arrayDeNombres[] = $_POST['nombres'];
                }
            }elseif(isset($_POST['nombres'])){
                echo '<hr><h1>Lista de 3 nombres: </h1><br>';
                foreach($arrayDeNombres as $elemento){
                    echo '<ul><li>' . $elemento . '</li></ul>';
                }
            }
                    
    ?>
        </form>

    <?php


    ?>
        
</body></html>