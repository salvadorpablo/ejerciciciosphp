<?php
class App
{
    public function run(){
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
          } else {
            $method = 'home';
          }
        
          $this->$method();      
        }

    public function home(){
        // if(isset($_COOKIE['color'])){} no hace falta
        
        $colores= array('red', 'green', 'blue', 'yellow');
        $_COOKIE['colores'] = $colores;    
        
        include('views/home.php');
    }

    public function cambio(){
        $color = $_GET['color'];

        setcookie('color', $color, time() + 3600);
        
        header('Location: ?method=home');

    }
}