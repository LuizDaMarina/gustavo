<?php

require_once "Sistema.php";
require_once "Cliente.php";
require_once "Produto.php";


$sistema = new Sistema();
$cliente = new Cliente();
$produto = new Produto();

if( isset ($S_POST['enviar'])){
 echo $cliente->atributosCliente();

}
 
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
   
<div class="container"> 

    <form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name="nome" class="form-control"  placeholder="Seu Nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Cpf</label>
    <input type="text" name="cpf" class="form-control" placeholder="CPF">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword3">Preço</label>
    <input type="text" name="preco" class="form-control" placeholder="Preço">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensagem</label>
    <textarea name="mensagem" class="form-control" rows="3"></textarea>
  </div>
  <input type="submit" name="enviar" value="Enviar" class="btn btn-primary"> </input>
</div>
</form>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>