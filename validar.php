<?php
session_start(); 

// verificar se o formulário de login foi enviado
if (!isset($_POST['login']) || empty($_POST['user']) || empty($_POST['password'])){ // se não submeteu o formulário OU os campos estão em branco

    header('location:login.php?msg=blank');

} else {

    $user = $_POST['user'];
    $password = $_POST['password'];

    include_once 'db/users.dao.php';

    $result = buscar_user($user, $password);

    //buscar usuario na tabela usuarios
    if($result){
    
        $_SESSION['user'] = $usuario;
        $_SESSION['password'] = $password;

        header('location:sistema/index.php');
    }
    else{
    
    header('location:login.php?msg=invalid');

    }
}


?>