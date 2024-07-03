<?php

class Cliente extends Sistema {

public $cpf;
    

//Metodo para imprimir
public function atributosCliente(){
$this->nome = $_POST['nome'];
$this->cpf = $_POST['cpf'];
$this->mensagem = $_POST['mensagem'];

//echo $this->getNome() . $this->getCpf() . $this->getMensagem();
echo $this->nome ." ".  $this->cpf ." " . $this->mensagem;

}
}


?>