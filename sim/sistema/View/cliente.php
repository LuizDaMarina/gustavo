<?php

    require "../../vendor/autoload.php";
    $cliente = new Cliente();
    $objfn = new Funcoes();


    if(isset($_POST['btCadastras'])){
        
        if($cliente->inserirCliente($_POST) == "ok" ){
            echo "inserido com suceso";
            header("Location: cliente.php");
        }else{
            echo "Não deu";
        }
    }



//editar
    if(isset($_POST['enviar'])){
        
        if($cliente->editarCliente($_POST) == "ok" ){
            echo "Editado com sucesso";
            header("Location: ?acao=edit?func" . $objfn->base64($_POST['func'], 1));
        }else{
            echo "Não deu";
        }
    }
//Saber ql a açao
if(isset($_GET['acao'])){
  
    switch($_GET['acao']){
        case "edit" :
               $func = $cliente->selecionaId($_GET['func']);
            break;
        case "delet":
           if($cliente->deletarId($_GET['func']) =="ok"){
                echo "Deletado com sucesso";
           }else{
            echo "Não Deletou";
           }
            break;
    }

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
<h1>Cadastro Cliente</h1>



<div class="container"> 
<?php require "../Includes/menu.php" ?>
    <form method="post" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome do Cliente">
        </div>

        <div class="form-group">
                <label for="exampleFormControlSelect1">País</label>
                <select name="estado" class="form-control" id="exampleFormControlSelect1">
                    <option value="1">RS</option>
                    <option value="2">SC</option>
                    <option value="3">PR</option>
                    <option value="4">SP</option>
                    <option value="5">MG</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea name="mensagem" class="form-control"  rows="3"></textarea>
            </div>

            <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
        </form>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Estado</th>
                <th scope="col">Mensagem</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
                </tr>
            </thead>
            <tbody>
        <?php 
          $contagem = 1;
          foreach($cliente->selecionarCliente() as $resultado ){
            ?>
                <tr>
                    <th scope="row"><?php echo $contagem++; ?></th>
                    <td><?php echo $resultado['nome'];  ?></td>
                    <td><?php echo $resultado['estado'];  ?></td>
                    <td><?php echo $resultado['mensagem'];  ?></td>
                    <td><button type="button" class="btn btn-info">Editar</button></td>
                    <td><button type="button" class="btn btn-danger">Deletar</button></td>
                </tr>
        <?php } ?>
    
            </tbody>
         </table>
    <?php require "./Includes/rodape.php" ?>
    </div> 

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>