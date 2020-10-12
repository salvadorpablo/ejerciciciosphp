<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $this->name?></title>
  <link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
  <?php         
  require('views/header.php');
  ?>
  <h1><?= $this->name?></h1>
  <h2>Resultado: <br></h2>
  <?php
  foreach($this->serieNumerica as $elemento){
            echo "<ul><li>" . $elemento . "</li></ul>";
        }
        
        ?>
  
</body>
</html>