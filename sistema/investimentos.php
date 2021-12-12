<?php
include_once 'padlock.php';
include_once '../db/invest_rf.dao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Eyes on Money - Meus Investimentos</title>
</head>
<body class="container-fluid">


<?php include_once 'menu.php'?>
<div class="ms-3 mt-3">
    <h1 class="ms-3 mt-3">Meus Investimentos - Eyes on Money</h1>

<p>Olá! <br> Acompanhe, monitore e atualize seus investimentos em renda fixa por aqui.</p>

<?php 
    if(isset($_GET['msg'])){
        include_once '../util.php';
        echo validar_msg($_GET['msg']);
    }
?>

<h2>Seus Investimentos:</h2>

<?php

echo exibir_investimentos_rf();

// echo rentab_invest(); // não funcionou :(
?>


</body>
</html>