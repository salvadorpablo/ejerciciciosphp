<?php

class Usuario  
{
  public $nombre;
  public $contrasenya;

  public function __construct($nombre, $contrasenya)
  {
    $this->nombre = $nombre;
    $this->contrasenya = $contrasenya;
  }

}