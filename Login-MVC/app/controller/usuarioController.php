<?php

require_once __DIR__ . "/../model/usuario.php";

Class UsuarioController{

private $userModel;

public function __construct() {

    $this -> userModel = new User();
}

public function index(){

    if(isset($SESSION['id'])){
        header("Location: index.php?action=panel");
        exit;
    }
    include __DIR__ ." /../view/login.php";
}


public function autenticar(){

    if(!isset($_POST['email'] , $_POST['senha'])){
        header("Location: index.php");
        exit;
    }

    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    if(empty($email) || empty($senha)){
        $erro ="Preencha seu email e senha";
        include __DIR__ . "/../view/ login.php";
    }
    
}



}




?>