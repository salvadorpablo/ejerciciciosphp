<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio 16</title>
</head><body>


    <h2>Lista de nombres</h2>
 

    <form method="post" action="">
        <input type="text" name="nombres[]">
        <!--<input type="hidden" name="elementoInvisible">-->
        <input type="submit" value="enviar">

        <ul>
    <?php  
                    if(isset($_POST['nombres'])){
                    foreach($_POST['nombres'] as $elemento){
                        echo  '<li><input type="hidden" name="nombres[]" value="' . $elemento . '"></li><br>';
                    }}
                    
    ?>
    </ul>
        </form>

        
</body></html>