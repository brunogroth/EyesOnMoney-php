<?php
//arquivo DATA ACCESS OBJECT para conexão com o banco de dados para a tabela USERS
include_once 'conn.php';

//função para BUSCAR um USUÁRIO no banco:
function buscar_user($user, $password){
    $conn = connection(); // função criada no conn.php para iniciar a conexão com o banco

    //criar a variavel com a busca que desejamos realizar
    $sql = "SELECT * FROM users WHERE usuario = '$user' AND senha = '$password'";

    // executar o comando sql
    $result = mysqli_query($conn, $sql);

    //verificar o número de linhas afetadas pelo comando sql (se achou alguma coisa vai retornar verdadeiro)
    if(mysqli_affected_rows($conn)> 0){

        return true; // se for verdadeiro a função já finaliza por aqui, por isso o return false pode ficar fora do if
    }

    return false;
}