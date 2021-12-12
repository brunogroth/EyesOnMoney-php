<?php
if(!isset($_POST['send']) || empty($_POST['produto'])|| empty($_POST['valor'])|| empty($_POST['rentab'])|| empty($_POST['banco'])|| empty($_POST['data_aquis']) || empty($_POST['data_venc'])){

    header('location:cad_investimentos.php?msg=cad_blank');

}else{
    // criação de var's com o valor inputado pelo usuario
    $produto    = $_POST['produto'];
    $valor      = $_POST['valor'];
    $rentab     = $_POST['rentab'];
    $banco      = $_POST['banco'];
    $data_aquis = $_POST['data_aquis'];
    $data_venc  = $_POST['data_venc'];

    include_once '../db/invest_rf.dao.php';

    // chamada da função criar_investimento
    $result = criar_investimento($produto, $valor, $rentab, $banco, $data_aquis, $data_venc);

    // se o resultado da execução da função for verdadeiro, vai retornar com msg=success
    if($result){
        header('location:cad_investimentos.php?msg=success');
    }else{
        header('location:cad_investimentos.php?msg=cad_error');
    }
}