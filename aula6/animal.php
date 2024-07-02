<?php

require_once "Teste.php";

//Teste() camelo = new Teste();
$camelo = new Teste();

if( isset($_POST['enviar'])  ){
    echo $camelo->imprimirAtributos(); 
}


echo $camelo->imprimirAtributos(); 
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
    <div class="container" >
    <h1>Olá, mundo!</h1>
    <form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Carlinhos">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Carlinhos">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Assunto</label>
    <input type="text" name="assunto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Carlinhos">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Bairro</label>
    <input type="text" name="bairro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Carlinhos">
   
  </div>
  <input type="submit" value="Enviar" name="enviar" class="btn btn-primary">
</form>
</div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>