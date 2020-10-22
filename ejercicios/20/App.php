<?php

class App{
    
    public function __construct(){
        session_start();
    }
    public function run(){
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
    if(empty($_POST['name']) && empty($_POST['password'])){
        header('Location: ?method=login');
        return;
    }
    $name = $_POST['name'];
    $password = $_POST['password'];
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
    
    header('Location: ?method=home');
}

public function new(){

    if(isset($_POST['new']) && !empty($_POST['new'])){
    $_SESSION['deseos'][] = $_POST['new'];
    }
    $deseos = $_SESSION['deseos'];
    header('Location: /ejercicios/20?method=home');

}

public function home(){
    if(!isset($_SESSION)){
        header('Location: ?method=login.php');
        return;
    }
    if(empty($_SESSION['deseos'])){
    $deseos = [];
    }else{
        $deseos = $_SESSION['deseos'];
    }
    
    include('views/index.php');
}
}
