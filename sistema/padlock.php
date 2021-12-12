<?php
session_start(); // para poder usar as variaveis de sessão

if(empty($_SESSION)){ // se a sessão estiver EMPTY (diferente de !isset) vai retornar o usuario para login.php
    header('location:../login.php?msg=blank');     
}

?>