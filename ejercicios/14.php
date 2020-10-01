<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio 14</title>
</head><body>
    <h2>Calculadora</h2>
    <form method="post" action="">
        <label></label><input type="text" value="" name="operando1">
        
        <select name="operador">
            <optgroup label="Operador">
                <option value="/">/</option>
                <option value="*">*</option>
                <option value="+">+</option>
                <option value="-">-</option>
            </optgroup>
        </select>


        <label></label><input type="text" value="" name="operando2"> <br>
        <input type="submit" value="enviar">
    </form>

    <?php
            if(isset($_POST['operando1']) && $_POST['operador']=="/"){
                echo $_POST['operando1']/$_POST['operando2'];
            }else if(isset($_POST['operando1']) && $_POST['operador']=="*"){
                echo $_POST['operando1']*$_POST['operando2'];
            }else if(isset($_POST['operando1']) && $_POST['operador']=="+"){
                echo $_POST['operando1']+$_POST['operando2'];
            }else if(isset($_POST['operando1']) && $_POST['operador']=="-"){
                echo $_POST['operando1']-$_POST['operando2'];
            }

    ?>
</body></html>