<?php
include_once 'padlock.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Eyes on Money - Home</title>
</head>
<body class="container-fluid">


<?php include_once 'menu.php'?>
<div class="ms-3 mt-3">
    <h1 class="ms-3 mt-3">Página inicial - Eyes on Money</h1>

    <?php 
    if(isset($_GET['msg'])){
        include_once '../util.php';
        echo validar_msg($_GET['msg']);
    }
    
    ?>
    <p>Olá! <br> Seja bem vindo à página inicial do Eyes on Money.</p>

    <h2 class="mt-4"> <center>O que deseja fazer hoje? </center></h2>
<div class="col-12 mt-4">

    <div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title"><center><b>C</b></center></h3>
        <p class="card-text"><center>Registrar um novo investimento de Renda Fixa.</center></p>
        <a class="btn btn-success col-12" href="cad_investimentos.php">Cadastrar um novo investimento</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <h3 class="card-title"><center><b>R</b></center></h3>
        <p class="card-text"><center>Consultar seus investimentos de Renda Fixa</center></p>
        <a class="btn btn-primary col-12" href="investimentos.php">Consultar meus investimentos</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <h3 class="card-title"><center><b>U</b></center></h3>
        <p class="card-text"><center>Atualizar meus investimentos de Renda Fixa.</center></p>
        <a class="btn btn-warning col-12" href="investimentos.php">Atualizar Investimentos</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
      <h3 class="card-title"><center><b>D</b></center></h3>
        <p class="card-text"><center>Excluir um dos meus investimentos de Renda Fixa.</center></p>
        <a class="btn btn-danger col-12" href="investimentos.php">Excluir Investimentos</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>