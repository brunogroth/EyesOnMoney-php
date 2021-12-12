<?php // arquivo de conexão
include_once 'config.inc.php';

function connection(){ // função de conexão com o banco de dados

    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
    
    return $conn;
}