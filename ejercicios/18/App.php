<?php

class App
{
  public function __construct($name = "Aplicación PHP")
  {
    // echo "Consturyendo la app <hr>";
    $this->name = $name;
    $this->module = "Desarrollo Web en Entorno Servidor";
    $this->teacher = "Rafael Cabeza";
    $this->student = "Fulano De Tal";
  }

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }
    
    $this->$method();
  }

  public function home(){
    echo "Estamos en home<br>";
  }

  public function login()
  { 
    include('views/form.php');
  }  

  public function auth(){
      setcookie($_POST['name'], $_POST['password'], time() + 3600);
  
      //ojo para guardar arrays:
      $hobbies = ['futbol', 'música rock', 'tocar la guitarra con mis amigos'];
      setcookie("hobbies", serialize($hobbies), time() + 3600);
      setcookie("hobbies2", json_encode($hobbies), time() + 3600);
  
      //y objetos:
      $persona = new Persona("Juan", "Pérez", 21);
      setcookie("persona", serialize($persona), time() + 3600);
      setcookie("persona2", json_encode($persona), time() + 3600);
  
      //ESTO ES NUEVO: 
      //No incluímos una vista. Reenviamos el navegador a otro sitio
      //en este caso al mismo sitio:
      header('Location: .');
  }
}
