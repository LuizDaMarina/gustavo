<?php

    require "../../vendor/autoload.php";

    class Cidade
    {
        private $cidade;

         /**
         * Get the value of cidade
         */
        public function getCidade()
        {
                return $this->cidade;
        }

        public function setCidade($cidade): self
        {
                $this->cidade = $cidade;

                return $this;
        }
        

        //Chamar conexão com banco de dados
        public function __construct()
        {
            $this->con = new Conexao();
        }


        //Método para inserir cliente
        public function inserirCidade($dados)
        {
            try
            {
                $this->cidade = $dados['cidade'];

                $cst = $this->con->conectar()->prepare("INSERT INTO cidade (cidade) VALUES (:cidade)");
                $cst->bindParam(":cidade", $this->cidade, PDO::PARAM_STR);

                if($cst->execute())
                {
                    return "ok";
                }
                else
                {
                    echo "Não deu";
                }
            }
            catch(PDOException $ex)
            {
                echo $ex;
            }
        }

        //Método para listar clientes
        public function selecionarCidade()
        {
            try
            {
                $cst = $this->con->conectar()->prepare("SELECT * FROM cidade"); 
                $cst->execute();

                return $cst->fetchAll();
            }

            catch(PDOException $ex)
            {
                echo $ex;
            }
        }

    }
        

?>