<?php
class App{

    public function run()
    {
      if (isset($_GET['method'])) {
        $method = $_GET['method'];
      } else {
        $method = 'login';
      }
      
      $this->$method();
    }

    public function login(){
        include('views/login.php');
    }

    public function auth(){
        if(isset($_POST['name']) && isset($_POST['password'])){
            $nombre = $_POST['name'];
            $password = $_POST['password'];
        }else{
            header('Location: /ejercicios/19?method=login');
            return;
        }

        setcookie('nombre', $nombre, time() + 60*60);
        setcookie('password', $password, time() + 60*60);
        
        header('Location: /ejercicios/19?method=home');
    }

    public function home(){
        if(isset($_COOKIE['deseos'])){ //si hay cookie de deseos
            $deseos = unserialize($_COOKIE['deseos']); // volcarla
          }else{
            $deseos = [];
          }

        include('views/home.php');
    }

    public function new(){

        if(empty($_POST['deseo'])){
            header('Location: /ejercicios/19?method=home');
            return;
        }

        $new = $_POST['deseo'];
            if (isset($_COOKIE['deseos'])) {
        $deseos = unserialize($_COOKIE['deseos']);
            } else {
        $deseos = [];
            }
        $deseos [] = $new;
        setcookie('deseos', serialize($deseos), time()+ 3600);
        header('Location: /ejercicios/19?method=home');
    }
}
?>