<?php
include_once 'padlock.php';

if(!isset($_POST['send']) || empty($_POST['produto'])|| empty($_POST['valor'])|| empty($_POST['rentab'])|| empty($_POST['banco'])|| empty($_POST['data_aquis']) || empty($_POST['data_venc'])){

    header('location:investimentos.php?msg=edt_blank');

}else{

    $id_invest_rf = $_POST['id_invest_rf'];
    $produto    = $_POST['produto'];
    $valor      = $_POST['valor'];
    $rentab     = $_POST['rentab'];
    $banco      = $_POST['banco'];
    $data_aquis = $_POST['data_aquis'];
    $data_venc  = $_POST['data_venc'];

    include_once '../db/invest_rf.dao.php';

    $result = editar_investimento($id_invest_rf, $produto, $valor, $rentab, $banco, $data_aquis, $data_venc);

    if($result){
        header('location:investimentos.php?msg=editado');
    }
    else{
        header('location:editar_investimento.php?msg=erroeditar');

    }
}




?>

