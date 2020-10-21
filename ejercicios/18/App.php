<?php
require_once("Usuario.php");
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

    if(empty($_COOKIE)){
      include_once('views/form.php');

    }else{
      header('Location: /ejercicios/18/?method=home');
    }
  }

  public function auth(){

      $usuario = new Usuario($_POST['user'], $_POST['password']);
      setcookie("Usuario", serialize($usuario), time() + 3600);


      
      header('Location: /ejercicios/18/?method=login');
      }
      
    
  public function home(){
    $usuario = new Usuario($_POST['user'], $_POST['password']);
    echo "<hr><h1>Hola " . $usuario->getNombre() . "</h1>"; //preguntar por qué esto no va
    echo $usuario->getNombre();
    echo "<hr><a href=?method=logout>Cerrar sesión</a>";
    echo "<br>";
    var_dump($_COOKIE);

    
  }

  public function logout(){

    $usuario = new Usuario($_POST['user'], $_POST['password']);
    setcookie("Usuario", serialize($usuario), time()-1);

   

    header('Location: /ejercicios/18/?method=login');
}
  }
