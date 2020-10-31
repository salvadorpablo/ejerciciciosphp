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
    echo "<hr>Ejercicio 17<hr>";
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
      $resultado = 1;
      $numero = 1;
      
      while($resultado<=1000000){
        $resultado= 1;
        for ($i=1; $i <= $numero; $i++) { 
        $resultado = $resultado * $i;
        
        }

        if($resultado <= 1000000){
          $this->serieNumerica[] = $resultado;
          $numero += 1;
        }
      }

      include('views/index.php');
    }
    

    public function primos(){

      $this->name = "Primos";
      for($i=1; $i<=10000; $i++){
        if($this->esPrimo($i)){
          $this->serieNumerica[] = $i;
        }
      }
      include('views/index.php');
    }

    private function esPrimo($numero){
      
      if ($numero==2 || $numero==3 || $numero==5 || $numero==7){
        return True;
      }else{
        if ($numero%2!=0){
          for ($i = 3; $i<=sqrt($numero); $i += 2){
            if($numero%$i==0){
              return False;
            }
          }
          return True;
        }
      }
      return False;
    }
    
}
?>