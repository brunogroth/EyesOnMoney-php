<?php
include_once 'padlock.php';
include_once '../db/invest_rf.dao.php';

if(!isset ($_GET['id_invest_rf'])){
    header("location:investimentos.php?msg=invalid_id");
}else{
    //buscar investimento
    $result = buscar_investimento_rf($_GET['id_invest_rf']);
    if($result == null){
        header("location:investimentos.php?msg=invalid_id");
    }else{
        //converter o retorno do result (objeto) em um array assoc

        $investimento = mysqli_fetch_assoc($result);

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Eyes on Money - Editar Investimentos</title>
</head>
<body class="container-fluid">


<?php include_once 'menu.php'?>
<div class="ms-3 mt-3">
    <h1 class="ms-3 mt-3">Editar Investimento - Eyes on Money</h1>

<p>Olá! <br> Edite seus investimentos em renda fixa por aqui.</p>

<h2>Editar Dados do Investimento: </h2>
<?php 
    if(isset($_GET['msg'])){
        include_once '../util.php';
        echo validar_msg($_GET['msg']);
    }
?>
<div class="col-5"> 
<form action="editado.php" method="post">
        <p> <label for="produto"> Produto Investido: </label><br>
        <select id="produto" name="produto" required value = "<?= $investimento['produto_rf']?>"  class="form-control">
            <option value="CDB">CDB (Certificado de Depósito Bancário)</option>
            <option value="LCI">LCI (Letra de Crédito Imobiliário)</option>
            <option value="LCA">LCA (Letra de Crédito do Agronegócio)</option>
            <option value="CRI/CRA">CRI/CRA</option>
            <option value="Debênture">Debênture</option>
            <option value="Outro">Outro</option>
        </select> </p>
        <p> <label>Valor Investido: </label><br>R$ <input type="number" name="valor" step="0.01" required value= "<?= $investimento['valor_rf'] ?>"  class="form-control"> </p>
        <p> <label> Rentabilidade do Investimento: </label><br> <input type="number" name="rentab" min="1.00" max="999" step="0.01" required value= "<?= $investimento['rentab_rf']?>" class="form-control" >% do CDI</p>
        <p> <label> Banco Emissor: </label><br> <input type="text" name="banco" placeholder="001 BANCO DO BRASIL" required value="<?= $investimento['banco_emissor_rf']?>" class="form-control"></p>
        <p> <label> Data de Aquisição: </label><br> <input type="date" name="data_aquis" required value="<?= $investimento['data_aquis_rf']?>" class="form-control"> </p>
        <p> <label> Data de Vencimento: </label><br> <input type="date"name="data_venc" min="<?= date('Y-m-d'); ?>" required value="<?= $investimento['data_venc_rf']?>" class="form-control"> </p> <!-- O vencimento não pode ser anterior a hoje -->
        
        <input type="hidden" name="id_invest_rf" value="<?= $investimento['id_invest_rf']?>">
        <p><a class="btn btn-secondary" href="investimentos.php">Cancelar edição </a>
        <button class="btn btn-success" type="submit" name="send">Editar Investimento</button></p>
    </form>

   
</div>

</body>
</html>