<?php include_once 'padlock.php';

if(!isset($_GET['id_invest_rf'])){

header('location:investimentos.php?msg=invalid_id');

}else{

    $id_invest_rf = $_GET['id_invest_rf'];

    include_once '../db/invest_rf.dao.php';

    $result = excluir_investimento($id_invest_rf);

if($result){
    header('location:investimentos.php?msg=inv_excluido');
}else{
    header('location:investimentos.php?msg=erro_excluir');
}
}


?>
