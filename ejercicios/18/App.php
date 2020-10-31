<?php
class App 
{
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
    if(isset($_COOKIE['usuario']) && isset($_COOKIE['password'])){
      header('Location: ?method=home');
      return;
    }

    include('views/form.php');
  }

  public function auth(){
    if(empty($_POST['user']) || empty($_POST['password'])){
      header('Location: ?method=login');
      return;
    }

    $nombre=$_POST['user'];
    $password=$_POST['password'];

    setcookie('usuario', $nombre, time()+3600);
    setcookie('password', $password, time()+3600);

    header('Location: ?method=home');
  }

  public function home(){

    if(!isset($_COOKIE['usuario']) || !isset($_COOKIE['password'])){
      header('Location: ?method=login');
      return;
    }
    include('views/home.php');
  }

  public function logout(){

    setcookie('usuario', '', 1);
    setcookie('password', '', 1);

    header('Location: ?method=login');
  }
  }
