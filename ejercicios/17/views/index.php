<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $this->name?></title>
</head>
<body>
<?php
  require('views/header.php');
  ?>

  <h1><?= $this->name?></h1>
  <?php         
  
  
  foreach($this->serieNumerica as $elemento){
            echo "<ul><li>" . $elemento . "</li></ul>";
        }
        
        ?>
  
</body>
</html>