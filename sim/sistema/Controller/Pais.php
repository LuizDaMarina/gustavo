<?php

    require "../../vendor/autoload.php";

    class Pais
    {
        private $pais;

         /**
         * Get the value of pais
         */
        public function getPais()
        {
                return $this->pais;
        }

        public function setCidade($pais): self
        {
                $this->pais = $pais;

                return $this;
        }
        

        //Chamar conexão com banco de dados
        public function __construct()
        {
            $this->con = new Conexao();
        }


        //Método para inserir cliente
        public function inserirPais($dados)
        {
            try
            {
                $this->pais = $dados['pais'];

                $cst = $this->con->conectar()->prepare("INSERT INTO pais (pais) VALUES (:pais)");
                $cst->bindParam(":pais", $this->pais, PDO::PARAM_STR);

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
        public function selecionarPais()
        {
            try
            {
                $cst = $this->con->conectar()->prepare("SELECT * FROM pais"); 
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