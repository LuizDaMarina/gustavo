<?php

class Produto extends Sistema {

public $preco;
    //Metodo para imprimir
public function atributosCliente(){
    $this->nome = $_POST['produto'];
  echo"</br>" . "Preco" . $this->preco;
    
    echo $this->nome;
    }
    }
    



?>