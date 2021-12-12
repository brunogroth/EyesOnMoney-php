<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Eyes on Money - De olho no seu investimento</title>
</head>
<body  class="container-fluid ms-3 mt-3">
<center>
    <h1> Eyes on Money</h1>
    <h5 class="mb-5">Registre e acompanhe seus investimentos de Renda Fixa em um só lugar. </h5>

<?php 
    if(isset($_GET['msg'])){
        include_once 'util.php';
        echo validar_msg($_GET['msg']);
    }
?>


<div class="card text-center text-white bg-dark"style="width:650px;">

  <div class="card-header"> Formulário de Login </div>
  <div class="card-body">
    <h5 class="card-title">Utilize o formulário abaixo para entrar no sistema:</h5>
    <form action="validar.php" method="POST">
        <p> <label>Usuário:</label><br> <input type="text" name="user" required>         </p>
        <p> <label>Senha:</label>  <br> <input type="password" name="password" required> </p>
        <p> <button type="submit" name="login" class="btn btn-primary">Fazer Login</button> </p>
    </form>
  </div>
</div>
</center>
</body>
</html>