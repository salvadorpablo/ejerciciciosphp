<h1>Lista de colores</h1>
  <ul>
    <?php
    foreach($_COOKIE['colores'] as $id => $color) {
    ?>
      <li><?= $color ?> <a href="?method=cambio&color=<?= $color ?>">Cambiar</a> </li>
    <?php
    }
    ?>

  </ul>
