<?php

class Usuario  
{
  public $user;
  public $password;

  public function __construct($nombre, $password)
  {
    $this->nombre = $nombre;
    $this->password = $password;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function getNombre(){
    return $this->nombre;
  }
}