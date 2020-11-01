<?php
class App
{

    public function __construct(){
        session_start();
    }

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
        $_SESSION['colores'] = $colores;    
        
        include('views/home.php');
    }

    public function cambio(){
        $color = $_GET['color'];

        $_SESSION['color'] = $color;
        
        header('Location: ?method=home');

    }
}