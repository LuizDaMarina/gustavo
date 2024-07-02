<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sim</title>
  </head>
  <body>
    <div class="container">
      <?php require "includes/menu.php"; ?>
    <h1>Cadastro Produto</h1>
    <form method="post" action="acao/acaoPais.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome do Produto</label>
    <input type="text" name="nome" class="form-control" placeholder="produto">
     </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Categoria do Produto</label>
    <input type="text" name="categoria" class="form-control" placeholder="Seu produto">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Upload de Imagem</label>
    </div>
  <input type="file" name="enviar" value="produto" class="btn btn-primary"></input>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensagem:</label>
    <textarea class="form-control" name="mensagem" rows="3"></textarea>
  </div>
</form>


    <?php require "includes/rodape.php"; ?>


</div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>