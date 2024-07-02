<?php

if( isset($_POST['enviar'] ) ){

    $produto = $_POST['produto'];
    $categoria = $_POST['categoria'];
    $foto = $_FILES["foto"]["name"];
    $foto_tamanho = $_FILES["foto"]["size"];
    $foto_tipo = $_FILES["foto"]["type"];
    $md5 = m5(time());
    $caminho = "imagem/";
    $mensagem = $S_POST['mensagem'];

    





 if(empty(trim($produto)) ){
       echo "<script> alert('Campo em Branco');window.location.href='../cadastroProduto.php'; </script>";

 }else if( strpos($foto_tamanho, "png") && $foto_tamanho <= 10000000 ){
move_uploaded_file($_FILES["foto"]["tmp_name"], $caminho . $md5 . $_FILES["foto"]["name"] );



 }else{
    echo "<script> alert('Não foi possivel enviar');window.location.href='../cadastroProduto.php'; </script>";
 }

}else{
    echo "Não foi possivel cadastrar";
}

?>