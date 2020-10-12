<?php

class App{

    public function __construct()
    {
        $this->name;
        $this->serieNumerica = [];
    }

    public function run()
    {
      if (isset($_GET['method'])) {
        $method = $_GET['method'];
      } else {
        $method = 'index';
      }
      
      $this->$method();
    }

    public function index()
  {
    echo "Estamos en el index<br>";
    include('views/index.php');
  }

    public function fibonacci()
    {

        $this->name = "Fibonacci";
        $numeroAnterior1 = 0;
        $numeroAnterior2 = 1;
        $numFib = 0;

        while($numeroAnterior1 + $numeroAnterior2 < 1000000){
            $numFib = $numeroAnterior1 + $numeroAnterior2;
            $this->serieNumerica[] = ($numFib);
            $numeroAnterior1 = $numeroAnterior2;
            $numeroAnterior2 = $numFib;
        }

        include('views/index.php');
    }

    public function potencias2(){

        $this->name = "Potencias 2";
        $num = 0;

        while($num<=24){
            $this->serieNumerica[] = pow(2, $num);
            $num += 2;
        }

        include('views/index.php');
    }

    public function factoriales(){

        $this->name = "Factoriales";
        $numFac = 0;
        while($numFac < 1000000){
            foreach($this->serieNumerica as $elemento){
                $numFac = $elemento;
            }
            
        }

        include('views/index.php');
    }

    public function primos(){

    }
}
?>