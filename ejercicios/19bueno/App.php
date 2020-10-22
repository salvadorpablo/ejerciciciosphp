<?php
class App {
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

    if (isset($_COOKIE['name'])) {
      header('Location: /ejercicios/19?method=home');
      return;
    }
    include('views/login.php');
  }

  public function auth(){
    if(isset($_POST['name'])&& isset($_POST['password'])){
      $name = $_POST['name'];
      $password = $_POST['password'];
    }else{
      header('Location: /ejercicios/19?method=login');
    }

    setcookie('name', $name, time() + 60);
    setcookie('password', $password, time() + 60*60);

    header('Location: /ejercicios/19?method=home');
  }

  public function home(){

    if(isset($_COOKIE['deseos'])){
      $deseos = unserialize($_COOKIE['deseos']);
    }else{
      $deseos = [];
    }
    
    include('views/home.php');
  }

  public function new(){
    if(empty($_POST['new'])){
      header('Location: /ejercicios/19?method=home');
      return;
    }

    $new = $_POST['new'];
    if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      $deseos = [];
    }
    $deseos[] = $new;
    setcookie('deseos', serialize($deseos), time() + 60*60);
    header('Location: /ejercicios/19?method=home');
  }
}
?>