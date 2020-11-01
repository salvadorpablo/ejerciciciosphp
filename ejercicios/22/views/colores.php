<h1>Lista de colores</h1>
  <ul>
    <?php
    foreach($_SESSION['colores'] as $id => $color) {
    ?>
      <li><?= $color ?> <a href="?method=cambio&color=<?= $color ?>">Cambiar</a> </li>
    <?php
    }
    ?>

  </ul>
